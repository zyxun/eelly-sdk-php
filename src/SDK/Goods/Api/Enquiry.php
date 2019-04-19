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

namespace Eelly\SDK\Goods\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Goods\Service\EnquiryInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Enquiry
{
    /**
     * 根据询价商品id，返回对应的商品信息
     *
     * @param array $geIds  询价商品id数组
     * @return array
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.01.05
     */
    public function getGoodsEnquiryInfoByIds(array $geIds): array
    {
        return EellyClient::request('goods/enquiry', 'getGoodsEnquiryInfoByIds', true, $geIds);
    }

    /**
     * 根据询价商品id，返回对应的商品信息
     *
     * @param array $geIds  询价商品id数组
     * @return array
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.01.05
     */
    public function getGoodsEnquiryInfoByIdsAsync(array $geIds)
    {
        return EellyClient::request('goods/enquiry', 'getGoodsEnquiryInfoByIds', false, $geIds);
    }

    /**
     * 计算询价下单商品的详细信息、总金额
     *
     * @param array $goodsInfo 商品信息
     * @param int   $goodsInfo[0]["goodsId"]    商品id
     * @param int   $goodsInfo[0]["gesId"]      商品规格id
     * @param int   $goodsInfo[0]["quantity"]   数量
     * @param int   $buyerId                    买家id
     *
     * @return array
     * @requestExample({
     *     "goodsInfo":[
     *         {
     *             "goodsId":1,
     *             "gesId":2,
     *             "quantity":6
     *         },
     *         {
     *             "goodsId":2,
     *             "gesId":2,
     *             "quantity":2
     *         }
     *     ],
     *     "buyerId":148086
     * })
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.01.05
     */
    public function calculateEnquiryOrderGoods(array $goodsInfo, int $buyerId): array
    {
        return EellyClient::request('goods/enquiry', 'calculateEnquiryOrderGoods', true, $goodsInfo, $buyerId);
    }

    /**
     * 计算询价下单商品的详细信息、总金额
     *
     * @param array $goodsInfo 商品信息
     * @param int   $goodsInfo[0]["goodsId"]    商品id
     * @param int   $goodsInfo[0]["gesId"]      商品规格id
     * @param int   $goodsInfo[0]["quantity"]   数量
     * @param int   $buyerId                    买家id
     *
     * @return array
     * @requestExample({
     *     "goodsInfo":[
     *         {
     *             "goodsId":1,
     *             "gesId":2,
     *             "quantity":6
     *         },
     *         {
     *             "goodsId":2,
     *             "gesId":2,
     *             "quantity":2
     *         }
     *     ],
     *     "buyerId":148086
     * })
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.01.05
     */
    public function calculateEnquiryOrderGoodsAsync(array $goodsInfo, int $buyerId)
    {
        return EellyClient::request('goods/enquiry', 'calculateEnquiryOrderGoods', false, $goodsInfo, $buyerId);
    }

    /**
     * 根据传过来的商品id，校验商品的状态是否正常
     *
     * @param array $goodsIds
     * @return bool
     * @requestExample({
     *     "goodsIds":[
     *         1, 2, 3
     *     ]
     * })
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.01.08
     */
    public function validateGoodsInfo(array $goodsIds): bool
    {
        return EellyClient::request('goods/enquiry', 'validateGoodsInfo', true, $goodsIds);
    }

    /**
     * 根据传过来的商品id，校验商品的状态是否正常
     *
     * @param array $goodsIds
     * @return bool
     * @requestExample({
     *     "goodsIds":[
     *         1, 2, 3
     *     ]
     * })
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.01.08
     */
    public function validateGoodsInfoAsync(array $goodsIds)
    {
        return EellyClient::request('goods/enquiry', 'validateGoodsInfo', false, $goodsIds);
    }

