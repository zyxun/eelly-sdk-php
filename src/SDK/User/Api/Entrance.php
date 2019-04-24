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

namespace Eelly\SDK\User\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\User\DTO\EntranceDTO;

/**
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Entrance
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
        return EellyClient::request('user/entrance', __FUNCTION__, true, $entranceId);
    }

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
    public function getEntranceAsync(int $entranceId)
    {
        return EellyClient::request('user/entrance', __FUNCTION__, false, $entranceId);
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
        return EellyClient::request('user/entrance', __FUNCTION__, true, $data);
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
    public function addEntranceAsync(array $data)
    {
        return EellyClient::request('user/entrance', __FUNCTION__, false, $data);
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
        return EellyClient::request('user/entrance', __FUNCTION__, true, $entranceId, $data);
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
    public function updateEntranceAsync(int $entranceId, array $data)
    {
        return EellyClient::request('user/entrance', __FUNCTION__, false, $entranceId, $data);
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
        return EellyClient::request('user/entrance', __FUNCTION__, true, $entranceId);
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
    public function deleteEntranceAsync(int $entranceId)
    {
        return EellyClient::request('user/entrance', __FUNCTION__, false, $entranceId);
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
        return EellyClient::request('user/entrance', __FUNCTION__, true, $condition, $currentPage, $limit);
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
    public function listEntrancePageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('user/entrance', __FUNCTION__, false, $condition, $currentPage, $limit);
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
