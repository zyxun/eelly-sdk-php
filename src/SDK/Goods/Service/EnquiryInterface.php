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
     * 计算询价下单商品的邮费、总金额
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
}
