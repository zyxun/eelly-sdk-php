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

namespace Eelly\SDK\Member\Service;

use Eelly\SDK\Member\Service\Index\DTO\FastDFSDTO;
use Eelly\SDK\Member\Service\Index\DTO\TimeDTO;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @author hehui<hehui@eelly.net>
 */
interface IndexInterface
{
    /**
     * 缓存注解示例..
     *
     * 缓存注解缓存注解缓存注解缓存注解缓存注解
     * 缓存注解缓存注解缓存注解缓存注解.
     *
     * @param string $name 名称
     * @returnExample({"name":"eelly","time":"2017-06-01 10:10:10"})
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
     * 参数数组实例.
     *
     * 参数数组实例详细说明, 这是描述.
     *
     * @param array  $arr                   公司
     * @param string $arr['str']            公司名
     * @param int    $arr['number']         编号
     * @param array  $framework             框架
     * @param string $framework[]['name']   框架名
     * @param bool   $framework[]['status'] 状态
     *
     * @requestExample([{"str":"衣联网","number":123},[{"name":"phalcon","status":true},{"name":"laravel","status":false}]])
     *
     * @returnExample(true)
     */
    public function paramArray(array $arr, array $bcc):bool;

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

    /**
     * @return null
     */
    public function returnNull(): void;

    /**
     * @throws \Member\Exception\LogicException
     *
     * @return bool
     */
    public function throwException():bool;
}
