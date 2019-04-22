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
     * 获取所有积分规则
     * @internal
     *
     * @param array    $condition
     * @return array
     *
     * @author zhangyangxun
     * @since 2019-03-27
     */
    public function getSettings(array $condition = []): array;
}