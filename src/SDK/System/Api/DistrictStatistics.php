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

namespace Eelly\SDK\System\Api;

use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\System\DTO\DistrictStatisticsDTO;
use Eelly\SDK\System\Service\DistrictStatisticsInterface;

/**
 * @author shadonTools<localhost.shell@gmail.com>
 */
class DistrictStatistics
{
    /**
     * 根据传过来的商圈id，返回对应商圈的统计数据.
     *
     * @param int $districtId 商圈id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return DistrictStatisticsDTO
     * @requestExample({"districtId":1})
     * @returnExample({"districtId":1,"storeNum":123, "goodsNum":1234,"wechatDynamicNum":1314,"weekGoodsNum":222,"weekWechatDynamicNum":1552,
     *     "monthStorePv":15975,"monthStorePvAvatars":""})
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-26
     */
    public function getDistrictStatistics(int $districtId): DistrictStatisticsDTO
    {
        return EellyClient::request('system/districtStatistics', __FUNCTION__, true, $districtId);
    }

    /**
     * 根据传过来的商圈id，返回对应商圈的统计数据.
     *
     * @param int $districtId 商圈id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return DistrictStatisticsDTO
     * @requestExample({"districtId":1})
     * @returnExample({"districtId":1,"storeNum":123, "goodsNum":1234,"wechatDynamicNum":1314,"weekGoodsNum":222,"weekWechatDynamicNum":1552,
     *     "monthStorePv":15975,"monthStorePvAvatars":""})
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-26
     */
    public function getDistrictStatisticsAsync(int $districtId)
    {
        return EellyClient::request('system/districtStatistics', __FUNCTION__, false, $districtId);
    }

    /**
     * 添加一条商圈统计数据.
     *
     * @param array  $data
     * @param int    $data["districtId"]           商圈id
     * @param int    $data["storeNum"]             商圈店铺数
     * @param int    $data["goodsNum"]             商圈商品数
     * @param int    $data["wechatDynamicNum"]     商圈生意圈动态数
     * @param int    $data["weekGoodsNum"]         商圈最近7天商品数
     * @param int    $data["weekWechatDynamicNum"] 商圈最近7天生意圈动态数
     * @param int    $data["monthStorePv"]         商圈店铺最近30天动态PV数
     * @param string $data["monthStorePvAvatars"]  商圈店铺最近30天访客头像
     * @param UidDTO $user                         用户登录信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"data":{"districtId":1,"storeNum":123, "goodsNum":1234,"wechatDynamicNum":1314,"weekGoodsNum":222,
     *     "weekWechatDynamicNum":1552,"monthStorePv":15975,"monthStorePvAvatars":""}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-26
     */
    public function addDistrictStatistics(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('system/districtStatistics', __FUNCTION__, true, $data, $user);
    }

    /**
     * 添加一条商圈统计数据.
     *
     * @param array  $data
     * @param int    $data["districtId"]           商圈id
     * @param int    $data["storeNum"]             商圈店铺数
     * @param int    $data["goodsNum"]             商圈商品数
     * @param int    $data["wechatDynamicNum"]     商圈生意圈动态数
     * @param int    $data["weekGoodsNum"]         商圈最近7天商品数
     * @param int    $data["weekWechatDynamicNum"] 商圈最近7天生意圈动态数
     * @param int    $data["monthStorePv"]         商圈店铺最近30天动态PV数
     * @param string $data["monthStorePvAvatars"]  商圈店铺最近30天访客头像
     * @param UidDTO $user                         用户登录信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"data":{"districtId":1,"storeNum":123, "goodsNum":1234,"wechatDynamicNum":1314,"weekGoodsNum":222,
     *     "weekWechatDynamicNum":1552,"monthStorePv":15975,"monthStorePvAvatars":""}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-26
     */
    public function addDistrictStatisticsAsync(array $data, UidDTO $user = null)
    {
        return EellyClient::request('system/districtStatistics', __FUNCTION__, false, $data, $user);
    }

    /**
     * 更新一条商圈统计数据.
     *
     * @param int    $districtId                   商圈id
     * @param array  $data                         更新的数据
     * @param int    $data["storeNum"]             商圈店铺数
     * @param int    $data["goodsNum"]             商圈商品数
     * @param int    $data["wechatDynamicNum"]     商圈生意圈动态数
     * @param int    $data["weekGoodsNum"]         商圈最近7天商品数
     * @param int    $data["weekWechatDynamicNum"] 商圈最近7天生意圈动态数
     * @param int    $data["monthStorePv"]         商圈店铺最近30天动态PV数
     * @param string $data["monthStorePvAvatars"]  商圈店铺最近30天访客头像
     * @param UidDTO $user                         用户登录信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"districtId":1,"data":{"storeNum":123, "goodsNum":1234,"wechatDynamicNum":1314,"weekGoodsNum":222,
     *     "weekWechatDynamicNum":1552,"monthStorePv":15975,"monthStorePvAvatars":""}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-26
     */
    public function updateDistrictStatistics(int $districtId, array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('system/districtStatistics', __FUNCTION__, true, $districtId, $data, $user);
    }

