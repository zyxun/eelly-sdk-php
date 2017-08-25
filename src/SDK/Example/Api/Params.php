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

use Eelly\DTO\FastDFSDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Example\Service\DTO\TimeDTO;
use Eelly\SDK\Example\Service\ParamsInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @author hehui<hehui@eelly.net>
 */
class Params implements ParamsInterface
{
    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Example\Service\ParamsInterface::paramsType()
     */
    public function paramsType(int $a, float $b, string $c, array $d, UploadedFileInterface $e): bool
    {
        return EellyClient::request('example/index', __FUNCTION__, $a, $b, $c, $d, $e);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Example\Service\ParamsInterface::paramArray()
     */
    public function paramArray(array $arr, array $framework): bool
    {
        return EellyClient::request('example/index', __FUNCTION__, $arr, $framework);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Eelly\Api\Example\Index::cacheTime()
     */
    public function cacheTime(string $name): TimeDTO
    {
        return EellyClient::request('example/index', __FUNCTION__, $name);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Example\Service\ParamsInterface::uploadFileToFastDFS()
     */
    public function uploadFileToFastDFS(string $name, UploadedFileInterface $file): ?FastDFSDTO
    {
        return EellyClient::request('example/index', __FUNCTION__, $name, $file);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Example\Service\ParamsInterface::returnInt()
     */
    public function returnInt(): int
    {
        return EellyClient::request('example/index', __FUNCTION__);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Example\Service\ParamsInterface::returnString()
     */
    public function returnString(): string
    {
        return EellyClient::request('example/index', __FUNCTION__);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Example\Service\ParamsInterface::returnArray()
     */
    public function returnArray(): array
    {
        return EellyClient::request('example/index', __FUNCTION__);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Example\Service\ParamsInterface::returnBool()
     */
    public function returnBool(): bool
    {
        return EellyClient::request('example/index', __FUNCTION__);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Example\Service\ParamsInterface::returnfloat()
     */
    public function returnfloat(): float
    {
        return EellyClient::request('example/index', __FUNCTION__);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Example\Service\ParamsInterface::returnNull()
     */
    public function returnNull(): void
    {
        EellyClient::request('example/index', __FUNCTION__);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Example\Service\ParamsInterface::throwException()
     */
    public function throwException(): bool
    {
        EellyClient::request('example/index', __FUNCTION__);
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
