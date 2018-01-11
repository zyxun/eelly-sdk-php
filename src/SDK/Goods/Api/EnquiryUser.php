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
use Eelly\SDK\Goods\Service\EnquiryUserInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class EnquiryUser implements EnquiryUserInterface
{
    /**
     * 新增询价商品报价信息
     *
     * @param array $data 请求参数
     * @param $data['geId'] 询价商品ID
     * @param $data['buyerId'] 买家ID
     * @param $data['price'] 买家ID
     * @param $data['status'] 报价状态：0 未报价 1 已报价 4 删除（买家设置）
     * @param $data['createdTime'] 添加时间
     *
     * @autohr wechan<liweiquan@eelly.net>
     * @since 2018年1月03日
     */
    public function addEnquiryUser(array $data): bool
    {
        return EellyClient::request('goods/enquiryUser', 'addEnquiryUser', true, $data);
    }

    /**
     * 新增询价商品报价信息
     *
     * @param array $data 请求参数
     * @param $data['geId'] 询价商品ID
     * @param $data['buyerId'] 买家ID
     * @param $data['price'] 买家ID
     * @param $data['status'] 报价状态：0 未报价 1 已报价 4 删除（买家设置）
     * @param $data['createdTime'] 添加时间
     *
     * @autohr wechan<liweiquan@eelly.net>
     * @since 2018年1月03日
     */
    public function addEnquiryUserAsync(array $data)
    {
        return EellyClient::request('goods/enquiryUser', 'addEnquiryUser', false, $data);
    }

    /**
     * 获取用户的在店铺报价记录数.
     * 
     * @param int $data['userId']  用户id (不为0时需要传type 为0时取全部店铺的报价记录)
     * @param int $data['storeId'] 店铺id (不为0时需要传type 为0时取全部店铺的报价记录)
     * @param int $data['type'] 类型 0.取区本店报价记录 1.取其他店铺的报价记录
     * 
     * @return int 
     * 
     * @autor wechan<liweiquan@eelly.net>
     * @since 2017年01月04日
     */
    public function getOfferPriceCount(array $data): int
    {
        return EellyClient::request('goods/enquiryUser', 'getOfferPriceCount', true, $data);
    }

    /**
     * 获取用户的在店铺报价记录数.
     * 
     * @param int $data['userId']  用户id (不为0时需要传type 为0时取全部店铺的报价记录)
     * @param int $data['storeId'] 店铺id (不为0时需要传type 为0时取全部店铺的报价记录)
     * @param int $data['type'] 类型 0.取区本店报价记录 1.取其他店铺的报价记录
     * 
     * @return int 
     * 
     * @autor wechan<liweiquan@eelly.net>
     * @since 2017年01月04日
     */
    public function getOfferPriceCountAsync(array $data)
    {
        return EellyClient::request('goods/enquiryUser', 'getOfferPriceCount', false, $data);
    }

    /**
     * 根据询价商品id，返回对应的商品信息
     *
     * @param array $goodsIds  询价商品id数组
     * @param int   $buyerId   买家用户id
     * @return array
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.01.05
     */
    public function getGoodsInfoByIds(array $goodsIds, int $buyerId): array
    {
        return EellyClient::request('goods/enquiryUser', 'getGoodsInfoByIds', true, $goodsIds, $buyerId);
    }

    /**
     * 根据询价商品id，返回对应的商品信息
     *
     * @param array $goodsIds  询价商品id数组
     * @param int   $buyerId   买家用户id
     * @return array
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.01.05
     */
    public function getGoodsInfoByIdsAsync(array $goodsIds, int $buyerId)
    {
        return EellyClient::request('goods/enquiryUser', 'getGoodsInfoByIds', false, $goodsIds, $buyerId);
    }

    /**
     * 根据询价商品id，返回对应的商品信息
     *
     * @param array $goodsIds  询价商品id数组
     * @param int   $buyerId   买家用户id
     * 
     * @return array
     * @requestExample({"goodsId":[1,2,3,4,5],"buyerId":148086})
     * @returnExample()
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2018年01月11日
     */
    public function getEnquiryInfoByIds(array $goodsIds, int $buyerId): array
    {
        return EellyClient::request('goods/enquiryUser', 'getEnquiryInfoByIds', true, $goodsIds, $buyerId);
    }

    /**
     * 根据询价商品id，返回对应的商品信息
     *
     * @param array $goodsIds  询价商品id数组
     * @param int   $buyerId   买家用户id
     * 
     * @return array
     * @requestExample({"goodsId":[1,2,3,4,5],"buyerId":148086})
     * @returnExample()
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2018年01月11日
     */
    public function getEnquiryInfoByIdsAsync(array $goodsIds, int $buyerId)
    {
        return EellyClient::request('goods/enquiryUser', 'getEnquiryInfoByIds', false, $goodsIds, $buyerId);
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