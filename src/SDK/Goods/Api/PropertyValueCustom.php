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
use Eelly\SDK\Goods\Service\PropertyValueCustomInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class PropertyValueCustom implements PropertyValueCustomInterface
{

    /**
     * 新增商品自定义属性值
     * 新增商品自定义属性值
     *
     * @param array $valueData 自定义属性值数据
     * @param int $valueData["storeId"] 店铺id
     * @param int $valueData["type"] 属性类型 1 尺码 2 颜色
     * @param array $valueData["content"] 自定义属性内容
     * @param int $valueData["content"]["0"] 内容1
     * @param int $valueData["content"]["1"] 内容2
     * @param int $valueData["content"]["2"] 内容3
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 新增结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "valueData":{
     *         "storeId":1,
     *         "type":2,
     *         "content":[1,2,3]
     *     }
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月26日
     */
    public function addPropertyValue(array $valueData, UidDTO $user = null): bool
    {
        return EellyClient::request('goods/propertyvaluecustom', 'addPropertyValue', $valueData, $user);
    }

    /**
     * 修改商品自定义属性值
     * 修改商品自定义属性值
     *
     * @param array $valueData 自定义属性值数据
     * @param int $valueData["customValueId"] 自定义属性值id
     * @param int $valueData["storeId"] 店铺id
     * @param int $valueData["type"] 属性类型 1 尺码 2 颜色
     * @param array $valueData["content"] 自定义属性内容
     * @param int $valueData["content"]["0"] 内容1
     * @param int $valueData["content"]["1"] 内容2
     * @param int $valueData["content"]["2"] 内容3
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 修改结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "valueData":{
     *         "customValueId":1,
     *         "storeId":1,
     *         "type":2,
     *         "content":[1,2,3]
     *     }
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月26日
     */
    public function updatePropertyValue(array $valueData, UidDTO $user = null): bool
    {
        return EellyClient::request('goods/propertyvaluecustom', 'updatePropertyValue', $valueData, $user);
    }

    /**
     * 删除商品自定义属性值
     * 删除商品自定义属性值
     *
     * @param int $storeId 店铺id
     * @param int $customValueId 自定义属性值id
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 删除结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "storeId":1,
     *     "customValueId":1
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月26日
     */
    public function deletePropertyValue(int $storeId, int $customValueId, UidDTO $user = null): bool
    {
        return EellyClient::request('goods/propertyvaluecustom', 'deletePropertyValue', $storeId, $customValueId, $user);
    }

    /**
     * 获取商品自定义属性值
     * 获取商品自定义属性值
     *
     * @param int $storeId 店铺id
     * @param int $type 属性类型 -1 全部 1 尺码 2 颜色
     * @return array 商品自定义属性值信息
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "storeId":1,
     *     "type":-1
     * })
     * @returnExample([
     *     {
     *         "type":1,
     *         "content":[1,2,3]
     *     }
     * ])
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月26日
     */
    public function getPropertyValue(int $storeId, int $type = -1): array
    {
        return EellyClient::request('goods/propertyvaluecustom', 'getPropertyValue', $storeId, $type);
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