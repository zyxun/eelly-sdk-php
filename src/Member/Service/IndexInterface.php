<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Member\Service;

use Eelly\SDK\Member\Service\Index\DTO\FastDFSDTO;
use Eelly\SDK\Member\Service\Index\DTO\TimeDTO;
use Psr\Http\Message\UploadedFileInterface;

interface IndexInterface
{
    /**
     * <h1>缓存注解示例.</h1>.
     *
     * <p>缓存注解缓存注解缓存注解缓存注解缓存注解
     * 缓存注解缓存注解缓存注解缓存注解.</p>
     *
     * @param string $name 名称
     * @returnExample({name: "eelly", time: "2017-06-01 10:10:10"})
     *
     * @return TimeDTO
     */
    public function cacheTime(string $name): TimeDTO;

    /**
     * 上传文件示例.
     *
     * @param string                $name
     * @param UploadedFileInterface $file
     *
     * @return FastDFSDTO
     */
    public function uploadFileToFastDFS(string $name, UploadedFileInterface $file): ?FastDFSDTO;

    /**
     * @return int
     */
    public function returnInt(): int;

    /**
     * @return string
     */
    public function returnString(): string;

    /**
     * @return array
     */
    public function returnArray(): array;

    /**
     * @return bool
     */
    public function returnBool(): bool;

    /**
     * @return float
     */
    public function returnfloat(): float;

    public function returnNull(): void;
}
