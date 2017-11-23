<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\User\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\User\Service\EntranceInterface;
use Eelly\SDK\User\DTO\EntranceDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Entrance implements EntranceInterface
{

    /**
     * 获取用户后台快速入口设置.
     *
     * @param int $entranceId 记录id
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------|-------|--------------
     * ueId        |int    | 记录id
     * userId      |int    | 用户id
     * type        |int    | 入口类型：0 买家后台 1 卖家后台
     * entrance    |string | 快速入口
     * createdTime |int    | 添加时间
     * updateTime  |string | 修改时间
     *
     * @throws EntranceException
     *
     * @return EntranceDTO
     * @requestExample({"entranceId":1})
     * @returnExample({"ueId":1,"userId":148086,"type":1,"entrance":"xxx","createdTime":1506496290,"updateTime":"2017-09-27 15:11:33"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/27
     */
    public function getEntrance(int $entranceId): EntranceDTO
    {
        return EellyClient::request('user/entrance', 'getEntrance',true, $entranceId);
    }

    /**
     * 添加用户后台快速入口设置.
     *
     * @param array  $data
     * @param int    $data["userId"]   用户id
     * @param int    $data["type"]     入口类型：0 买家后台 1 卖家后台
     * @param string $data["entrance"] 快速入口
     *
     * @throws EntranceException
     *
     * @return bool
     * @requestExample({"data":{"userId":148086,"type":1,"entrance":"xxx"}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/27
     */
    public function addEntrance(array $data): bool
    {
        return EellyClient::request('user/entrance', 'addEntrance', true, $data);
    }

    /**
     * 更新用户后台快速入口设置.
     *
     * @param int    $entranceId       快速入口ID
     * @param array  $data
     * @param int    $data["userId"]   用户id
     * @param int    $data["type"]     入口类型：0 买家后台 1 卖家后台
     * @param string $data["entrance"] 快速入口
     *
     * @throws EntranceException
     *
     * @return bool
     * @requestExample({"entranceId":1, "data":{"userId":148086,"type":1,"entrance":"xxx"}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/27
     */
    public function updateEntrance(int $entranceId, array $data): bool
    {
        return EellyClient::request('user/entrance', 'updateEntrance',true, $entranceId, $data);
    }

    /**
     * 删除更新用户后台快速入口设置.
     *
     * @param int $entranceId 快速入口ID
     *
     * @throws EntranceException
     *
     * @return bool
     * @requestExample({"entranceId":1})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/27
     */
    public function deleteEntrance(int $entranceId): bool
    {
        return EellyClient::request('user/entrance', 'deleteEntrance',true, $entranceId);
    }

    /**
     * 分页获取用户后台快速入口设置.
     *
     * @param array  $condition
     * @param int    $condition["userId"]   用户id
     * @param int    $condition["type"]     入口类型：0 买家后台 1 卖家后台
     * @param string $condition["entrance"] 快速入口
     * @param int    $currentPage
     * @param int    $limit
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------|-------|--------------
     * ueId        |int    |
     * userId      |int    |
     * type        |int    |
     * entrance    |string |
     * createdTime |int    |
     * updateTime  |string |
     *
     * @throws EntranceException
     *
     * @return array
     * @requestExample({"condition":{"userId":148086,"type":1,"entrance":"xxx"}, "currentPage":1, "limit":10})
     * @returnExample([{"ueId":1,"userId":148086,"type":1,"entrance":"xxx","createdTime":1506496290,"updateTime":"2017-09-27 15:11:33"}])
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/27
     */
    public function listEntrancePage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('user/entrance', 'listEntrancePage',true, $condition, $currentPage, $limit);
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