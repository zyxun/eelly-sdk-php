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

namespace Eelly\SDK\System\Service;

/**
 * 系统相关信息.
 *
 * @author zhangyingdi<zhangyingdi@eelly.net>
 */
interface SystemInterface
{
    /**
     * 获取当前系统时间.
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since   2018.01.31
     */
    public function getSystemTime(): int;
}
