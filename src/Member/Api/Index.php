<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Member\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Member\Service\Index\DTO\FastDFSDTO;
use Eelly\SDK\Member\Service\Index\DTO\TimeDTO;
use Eelly\SDK\Member\Service\IndexInterface;
use Psr\Http\Message\UploadedFileInterface;

class Index implements IndexInterface
{
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
}
