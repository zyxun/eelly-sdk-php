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
use Eelly\SDK\Goods\Service\EnquiryUserInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class EnquiryUser implements EnquiryUserInterface
{
    /**
     * 新增询价商品报价信息
     *
     * @param array $data 请求参数
     * @param $data['geId'] 询价商品ID
     * @param $data['buyerId'] 买家ID
     * @param $data['price'] 买家ID
     * @param $data['status'] 报价状态：0 未报价 1 已报价 4 删除（买家设置）
     * @param $data['createdTime'] 添加时间
     *
     * @autohr wechan<liweiquan@eelly.net>
     * @since 2018年1月03日
     */
    public function addEnquiryUser(array $data): bool
    {
        return EellyClient::request('goods/enquiryUser', 'addEnquiryUser', true, $data);
    }

    /**
     * 新增询价商品报价信息
     *
     * @param array $data 请求参数
     * @param $data['geId'] 询价商品ID
     * @param $data['buyerId'] 买家ID
     * @param $data['price'] 买家ID
     * @param $data['status'] 报价状态：0 未报价 1 已报价 4 删除（买家设置）
     * @param $data['createdTime'] 添加时间
     *
     * @autohr wechan<liweiquan@eelly.net>
     * @since 2018年1月03日
     */
    public function addEnquiryUserAsync(array $data)
    {
        return EellyClient::request('goods/enquiryUser', 'addEnquiryUser', false, $data);
    }

    /**
     * 获取用户的在店铺报价记录数.
     * 
     * @param int $data['userId']  用户id (不为0时需要传type 为0时取全部店铺的报价记录)
     * @param int $data['storeId'] 店铺id (不为0时需要传type 为0时取全部店铺的报价记录)
     * @param int $data['type'] 类型 0.取区本店报价记录 1.取其他店铺的报价记录
     * 
     * @return int 
     * 
     * @autor wechan<liweiquan@eelly.net>
     * @since 2017年01月04日
     */
    public function getOfferPriceCount(array $data): int
    {
        return EellyClient::request('goods/enquiryUser', 'getOfferPriceCount', true, $data);
    }

    /**
     * 获取用户的在店铺报价记录数.
     * 
     * @param int $data['userId']  用户id (不为0时需要传type 为0时取全部店铺的报价记录)
     * @param int $data['storeId'] 店铺id (不为0时需要传type 为0时取全部店铺的报价记录)
     * @param int $data['type'] 类型 0.取区本店报价记录 1.取其他店铺的报价记录
     * 
     * @return int 
     * 
     * @autor wechan<liweiquan@eelly.net>
     * @since 2017年01月04日
     */
    public function getOfferPriceCountAsync(array $data)
    {
        return EellyClient::request('goods/enquiryUser', 'getOfferPriceCount', false, $data);
    }

    /**
     * 根据询价商品id，返回对应的商品信息
     *
     * @param array $goodsIds  询价商品id数组
     * @param int   $buyerId   买家用户id
     * @return array
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.01.05
     */
    public function getGoodsInfoByIds(array $goodsIds, int $buyerId): array
    {
        return EellyClient::request('goods/enquiryUser', 'getGoodsInfoByIds', true, $goodsIds, $buyerId);
    }

    /**
     * 根据询价商品id，返回对应的商品信息
     *
     * @param array $goodsIds  询价商品id数组
     * @param int   $buyerId   买家用户id
     * @return array
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.01.05
     */
    public function getGoodsInfoByIdsAsync(array $goodsIds, int $buyerId)
    {
        return EellyClient::request('goods/enquiryUser', 'getGoodsInfoByIds', false, $goodsIds, $buyerId);
    }

    /**
     * 等待报价列表页.
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------------------|-------|--------------
     * items                   |array  |列表数据
     * items[0]["geuId"]       |int    |商品报价ID
     * items[0]["recordUnm"]   |int    |报价数量
     * items[0]["buyerId"]     |int    |买家ID
     * items[0]["createdTime"] |string |添加时间
     * page                    |array  |页数整理
     * page["totalPages"]      |int    |总页数
     * page["totalItems"]      |int    |总条数
     * page["current"]         |int    |当前页
     * page["limit"]           |int    |每页多少条
     *
     * @param array $condition 查询条件
     * @param int $condition["sellerId"] 卖家ID
     * @param int $condition["status"] 报价状态：0 未报价 1 已报价 4 删除（买家设置）
     * @param int $condition["lastGeuId"] 分页的最后一个商品报价ID
     * @param int $currentPage 第几页
     * @param int $limit 每页条数
     * @return array
     * @requestExample({"sellerId":10086,"status":1,"lastGeuId":1})
     * @returnExample({"items":{["geuId":1,"recordUnm":2,"buyerId":148086,"createdTime":"1515132209"]},"page":{"totalPages":1,"totalItems":2,"current":1,"limit":10}})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年01月10日
     */
    public function getUserPriceRecord(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('goods/enquiryUser', 'getUserPriceRecord', true, $condition, $currentPage, $limit);
    }

    /**
     * 等待报价列表页.
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------------------|-------|--------------
     * items                   |array  |列表数据
     * items[0]["geuId"]       |int    |商品报价ID
     * items[0]["recordUnm"]   |int    |报价数量
     * items[0]["buyerId"]     |int    |买家ID
     * items[0]["createdTime"] |string |添加时间
     * page                    |array  |页数整理
     * page["totalPages"]      |int    |总页数
     * page["totalItems"]      |int    |总条数
     * page["current"]         |int    |当前页
     * page["limit"]           |int    |每页多少条
     *
     * @param array $condition 查询条件
     * @param int $condition["sellerId"] 卖家ID
     * @param int $condition["status"] 报价状态：0 未报价 1 已报价 4 删除（买家设置）
     * @param int $condition["lastGeuId"] 分页的最后一个商品报价ID
     * @param int $currentPage 第几页
     * @param int $limit 每页条数
     * @return array
     * @requestExample({"sellerId":10086,"status":1,"lastGeuId":1})
     * @returnExample({"items":{["geuId":1,"recordUnm":2,"buyerId":148086,"createdTime":"1515132209"]},"page":{"totalPages":1,"totalItems":2,"current":1,"limit":10}})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年01月10日
     */
    public function getUserPriceRecordAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('goods/enquiryUser', 'getUserPriceRecord', false, $condition, $currentPage, $limit);
    }

    /**
     * 获取报价&报价记录/给单个用户和多个用户使用.
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------------------|-------|--------------
     * items                   |array  |列表数据
     * items[0]["geuId"]       |int    |商品报价ID
     * items[0]["urlCover"]    |string |询价商品封面图
     * items[0]["price"]       |int    |报价金额：单位为分
     * items[0]["createdTime"] |string |添加时间
     * items[0]["status"]      |int    |报价状态：0 未报价 1 已报价 4 删除（买家设置）
     * items[0]["geStatus"]    |int    |在售状态：0 缺货停售 1 在售（卖家设置）
     * page                    |array  |页数整理
     * page["totalPages"]      |int    |总页数
     * page["totalItems"]      |int    |总条数
     * page["current"]         |int    |当前页
     * page["limit"]           |int    |每页多少条
     *
     *
     * @param array $condition 查询条件
     * @param int $condition ["sellerId"] 卖家ID
     * @param int $condition ["buyerId"] 买家ID
     * @param int $condition ["status"] 报价状态：0 未报价 1 已报价 4 删除（买家设置）
     * @param int $condition ["lastGeuId"] 分页的最后一个商品报价ID
     * @param int $condition ["defaultGeuId"] 默认第一个的商品ID
     * @param int $currentPage 第几页
     * @param int $limit 每页条数
     * @return array
     * @requestExample({"sellerId":10086,"status":1,"lastGeuId":1})
     * @returnExample({"items":{{"geuId":1,"urlCover":"https://img01.eelly.com/G06/M00/00/21/rIYBAFozihGIRo_tAAF6T7PoHfMAAANbADhPKYAAXpn452.jpg"
     * ,"price":20,"createdTime":"1515132209","status":1,"geStatus":1}},"page":{"totalPages":1,"totalItems":2,"current":1,"limit":10}})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年01月10日
     * @Validation(
     *  @PresenceOf(0,{message : "数据不能为空"}),
     *  @OperatorValidator(1,{message:"非法第几页",operator:["gt",0]}),
     *  @OperatorValidator(2,{message:"非法每页条数",operator:["gt",0]})
     *)
     */
    public function getUserEnquiryList(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('goods/enquiryUser', 'getUserEnquiryList', true, $condition, $currentPage, $limit);
    }

    /**
     * 获取报价&报价记录/给单个用户和多个用户使用.
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------------------|-------|--------------
     * items                   |array  |列表数据
     * items[0]["geuId"]       |int    |商品报价ID
     * items[0]["urlCover"]    |string |询价商品封面图
     * items[0]["price"]       |int    |报价金额：单位为分
     * items[0]["createdTime"] |string |添加时间
     * items[0]["status"]      |int    |报价状态：0 未报价 1 已报价 4 删除（买家设置）
     * items[0]["geStatus"]    |int    |在售状态：0 缺货停售 1 在售（卖家设置）
     * page                    |array  |页数整理
     * page["totalPages"]      |int    |总页数
     * page["totalItems"]      |int    |总条数
     * page["current"]         |int    |当前页
     * page["limit"]           |int    |每页多少条
     *
     *
     * @param array $condition 查询条件
     * @param int $condition ["sellerId"] 卖家ID
     * @param int $condition ["buyerId"] 买家ID
     * @param int $condition ["status"] 报价状态：0 未报价 1 已报价 4 删除（买家设置）
     * @param int $condition ["lastGeuId"] 分页的最后一个商品报价ID
     * @param int $condition ["defaultGeuId"] 默认第一个的商品ID
     * @param int $currentPage 第几页
     * @param int $limit 每页条数
     * @return array
     * @requestExample({"sellerId":10086,"status":1,"lastGeuId":1})
     * @returnExample({"items":{{"geuId":1,"urlCover":"https://img01.eelly.com/G06/M00/00/21/rIYBAFozihGIRo_tAAF6T7PoHfMAAANbADhPKYAAXpn452.jpg"
     * ,"price":20,"createdTime":"1515132209","status":1,"geStatus":1}},"page":{"totalPages":1,"totalItems":2,"current":1,"limit":10}})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年01月10日
     * @Validation(
     *  @PresenceOf(0,{message : "数据不能为空"}),
     *  @OperatorValidator(1,{message:"非法第几页",operator:["gt",0]}),
     *  @OperatorValidator(2,{message:"非法每页条数",operator:["gt",0]})
     *)
     */
    public function getUserEnquiryListAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('goods/enquiryUser', 'getUserEnquiryList', false, $condition, $currentPage, $limit);
    }

    /**
     * 厂+发报价给买家.
     *
     * @param array $data 报价信息
     * @param int $data [0]["geuId"] 询价商品ID
     * @param int $data [0]["price"] 报价金额：单位为分
     * @param int $sellerId 卖家ID
     * @return bool
     * @requestExample({"data":{{"geuId":1,"price":20},{"geuId":2,"price":30}},"sellerId":10086})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年01月11日
     * @Validation(
     *  @PresenceOf(0,{message : "数据不能为空"}),
     *  @OperatorValidator(1,{message:"非法卖家ID",operator:["gt",0]})
     *)
     */
    public function addUserPriceRecord(array $data, int $sellerId): bool
    {
        return EellyClient::request('goods/enquiryUser', 'addUserPriceRecord', true, $data, $sellerId);
    }

    /**
     * 厂+发报价给买家.
     *
     * @param array $data 报价信息
     * @param int $data [0]["geuId"] 询价商品ID
     * @param int $data [0]["price"] 报价金额：单位为分
     * @param int $sellerId 卖家ID
     * @return bool
     * @requestExample({"data":{{"geuId":1,"price":20},{"geuId":2,"price":30}},"sellerId":10086})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年01月11日
     * @Validation(
     *  @PresenceOf(0,{message : "数据不能为空"}),
     *  @OperatorValidator(1,{message:"非法卖家ID",operator:["gt",0]})
     *)
     */
    public function addUserPriceRecordAsync(array $data, int $sellerId)
    {
        return EellyClient::request('goods/enquiryUser', 'addUserPriceRecord', false, $data, $sellerId);
    }

    /**
     * 厂+批量删除报价信息.
     *
     * @param array $geuIds  询价商品ID[1,2,3]
     * @param int $sellerId 卖家ID
     * @return bool
     * @requestExample({"geuIds":{1,2}},"sellerId":10086})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年01月11日
     * @Validation(
     *  @PresenceOf(0,{message : "数据不能为空"}),
     *  @OperatorValidator(1,{message:"非法卖家ID",operator:["gt",0]})
     *)
     */
    public function deleteUserPriceRecord(array $geuIds, int $sellerId): bool
    {
        return EellyClient::request('goods/enquiryUser', 'deleteUserPriceRecord', true, $geuIds, $sellerId);
    }

    /**
     * 厂+批量删除报价信息.
     *
     * @param array $geuIds  询价商品ID[1,2,3]
     * @param int $sellerId 卖家ID
     * @return bool
     * @requestExample({"geuIds":{1,2}},"sellerId":10086})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年01月11日
     * @Validation(
     *  @PresenceOf(0,{message : "数据不能为空"}),
     *  @OperatorValidator(1,{message:"非法卖家ID",operator:["gt",0]})
     *)
     */
    public function deleteUserPriceRecordAsync(array $geuIds, int $sellerId)
    {
        return EellyClient::request('goods/enquiryUser', 'deleteUserPriceRecord', false, $geuIds, $sellerId);
    } 
    /*
     * 根据询价商品id，返回对应的商品信息
     *
     * @param array $goodsIds  询价商品id数组
     * @param int   $buyerId   买家用户id
     * 
     * @return array
     * @requestExample({"goodsId":[1,2,3,4,5],"buyerId":148086})
     * @returnExample()
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2018年01月11日
     */
    public function getEnquiryInfoByIds(array $goodsIds, int $buyerId): array
    {
        return EellyClient::request('goods/enquiryUser', 'getEnquiryInfoByIds', true, $goodsIds, $buyerId);
    }

    /**
     * 根据询价商品id，返回对应的商品信息
     *
     * @param array $goodsIds  询价商品id数组
     * @param int   $buyerId   买家用户id
     * 
     * @return array
     * @requestExample({"goodsId":[1,2,3,4,5],"buyerId":148086})
     * @returnExample()
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2018年01月11日
     */
    public function getEnquiryInfoByIdsAsync(array $goodsIds, int $buyerId)
    {
        return EellyClient::request('goods/enquiryUser', 'getEnquiryInfoByIds', false, $goodsIds, $buyerId);
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