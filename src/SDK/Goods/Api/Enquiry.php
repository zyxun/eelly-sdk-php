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
class Enquiry implements EnquiryInterface
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
    public function calculateEnquiryOrderGoods(array $goodsInfo, int $buyerId): array
    {
        return EellyClient::request('goods/enquiry', 'calculateEnquiryOrderGoods', true, $goodsInfo, $buyerId);
    }

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