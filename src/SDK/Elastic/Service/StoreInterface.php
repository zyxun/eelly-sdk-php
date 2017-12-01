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

namespace Eelly\SDK\Elastic\Service;

/**
 * Elastic查询店铺接口.
 *
 * @author liangxinyi<liangxinyi@eelly.net>
 */
interface StoreInterface
{
    /**
     * 添加店铺索引文档信息
     * 添加店铺索引文档信息
     *
     * @param array $documents 文档数据
     * @param int $documents["0"]["storeId"] 店铺id
     * @param string $documents["0"]["storeName"] 店铺名称
     * @param string $documents["0"]["domain"] 店铺二级域名
     * @param string $documents["0"]["storeStatus"] 店铺状态
     * @param string $documents["0"]["storeLogo"] 店铺logo
     * @param string $documents["0"]["storeWeight"] 店铺权重分
     * @param string $documents["0"]["createdTime"] 店铺创建时间
     * @param array $documents["0"]["gbCodes"] 店铺地区编码数据
     * @param int $documents["0"]["gbCodes"]["0"] 地区编码
     * @param int $documents["0"]["gbCodes"]["1"] 地区编码
     * @param int $documents["0"]["gbCodes"]["2"] 地区编码
     * @param int $documents["0"]["creditValue"] 信誉分
     * @param int $documents["0"]["minQuantity"] 起批量
     * @param int $documents["0"]["minPrice"] 起批价格
     * @param string $documents["0"]["storeIntro"] 店铺简介
     * @param array $documents["0"]["cateId"] 店铺主营类目数据
     * @param int $documents["0"]["cateId"]["0"] 主营类目id
     * @param int $documents["0"]["cateId"]["1"] 主营类目id
     * @param int $documents["0"]["cateId"]["2"] 主营类目id
     * @param array $documents["0"]["priceLevel"] 店铺价格档次数据
     * @param int $documents["0"]["priceLevel"]["0"] 价格档次id
     * @param int $documents["0"]["priceLevel"]["1"] 价格档次id
     * @param int $documents["0"]["priceLevel"]["2"] 价格档次id
     * @param array $documents["0"]["businessDistrictId"] 店铺商圈数据
     * @param int $documents["0"]["businessDistrictId"]["0"] 商圈id
     * @param int $documents["0"]["businessDistrictId"]["1"] 商圈id
     * @param int $documents["0"]["businessDistrictId"]["2"] 商圈id
     * @param int $documents["0"]["storeYear"] 是否店铺店龄
     * @param int $documents["0"]["isEnterprise"] 是否企业认证
     * @param int $documents["0"]["isEntity"] 是否实体认证
     * @param int $documents["0"]["isBrand"] 是否品牌认证
     * @param int $documents["0"]["isSeller"] 是否卖家认证
     * @param int $documents["0"]["isHot"] 是否热销旺铺
     * @param int $documents["0"]["isTimeShipping"] 是否准时发货
     * @param int $documents["0"]["isIntegrity"] 是否诚信保障
     * @param int $documents["0"]["isRealShot"] 是否商品实拍
     * @param int $documents["0"]["onlineStatus"] 店主在线状态
     * @param int $documents["0"]["isBehalfof"] 是否一件代发
     * @param int $documents["0"]["floorId"] 楼层id
     * @param int $documents["0"]["marketId"] 市场id
     * @param int $documents["0"]["goodsNewTime"] 商品上新时间
     * @param array $documents["0"]["recommendGoods"] 店铺推荐商品数据
     * @param int $documents["0"]["recommendGoods"]["newNumber"] 新款数量
     * @param array $documents["0"]["recommendGoods"]["goodsInfo"] 推荐商品信息
     * @param int $documents["0"]["recommendGoods"]["goodsInfo"]["0"]["goodsId"] 商品id
     * @param string $documents["0"]["recommendGoods"]["goodsInfo"]["0"]["goodsPic"] 商品封面图片地址
     *
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     * @return bool 添加结果
     * @requestExample({
     * "documents":[
     *     {
     *        "storeId":3,
     *        "storeName":"LiWeiQuan123456",
     *        "domain":"domain-3",
     *        "storeStatus":"1",
     *        "storeLogo":"",
     *        "storeWeight":"0",
     *        "createdTime":"1503482847",
     *        "gbCodes":[1,2,3],
     *        "creditValue":1,
     *        "minQuantity":1,
     *        "minPrice":2,
     *        "storeIntro":"简介",
     *        "cateId":[1,2,3],
     *        "priceLevel":[1,2,3],
     *        "businessDistrictId":[1,2,3],
     *        "storeYear":1,
     *        "isEnterprise":1,
     *        "isEntity":0,
     *        "isBrand":0,
     *        "isSeller":0,
     *        "isHot":0,
     *        "isTimeShipping":0,
     *        "isIntegrity":0,
     *        "isRealShot":0,
     *        "onlineStatus":1,
     *        "isBehalfof":1,
     *        "floorId":0,
     *        "marketId":0,
     *        "goodsNewTime":0,
     *        "recommendGoods":{
     *            "newNumber":1,
     *            "goodsInfo":[
     *                {
     *                    "goodsId":1,
     *                    "goodsPic":"pic"
     *                }
     *            ]
     *        }
     *     }
     * ]
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年12月1日
     */
    public function createDocument(array $documents): bool;

