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
 * Interface LivePlanInterface.
 *
 * @author hehui<hehui@eelly.net>
 */
interface LivePlanInterface
{
    /**
     * 设置计划状态.
     *
     * @param int $planId
     * @param int $status
     *
     * @return bool
     */
    public function setStatus(int $planId, int $status): bool;

    /**
     * 更新是否收费和房间容量.
     *
     * @param int $planId
     * @param int $isPay
     * @param int $roomSize
     * @param int $liveType  直播类型(1.白天场 2.白天连播场 3.晚上场 4.晚上连播场 5.全天连播场 6.普通场 7.凌晨场)
     *
     * @return bool
     */
    public function updatePlan(int $planId, int $isPay, int $roomSize, int $liveType): bool;

    /**
     * 返回直播各个场次对应的时间文本内容
     *
     * @return string
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.08.22
     */
    public function getLivePlanContent(): string;
}
