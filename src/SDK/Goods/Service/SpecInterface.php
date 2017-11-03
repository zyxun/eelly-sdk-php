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

use Eelly\DTO\UidDTO;

/**
 * 商品规格.
 *
 * @author wangjiang<wangjiang@eelly.net>
 */
interface SpecInterface
{
    /**
     * 新增商品规格
     * 新增商品规格信息.
     *
     * @param int               $goodsId                    商品id
     * @param array             $specData                   商品规格数据
     * @param string            $specData["0"]["color"]     颜色名称
     * @param string            $specData["0"]["colorRgb"]  颜色RGB值
     * @param string            $specData["0"]["size"]      尺码名称
     * @param int               $specData["0"]["stock"]     库存数量
     * @param int               $specData["0"]["price"]     价格
     * @param string            $specData["0"]["sku"]       库存号
     * @param int               $specData["0"]["isDefault"] 是否默认规格 1是 0否
     * @param \Eelly\DTO\UidDTO $user                       登录用户信息
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 新增结果
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
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月21日
     */
    public function addSpec(int $goodsId, array $specData, UidDTO $user = null): bool;

    /**
     * 修改商品规格
     * 修改商品规格信息.
     *
     * @param int               $goodsId               商品id
     * @param array             $specData              商品规则数据
     * @param int               $specData["specId"]    规格id
     * @param string            $specData["color"]     颜色名称
     * @param string            $specData["colorRgb"]  颜色RGB值
     * @param string            $specData["size"]      尺码名称
     * @param int               $specData["stock"]     库存数量
     * @param int               $specData["price"]     价格
     * @param string            $specData["sku"]       库存号
     * @param int               $specData["isDefault"] 是否默认规格 1是 0否
     * @param \Eelly\DTO\UidDTO $user                  登录用户信息
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 修改结果
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
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月21日
     */
    public function updateSpec(int $goodsId, array $specData, UidDTO $user = null): bool;

    /**
     * 删除商品规格
     * 删除商品规格信息.
     *
     * @param int               $goodsId 商品id
     * @param int               $specId  规格id
     * @param \Eelly\DTO\UidDTO $user    登录用户信息
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 删除结果
     * @requestExample({
     *     "goodsId":1,
     *     "specId":2
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月21日
     */
    public function deleteSpec(int $goodsId, int $specId, UidDTO $user = null): bool;

    /**
     * 获取商品规格
     * 获取商品规格信息.
     *
     * @param int $goodsId 商品id
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return array 商品规格信息
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
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月21日
     */
    public function getSpec(int $goodsId): array;

    /**
     * 修改商品库存
     * 修改商品库存信息
     *
     * @param array $goodsData 商品数据
     * @param int $goodsData["0"]["goodsId"] 商品id
     * @param int $goodsData["0"]["specId"] 商品规格id
     * @param int $goodsData["0"]["quantity"] 商品数量
     * @return bool 修改结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "goodsData":[
     *         {
     *             "goodsId":1,
     *             "specId":2,
     *             "quantity":3
     *         }
     *     ]
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年11月3日
     */
    public function updateStock(array $goodsData): bool;
}
