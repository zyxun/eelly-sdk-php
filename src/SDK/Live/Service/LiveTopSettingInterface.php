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

namespace Eelly\SDK\Live\Service;

/**
 * 直播间置顶配置
 *
 * @author sunanzhi<sunanzhi@hotmail.com>
 */
interface LiveTopSettingInterface
{
    /**
     * 获取当前配置生效的数据
     *
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.26
     */
    public function getOne():array;
}