    /**
     * 更新一条商圈统计数据.
     *
     * @param int    $districtId                   商圈id
     * @param array  $data                         更新的数据
     * @param int    $data["storeNum"]             商圈店铺数
     * @param int    $data["goodsNum"]             商圈商品数
     * @param int    $data["wechatDynamicNum"]     商圈生意圈动态数
     * @param int    $data["weekGoodsNum"]         商圈最近7天商品数
     * @param int    $data["weekWechatDynamicNum"] 商圈最近7天生意圈动态数
     * @param int    $data["monthStorePv"]         商圈店铺最近30天动态PV数
     * @param string $data["monthStorePvAvatars"]  商圈店铺最近30天访客头像
     * @param UidDTO $user                         用户登录信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"districtId":1,"data":{"storeNum":123, "goodsNum":1234,"wechatDynamicNum":1314,"weekGoodsNum":222,
     *     "weekWechatDynamicNum":1552,"monthStorePv":15975,"monthStorePvAvatars":""}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-26
     */
    public function updateDistrictStatisticsAsync(int $districtId, array $data, UidDTO $user = null)
    {
        return EellyClient::request('system/districtStatistics', __FUNCTION__, false, $districtId, $data, $user);
    }

    /**
     * 删除一条商圈统计数据.
     *
     * @param int    $districtId 商圈id
     * @param UidDTO $user       用户登录信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"districtId":1})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-26
     */
    public function deleteDistrictStatistics(int $districtId, UidDTO $user = null): bool
    {
        return EellyClient::request('system/districtStatistics', __FUNCTION__, true, $districtId, $user);
    }

    /**
     * 删除一条商圈统计数据.
     *
     * @param int    $districtId 商圈id
     * @param UidDTO $user       用户登录信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"districtId":1})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-26
     */
    public function deleteDistrictStatisticsAsync(int $districtId, UidDTO $user = null)
    {
        return EellyClient::request('system/districtStatistics', __FUNCTION__, false, $districtId, $user);
    }

    /**
     * 分页获取商圈数据列表.
     *
     * @param array $condition   查询条件
     * @param int   $currentPage 页码
     * @param int   $limit       分页条数
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ----------------------------|-------|--------------
     * items                       |array  |
     * items[districtId]           |int    | 商圈id
     * items[storeNum]             |int    | 商圈店铺数
     * items[goodsNum]             |int    | 商圈商品数
     * items[wechatDynamicNum]     |int    | 商圈生意圈动态数
     * items[weekGoodsNum]         |int    | 商圈最近7天商品数
     * items[weekWechatDynamicNum] |int    | 商圈最近7天生意圈动态数
     * items[monthStorePv]         |int    | 商圈店铺最近30天动态PV数
     * items[monthStorePvAvatars]  |string | 商圈店铺最近30天访客头像
     * page                        |array  |
     * page[first]                 |int    | 第一页
     * page[before]                |int    | 上一页
     * page[current]               |int    | 当前页
     * page[last]                  |int    | 最后一页
     * page[next]                  |int    | 下一页
     * page[total_pages]           |int    | 总页数
     * page[total_items]           |int    | 总数
     * page[limit]                 |int    | 每页显示的数量
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array
     * @requestExample({"condition":{},"currentPage":1,"limit":10})
     * @returnExample(["items": [{"districtId":1,"storeNum":123, "goodsNum":1234,"wechatDynamicNum":1314,"weekGoodsNum":222,
     *     "weekWechatDynamicNum":1552,"monthStorePv":15975,"monthStorePvAvatars":""}],
     *     "page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"total_pages": 1,"total_items": 1,"limit": 10}])
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-26
     */
    public function listDistrictStatisticsPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('system/districtStatistics', __FUNCTION__, true, $condition, $currentPage, $limit);
    }

    /**
     * 分页获取商圈数据列表.
     *
     * @param array $condition   查询条件
     * @param int   $currentPage 页码
     * @param int   $limit       分页条数
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ----------------------------|-------|--------------
     * items                       |array  |
     * items[districtId]           |int    | 商圈id
     * items[storeNum]             |int    | 商圈店铺数
     * items[goodsNum]             |int    | 商圈商品数
     * items[wechatDynamicNum]     |int    | 商圈生意圈动态数
     * items[weekGoodsNum]         |int    | 商圈最近7天商品数
     * items[weekWechatDynamicNum] |int    | 商圈最近7天生意圈动态数
     * items[monthStorePv]         |int    | 商圈店铺最近30天动态PV数
     * items[monthStorePvAvatars]  |string | 商圈店铺最近30天访客头像
     * page                        |array  |
     * page[first]                 |int    | 第一页
     * page[before]                |int    | 上一页
     * page[current]               |int    | 当前页
     * page[last]                  |int    | 最后一页
     * page[next]                  |int    | 下一页
     * page[total_pages]           |int    | 总页数
     * page[total_items]           |int    | 总数
     * page[limit]                 |int    | 每页显示的数量
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array
     * @requestExample({"condition":{},"currentPage":1,"limit":10})
     * @returnExample(["items": [{"districtId":1,"storeNum":123, "goodsNum":1234,"wechatDynamicNum":1314,"weekGoodsNum":222,
     *     "weekWechatDynamicNum":1552,"monthStorePv":15975,"monthStorePvAvatars":""}],
     *     "page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"total_pages": 1,"total_items": 1,"limit": 10}])
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-26
     */
    public function listDistrictStatisticsPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('system/districtStatistics', __FUNCTION__, false, $condition, $currentPage, $limit);
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
