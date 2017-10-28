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
use Eelly\SDK\Goods\Service\PropertyKeyInterface;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class PropertyKey implements PropertyKeyInterface
{

    /**
     * 新增商品属性名
     * 新增商品属性名
     *
     * @param array $keyData 商品属性名数据
     * @param string $keyData["name"] 属性名
     * @param int $keyData["sort"] 排序
     * @param int $keyData["status"] 状态 0 无效 1 有效
     * @return bool 新增结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "keyData":{
     *         "name":"属性名",
     *         "sort":1,
     *         "status":1
     *     }
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月23日
     */
    public function addPropertyKey(array $keyData): bool
    {
        return EellyClient::request('goods/propertykey', 'addPropertyKey', $keyData);
    }

    /**
     * 修改商品属性名
     * 修改商品属性名
     *
     * @param array $keyData 商品属性名数据
     * @param int $keyData["keyId"] 商品属性名id
     * @param string $keyData["name"] 属性名
     * @param int $keyData["sort"] 排序
     * @param int $keyData["status"] 状态 0 无效 1 有效
     * @return bool 修改结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "keyData":{
     *         "keyId":1,
     *         "name":"属性名",
     *         "sort":1,
     *         "status":1
     *     }
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月23日
     */
    public function updatePropertyKey(array $keyData): bool
    {
        return EellyClient::request('goods/propertykey', 'updatePropertyKey', $keyData);
    }

    /**
     * 删除商品属性名
     * 删除商品属性名
     *
     * @param int $keyId 商品属性名id
     * @return bool 删除结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "keyId":1
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月23日
     */
    public function deletePropertyKey(int $keyId): bool
    {
        return EellyClient::request('goods/propertykey', 'deletePropertyKey', $keyId);
    }

    /**
     * 获取商品属性名信息
     * 获取商品属性名信息
     *
     * @param int $keyId 商品属性名id
     * @return array 商品属性名信息
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "keyId":1
     * })
     * @returnExample({
     *     "keyId":1,
     *     "name":"属性名",
     *     "values":[
     *         {
     *             "valueId":1,
     *             "value":"属性值",
     *             "remark":"描述",
     *             "extends":"拓展字段"
     *         }
     *     ]
     * })
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月23日
     */
    public function getPropertyKey(int $keyId): array
    {
        return EellyClient::request('goods/propertykey', 'getPropertyKey', $keyId);
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