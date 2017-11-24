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

use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\MarketInterface;
use Eelly\SDK\System\DTO\MarketDTO;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Market implements MarketInterface
{
    /**
     * 根据市场id,获取对应的市场信息.
     *
     * @param int $marketId 市场id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return MarketDTO
     * @requestExample({"marketId":1})
     * @returnExample({"marketId":3,"districtId":2,"marketName":"十三行新中国大厦","shortName":"新中国","startTime":"7:00","endTime":"14:00",
     *  "floorTotal":23,"latitude":"23.1166","longitude":"113.259499","gbCode":440103,"address":"荔湾区十三行路1号",
     *  "image":"XA283.jpg","isOpen":1,"sort":65535,"remark":"","createdTime":1505109590})
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-26
     */
    public function getMarket(int $marketId): MarketDTO
    {
        return EellyClient::request('system/market', __FUNCTION__, true, $marketId);
    }

    /**
     * 根据市场id,获取对应的市场信息.
     *
     * @param int $marketId 市场id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return MarketDTO
     * @requestExample({"marketId":1})
     * @returnExample({"marketId":3,"districtId":2,"marketName":"十三行新中国大厦","shortName":"新中国","startTime":"7:00","endTime":"14:00",
     *  "floorTotal":23,"latitude":"23.1166","longitude":"113.259499","gbCode":440103,"address":"荔湾区十三行路1号",
     *  "image":"XA283.jpg","isOpen":1,"sort":65535,"remark":"","createdTime":1505109590})
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-26
     */
    public function getMarketAsync(int $marketId)
    {
        return EellyClient::request('system/market', __FUNCTION__, false, $marketId);
    }

    /**
     * 添加一条市场记录.
     *
     * @param array  $data
     * @param int    $data["districtId"] 商圈ID
     * @param string $data["marketName"] 市场名称
     * @param string $data["shortName"]  自定义简称
     * @param string $data["startTime"]  营业开始时间
     * @param string $data["endTime"]    营业结束时间
     * @param int    $data["floorTotal"] 楼层总数
     * @param string $data["latitude"]   纬度
     * @param string $data["longitude"]  经度
     * @param int    $data["gb_code"]    区域ID
     * @param string $data["address"]    详细地址
     * @param string $data["image"]      图片路径
     * @param int    $data["isOpen"]     是否开通批发市场网页：0、未开通 1、开通
     * @param int    $data["sort"]       显示排序
     * @param string $data["remark"]     市场备注
     * @param UidDTO $user               用户登录信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"data":{"districtId":2,"marketName":"十三行新中国大厦","shortName":"新中国","startTime":"7:00","endTime":"14:00",
     *  "floorTotal":23,"latitude":"23.1166","longitude":"113.259499","gbCode":440103,"address":"荔湾区十三行路1号",
     *  "image":"XA283.jpg","isOpen":1,"sort":65535,"remark":""}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-26
     */
    public function addMarket(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('system/market', __FUNCTION__, true, $data, $user);
    }

    /**
     * 添加一条市场记录.
     *
     * @param array  $data
     * @param int    $data["districtId"] 商圈ID
     * @param string $data["marketName"] 市场名称
     * @param string $data["shortName"]  自定义简称
     * @param string $data["startTime"]  营业开始时间
     * @param string $data["endTime"]    营业结束时间
     * @param int    $data["floorTotal"] 楼层总数
     * @param string $data["latitude"]   纬度
     * @param string $data["longitude"]  经度
     * @param int    $data["gb_code"]    区域ID
     * @param string $data["address"]    详细地址
     * @param string $data["image"]      图片路径
     * @param int    $data["isOpen"]     是否开通批发市场网页：0、未开通 1、开通
     * @param int    $data["sort"]       显示排序
     * @param string $data["remark"]     市场备注
     * @param UidDTO $user               用户登录信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"data":{"districtId":2,"marketName":"十三行新中国大厦","shortName":"新中国","startTime":"7:00","endTime":"14:00",
     *  "floorTotal":23,"latitude":"23.1166","longitude":"113.259499","gbCode":440103,"address":"荔湾区十三行路1号",
     *  "image":"XA283.jpg","isOpen":1,"sort":65535,"remark":""}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-26
     */
    public function addMarketAsync(array $data, UidDTO $user = null)
    {
        return EellyClient::request('system/market', __FUNCTION__, false, $data, $user);
    }

    /**
     * 更新市场信息.
     *
     * @param int    $marketId           市场id
     * @param array  $data
     * @param int    $data["districtId"] 商圈ID
     * @param string $data["marketName"] 市场名称
     * @param string $data["shortName"]  自定义简称
     * @param string $data["startTime"]  营业开始时间
     * @param string $data["endTime"]    营业结束时间
     * @param int    $data["floorTotal"] 楼层总数
     * @param string $data["latitude"]   纬度
     * @param string $data["longitude"]  经度
     * @param int    $data["gbCode"]     区域ID
     * @param string $data["address"]    详细地址
     * @param string $data["image"]      图片路径
     * @param int    $data["isOpen"]     是否开通批发市场网页：0、未开通 1、开通
     * @param int    $data["sort"]       显示排序
     * @param string $data["remark"]     市场备注
     * @param UidDTO $user               用户登录信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"marketId":3,"data":{"districtId":2,"marketName":"十三行新中国大厦","shortName":"新中国","startTime":"7:00",
     *  "endTime":"14:00","floorTotal":23,"latitude":"23.1166","longitude":"113.259499","gbCode":440103,"address":"荔湾区十三行路1号",
     *  "image":"XA283.jpg","isOpen":1,"sort":65535,"remark":""}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-26
     */
    public function updateMarket(int $marketId, array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('system/market', __FUNCTION__, true, $marketId, $data, $user);
    }

    /**
     * 更新市场信息.
     *
     * @param int    $marketId           市场id
     * @param array  $data
     * @param int    $data["districtId"] 商圈ID
     * @param string $data["marketName"] 市场名称
     * @param string $data["shortName"]  自定义简称
     * @param string $data["startTime"]  营业开始时间
     * @param string $data["endTime"]    营业结束时间
     * @param int    $data["floorTotal"] 楼层总数
     * @param string $data["latitude"]   纬度
     * @param string $data["longitude"]  经度
     * @param int    $data["gbCode"]     区域ID
     * @param string $data["address"]    详细地址
     * @param string $data["image"]      图片路径
     * @param int    $data["isOpen"]     是否开通批发市场网页：0、未开通 1、开通
     * @param int    $data["sort"]       显示排序
     * @param string $data["remark"]     市场备注
     * @param UidDTO $user               用户登录信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"marketId":3,"data":{"districtId":2,"marketName":"十三行新中国大厦","shortName":"新中国","startTime":"7:00",
     *  "endTime":"14:00","floorTotal":23,"latitude":"23.1166","longitude":"113.259499","gbCode":440103,"address":"荔湾区十三行路1号",
     *  "image":"XA283.jpg","isOpen":1,"sort":65535,"remark":""}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-26
     */
    public function updateMarketAsync(int $marketId, array $data, UidDTO $user = null)
    {
        return EellyClient::request('system/market', __FUNCTION__, false, $marketId, $data, $user);
    }

    /**
     * 删除市场信息.
     *
     * @param int    $marketId 市场id
     * @param UidDTO $user     用户登录信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"marketId":3})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-26
     */
    public function deleteMarket(int $marketId, UidDTO $user = null): bool
    {
        return EellyClient::request('system/market', __FUNCTION__, true, $marketId, $user);
    }

    /**
     * 删除市场信息.
     *
     * @param int    $marketId 市场id
     * @param UidDTO $user     用户登录信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"marketId":3})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-26
     */
    public function deleteMarketAsync(int $marketId, UidDTO $user = null)
    {
        return EellyClient::request('system/market', __FUNCTION__, false, $marketId, $user);
    }

    /**
     * 分页获取商圈数据列表.
     *
     * @param array $condition               查询条件
     * @param int   $condition['districtId'] 商圈id
     * @param int   $currentPage             页码
     * @param int   $limit                   分页条数
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * -------------------|-------|--------------
     * items              |array  |
     * items[districtId]  |int    | 商圈id
     * items[marketName]  |string | 市场名称
     * items[shortName]   |string | 自定义简称
     * items[startTime]   |string | 营业开始时间
     * items[endTime]     |string | 营业结束时间
     * items[floorTotal]  |int    | 楼层总数
     * items[latitude]    |string | 纬度
     * items[longitude]   |string | 经度
     * items[gbCode]      |int    | 区域ID
     * items[address]     |string | 详细地址
     * items[image]       |string | 图片路径
     * items[isOpen]      |int    | 是否开通批发市场网页：0、未开通 1、开通
     * items[sort]        |int    | 显示排序
     * items[remark]      |string | 市场备注
     * items[createdTime] |int    | 添加时间
     * page                |array  |
     * page[first]         |int    | 第一页
     * page[before]        |int    | 上一页
     * page[current]       |int    | 当前页
     * page[last]          |int    | 最后一页
     * page[next]          |int    | 下一页
     * page[total_pages]   |int    | 总页数
     * page[total_items]   |int    | 总数
     * page[limit]         |int    | 每页显示的数量
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array
     * @requestExample({"condition":{"districtId":2},"currentPage":1,"limit":10})
     * @returnExample(["items": [{"districtId":2,"marketName":"十三行新中国大厦","shortName":"新中国","startTime":"7:00","endTime":"14:00",
     *  "floorTotal":23,"latitude":"23.1166","longitude":"113.259499","gbCode":440103,"address":"荔湾区十三行路1号",
     *  "image":"XA283.jpg","isOpen":1,"sort":65535,"remark":"","createdTime":1505109590}],
     *  "page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"total_pages": 1,"total_items": 1,"limit": 10}])
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-26
     */
    public function listMarketPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('system/market', __FUNCTION__, true, $condition, $currentPage, $limit);
    }

    /**
     * 分页获取商圈数据列表.
     *
     * @param array $condition               查询条件
     * @param int   $condition['districtId'] 商圈id
     * @param int   $currentPage             页码
     * @param int   $limit                   分页条数
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * -------------------|-------|--------------
     * items              |array  |
     * items[districtId]  |int    | 商圈id
     * items[marketName]  |string | 市场名称
     * items[shortName]   |string | 自定义简称
     * items[startTime]   |string | 营业开始时间
     * items[endTime]     |string | 营业结束时间
     * items[floorTotal]  |int    | 楼层总数
     * items[latitude]    |string | 纬度
     * items[longitude]   |string | 经度
     * items[gbCode]      |int    | 区域ID
     * items[address]     |string | 详细地址
     * items[image]       |string | 图片路径
     * items[isOpen]      |int    | 是否开通批发市场网页：0、未开通 1、开通
     * items[sort]        |int    | 显示排序
     * items[remark]      |string | 市场备注
     * items[createdTime] |int    | 添加时间
     * page                |array  |
     * page[first]         |int    | 第一页
     * page[before]        |int    | 上一页
     * page[current]       |int    | 当前页
     * page[last]          |int    | 最后一页
     * page[next]          |int    | 下一页
     * page[total_pages]   |int    | 总页数
     * page[total_items]   |int    | 总数
     * page[limit]         |int    | 每页显示的数量
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array
     * @requestExample({"condition":{"districtId":2},"currentPage":1,"limit":10})
     * @returnExample(["items": [{"districtId":2,"marketName":"十三行新中国大厦","shortName":"新中国","startTime":"7:00","endTime":"14:00",
     *  "floorTotal":23,"latitude":"23.1166","longitude":"113.259499","gbCode":440103,"address":"荔湾区十三行路1号",
     *  "image":"XA283.jpg","isOpen":1,"sort":65535,"remark":"","createdTime":1505109590}],
     *  "page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"total_pages": 1,"total_items": 1,"limit": 10}])
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-26
     */
    public function listMarketPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('system/market', __FUNCTION__, false, $condition, $currentPage, $limit);
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