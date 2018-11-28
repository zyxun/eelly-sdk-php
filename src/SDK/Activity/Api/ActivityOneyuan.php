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
use Eelly\DTO\UidDTO;

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
     *
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
     *
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
     * 获取一元领取和使用数量统计.
     *
     * @param UidDTO|null $uidDTO
     *
     * @returnExample({
     *   "totalTimes": 3,
     *   "useTimes": -3,
     *   "unclaimedTimes": 0
     * })
     *
     * @return array
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年08月28日
     */
    public function getOneyuanDetailTimes(UidDTO $uidDTO = null): array
    {
        return EellyClient::request('activity/activityOneyuan', 'getOneyuanDetailTimes', true, $uidDTO);
    }

    /**
     * 获取一元领取和使用数量统计.
     *
     * @param UidDTO|null $uidDTO
     *
     * @returnExample({
     *   "totalTimes": 3,
     *   "useTimes": -3,
     *   "unclaimedTimes": 0
     * })
     *
     * @return array
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年08月28日
     */
    public function getOneyuanDetailTimesAsync(UidDTO $uidDTO = null)
    {
        return EellyClient::request('activity/activityOneyuan', 'getOneyuanDetailTimes', false, $uidDTO);
    }

    /**
     * 用户一元拼团次数变列表.
     *
     * @param int         $page   页码
     * @param int         $limit  每页条数
     * @param UidDTO|null $uidDTO
     *
     * @returnExample([
     *   {
     *       "aoId": "4",
     *       "userId": "148086",
     *       "type": "2",
     *       "times": "-1",
     *       "remark": "订单: 007",
     *       "number": "0",
     *       "createdTime": "1535355662",
     *       "updateTime": "2018-08-28 18:22:12"
     *   },
     *   {
     *       "aoId": "3",
     *       "userId": "148086",
     *       "type": "2",
     *       "times": "-1",
     *       "remark": "订单: 007",
     *       "number": "0",
     *       "createdTime": "1535355660",
     *       "updateTime": "2018-08-28 18:22:11"
     *   },
     *   {
     *       "aoId": "2",
     *       "userId": "148086",
     *       "type": "2",
     *       "times": "-1",
     *       "remark": "订单: 007",
     *       "number": "0",
     *       "createdTime": "1535355659",
     *       "updateTime": "2018-08-28 18:22:10"
     *   }
     * ])
     *
     * @return array
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年08月28日
     */
    public function getUseOneyuanListData(int $page = 1, int $limit = 10, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('activity/activityOneyuan', 'getUseOneyuanListData', true, $page, $limit, $uidDTO);
    }

    /**
     * 用户一元拼团次数变列表.
     *
     * @param int         $page   页码
     * @param int         $limit  每页条数
     * @param UidDTO|null $uidDTO
     *
     * @returnExample([
     *   {
     *       "aoId": "4",
     *       "userId": "148086",
     *       "type": "2",
     *       "times": "-1",
     *       "remark": "订单: 007",
     *       "number": "0",
     *       "createdTime": "1535355662",
     *       "updateTime": "2018-08-28 18:22:12"
     *   },
     *   {
     *       "aoId": "3",
     *       "userId": "148086",
     *       "type": "2",
     *       "times": "-1",
     *       "remark": "订单: 007",
     *       "number": "0",
     *       "createdTime": "1535355660",
     *       "updateTime": "2018-08-28 18:22:11"
     *   },
     *   {
     *       "aoId": "2",
     *       "userId": "148086",
     *       "type": "2",
     *       "times": "-1",
     *       "remark": "订单: 007",
     *       "number": "0",
     *       "createdTime": "1535355659",
     *       "updateTime": "2018-08-28 18:22:10"
     *   }
     * ])
     *
     * @return array
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年08月28日
     */
    public function getUseOneyuanListDataAsync(int $page = 1, int $limit = 10, UidDTO $uidDTO = null)
    {
        return EellyClient::request('activity/activityOneyuan', 'getUseOneyuanListData', false, $page, $limit, $uidDTO);
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