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

namespace Eelly\SDK\Member\Api;

use Eelly\SDK\EellyClient;
use Eelly\DTO\FastDFSDTO;
use Eelly\SDK\Member\Service\DTO\TimeDTO;
use Eelly\SDK\Member\Service\IndexInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @author hehui<hehui@eelly.net>
 */
class Index implements IndexInterface
{
    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Member\Service\IndexInterface::paramsType()
     */
    public function paramsType(int $a, float $b, string $c, array $d, UploadedFileInterface $e):bool
    {
        return EellyClient::request('member/index', __FUNCTION__, $a, $b, $c, $d, $e);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Member\Service\IndexInterface::paramArray()
     */
    public function paramArray(array $arr, array $framework):bool
    {
        return EellyClient::request('member/index', __FUNCTION__, $arr, $framework);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Eelly\Api\Member\Index::cacheTime()
     */
    public function cacheTime(string $name): TimeDTO
    {
        return EellyClient::request('member/index', __FUNCTION__, $name);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Member\Service\IndexInterface::uploadFileToFastDFS()
     */
    public function uploadFileToFastDFS(string $name, UploadedFileInterface $file): ?FastDFSDTO
    {
        return EellyClient::request('member/index', __FUNCTION__, $name, $file);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Member\Service\IndexInterface::returnInt()
     */
    public function returnInt(): int
    {
        return EellyClient::request('member/index', __FUNCTION__);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Member\Service\IndexInterface::returnString()
     */
    public function returnString(): string
    {
        return EellyClient::request('member/index', __FUNCTION__);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Member\Service\IndexInterface::returnArray()
     */
    public function returnArray(): array
    {
        return EellyClient::request('member/index', __FUNCTION__);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Member\Service\IndexInterface::returnBool()
     */
    public function returnBool(): bool
    {
        return EellyClient::request('member/index', __FUNCTION__);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Member\Service\IndexInterface::returnfloat()
     */
    public function returnfloat(): float
    {
        return EellyClient::request('member/index', __FUNCTION__);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Member\Service\IndexInterface::returnNull()
     */
    public function returnNull(): void
    {
        EellyClient::request('member/index', __FUNCTION__);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Member\Service\IndexInterface::throwException()
     */
    public function throwException(): bool
    {
        EellyClient::request('member/index', __FUNCTION__);
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
