<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Log\Service;


/**
 * 操作日志
 *
 * @author  zhangyingdi<zhangyingdi@eelly.net>
 * @since 2019.01.10
 */
interface HandlelogInterface
{
    /**
     * 根据传过来的直播id，返回该直播id的记录总数
     *
     * @param int $liveId  直播id
     * @param int $startTime 开始时间
     * @return int
     *
     * @requestExample({"liveId":426, "startTime":1563552000})
     * @returnExample(16)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2019.01.10
     */
    public function getLiveNum(int $liveId, int $startTime = 0):int;
}