    /**
     * 修改店铺索引文档信息(可部分字段修改)
     * 修改店铺索引文档信息
     *
     * @param array $documents 文档数据
     * @param int $documents["0"]["storeId"] 店铺id
     * @param string $documents["0"]["storeName"] 店铺名称
     * @param string $documents["0"]["domain"] 店铺二级域名
     * @param string $documents["0"]["storeStatus"] 店铺状态
     * @param string $documents["0"]["storeLogo"] 店铺logo
     * @param string $documents["0"]["storeWeight"] 店铺权重分
     * @param string $documents["0"]["createdTime"] 店铺创建时间
     * @param array $documents["0"]["gbCodes"] 店铺地区编码数据
     * @param int $documents["0"]["gbCodes"]["0"] 地区编码
     * @param int $documents["0"]["gbCodes"]["1"] 地区编码
     * @param int $documents["0"]["gbCodes"]["2"] 地区编码
     * @param int $documents["0"]["creditValue"] 信誉分
     * @param int $documents["0"]["minQuantity"] 起批量
     * @param int $documents["0"]["minPrice"] 起批价格
     * @param string $documents["0"]["storeIntro"] 店铺简介
     * @param array $documents["0"]["cateId"] 店铺主营类目数据
     * @param int $documents["0"]["cateId"]["0"] 主营类目id
     * @param int $documents["0"]["cateId"]["1"] 主营类目id
     * @param int $documents["0"]["cateId"]["2"] 主营类目id
     * @param array $documents["0"]["priceLevel"] 店铺价格档次数据
     * @param int $documents["0"]["priceLevel"]["0"] 价格档次id
     * @param int $documents["0"]["priceLevel"]["1"] 价格档次id
     * @param int $documents["0"]["priceLevel"]["2"] 价格档次id
     * @param array $documents["0"]["businessDistrictId"] 店铺商圈数据
     * @param int $documents["0"]["businessDistrictId"]["0"] 商圈id
     * @param int $documents["0"]["businessDistrictId"]["1"] 商圈id
     * @param int $documents["0"]["businessDistrictId"]["2"] 商圈id
     * @param int $documents["0"]["storeYear"] 是否店铺店龄
     * @param int $documents["0"]["isEnterprise"] 是否企业认证
     * @param int $documents["0"]["isEntity"] 是否实体认证
     * @param int $documents["0"]["isBrand"] 是否品牌认证
     * @param int $documents["0"]["isSeller"] 是否卖家认证
     * @param int $documents["0"]["isHot"] 是否热销旺铺
     * @param int $documents["0"]["isTimeShipping"] 是否准时发货
     * @param int $documents["0"]["isIntegrity"] 是否诚信保障
     * @param int $documents["0"]["isRealShot"] 是否商品实拍
     * @param int $documents["0"]["onlineStatus"] 店主在线状态
     * @param int $documents["0"]["isBehalfof"] 是否一件代发
     * @param int $documents["0"]["floorId"] 楼层id
     * @param int $documents["0"]["marketId"] 市场id
     * @param int $documents["0"]["goodsNewTime"] 商品上新时间
     * @param array $documents["0"]["recommendGoods"] 店铺推荐商品数据
     * @param int $documents["0"]["recommendGoods"]["newNumber"] 新款数量
     * @param array $documents["0"]["recommendGoods"]["goodsInfo"] 推荐商品信息
     * @param int $documents["0"]["recommendGoods"]["goodsInfo"]["0"]["goodsId"] 商品id
     * @param string $documents["0"]["recommendGoods"]["goodsInfo"]["0"]["goodsPic"] 商品封面图片地址
     *
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     * @return bool 修改结果
     * @requestExample({
     * "documents":[
     *     {
     *        "storeId":3,
     *        "storeName":"LiWeiQuan123456",
     *        "domain":"domain-3",
     *        "storeStatus":"1",
     *        "storeLogo":"",
     *        "storeWeight":"0",
     *        "createdTime":"1503482847",
     *        "gbCodes":[1,2,3],
     *        "creditValue":1,
     *        "minQuantity":1,
     *        "minPrice":2,
     *        "storeIntro":"简介",
     *        "cateId":[1,2,3],
     *        "priceLevel":[1,2,3],
     *        "businessDistrictId":[1,2,3],
     *        "storeYear":1,
     *        "isEnterprise":1,
     *        "isEntity":0,
     *        "isBrand":0,
     *        "isSeller":0,
     *        "isHot":0,
     *        "isTimeShipping":0,
     *        "isIntegrity":0,
     *        "isRealShot":0,
     *        "onlineStatus":1,
     *        "isBehalfof":1,
     *        "floorId":0,
     *        "marketId":0,
     *        "goodsNewTime":0,
     *        "recommendGoods":{
     *            "newNumber":1,
     *            "goodsInfo":[
     *                {
     *                    "goodsId":1,
     *                    "goodsPic":"pic"
     *                }
     *            ]
     *        }
     *     }
     * ]
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年12月1日
     */
    public function updateDocument(array $documents): bool;

    /**
     * 删除店铺索引文档信息
     * 删除店铺索引文档信息
     *
     * @param array $documentIds 文档id
     * @return bool 删除结果
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     * @requestExample({
     * "documentIds":[
     *     1,2,3
     * ]
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年12月1日
     */
    public function deleteDocument(array $documentIds): bool;
}
