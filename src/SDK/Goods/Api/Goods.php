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
use Eelly\SDK\Goods\Service\GoodsInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Goods implements GoodsInterface
{

    /**
     * 新增店铺商品
     * 新增店铺商品
     *
     * @param int $storeId 店铺id
     * @param array $goodsData 商品数据
     * @param array $goodsData["base"] 商品基础数据
     * @param string $goodsData["base"]["goodsName"] 商品名称
     * @param string $goodsData["base"]["goodsNumber"] 商品货号
     * @param int $goodsData["base"]["cateId"] 分类id
     * @param int $goodsData["base"]["discount"] 商品折扣
     * @param string $goodsData["base"]["description"] 商品描述
     * @param int $goodsData["base"]["goodsWeight"] 商品重量
     * @param int $goodsData["base"]["sort"] 商品排序
     * @param int $goodsData["base"]["isRecommend"] 是否推荐 0 否 1 是
     * @param int $goodsData["base"]["status"] 上架状态 0 待上架 1 上架 2 下架 3 禁售 4 删除
     * @param array $goodsData["customCate"] 商品自定义分类属性
     * @param int $goodsData["customCate"]["0"] 商品自定义分类id
     * @param int $goodsData["customCate"]["1"] 商品自定义分类id
     * @param int $goodsData["customCate"]["2"] 商品自定义分类id
     * @param array $goodsData["images"] 商品图片数据
     * @param string $goodsData["images"]["imageUrl"] 图片地址
     * @param int $goodsData["images"]["sort"] 排序
     * @param array $goodsData["videos"] 商品视频数据
     * @param string $goodsData["videos"]["videoUrl"] 视频url
     * @param int $goodsData["videos"]["videoTime"] 视频时长
     * @param string $goodsData["videos"]["imageUrl"] 视频封面图片地址
     * @param int $goodsData["videos"]["sort"] 排序
     * @param array $goodsData["price"] 商品价格数据
     * @param array $goodsData["price"]["numberPrice"] 数量报价数据
     * @param int $goodsData["price"]["numberPrice"]["type"] 价格类型 1 散批 2 拿货 3 打包
     * @param int $goodsData["price"]["numberPrice"]["quantity"] 起批数量
     * @param int $goodsData["price"]["numberPrice"]["price"] 价格
     * @param array $goodsData["spec"] 商品规格数据
     * @param string $goodsData["spec"]["color"] 颜色名称
     * @param string $goodsData["spec"]["colorRgb"] 颜色RGB值
     * @param string $goodsData["spec"]["size"] 尺码名称
     * @param int $goodsData["spec"]["stock"] 库存数量
     * @param int $goodsData["spec"]["price"] 价格
     * @param string $goodsData["spec"]["sku"] 库存号
     * @param array $goodsData["property"] 商品属性数据
     * @param int $goodsData["property"]["type"] 属性类型 1 颜色 2 尺码
     * @param string $goodsData["property"]["value"] 属性值
     * @param array $goodsData["setting"] 商品设置数据
     * @param int $goodsData["setting"]["startQuantity"] 起批量
     * @param int $goodsData["setting"]["saleType"] 销售方式 0 普通售卖 1 批量售卖
     * @param int $goodsData["setting"]["quoteType"] 报价方式 0 数量报价 1 规格报价
     * @param int $goodsData["setting"]["saleId"] 销售单位id
     * @param int $goodsData["setting"]["singleId"] 基础单位id
     * @param int $goodsData["setting"]["unitConver"] 单位换算
     * @param int $goodsData["setting"]["retailPrice"] 建议零售价
     * @param string $goodsData["setting"]["material"] 材质
     * @param array $goodsData["setting"]["permission"] 防抄版验证数据
     * @param int $goodsData["setting"]["permission"]["allCustomer"] 是否所有客户可见 0 否 1 是
     * @param array $goodsData["setting"]["permission"]["level"] 客户等级数据
     * @param int $goodsData["setting"]["permission"]["level"]["0"] 客户等级
     * @param int $goodsData["setting"]["permission"]["level"]["1"] 客户等级
     * @param int $goodsData["setting"]["permission"]["level"]["2"] 客户等级
     * @param array $goodsData["setting"]["permission"]["tag"] 客户标签数据
     * @param int $goodsData["setting"]["permission"]["tag"]["0"] 客户标签数据
     * @param int $goodsData["setting"]["permission"]["tag"]["1"] 客户标签
     * @param int $goodsData["setting"]["permission"]["tag"]["2"] 客户标签
     * @param int $goodsData["setting"]["isTag"] 是否有吊牌 0 否 1 是
     * @param string $goodsData["setting"]["mark"] 唛头标志
     * @param int $goodsData["setting"]["waitShelfTime"] 待上架时间
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 新增结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "storeId":1,
     *     "goodsData":{
     *         "base":{
     *             "goodsName":"商品名称",
     *             "goodsNumber":"商品货号",
     *             "cateId":1,
     *             "discount":1,
     *             "description":"商品描述",
     *             "goodsWeight":123,
     *             "sort":10,
     *             "isRecommend":1,
     *             "status":1
     *         },
     *         "customCate":[1,2,3],
     *         "images":[
     *             {
     *                 "imageUrl":"https://img.eelly.test/abc.jpg",
     *                 "sort":2
     *             }
     *         ],
     *         "videos":[
     *             {
     *                 "videoUrl":"https://img.eelly.test/abc.mp4",
     *                 "videoTime":1,
     *                 "imageUrl":"https://img.eelly.test/abc.jpg",
     *                 "sort":2
     *             }
     *         ],
     *         "price":{
     *             "numberPrice":[
     *                 {
     *                     "type":1,
     *                     "quantity":5,
     *                     "price":100
     *                 }
     *             ]
     *         },
     *         "spec":[
     *             {
     *                 "color":"颜色",
     *                 "colorRgb":"颜色RGB值",
     *                 "size":"尺码名称",
     *                 "stock":1,
     *                 "price":100,
     *                 "sku":"库存号"
     *             }
     *         ],
     *         "property":[
     *             {
     *                 "type":1,
     *                 "value":"深蓝色"
     *             }
     *         ],
     *         "setting":{
     *             "startQuantity":1,
     *             "saleType":1,
     *             "quoteType":1,
     *             "saleId":2,
     *             "singleId":3,
     *             "unitConver":3,
     *             "retailPrice":123,
     *             "material":"材质",
     *             "permission":{
     *                 "allCustomer":1,
     *                 "level":[1,2,3],
     *                 "tag":[1,2,3]
     *             },
     *             "isTag":1,
     *             "mark":"商标唛头",
     *             "waitShelfTime":1234567
     *         }
     *     }
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月29日
     */
    public function addGoods(int $storeId, array $goodsData, UidDTO $user = null): bool
    {
        return EellyClient::request('goods/goods', 'addGoods', $storeId, $goodsData, $user);
    }

    /**
     * 修改店铺商品
     * 修改店铺商品
     *
     * @param int $storeId 店铺id
     * @param array $goodsData 商品数据
     * @param array $goodsData["base"] 商品基础数据
     * @param string $goodsData["base"]["goodsId"] 商品id
     * @param string $goodsData["base"]["goodsName"] 商品名称
     * @param string $goodsData["base"]["goodsNumber"] 商品货号
     * @param int $goodsData["base"]["cateId"] 分类id
     * @param int $goodsData["base"]["discount"] 商品折扣
     * @param string $goodsData["base"]["description"] 商品描述
     * @param int $goodsData["base"]["goodsWeight"] 商品重量
     * @param int $goodsData["base"]["sort"] 商品排序
     * @param int $goodsData["base"]["isRecommend"] 是否推荐 0 否 1 是
     * @param int $goodsData["base"]["status"] 上架状态 0 待上架 1 上架 2 下架 3 禁售 4 删除
     * @param array $goodsData["customCate"] 商品自定义分类属性
     * @param int $goodsData["customCate"]["0"] 商品自定义分类id
     * @param int $goodsData["customCate"]["1"] 商品自定义分类id
     * @param int $goodsData["customCate"]["2"] 商品自定义分类id
     * @param array $goodsData["images"] 商品图片数据
     * @param string $goodsData["images"]["imageUrl"] 图片地址
     * @param int $goodsData["images"]["sort"] 排序
     * @param array $goodsData["videos"] 商品视频数据
     * @param string $goodsData["videos"]["videoUrl"] 视频url
     * @param int $goodsData["videos"]["videoTime"] 视频时长
     * @param string $goodsData["videos"]["imageUrl"] 视频封面图片地址
     * @param int $goodsData["videos"]["sort"] 排序
     * @param array $goodsData["price"] 商品价格数据
     * @param array $goodsData["price"]["numberPrice"] 数量报价数据
     * @param int $goodsData["price"]["numberPrice"]["type"] 价格类型 1 散批 2 拿货 3 打包
     * @param int $goodsData["price"]["numberPrice"]["quantity"] 起批数量
     * @param int $goodsData["price"]["numberPrice"]["price"] 价格
     * @param array $goodsData["spec"] 商品规格数据
     * @param string $goodsData["spec"]["color"] 颜色名称
     * @param string $goodsData["spec"]["colorRgb"] 颜色RGB值
     * @param string $goodsData["spec"]["size"] 尺码名称
     * @param int $goodsData["spec"]["stock"] 库存数量
     * @param int $goodsData["spec"]["price"] 价格
     * @param string $goodsData["spec"]["sku"] 库存号
     * @param array $goodsData["property"] 商品属性数据
     * @param int $goodsData["property"]["type"] 属性类型 1 颜色 2 尺码
     * @param string $goodsData["property"]["value"] 属性值
     * @param array $goodsData["setting"] 商品设置数据
     * @param int $goodsData["setting"]["startQuantity"] 起批量
     * @param int $goodsData["setting"]["saleType"] 销售方式 0 普通售卖 1 批量售卖
     * @param int $goodsData["setting"]["quoteType"] 报价方式 0 数量报价 1 规格报价
     * @param int $goodsData["setting"]["saleId"] 销售单位id
     * @param int $goodsData["setting"]["singleId"] 基础单位id
     * @param int $goodsData["setting"]["unitConver"] 单位换算
     * @param int $goodsData["setting"]["retailPrice"] 建议零售价
     * @param string $goodsData["setting"]["material"] 材质
     * @param array $goodsData["setting"]["permission"] 防抄版验证数据
     * @param int $goodsData["setting"]["permission"]["allCustomer"] 是否所有客户可见 0 否 1 是
     * @param array $goodsData["setting"]["permission"]["level"] 客户等级数据
     * @param int $goodsData["setting"]["permission"]["level"]["0"] 客户等级
     * @param int $goodsData["setting"]["permission"]["level"]["1"] 客户等级
     * @param int $goodsData["setting"]["permission"]["level"]["2"] 客户等级
     * @param array $goodsData["setting"]["permission"]["tag"] 客户标签数据
     * @param int $goodsData["setting"]["permission"]["tag"]["0"] 客户标签数据
     * @param int $goodsData["setting"]["permission"]["tag"]["1"] 客户标签
     * @param int $goodsData["setting"]["permission"]["tag"]["2"] 客户标签
     * @param int $goodsData["setting"]["isTag"] 是否有吊牌 0 否 1 是
     * @param string $goodsData["setting"]["mark"] 唛头标志
     * @param int $goodsData["setting"]["waitShelfTime"] 待上架时间
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 修改结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "storeId":1,
     *     "goodsData":{
     *         "base":{
     *             "goodsId":1,
     *             "goodsName":"商品名称",
     *             "goodsNumber":"商品货号",
     *             "cateId":1,
     *             "discount":1,
     *             "description":"商品描述",
     *             "goodsWeight":123,
     *             "sort":10,
     *             "isRecommend":1,
     *             "status":1
     *         },
     *         "customCate":[1,2,3],
     *         "images":[
     *             {
     *                 "imageUrl":"https://img.eelly.test/abc.jpg",
     *                 "sort":2
     *             }
     *         ],
     *         "videos":[
     *             {
     *                 "videoUrl":"https://img.eelly.test/abc.mp4",
     *                 "videoTime":1,
     *                 "imageUrl":"https://img.eelly.test/abc.jpg",
     *                 "sort":2
     *             }
     *         ],
     *         "price":{
     *             "numberPrice":[
     *                 {
     *                     "type":1,
     *                     "quantity":5,
     *                     "price":100
     *                 }
     *             ]
     *         },
     *         "spec":[
     *             {
     *                 "color":"颜色",
     *                 "colorRgb":"颜色RGB值",
     *                 "size":"尺码名称",
     *                 "stock":1,
     *                 "price":100,
     *                 "sku":"库存号"
     *             }
     *         ],
     *         "property":[
     *             {
     *                 "type":1,
     *                 "value":"深蓝色"
     *             }
     *         ],
     *         "setting":{
     *             "startQuantity":1,
     *             "saleType":1,
     *             "quoteType":1,
     *             "saleId":2,
     *             "singleId":3,
     *             "unitConver":3,
     *             "retailPrice":123,
     *             "material":"材质",
     *             "permission":{
     *                 "allCustomer":1,
     *                 "level":[1,2,3],
     *                 "tag":[1,2,3]
     *             },
     *             "isTag":1,
     *             "mark":"商标唛头",
     *             "waitShelfTime":1234567
     *         }
     *     }
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月29日
     */
    public function updateGoods(int $storeId, array $goodsData, UidDTO $user = null): bool
    {
        return EellyClient::request('goods/goods', 'updateGoods', $storeId, $goodsData, $user);
    }

    /**
     * 删除店铺商品
     * 删除店铺商品
     *
     * @param int $storeId 店铺id
     * @param int $goodsId 商品id
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 删除结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "storeId":1,
     *     "goodsId":2
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月29日
     */
    public function deleteGoods(int $storeId, int $goodsId, UidDTO $user = null): bool
    {
        return EellyClient::request('goods/goods', 'deleteGoods', $storeId, $goodsId, $user);
    }

    /**
     * 获取店铺商品基础信息
     * 获取店铺商品基础信息
     *
     * @param int $goodsId 商品id
     * @return array 商品基础信息
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "goodsId":1
     * })
     * @returnExample({
     *     "goodsId":1,
     *     "goodsName":"商品名称",
     *     "goodsNumber":"商品货号",
     *     "coverImage":"封面图",
     *     "discount":123,
     *     "goodsWeight":123,
     *     "sort":123,
     *     "status":1
     * })
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月29日
     */
    public function getGoodsBaseInfo(int $goodsId): array
    {
        return EellyClient::request('goods/goods', 'getGoodsBaseInfo', $goodsId);
    }

    /**
     * 获取商品搜索引擎所需数据
     *
     * @param int $currentPage 当前页
     * @param int $limit       每页页数
     *
     * @return array 商品信息
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({"currentPage":1,"limit":100})
     * @returnExample()
     * @author wujunhua<wujunhua@eelly.net>
     * @since 2017年10月26日
     */
    public function listGoodsElasticData(int $currentPage = 1, int $limit = 100): array
    {
        return EellyClient::request('goods/goods', 'listGoodsElasticData', $currentPage, $limit);
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