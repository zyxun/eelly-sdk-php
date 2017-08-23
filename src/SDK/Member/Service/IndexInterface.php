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

use Eelly\DTO\FastDFSDTO;
use Eelly\SDK\Member\Service\DTO\TimeDTO;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @author hehui<hehui@eelly.net>
 */
interface IndexInterface
{
    /**
     * 标题.
     *
     * 描述内容.
     *
     * @param int                   $a         参数说明
     * @param float                 $b         参数说明
     * @param string                $c         参数说明
     * @param array                 $d         参数说明
     * @param string                $d['akey'] key对应的说明
     * @param int                   $d['bkey'] key对应的说明
     * @param UploadedFileInterface $e         参数说明
     *
     * @throws \LogicException 异常说明
     *
     * @return bool 返回说明
     *
     *
     * @requestExample([123, 1.234, "字符串", {"akey":"avalue", "bkey":123}, '文件内容'])
     *
     * @returnExample(true)
     */
    public function paramsType(int $a, float $b, string $c, array $d, UploadedFileInterface $e): bool;

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
    public function paramArray(array $arr, array $framework): bool;

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

    /**
     * @throws \Eelly\SDK\Member\Exception\MemberException
     *
     * @return bool
     */
    public function throwException(): bool;


    /**
     * index
     *
     * @return string
     * @auth 肖俊明<xiaojunming@eelly.net>
     * @since 2017年08月22日
     */
    public function index(): string;
}
