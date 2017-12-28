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

use LogicException;
use Psr\Http\Message\ResponseInterface;
use Shadon\Client\ShadonSDKClient;
use Shadon\OAuth2\Client\Provider\ShadonProvider;

class EellyClient
{
    /**
     * server map.
     *
     * @var array
     */
    private const SERVICE_MAP = [
        'logger'  => 'https://api.eelly.com',
        'example' => 'https://api.eelly.com',
        'oauth'   => 'https://api.eelly.com',
        'user'    => 'https://api.eelly.com',
        'store'   => 'https://api.eelly.com',
        'pay'     => 'https://api.eelly.com',
        'service' => 'https://api.eelly.com',
        'message' => 'https://api.eelly.com',
    ];

    /**
     * @var string
     */
    public static $traceId;

    /**
     * @var ShadonSDKClient
     */
    private static $sdkClient;

    /**
     * @var static
     */
    private static $self;

    /**
     * EellyClient constructor.
     *
     * @param array $options
     * @param array $collaborators
     * @param array $serviceMap
     */
    private function __construct(array $options, array $collaborators = [], array $serviceMap = [])
    {
        $provider = new ShadonProvider($options, $collaborators);
        self::$sdkClient = ShadonSDKClient::fromProvider($provider, array_replace(self::SERVICE_MAP, $serviceMap));
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
     * @return AbstractProvider
     */
    public function getProvider()
    {
        return self::$sdkClient->getProvider();
    }

    /**
     * @param string $traceId
     */
    public function setTraceId(string $traceId): void
    {
        self::$traceId = $traceId;
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
        $paramArr = array_merge([$uri.'/'.$method], $args);
        $promise = call_user_func_array([self::$sdkClient, 'requestAsync'], $paramArr);
        if ($sync) {
            $response = $promise->wait();

            return self::$self->respoonseToObject($response);
        }

        return $promise;
    }

    private function respoonseToObject(ResponseInterface $response)
    {
        return $this->bodyToObject(\GuzzleHttp\json_decode($response->getBody(), true));
    }

    private function bodyToObject(array $body)
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
}