    /**
     * 添加询价商品信息记录
     *
     * @param array  $data
     * @param int    $data["itemType"]    询价类型(1.朋友圈商品; 2.店铺动态商品)
     * @param string $data["itemId"]      询价动态id
     * @param string $data["name"]        询价商品名称
     * @param string $data["urlCover"]    询价商品封面图
     * @param int    $data["sellerId"]    卖家ID
     * @param int    $data["status"]      在售状态：0 缺货停售 1 在售（卖家设置）
     *
     * @return int
     * @requestExample({
     *    "data": {
     *         "itemType":1,
     *         "itemId":"591ba096a29ff70f7314e1f6",
     *         "urlCover":"G01/M00/00/06/oYYBAFkboJWIXrI7AAAe9WlrlpgAAACVwDvSAIAAB8N049.jpg",
     *         "sellerId":148086,
     *         "status":1
     *     }
     * })
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.01.10
     */
    public function addGoodsEnquiry(array $data): int
    {
        return EellyClient::request('goods/enquiry', 'addGoodsEnquiry', true, $data);
    }

    /**
     * 添加询价商品信息记录
     *
     * @param array  $data
     * @param int    $data["itemType"]    询价类型(1.朋友圈商品; 2.店铺动态商品)
     * @param string $data["itemId"]      询价动态id
     * @param string $data["name"]        询价商品名称
     * @param string $data["urlCover"]    询价商品封面图
     * @param int    $data["sellerId"]    卖家ID
     * @param int    $data["status"]      在售状态：0 缺货停售 1 在售（卖家设置）
     *
     * @return int
     * @requestExample({
     *    "data": {
     *         "itemType":1,
     *         "itemId":"591ba096a29ff70f7314e1f6",
     *         "urlCover":"G01/M00/00/06/oYYBAFkboJWIXrI7AAAe9WlrlpgAAACVwDvSAIAAB8N049.jpg",
     *         "sellerId":148086,
     *         "status":1
     *     }
     * })
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.01.10
     */
    public function addGoodsEnquiryAsync(array $data)
    {
        return EellyClient::request('goods/enquiry', 'addGoodsEnquiry', false, $data);
    }

    /**
     * 根据传过来的where条件，删除对应的记录
     *
     * @param string $where  查询的where条件
     * @return bool
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.01.10
     */
    public function deleteEnquiryData(string $where): bool
    {
        return EellyClient::request('goods/enquiry', 'deleteEnquiryData', true, $where);
    }

    /**
     * 根据传过来的where条件，删除对应的记录
     *
     * @param string $where  查询的where条件
     * @return bool
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.01.10
     */
    public function deleteEnquiryDataAsync(string $where)
    {
        return EellyClient::request('goods/enquiry', 'deleteEnquiryData', false, $where);
    }

    /**
     * 询价商品标记已缺货
     * 
     * @param int $geId 询价商品id
     * @return array
     * 
     * @requestExample({"geId": 1})
     * @returnExample(true)
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2018年01月11日
     */
    public function updateNoStockEnquiry(int $geId): bool
    {
        return EellyClient::request('goods/enquiry', 'updateNoStockEnquiry', true, $geId);
    }

    /**
     * 询价商品标记已缺货
     * 
     * @param int $geId 询价商品id
     * @return array
     * 
     * @requestExample({"geId": 1})
     * @returnExample(true)
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2018年01月11日
     */
    public function updateNoStockEnquiryAsync(int $geId)
    {
        return EellyClient::request('goods/enquiry', 'updateNoStockEnquiry', false, $geId);
    }

    /**
     * 根据传过来的条件，返回对应的数据信息
     *
     * @param array $where 查询条件
     * @param array $where["itemIds"]  动态id
     * @return array
     *
     * @requestExample({
     *    "where": {
     *         "itemIds":["591ba096a29ff70f7314e1f6"]
     *     }
     * })
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.01.16
     */
    public function getInfoByConditions(array $where): array
    {
        return EellyClient::request('goods/enquiry', 'getInfoByConditions', true, $where);
    }

    /**
     * 根据传过来的条件，返回对应的数据信息
     *
     * @param array $where 查询条件
     * @param array $where["itemIds"]  动态id
     * @return array
     *
     * @requestExample({
     *    "where": {
     *         "itemIds":["591ba096a29ff70f7314e1f6"]
     *     }
     * })
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.01.16
     */
    public function getInfoByConditionsAsync(array $where)
    {
        return EellyClient::request('goods/enquiry', 'getInfoByConditions', false, $where);
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