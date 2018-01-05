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
use Phalcon\Cache\BackendInterface as CacheInterface;
use Psr\Http\Message\ResponseInterface;
use Shadon\Application\ApplicationConst;
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
     * initialze eelly client.
     *
     * @param array          $config
     * @param CacheInterface $cache
     */
    public static function initialize(array $config, CacheInterface $cache): self
    {
        if (defined('APP') && ApplicationConst::ENV_PRODUCTION === APP['env']) {
            $eellyClient = self::init($config['options']);
        } else {
            $collaborators = [
                'httpClient' => new \GuzzleHttp\Client(['verify' => false]),
            ];
            $eellyClient = self::init($config['options'], $collaborators, $config['providerUri']);
        }
        $eellyClient->getSdkClient()->getProvider()->setAccessTokenCache($cache);

        return $eellyClient;
    }

    /**
     * @return ShadonSDKClient
     */
    public static function getSdkClient()
    {
        return self::$sdkClient;
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

            return self::$self->responseToObject($response);
        }

        return $promise;
    }

    private function responseToObject(ResponseInterface $response)
    {
        $content = (string) $response->getBody();
        $object = null;
        if ('' !== $content) {
            $object = $this->bodyToObject(\GuzzleHttp\json_decode($content, true));
        }

        return $object;
    }

    private function bodyToObject(array $body)
    {
        if (isset($body['returnType'])) {
            if (class_exists($body['returnType'])) {
                if (is_subclass_of($body['returnType'], LogicException::class)) {
                    if (isset($body['context'])) {
                        throw new $body['returnType']($body['error'], $body['context']);
                    } else {
                        throw new $body['returnType']($body['error']);
                    }
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
