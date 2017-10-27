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
 * 商品属性.
 *
 * @author wangjiang<wangjiang@eelly.net>
 */
interface PropertyInterface
{
    /**
     * 新增商品属性
     * 新增商品属性信息
     *
     * @param int $goodsId 商品id
     * @param array $propertyData 属性数据
     * @param int $propertyData["0"]["categoryValId"] 分类属性id
     * @param string $propertyData["0"]["value"] 属性值
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 新增结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "goodsId":1,
     *     "propertyData":[
     *         {
     *             "categoryValId":1,
     *             "value":"属性值"
     *         }
     *     ]
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年10月17日
     */
    public function addProperty(int $goodsId, array $propertyData, UidDTO $user = null): bool;

    /**
     * 修改商品属性
     * 修改商品属性信息
     *
     * @param int $goodsId 商品id
     * @param array $propertyData 属性数据
     * @param int $propertyData["propertyId"] 属性id
     * @param int $propertyData["categoryValId"] 分类属性id
     * @param string $propertyData["value"] 属性值
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 修改结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "goodsId":1,
     *     "propertyData":{
     *         "propertyId":2,
     *         "categoryValId":1,
     *         "value":"属性值"
     *     }
     * })
     * @returnExample(false)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年10月17日
     */
    public function updateProperty(int $goodsId, array $propertyData, UidDTO $user = null): bool;

    /**
     * 删除商品属性
     * 删除商品属性信息
     *
     * @param int $goodsId 商品id
     * @param int $propertyId 属性id
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 删除结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "goodsId":1,
     *     "propertyId":2
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年10月17日
     */
    public function deleteProperty(int $goodsId, int $propertyId, UidDTO $user = null): bool;

    /**
     * 获取商品属性
     * 获取商品属性信息
     *
     * @param int $goodsId 商品id
     * @return array 商品属性信息
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "goodsId":1
     * })
     * @returnExample([
     *     {
     *         "goodsName":"商品名称",
     *         "propertyId":1,
     *         "value":"属性值",
     *         "createdTime":"1970-01-01 01:01:01"
     *     }
     * ])
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年10月17日
     */
    public function getProperty(int $goodsId): array;
}
