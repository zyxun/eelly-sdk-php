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
use Eelly\SDK\Goods\Service\PriceInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Price implements PriceInterface
{
    /**
     * 新增商品价格
     * 新增商品价格信息.
     *
     * @param int               $goodsId                    商品id
     * @param array             $priceData                  价格数据
     * @param int               $priceData["0"]["type"]     价格类型 1散批 2拿货 3打包
     * @param int               $priceData["0"]["quantity"] 区间起始数量
     * @param int               $priceData["0"]["price"]    商品价格
     * @param \Eelly\DTO\UidDTO $user                       登录用户信息
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "goodsId":1,
     *     "priceData":[
     *         {
     *             "type":1,
     *             "quantity":10,
     *             "price":10
     *         }
     *     ]
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月19日
     */
    public function addPrice(int $goodsId, array $priceData, UidDTO $user = null): bool
    {
        return EellyClient::request('goods/price', __FUNCTION__, true, $goodsId, $priceData, $user);
    }

    /**
     * 新增商品价格
     * 新增商品价格信息.
     *
     * @param int               $goodsId                    商品id
     * @param array             $priceData                  价格数据
     * @param int               $priceData["0"]["type"]     价格类型 1散批 2拿货 3打包
     * @param int               $priceData["0"]["quantity"] 区间起始数量
     * @param int               $priceData["0"]["price"]    商品价格
     * @param \Eelly\DTO\UidDTO $user                       登录用户信息
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "goodsId":1,
     *     "priceData":[
     *         {
     *             "type":1,
     *             "quantity":10,
     *             "price":10
     *         }
     *     ]
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月19日
     */
    public function addPriceAsync(int $goodsId, array $priceData, UidDTO $user = null)
    {
        return EellyClient::request('goods/price', __FUNCTION__, false, $goodsId, $priceData, $user);
    }

    /**
     * 修改商品价格
     * 修改商品价格信息.
     *
     * @param int               $goodsId               商品id
     * @param array             $priceData             价格数据
     * @param int               $priceData["priceId"]  价格id
     * @param int               $priceData["quantity"] 区间起始数量
     * @param int               $priceData["price"]    商品价格
     * @param \Eelly\DTO\UidDTO $user                  登录用户信息
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 修改结果
     * @requestExample({
     *     "goodsId":1,
     *     "priceData":{
     *         "priceId":1,
     *         "quantity":10,
     *         "price":10
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月19日
     */
    public function updatePrice(int $goodsId, array $priceData, UidDTO $user = null): bool
    {
        return EellyClient::request('goods/price', __FUNCTION__, true, $goodsId, $priceData, $user);
    }

    /**
     * 修改商品价格
     * 修改商品价格信息.
     *
     * @param int               $goodsId               商品id
     * @param array             $priceData             价格数据
     * @param int               $priceData["priceId"]  价格id
     * @param int               $priceData["quantity"] 区间起始数量
     * @param int               $priceData["price"]    商品价格
     * @param \Eelly\DTO\UidDTO $user                  登录用户信息
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 修改结果
     * @requestExample({
     *     "goodsId":1,
     *     "priceData":{
     *         "priceId":1,
     *         "quantity":10,
     *         "price":10
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月19日
     */
    public function updatePriceAsync(int $goodsId, array $priceData, UidDTO $user = null)
    {
        return EellyClient::request('goods/price', __FUNCTION__, false, $goodsId, $priceData, $user);
    }

    /**
     * 删除商品价格
     * 删除商品价格信息.
     *
     * @param int               $goodsId 商品id
     * @param int               $priceId 价格id
     * @param \Eelly\DTO\UidDTO $user    登录用户信息
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 删除结果
     * @requestExample({
     *     "goodsId":1,
     *     "priceId":2
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月20日
     */
    public function deletePrice(int $goodsId, int $priceId, UidDTO $user = null): bool
    {
        return EellyClient::request('goods/price', __FUNCTION__, true, $goodsId, $priceId, $user);
    }

    /**
     * 删除商品价格
     * 删除商品价格信息.
     *
     * @param int               $goodsId 商品id
     * @param int               $priceId 价格id
     * @param \Eelly\DTO\UidDTO $user    登录用户信息
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 删除结果
     * @requestExample({
     *     "goodsId":1,
     *     "priceId":2
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月20日
     */
    public function deletePriceAsync(int $goodsId, int $priceId, UidDTO $user = null)
    {
        return EellyClient::request('goods/price', __FUNCTION__, false, $goodsId, $priceId, $user);
    }

    /**
     * 获取商品价格
     * 获取商品价格信息.
     *
     * @param int $goodsId 商品id
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return array 商品价格信息
     * @requestExample({
     *     "goodsId":1
     * })
     * @returnExample([
     *     {
     *         "goodsName":"商品名称",
     *         "priceId":1,
     *         "type":1,
     *         "quantity":1,
     *         "price":123,
     *         "createdTime":"1970-01-01 01:01:01"
     *     }
     * ])
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月20日
     */
    public function getPrice(int $goodsId): array
    {
        return EellyClient::request('goods/price', __FUNCTION__, true, $goodsId);
    }

    /**
     * 获取商品价格
     * 获取商品价格信息.
     *
     * @param int $goodsId 商品id
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return array 商品价格信息
     * @requestExample({
     *     "goodsId":1
     * })
     * @returnExample([
     *     {
     *         "goodsName":"商品名称",
     *         "priceId":1,
     *         "type":1,
     *         "quantity":1,
     *         "price":123,
     *         "createdTime":"1970-01-01 01:01:01"
     *     }
     * ])
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月20日
     */
    public function getPriceAsync(int $goodsId)
    {
        return EellyClient::request('goods/price', __FUNCTION__, false, $goodsId);
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