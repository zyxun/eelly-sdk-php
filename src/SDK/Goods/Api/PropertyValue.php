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
use Eelly\SDK\Goods\Service\PropertyValueInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class PropertyValue implements PropertyValueInterface
{
    /**
     * 新增商品属性值
     * 新增商品属性值
     *
     * @param array  $valueData            商品属性值数据
     * @param int    $valueData["keyId"]   商品属性名id
     * @param string $valueData["value"]   属性值
     * @param int    $valueData["sort"]    排序
     * @param int    $valueData["status"]  状态 0 无效 1 有效
     * @param string $valueData["remark"]  描述值
     * @param string $valueData["extends"] 拓展字段
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "valueData":{
     *         "keyId":1,
     *         "value":"属性值",
     *         "sort":1,
     *         "status":1,
     *         "remark":"描述值",
     *         "extends":"拓展字段"
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月23日
     */
    public function addPropertyValue(array $valueData): bool
    {
        return EellyClient::request('goods/propertyValue', __FUNCTION__, true, $valueData);
    }

    /**
     * 新增商品属性值
     * 新增商品属性值
     *
     * @param array  $valueData            商品属性值数据
     * @param int    $valueData["keyId"]   商品属性名id
     * @param string $valueData["value"]   属性值
     * @param int    $valueData["sort"]    排序
     * @param int    $valueData["status"]  状态 0 无效 1 有效
     * @param string $valueData["remark"]  描述值
     * @param string $valueData["extends"] 拓展字段
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "valueData":{
     *         "keyId":1,
     *         "value":"属性值",
     *         "sort":1,
     *         "status":1,
     *         "remark":"描述值",
     *         "extends":"拓展字段"
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月23日
     */
    public function addPropertyValueAsync(array $valueData)
    {
        return EellyClient::request('goods/propertyValue', __FUNCTION__, false, $valueData);
    }

    /**
     * 修改商品属性值
     * 修改商品属性值
     *
     * @param array  $valueData            商品属性值数据
     * @param int    $valueData["valueId"] 商品属性值id
     * @param int    $valueData["keyId"]   商品属性名id
     * @param string $valueData["value"]   属性值
     * @param int    $valueData["sort"]    排序
     * @param int    $valueData["status"]  状态 0 无效  1 有效
     * @param string $valueData["remark"]  描述值
     * @param string $valueData["extends"] 拓展字段
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 修改结果
     * @requestExample({
     *     "valueData":{
     *         "valueId":1,
     *         "keyId":1,
     *         "value":"属性值",
     *         "sort":1,
     *         "status":1,
     *         "remark":"描述值",
     *         "extends":"拓展字段"
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月23日
     */
    public function updatePropertyValue(array $valueData): bool
    {
        return EellyClient::request('goods/propertyValue', __FUNCTION__, true, $valueData);
    }

    /**
     * 修改商品属性值
     * 修改商品属性值
     *
     * @param array  $valueData            商品属性值数据
     * @param int    $valueData["valueId"] 商品属性值id
     * @param int    $valueData["keyId"]   商品属性名id
     * @param string $valueData["value"]   属性值
     * @param int    $valueData["sort"]    排序
     * @param int    $valueData["status"]  状态 0 无效  1 有效
     * @param string $valueData["remark"]  描述值
     * @param string $valueData["extends"] 拓展字段
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 修改结果
     * @requestExample({
     *     "valueData":{
     *         "valueId":1,
     *         "keyId":1,
     *         "value":"属性值",
     *         "sort":1,
     *         "status":1,
     *         "remark":"描述值",
     *         "extends":"拓展字段"
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月23日
     */
    public function updatePropertyValueAsync(array $valueData)
    {
        return EellyClient::request('goods/propertyValue', __FUNCTION__, false, $valueData);
    }

    /**
     * 删除商品属性值
     * 删除商品属性值
     *
     * @param int $valueId 商品属性值id
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 删除结果
     * @requestExample({
     *     "valueId":1
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月23日
     */
    public function deletePropertyValue(int $valueId): bool
    {
        return EellyClient::request('goods/propertyValue', __FUNCTION__, true, $valueId);
    }

    /**
     * 删除商品属性值
     * 删除商品属性值
     *
     * @param int $valueId 商品属性值id
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 删除结果
     * @requestExample({
     *     "valueId":1
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月23日
     */
    public function deletePropertyValueAsync(int $valueId)
    {
        return EellyClient::request('goods/propertyValue', __FUNCTION__, false, $valueId);
    }

    /**
     * 获取商品属性值信息
     * 获取商品属性值信息.
     *
     * @param int $valueId 商品属性值id
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return array 商品属性值信息
     * @requestExample({
     *     "valueId":1
     * })
     * @returnExample({
     *     "valueId":1,
     *     "value":"属性值",
     *     "remark":"描述",
     *     "extends":"拓展字段"
     * })
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月23日
     */
    public function getPropertyValue(int $valueId): array
    {
        return EellyClient::request('goods/propertyValue', __FUNCTION__, true, $valueId);
    }

    /**
     * 获取商品属性值信息
     * 获取商品属性值信息.
     *
     * @param int $valueId 商品属性值id
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return array 商品属性值信息
     * @requestExample({
     *     "valueId":1
     * })
     * @returnExample({
     *     "valueId":1,
     *     "value":"属性值",
     *     "remark":"描述",
     *     "extends":"拓展字段"
     * })
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月23日
     */
    public function getPropertyValueAsync(int $valueId)
    {
        return EellyClient::request('goods/propertyValue', __FUNCTION__, false, $valueId);
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