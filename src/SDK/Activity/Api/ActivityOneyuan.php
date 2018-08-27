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

namespace Eelly\SDK\Activity\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Activity\Service\ActivityOneyuanInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class ActivityOneyuan implements ActivityOneyuanInterface
{
    /**
     * 添加数据.
     *
     * @param array $data 插入数据
     *
     * @return bool
     *
     * @requestExample({
     *   "userId": 148086,
     *   "times": -1,
     *   "remark": "一元拼团扣除1次orderId:007"
     * })
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年08月24日
     */
    public function addData(array $data): bool
    {
        return EellyClient::request('activity/activityOneyuan', 'addData', true, $data);
    }

    /**
     * 添加数据.
     *
     * @param array $data 插入数据
     *
     * @return bool
     *
     * @requestExample({
     *   "userId": 148086,
     *   "times": -1,
     *   "remark": "一元拼团扣除1次orderId:007"
     * })
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年08月24日
     */
    public function addDataAsync(array $data)
    {
        return EellyClient::request('activity/activityOneyuan', 'addData', false, $data);
    }

    /**
     * 获取用户可以参加特殊推广的次数.
     *
     * @param int $userId
     *
     * @return int
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年08月23日
     */
    public function getActivityTimes(int $userId): int
    {
        return EellyClient::request('activity/activityOneyuan', 'getActivityTimes', true, $userId);
    }

    /**
     * 获取用户可以参加特殊推广的次数.
     *
     * @param int $userId
     *
     * @return int
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年08月23日
     */
    public function getActivityTimesAsync(int $userId)
    {
        return EellyClient::request('activity/activityOneyuan', 'getActivityTimes', false, $userId);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}