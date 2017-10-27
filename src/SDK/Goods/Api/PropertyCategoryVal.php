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
use Eelly\SDK\Goods\Service\PropertyCategoryValInterface;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class PropertyCategoryVal implements PropertyCategoryValInterface
{

    /**
     * 新增分类属性值关系
     * 新增商品分类的属性值关系
     *
     * @param array $categoryValData 商品分类属性值数据
     * @param int $categoryValData["categoryKeyId"] 分类属性名id
     * @param int $categoryValData["keyId"] 商品属性名id
     * @param int $categoryValData["valueId"] 商品属性值id
     * @param int $categoryValData["sort"] 排序
     * @param int $categoryValData["status"] 状态 0 未启用 1 启用
     * @param int $categoryValData["isLight"] 是否高亮显示 0 否 1 是
     * @param int $categoryValData["isTag"] 是否Tag 0 否 1 是
     * @param int $categoryValData["isHidden"] 是否隐藏 0 否 1 是
     * @param int $categoryValData["showFlag"] 显示标志 1 全局显示控制 2 商品发布(可选属性) 4 搜索页
     * @param array $categoryValData["taobaoIds"] 淘宝属性数据
     * @param int $categoryValData["taobaoIds"]["0"] 淘宝属性id
     * @param int $categoryValData["taobaoIds"]["1"] 淘宝属性id
     * @param int $categoryValData["taobaoIds"]["2"] 淘宝属性id
     * @return bool 新增结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "categoryValData":{
     *         "categoryKeyId":1,
     *         "keyId":2,
     *         "valueId":3,
     *         "sort":1,
     *         "status":1,
     *         "isLight":1,
     *         "isTag":1,
     *         "isHidden":0,
     *         "showFlag":2,
     *         "taobaoIds":[1,2,3]
     *     }
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月26日
     */
    public function addCategoryVal(array $categoryValData): bool
    {
        return EellyClient::request('goods/propertycategoryval', 'addCategoryVal', $categoryValData);
    }

    /**
     * 修改分类属性值关系
     * 修改商品分类的属性值关系
     *
     * @param array $categoryValData 商品分类属性值数据
     * @param int $categoryValData["categoryValId"] 分类属性值id
     * @param int $categoryValData["categoryKeyId"] 分类属性名id
     * @param int $categoryValData["keyId"] 商品属性名id
     * @param int $categoryValData["valueId"] 商品属性值id
     * @param int $categoryValData["sort"] 排序
     * @param int $categoryValData["status"] 状态 0 未启用 1 启用
     * @param int $categoryValData["isLight"] 是否高亮显示 0 否 1 是
     * @param int $categoryValData["isTag"] 是否Tag 0 否 1 是
     * @param int $categoryValData["isHidden"] 是否隐藏 0 否 1 是
     * @param int $categoryValData["showFlag"] 显示标志 1 全局显示控制 2 商品发布(可选属性) 4 搜索页
     * @param array $categoryValData["taobaoIds"] 淘宝属性数据
     * @param int $categoryValData["taobaoIds"]["0"] 淘宝属性id
     * @param int $categoryValData["taobaoIds"]["1"] 淘宝属性id
     * @param int $categoryValData["taobaoIds"]["2"] 淘宝属性id
     * @return bool 修改结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "categoryValData":{
     *         "categoryValId":1,
     *         "categoryKeyId":1,
     *         "keyId":2,
     *         "valueId":3,
     *         "sort":1,
     *         "status":1,
     *         "isLight":1,
     *         "isTag":1,
     *         "isHidden":0,
     *         "showFlag":2,
     *         "taobaoIds":[1,2,3]
     *     }
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月26日
     */
    public function updateCategoryVal(array $categoryValData): bool
    {
        return EellyClient::request('goods/propertycategoryval', 'updateCategoryVal', $categoryValData);
    }

    /**
     * 删除分类属性值关系
     * 删除商品分类的属性值关系
     *
     * @param int $categoryValId 分类属性值id
     * @return bool 删除结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "categoryValId":1
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月26日
     */
    public function deleteCategoryVal(int $categoryValId): bool
    {
        return EellyClient::request('goods/propertycategoryval', 'deleteCategoryVal', $categoryValId);
    }

    /**
     * 获取分类属性值关系信息
     * 获取商品分类的属性值关系信息
     *
     * @param int $cateId 商品分类id
     * @param int $isHidden 是否隐藏属性 0 否 1 是
     * @return array 分类属性值关系信息
     * @requestExample({
     *     "cateId":1,
     *     "isHidden":0
     * })
     * @returnExample([
     *     {
     *         "categoryKeyId":1,
     *         "name":"属性名",
     *         "sort":1,
     *         "status":0,
     *         "style":1,
     *         "isrequired":1,
     *         "showFlag":2,
     *         "taobaoIds":[1,2,3],
     *         "values":[
     *             {
     *                 "categoryValId":1,
     *                 "value":"属性值",
     *                 "sort":1,
     *                 "status":0,
     *                 "isLight":1,
     *                 "isTag":1,
     *                 "showFlag":2,
     *                 "taobaoIds":[1,2,3]
     *             }
     *         ]
     *     }
     * ])
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月26日
     */
    public function getCategoryVal(int $cateId, int $isHidden = 0): array
    {
        return EellyClient::request('goods/propertycategoryval', 'getCategoryVal', $cateId, $isHidden);
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