<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\System\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\DistrictStatisticsInterface;
use Eelly\SDK\System\DTO\DistrictStatisticsDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class DistrictStatistics implements DistrictStatisticsInterface
{

    /**
     * 根据传过来的商圈id，返回对应商圈的统计数据.
     *
     * @param int $districtId 商圈id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array
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
        return EellyClient::request('system/districtstatistics', 'getDistrictStatistics', $districtId);
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
    public function addDistrictStatistics(array $data): bool
    {
        return EellyClient::request('system/districtstatistics', 'addDistrictStatistics', $data);
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
    public function updateDistrictStatistics(int $districtId, array $data): bool
    {
        return EellyClient::request('system/districtstatistics', 'updateDistrictStatistics', $districtId, $data);
    }

    /**
     * 删除一条商圈统计数据.
     *
     * @param int $districtId 商圈id
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
    public function deleteDistrictStatistics(int $districtId): bool
    {
        return EellyClient::request('system/districtstatistics', 'deleteDistrictStatistics', $districtId);
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
        return EellyClient::request('system/districtstatistics', 'listDistrictStatisticsPage', $condition, $currentPage, $limit);
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