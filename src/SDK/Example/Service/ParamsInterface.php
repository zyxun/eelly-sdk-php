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

/**
 * 接口参数测试.
 *
 * @author hehui<hehui@eelly.net>
 */
interface ParamsInterface
{
    /**
     * 参数数组实例.
     *
     * 参数为数组情况
     *
     * @param array       $arr                   公司
     * @param string|null $arr['str']            公司名
     * @param int         $arr['number']         编号
     * @param array       $framework             框架
     * @param string      $framework[]['name']   框架名
     * @param bool        $framework[]['status'] 状态
     *
     * @requestExample({
     *     "arr":{"str":"衣联网","number":123},
     *     "framework":[
     *         {"name":"phalcon","status":true},
     *         {"name":"laravel","status":false}
     *     ]
     * })
     *
     * @returnExample(true)
     *
     * @author hehui<hehui@eelly.net>
     */
    public function paramArray(array $arr, array $framework): array;

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
