<?php

declare(strict_types=1);

/*
 * This file is part of eelly package.
 *
 * (c) eelly.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eelly\SDK;

use Shadon\Application\ApplicationConst;
use Eelly\OAuth2\Client\Provider\EellyProvider;
use GuzzleHttp\Psr7\MultipartStream;
use League\OAuth2\Client\Token\AccessToken;
use LogicException;
use Phalcon\Di;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UploadedFileInterface;

class EellyClient
{
    /**
     * @var string
     */
    public static $traceId;

    /**
     * 服务提供者默认地址
     *
     * @var array
     */
    private static $providerUri = [
        'logger'  => 'https://api.eelly.com',
        'example' => 'https://api.eelly.com',
        'oauth'   => 'https://api.eelly.com',
        'user'    => 'https://api.eelly.com',
        'store'   => 'https://api.eelly.com',
        'pay'     => 'https://api.eelly.com',
        'service' => 'https://api.eelly.com',
        'message' => 'https://api.eelly.com',
    ];

    private static $services = [];

    /**
     * @var EellyProvider
     */
    private $provider;

    /**
     * @var EellyClient
     */
    private static $self;

    /**
     * @var \League\OAuth2\Client\Token\AccessToken
     */
    private static $accessToken;

    /**
     * EellyClient constructor.
     *
     * @param array $options
     * @param array $collaborators
     * @param array $providerUri
     */
    private function __construct(array $options, array $collaborators = [], array $providerUri = [])
    {
        self::$providerUri = array_replace(self::$providerUri, $providerUri);
        $this->provider = new EellyProvider($options, $collaborators);
    }

    /**
     * @param array $options
     * @param array $collaborators
     * @param array $providerUri
     *
     * @return self
     */
    public static function init(array $options, array $collaborators = [], array $providerUri = []): self
    {
        if (null === self::$self) {
            self::$self = new self($options, $collaborators, $providerUri);
        }

        return self::$self;
    }

    /**
     * @return \Eelly\OAuth2\Client\Provider\EellyProvider
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param string $traceId
     */
    public function setTraceId(string $traceId): void
    {
        self::$traceId = $traceId;
    }

    /**
     * @param mixed $grant
     *
     * @return \League\OAuth2\Client\Token\AccessToken
     */
    public function getAccessToken($grant, array $options = [])
    {
        return $this->provider->getAccessToken($grant, $options);
    }

    /**
     * @param AccessToken $accessToken
     *
     * @return AccessToken
     */
    public function setAccessToken(AccessToken $accessToken)
    {
        return self::$accessToken = $accessToken;
    }

    /**
     * @param string $uri
     * @param string $method
     * @param bool   $sync
     * @param mixed  ...$args
     *
     * @return mixed
     */
    public static function request(string $uri, string $method, bool $sync = true, ...$args)
    {
        if (null === self::$self) {
            $di = Di::getDefault();
            if ($di->has('eellyClient')) {
                $di->getShared('eellyClient');
            } else {
                throw new \ErrorException('eelly client initial fail');
            }
        }
        $client = self::$self;
        if (null === self::$accessToken || self::$accessToken->hasExpired()) {
            self::$accessToken = $client->getAccessToken('client_credentials');
        }
        list($serviceName) = explode('/', $uri);
        if ($sync && ApplicationConst::hasRuntimeEnv(ApplicationConst::RUNTIME_ENV_SWOOLE)) {
            /* @var \Eelly\Network\TcpServer $server */
            $tcpServer = Di::getDefault()->getShared('server');
            $moduleClient = $tcpServer->getModuleClient($serviceName);
            $moduleClient->sendJson([
                'uri'    => '/'.$uri.'/'.$method,
                'params' => $args,
            ]);
            $data = $moduleClient->recvJson();

            return $client->bodyToObject($data['content']);
        }

        $uri = self::$providerUri[$serviceName].'/'.$uri.'/'.$method;
        $stream = new MultipartStream($client->paramsToMultipart($args));
        $provider = $client->getProvider();
        $options = [
            'body' => $stream,
        ];
        if (!empty(self::$traceId)) {
            $options['headers'] = [
                'traceId' => self::$traceId,
            ];
        }
        $request = $provider->getAuthenticatedRequest(EellyProvider::METHOD_POST, $uri, self::$accessToken->getToken(), $options);

        if ($sync) {
            $response = $provider->getResponse($request);

            return $client->respoonseToObject($response);
        } else {
            $promise = $provider->getHttpClient()->sendAsync($request);

            return new class($client, $promise) {
                private $client;
                private $promise;

                public function __construct($client, $promise)
                {
                    $this->client = $client;
                    $this->promise = $promise;
                }

                public function wait()
                {
                    return $this->client->respoonseToObject($this->promise->wait());
                }
            };
        }
    }

    public function respoonseToObject(ResponseInterface $response)
    {
        return $this->bodyToObject(\GuzzleHttp\json_decode((string) $response->getBody(), true));
    }

    /**
     * @param string $body
     *
     * @return mixed
     */
    public function bodyToObject($body)
    {
        if (isset($body['returnType'])) {
            if (class_exists($body['returnType'])) {
                if (is_subclass_of($body['returnType'], LogicException::class)) {
                    throw new $body['returnType']($body['error'], $body['context']);
                } else {
                    $object = $body['returnType']::hydractor($body['data']);
                }
            } else {
                $object = $body['data'];
                settype($object, $body['returnType']);
            }
        } else {
            $object = (string) $body;
        }

        return $object;
    }

    protected function paramsToMultipart($params, $prefix = null)
    {
        $multipart = [];
        foreach ($params as $key => $value) {
            $p = null === $prefix ? $key : $prefix.'['.$key.']';
            if ($value instanceof UploadedFileInterface) {
                $multipart[] = [
                    'name'     => $p,
                    'contents' => $value->getStream(),
                ];
            } elseif (is_array($value)) {
                $parentMultipart = $this->paramsToMultipart($value, $p);
                foreach ($parentMultipart as $part) {
                    $multipart[] = $part;
                }
            } elseif (null !== $value) {
                $multipart[] = [
                    'name'     => $p,
                    'contents' => $value,
                ];
            }
        }

        return $multipart;
    }
}
