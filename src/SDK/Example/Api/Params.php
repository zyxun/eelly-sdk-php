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

namespace Eelly\SDK\Example\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Example\DTO\TimeDTO;
use Eelly\SDK\Example\Service\ParamsInterface;

/**
 * @author hehui<hehui@eelly.net>
 */
class Params implements ParamsInterface
{
    /**
     * {@inheritdoc}
     */
    public function paramArray(array $arr, array $framework): array
    {
        return EellyClient::request('example/params', __FUNCTION__, true, $arr, $framework);
    }

    /**
     * {@inheritdoc}
     */
    public function cacheTime(string $name): TimeDTO
    {
        return EellyClient::request('example/params', __FUNCTION__, true, $name);
    }

    /**
     * {@inheritdoc}
     */
    public function returnInt(): int
    {
        return EellyClient::request('example/params', __FUNCTION__);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Example\Service\ParamsInterface::returnString()
     */
    public function returnString(): string
    {
        return EellyClient::request('example/params', __FUNCTION__);
    }

    /**
     * {@inheritdoc}
     */
    public function returnArray(): array
    {
        return EellyClient::request('example/params', __FUNCTION__);
    }

    /**
     * {@inheritdoc}
     */
    public function returnBool(): bool
    {
        return EellyClient::request('example/params', __FUNCTION__);
    }

    /**
     * {@inheritdoc}
     */
    public function returnfloat(): float
    {
        return EellyClient::request('example/params', __FUNCTION__);
    }

    /**
     * {@inheritdoc}
     */
    public function returnNull(): void
    {
        EellyClient::request('example/params', __FUNCTION__);
    }

    /**
     * {@inheritdoc}
     */
    public function throwException(): bool
    {
        EellyClient::request('example/params', __FUNCTION__);
    }

    /**
     * @return self
     */
    public static function getInstance()
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}
