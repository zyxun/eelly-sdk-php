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
 * 直播间排序设置接口
 *
 * @author zhangyangxun
 */
interface LiveSortSettingInterface
{
    /**
     * 获取直播积分配置
     * @internal
     *
     * @param array   $condition
     * @return array
     *
     * @author zhangyangxun
     * @since 2019-04-22
     */
    public function getSortSetting(array $condition = []): array;
}