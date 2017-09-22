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
 * 缓存使用示例.
 *
 * @author hehui<hehui@eelly.net>
 */
interface CacheInterface
{
    /**
     * 缓存注解示例.
     *
     * 缓存字符串
     *
     * @param string $name 名称
     *
     * @throws \Exception
     *
     * @return string
     *
     * @requestExample({"name":"eelly"})
     *
     * @returnExample("eelly@2016-10-10 10:11:12")
     *
     * @author hehui<hehui@eelly.net>
     */
    public function annotionString(string $name): string;

    /**
     * 缓存注解示例.
     *
     * 缓存数组
     *
     * @param string $name 名称
     *
     * @throws \Exception
     *
     * @return array
     *
     * @requestExample({"name":"eelly"})
     *
     * @returnExample("eelly@2016-10-10 10:11:12")
     *
     * @author hehui<hehui@eelly.net>
     */
    public function annotionArray(string $name): array;
}
