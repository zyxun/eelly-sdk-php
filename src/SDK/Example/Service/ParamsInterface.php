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

namespace Eelly\SDK\Example\Service;

use Eelly\DTO\FastDFSDTO;
use Eelly\SDK\Example\DTO\TimeDTO;
use Psr\Http\Message\UploadedFileInterface;

/**
 * 接口参数测试.
 *
 * @author hehui<hehui@eelly.net>
 */
interface ParamsInterface
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
     *
     * @author hehui<hehui@eelly.net>
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
     *
     * @author hehui<hehui@eelly.net>
     */
    public function cacheTime(string $name): TimeDTO;

    /**
     * 上传文件示例.
     *
     * @param string                $name
     * @param UploadedFileInterface $file
     *
     * @return FastDFSDTO
     *
     * @author hehui<hehui@eelly.net>
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
     *
     * @author hehui<hehui@eelly.net>
     */
    public function paramArray(array $arr, array $framework): bool;

    /**
     * 返回int.
     *
     * @return int
     *
     * @author hehui<hehui@eelly.net>
     */
    public function returnInt(): int;

    /**
     * 返回string.
     *
     * @return string
     *
     * @author hehui<hehui@eelly.net>
     */
    public function returnString(): string;

    /**
     * 返回array.
     *
     * @return array
     *
     * @author hehui<hehui@eelly.net>
     */
    public function returnArray(): array;

    /**
     * 返回bool.
     *
     * @return bool
     *
     * @author hehui<hehui@eelly.net>
     */
    public function returnBool(): bool;

    /**
     * 返回float.
     *
     * @return float
     *
     * @author hehui<hehui@eelly.net>
     */
    public function returnfloat(): float;

    /**
     * 返回null.
     *
     * @author hehui<hehui@eelly.net>
     */
    public function returnNull(): void;

    /**
     * 返回异常.
     *
     * @throws \Eelly\SDK\Example\Exception\ExampleException
     *
     * @return bool
     *
     * @author hehui<hehui@eelly.net>
     */
    public function throwException(): bool;
}
