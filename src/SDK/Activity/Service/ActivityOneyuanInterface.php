<?php
declare(strict_types=1);
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Activity\Service;

use Eelly\DTO\UidDTO;

/**
 * 用户一元拼团次数变更.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 */
interface ActivityOneyuanInterface
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
    public function addData(array $data): bool;

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
    public function getActivityTimes(int $userId): int;


    /**
     * 获取一元领取和使用数量统计.
     *
     * @param UidDTO|null $uidDTO
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------------|-------|--------------
     * totalTimes     |int    |总数
     * useTimes       |int    |已领取次数
     * unclaimedTimes |int    |未领取次数
     *
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
    public function getOneyuanDetailTimes(UidDTO $uidDTO = null): array;

    /**
     * 用户一元拼团次数变列表.
     *
     * @param int         $page   页码
     * @param int         $limit  每页条数
     * @param UidDTO|null $uidDTO
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------|-------|--------------
     * aoId        |string |自定增ID
     * userId      |string |用户ID
     * type        |string |类型
     * times       |string |次数，-1领取，1领取失败
     * remark      |string |展示订单
     * number      |string |商品数量
     * createdTime |string |新增时间
     * updateTime  |string |更新时间
     *
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
    public function getUseOneyuanListData(int $page = 1, int $limit = 10, UidDTO $uidDTO = null): array;

}