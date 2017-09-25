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

/**
 * 属性名分类关系.
 *
 * @author wangjiang<wangjiang@eelly.net>
 */
interface PropertyCategoryKeyInterface
{
    /**
     * 新增分类属性名关系
     * 新增商品分类的属性名关系
     *
     * @param array $categoryKeyDaya 商品分类属性名数据
     * @param int $categoryKeyDaya["cateId"] 分类id
     * @param int $categoryKeyDaya["keyId"] 属性名id
     * @param int $categoryKeyDaya["sort"] 排序
     * @param int $categoryKeyDaya["status"] 状态 0 未启用 1 启用
     * @param int $categoryKeyDaya["style"] 风格 0 单选 1 多选
     * @param int $categoryKeyDaya["isRequired"] 是否必选 0 否 1 是
     * @param int $categoryKeyDaya["isHidden"] 是否隐藏属性 0 否 1 是
     * @param int $categoryKeyDaya["showFlag"] 显示标志 1 全局显示控制 2 商品发布(可选属性) 4 搜索页
     * @param array $categoryKeyDaya["taobaoIds"] 淘宝属性数据
     * @param int $categoryKeyDaya["taobaoIds"]["0"] 淘宝属性id
     * @param int $categoryKeyDaya["taobaoIds"]["1"] 淘宝属性id
     * @param int $categoryKeyDaya["taobaoIds"]["2"] 淘宝属性id
     * @return bool 新增结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "categoryKeyDaya":{
     *         "cateId":1,
     *         "keyId":2,
     *         "sort":1,
     *         "status":1,
     *         "style":0,
     *         "isRequired":1,
     *         "isHidden":0,
     *         "showFlag":2,
     *         "taobaoIds":[1,2,3]
     *     }
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月25日
     */
    public function addCategoryKey(array $categoryKeyData): bool;

    /**
     * 修改分类属性名关系
     * 修改商品分类的属性名关系
     *
     * @param array $categoryKeyDaya 商品分类属性名数据
     * @param int $categoryKeyDaya["categoryKeyId"] 分类属性名id
     * @param int $categoryKeyDaya["cateId"] 分类id
     * @param int $categoryKeyDaya["keyId"] 属性名id
     * @param int $categoryKeyDaya["sort"] 排序
     * @param int $categoryKeyDaya["status"] 状态 0 未启用 1 启用
     * @param int $categoryKeyDaya["style"] 风格 0 单选 1 多选
     * @param int $categoryKeyDaya["isRequired"] 是否必选 0 否 1 是
     * @param int $categoryKeyDaya["isHidden"] 是否隐藏属性 0 否 1 是
     * @param int $categoryKeyDaya["showFlag"] 显示标志 1 全局显示控制 2 商品发布(可选属性) 4 搜索页
     * @param array $categoryKeyDaya["taobaoIds"] 淘宝属性数据
     * @param int $categoryKeyDaya["taobaoIds"]["0"] 淘宝属性id
     * @param int $categoryKeyDaya["taobaoIds"]["1"] 淘宝属性id
     * @param int $categoryKeyDaya["taobaoIds"]["2"] 淘宝属性id
     * @return bool 修改结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "categoryKeyDaya":{
     *         "categoryKeyId":3,
     *         "cateId":1,
     *         "keyId":2,
     *         "sort":1,
     *         "status":1,
     *         "style":0,
     *         "isRequired":1,
     *         "isHidden":0,
     *         "showFlag":2,
     *         "taobaoIds":[1,2,3]
     *     }
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月25日
     */
    public function updateCategoryKey(array $categoryKeyData): bool;

    /**
     * 删除分类属性名关系
     * 删除商品分类的属性名关系
     *
     * @param int $categoryKeyId
     * @return bool 删除结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "categoryKeyId":1
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月25日
     */
    public function deleteCategoryKey(int $categoryKeyId): bool;

    /**
     * 获取分类属性名关系信息
     * 获取商品分类的属性名关系信息
     *
     * @param int $categoryId 商品分类id
     * @return array 分类属性名关系信息
     * @requestExample({
     *     "categoryId":1
     * })
     * @returnExample([
     *     {
     *         "name":"属性名",
     *         "keyId":1,
     *         "sort":1,
     *         "status":0,
     *         "style":1,
     *         "isrequired":1,
     *         "showFlag":2,
     *         "taobaoIds":[1,2,3]
     *     }
     * ])
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月25日
     */
    public function getCategoryKey(int $categoryId): array;
}
