<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Goods\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Goods\Service\SpecInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Spec implements SpecInterface
{

    /**
     * 新增商品规格
     * 新增商品规格信息
     *
     * @param int $goodsId 商品id
     * @param array $specData 商品规格数据
     * @param string $specData["0"]["color"] 颜色名称
     * @param string $specData["0"]["colorRgb"] 颜色RGB值
     * @param string $specData["0"]["size"] 尺码名称
     * @param int $specData["0"]["stock"] 库存数量
     * @param int $specData["0"]["price"] 价格
     * @param string $specData["0"]["sku"] 库存号
     * @param int $specData["0"]["isDefault"] 是否默认规格 1是 0否
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 新增结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "goodsId":1,
     *     "specData":[
     *         {
     *             "color":"颜色",
     *             "colorRgb":"颜色rgb值",
     *             "size":"尺码名称",
     *             "stock":123,
     *             "price":123,
     *             "sku":"库存号",
     *             "isDefault":1
     *         }
     *     ]
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年10月21日
     */
    public function addSpec(int $goodsId, array $specData, UidDTO $user = null): bool
    {
        return EellyClient::request('goods/spec', 'addSpec', $goodsId, $specData, $user);
    }

    /**
     * 修改商品规格
     * 修改商品规格信息
     *
     * @param int $goodsId 商品id
     * @param array $specData 商品规则数据
     * @param int $specData["specId"] 规格id
     * @param string $specData["color"] 颜色名称
     * @param string $specData["colorRgb"] 颜色RGB值
     * @param string $specData["size"] 尺码名称
     * @param int $specData["stock"] 库存数量
     * @param int $specData["price"] 价格
     * @param string $specData["sku"] 库存号
     * @param int $specData["isDefault"] 是否默认规格 1是 0否
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 修改结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "goodsId":1,
     *     "specData":{
     *         "specId":1,
     *         "color":"颜色",
     *         "colorRgb":"颜色rgb值",
     *         "size":"尺码名称",
     *         "stock":123,
     *         "price":123,
     *         "sku":"库存号",
     *         "isDefault":1
     *     }
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年10月21日
     */
    public function updateSpec(int $goodsId, array $specData, UidDTO $user = null): bool
    {
        return EellyClient::request('goods/spec', 'updateSpec', $goodsId, $specData, $user);
    }

    /**
     * 删除商品规格
     * 删除商品规格信息
     *
     * @param int $goodsId 商品id
     * @param int $specId 规格id
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 删除结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "goodsId":1,
     *     "specId":2
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年10月21日
     */
    public function deleteSpec(int $goodsId, int $specId, UidDTO $user = null): bool
    {
        return EellyClient::request('goods/spec', 'deleteSpec', $goodsId, $specId, $user);
    }

    /**
     * 获取商品规格
     * 获取商品规格信息
     *
     * @param int $goodsId 商品id
     * @return array 商品规格信息
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "goodsId":1
     * })
     * @returnExample([
     *      {
     *          "goodsName":"商品名称",
     *          "specId":1,
     *          "color":"颜色名称",
     *          "colorRgb":"颜色RGB值",
     *          "size":"尺码名称",
     *          "price":123,
     *          "stock":123,
     *          "sku":"库存号",
     *          "isDefault":1,
     *          "createdTime":"1970-01-01 01:01:01"
     *      }
     * ])
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年10月21日
     */
    public function getSpec(int $goodsId): array
    {
        return EellyClient::request('goods/spec', 'getSpec', $goodsId);
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