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

namespace Eelly\SDK\Goods\Service;


/**
 * 询价商品信息接口.
 *
 * @author wechan<liweiquan@eelly.net>
 */
interface EnquiryInterface
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
    public function getGoodsEnquiryInfoByIds(array $geIds) : array;

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
    public function calculateEnquiryOrderGoods(array $goodsInfo, int $buyerId): array;

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
    public function validateGoodsInfo(array $goodsIds) : bool;

    /**
     * 添加询价商品信息记录
     *
     * @param array  $data
     * @param int    $data["itemType"]    询价类型(1.朋友圈商品; 2.店铺动态商品)
     * @param string $data["itemId"]      询价动态id
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
    public function addGoodsEnquiry(array $data) : int;

    /**
     * 根据传过来的where条件，删除对应的记录
     *
     * @param string $where  查询的where条件
     * @return bool
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.01.10
     */
    public function deleteEnquiryData(string $where): bool;
}
