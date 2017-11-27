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
use Eelly\SDK\Goods\Service\CategoryInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Category implements CategoryInterface
{
    /**
     * 新增商品分类
     * 新增商品分类.
     *
     * @param array  $categoryData                   商品分类数据
     * @param string $categoryData["name"]           商品分类名称
     * @param int    $categoryData["parentId"]       父分类id
     * @param int    $categoryData["showFlag"]       显示标志 1 全局显示控制 2 商品发布(可选分类) 4 首页 8 频道页 16 搜索页 32 平台头部
     * @param int    $categoryData["useFlag"]        功能标志 1 高亮显示 2 热门分类 4 新增分类 8 批量销售 16 规格报价 32 限制最低价 64 限制重量
     * @param int    $categoryData["minPrice"]       最低价格,单位为分
     * @param float  $categoryData["maxWeight"]      最大重量
     * @param int    $categoryData["status"]         分类状态 0 未启用 1 启用
     * @param int    $categoryData["sort"]           排序
     * @param string $categoryData["logo"]           分类图片路径
     * @param array  $categoryData["taobaoIds"]      淘宝分类数据
     * @param int    $categoryData["taobaoIds"]["0"] 淘宝分类id
     * @param int    $categoryData["taobaoIds"]["1"] 淘宝分类id
     * @param int    $categoryData["taobaoIds"]["2"] 淘宝分类id
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "categoryData":{
     *         "name":"分类名称",
     *         "parentId":0,
     *         "showFlag":1,
     *         "useFlag":2,
     *         "minPrice":100,
     *         "maxWeight":1.23,
     *         "status":1,
     *         "sort":2,
     *         "logo":"http://images.eelly.com/123.jpeg",
     *         "taobaoIds":[1,2,3]
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月22日
     */
    public function addCategory(array $categoryData): bool
    {
        return EellyClient::request('goods/category', __FUNCTION__, true, $categoryData);
    }

    /**
     * 新增商品分类
     * 新增商品分类.
     *
     * @param array  $categoryData                   商品分类数据
     * @param string $categoryData["name"]           商品分类名称
     * @param int    $categoryData["parentId"]       父分类id
     * @param int    $categoryData["showFlag"]       显示标志 1 全局显示控制 2 商品发布(可选分类) 4 首页 8 频道页 16 搜索页 32 平台头部
     * @param int    $categoryData["useFlag"]        功能标志 1 高亮显示 2 热门分类 4 新增分类 8 批量销售 16 规格报价 32 限制最低价 64 限制重量
     * @param int    $categoryData["minPrice"]       最低价格,单位为分
     * @param float  $categoryData["maxWeight"]      最大重量
     * @param int    $categoryData["status"]         分类状态 0 未启用 1 启用
     * @param int    $categoryData["sort"]           排序
     * @param string $categoryData["logo"]           分类图片路径
     * @param array  $categoryData["taobaoIds"]      淘宝分类数据
     * @param int    $categoryData["taobaoIds"]["0"] 淘宝分类id
     * @param int    $categoryData["taobaoIds"]["1"] 淘宝分类id
     * @param int    $categoryData["taobaoIds"]["2"] 淘宝分类id
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "categoryData":{
     *         "name":"分类名称",
     *         "parentId":0,
     *         "showFlag":1,
     *         "useFlag":2,
     *         "minPrice":100,
     *         "maxWeight":1.23,
     *         "status":1,
     *         "sort":2,
     *         "logo":"http://images.eelly.com/123.jpeg",
     *         "taobaoIds":[1,2,3]
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月22日
     */
    public function addCategoryAsync(array $categoryData)
    {
        return EellyClient::request('goods/category', __FUNCTION__, false, $categoryData);
    }

    /**
     * 修改商品分类
     * 修改商品分类.
     *
     * @param array  $categoryData                   商品分类数据
     * @param int    $categoryData["cateId"]         商品分类id
     * @param string $categoryData["name"]           商品分类名称
     * @param int    $categoryData["parentId"]       父分类id
     * @param int    $categoryData["showFlag"]       显示标志 1 全局显示控制 2 商品发布(可选分类) 4 首页 8 频道页 16 搜索页 32 平台头部
     * @param int    $categoryData["useFlag"]        功能标志 1 高亮显示 2 热门分类 4 新增分类 8 批量销售 16 规格报价 32 限制最低价 64 限制重量
     * @param int    $categoryData["minPrice"]       最低价格,单位为分
     * @param float  $categoryData["maxWeight"]      最大重量
     * @param int    $categoryData["status"]         分类状态 0 未启用 1 启用
     * @param int    $categoryData["sort"]           排序
     * @param string $categoryData["logo"]           分类图片路径
     * @param array  $categoryData["taobaoIds"]      淘宝分类数据
     * @param int    $categoryData["taobaoIds"]["0"] 淘宝分类id
     * @param int    $categoryData["taobaoIds"]["1"] 淘宝分类id
     * @param int    $categoryData["taobaoIds"]["2"] 淘宝分类id
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 修改结果
     * @requestExample({
     *     "categoryData":{
     *         "cateId":1,
     *         "name":"分类名称",
     *         "parentId":0,
     *         "showFlag":1,
     *         "useFlag":2,
     *         "minPrice":100,
     *         "maxWeight":1.23,
     *         "status":1,
     *         "sort":2,
     *         "logo":"http://images.eelly.com/123.jpeg",
     *         "taobaoIds":[1,2,3]
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月22日
     */
    public function updateCategory(array $categoryData): bool
    {
        return EellyClient::request('goods/category', __FUNCTION__, true, $categoryData);
    }

    /**
     * 修改商品分类
     * 修改商品分类.
     *
     * @param array  $categoryData                   商品分类数据
     * @param int    $categoryData["cateId"]         商品分类id
     * @param string $categoryData["name"]           商品分类名称
     * @param int    $categoryData["parentId"]       父分类id
     * @param int    $categoryData["showFlag"]       显示标志 1 全局显示控制 2 商品发布(可选分类) 4 首页 8 频道页 16 搜索页 32 平台头部
     * @param int    $categoryData["useFlag"]        功能标志 1 高亮显示 2 热门分类 4 新增分类 8 批量销售 16 规格报价 32 限制最低价 64 限制重量
     * @param int    $categoryData["minPrice"]       最低价格,单位为分
     * @param float  $categoryData["maxWeight"]      最大重量
     * @param int    $categoryData["status"]         分类状态 0 未启用 1 启用
     * @param int    $categoryData["sort"]           排序
     * @param string $categoryData["logo"]           分类图片路径
     * @param array  $categoryData["taobaoIds"]      淘宝分类数据
     * @param int    $categoryData["taobaoIds"]["0"] 淘宝分类id
     * @param int    $categoryData["taobaoIds"]["1"] 淘宝分类id
     * @param int    $categoryData["taobaoIds"]["2"] 淘宝分类id
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 修改结果
     * @requestExample({
     *     "categoryData":{
     *         "cateId":1,
     *         "name":"分类名称",
     *         "parentId":0,
     *         "showFlag":1,
     *         "useFlag":2,
     *         "minPrice":100,
     *         "maxWeight":1.23,
     *         "status":1,
     *         "sort":2,
     *         "logo":"http://images.eelly.com/123.jpeg",
     *         "taobaoIds":[1,2,3]
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月22日
     */
    public function updateCategoryAsync(array $categoryData)
    {
        return EellyClient::request('goods/category', __FUNCTION__, false, $categoryData);
    }

    /**
     * 删除商品分类
     * 删除商品分类.
     *
     * @param int $cateId 商品分类id
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 删除结果
     * @requestExample({
     *     "cateId":1
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月22日
     */
    public function deleteCategory(int $cateId): bool
    {
        return EellyClient::request('goods/category', __FUNCTION__, true, $cateId);
    }

    /**
     * 删除商品分类
     * 删除商品分类.
     *
     * @param int $cateId 商品分类id
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 删除结果
     * @requestExample({
     *     "cateId":1
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月22日
     */
    public function deleteCategoryAsync(int $cateId)
    {
        return EellyClient::request('goods/category', __FUNCTION__, false, $cateId);
    }

    /**
     * 获取商品分类信息
     * 获取商品分类信息.
     *
     * @param int $cateId 商品分类id
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return array 商品分类信息
     * @requestExample({
     *     "cateId":1
     * })
     * @returnExample({
     *     "cateId":1,
     *     "name":"分类名称",
     *     "parentId":0,
     *     "minPrice":100,
     *     "maxWeight":1.23,
     *     "sort":11,
     *     "logo":"http://images.eelly.com/123.jpeg",
     *     "taobaoIds":[1,2,3],
     *     "children":[
     *         {
     *             "cateId":1,
     *             "name":"分类名称",
     *             "parentId":0,
     *             "minPrice":100,
     *             "maxWeight":1.23,
     *             "sort":11,
     *             "logo":"http://images.eelly.com/123.jpeg",
     *             "taobaoIds":[1,2,3]
     *         }
     *     ]
     * })
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月22日
     */
    public function getCategory(int $cateId): array
    {
        return EellyClient::request('goods/category', __FUNCTION__, true, $cateId);
    }

    /**
     * 获取商品分类信息
     * 获取商品分类信息.
     *
     * @param int $cateId 商品分类id
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return array 商品分类信息
     * @requestExample({
     *     "cateId":1
     * })
     * @returnExample({
     *     "cateId":1,
     *     "name":"分类名称",
     *     "parentId":0,
     *     "minPrice":100,
     *     "maxWeight":1.23,
     *     "sort":11,
     *     "logo":"http://images.eelly.com/123.jpeg",
     *     "taobaoIds":[1,2,3],
     *     "children":[
     *         {
     *             "cateId":1,
     *             "name":"分类名称",
     *             "parentId":0,
     *             "minPrice":100,
     *             "maxWeight":1.23,
     *             "sort":11,
     *             "logo":"http://images.eelly.com/123.jpeg",
     *             "taobaoIds":[1,2,3]
     *         }
     *     ]
     * })
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月22日
     */
    public function getCategoryAsync(int $cateId)
    {
        return EellyClient::request('goods/category', __FUNCTION__, false, $cateId);
    }

    /**
     * 通过父id获取商品分类数据.
     *
     * @param int $parentId 父类分类ID
     *
     * @return array
     * @requestExample({"parentId":0})
     * @returnExample({"cateId": 348,"catName": "特色服装"})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年11月08日
     * @Validation(
     * @Digit(0,{message : "非法的商品分类id"})
     * )
     */
    public function getCateByParentId(int $parentId): array
    {
        return EellyClient::request('goods/category', __FUNCTION__, true, $parentId);
    }

    /**
     * 通过父id获取商品分类数据.
     *
     * @param int $parentId 父类分类ID
     *
     * @return array
     * @requestExample({"parentId":0})
     * @returnExample({"cateId": 348,"catName": "特色服装"})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年11月08日
     * @Validation(
     * @Digit(0,{message : "非法的商品分类id"})
     * )
     */
    public function getCateByParentIdAsync(int $parentId)
    {
        return EellyClient::request('goods/category', __FUNCTION__, false, $parentId);
    }

    /**
     * 根据分类id获取指定字段数据.
     *
     * @param array $cateIds  分类id数组
     * @param string $field   字段名
     *
     * @return array
     * @requestExample({"cateIds":[289,292],"filed":"dealIn"})
     * @returnExample([{"gc_id":"292","name":"男装"},{"gc_id":"289","name":"女装"}])
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月27日
     */
    public function getCateByIds(array $cateIds, string $field = 'base'): array
    {
        return EellyClient::request('goods/category', __FUNCTION__, true, $cateIds, $field);
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