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
use Eelly\SDK\Goods\Service\LikeInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Like implements LikeInterface
{
    /**
     * 根据商品id获取是否是指定商品点赞配置信息,并返回配置信息
     * 
     * > 返回数据说明
     *
     * key          | type      | value
     * ------------ |------     | --------
     * gliId        | int       | 商品点赞ID
     * goodsId      | int       | 商品id
     * requireLikes | int       | 需要点赞数
     * limitNum     | int       | 限购数量
     * createdTime  | int       | 添加时间
     * updateTime   | string    | 修改时间
     * 
     * @param int $goodsId 商品id
     * 
     * @returnExample({"gliId":"1","goodsId":"1488888","requireLikes":"10","limitNum":"1","createdTime":"1111111111","updateTime":"2018-06-28 09:11:15"});
     * 
     * @return array
     * 
     * @author wechan
     * @since 2018年6月28日
     */
    public function getGoodsLikeSettingInfoById(int $goodsId): array
    {
        return EellyClient::request('goods/like', 'getGoodsLikeSettingInfoById', true, $goodsId);
    }

    /**
     * 根据商品id获取是否是指定商品点赞配置信息,并返回配置信息
     * 
     * > 返回数据说明
     *
     * key          | type      | value
     * ------------ |------     | --------
     * gliId        | int       | 商品点赞ID
     * goodsId      | int       | 商品id
     * requireLikes | int       | 需要点赞数
     * limitNum     | int       | 限购数量
     * createdTime  | int       | 添加时间
     * updateTime   | string    | 修改时间
     * 
     * @param int $goodsId 商品id
     * 
     * @returnExample({"gliId":"1","goodsId":"1488888","requireLikes":"10","limitNum":"1","createdTime":"1111111111","updateTime":"2018-06-28 09:11:15"});
     * 
     * @return array
     * 
     * @author wechan
     * @since 2018年6月28日
     */
    public function getGoodsLikeSettingInfoByIdAsync(int $goodsId)
    {
        return EellyClient::request('goods/like', 'getGoodsLikeSettingInfoById', false, $goodsId);
    }

    /**
     * 获取拼团商品列表
     * 
     * @param string $conditions 被绑定的sql
     * @param array  $binds      绑定值
     * @param int    $page       页数
     * @param int    $limit      每页条数
     *
     * @author wechan
     *
     * @since 2018年08月06日
     */
    public function getGoodsLikeList(string $conditions = '', array $binds = [], int $page = 1, int $limit = 10): array
    {
        return EellyClient::request('goods/like', 'getGoodsLikeList', true, $conditions, $binds, $page, $limit);
    }

    /**
     * 获取拼团商品列表
     * 
     * @param string $conditions 被绑定的sql
     * @param array  $binds      绑定值
     * @param int    $page       页数
     * @param int    $limit      每页条数
     *
     * @author wechan
     *
     * @since 2018年08月06日
     */
    public function getGoodsLikeListAsync(string $conditions = '', array $binds = [], int $page = 1, int $limit = 10)
    {
        return EellyClient::request('goods/like', 'getGoodsLikeList', false, $conditions, $binds, $page, $limit);
    }

    /**
     * 获取拼团商品列表
     * 
     * @param $data 请求参数
     *
     * @author wechan
     * @since 2018年08月06日
     */
    public function setGoodsLikeList(int $goodsId, array $data): bool
    {
        return EellyClient::request('goods/like', 'setGoodsLikeList', true, $goodsId, $data);
    }

    /**
     * 获取拼团商品列表
     * 
     * @param $data 请求参数
     *
     * @author wechan
     * @since 2018年08月06日
     */
    public function setGoodsLikeListAsync(int $goodsId, array $data)
    {
        return EellyClient::request('goods/like', 'setGoodsLikeList', false, $goodsId, $data);
    }

    /**
     * 统计推广商品的数量
     * 
     * @param string $conditions sql where条件
     * 
     * @author wechan
     * @since 2018年8月7日
     */
    public function countGoodsLike(string $conditions = ''): int
    {
        return EellyClient::request('goods/like', 'countGoodsLike', true, $conditions);
    }

    /**
     * 统计推广商品的数量
     * 
     * @param string $conditions sql where条件
     * 
     * @author wechan
     * @since 2018年8月7日
     */
    public function countGoodsLikeAsync(string $conditions = '')
    {
        return EellyClient::request('goods/like', 'countGoodsLike', false, $conditions);
    }

    /**
     * 修改拼团商品活动库存
     * 
     * @param array $goodsId 商品id
     * @param int $num 数量
     * @param string $action 操作类型 -:减 +:加
     * 
     * 
     * @author wechan
     * @since 2018年08月14日
     */
    public function changeStock(int $goodsId, int $num, string $action = '-'): bool
    {
        return EellyClient::request('goods/like', 'changeStock', true, $goodsId, $num, $action);
    }

    /**
     * 修改拼团商品活动库存
     * 
     * @param array $goodsId 商品id
     * @param int $num 数量
     * @param string $action 操作类型 -:减 +:加
     * 
     * 
     * @author wechan
     * @since 2018年08月14日
     */
    public function changeStockAsync(int $goodsId, int $num, string $action = '-')
    {
        return EellyClient::request('goods/like', 'changeStock', false, $goodsId, $num, $action);
    }

    /**
     * 获取活动页的一元商品.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * --------------|-------|--------------
     * specialPrice  |int    |点赞价格
     * goodsId       |int    |商品ID
     * storeId       |int    |店铺ID
     * goodsName     |string |商品名称
     * originalPrice |double |原价
     * goodsStatus   |int    |状态
     * goodsImg      |string |商品图
     * addTime       |string |添加时间
     * isVideo       |int    |是否是视频
     * videoUrl      |string |视频地址
     * saleStock     |int    |库存
     * requireLikes  |int    |需要集赞数量
     * isSubscribe   |bool   |是否订阅，true是，false否
     * gliId         |int    |商品点赞ID
     *
     *
     * @param int         $userId 登录的用户ID
     * @param int         $status 1为正在上架的，0为第二期的
     * @param int         $page   第几页
     * @param int         $limit  页数
     * @param UidDTO|null $uidDTO
     *
     * @returnExample([
     * {
     *      "specialPrice": 1,
     *      "goodsId": "5578939",
     *      "storeId": "1760244",
     *      "goodsName": "运费",
     *      "originalPrice": 0.02,
     *      "goodsStatus": 0,
     *      "goodsImg": "https:\/\/img.eelly.test\/G01\/M00\/00\/06\/small_oYYBAFtMOZWIGOgHAAGL_sMz2wAAAACagKbTqgAAYwW358.jpg",
     *      "addTime": "1531693335",
     *      "isVideo": 0,
     *      "videoUrl": "",
     *      "saleStock": 2,
     *      "requireLikes": 12,
     *      "isSubscribe": false,
     *      "gliId":1
     *  }, 
     *  {
     *      "specialPrice": 0.03,
     *      "goodsId": "5578945",
     *      "storeId": "1760467",
     *      "goodsName": "测试物流",
     *      "originalPrice": 0.02,
     *      "goodsStatus": 0,
     *      "goodsImg": "https:\/\/img.eelly.test\/G02\/M00\/00\/03\/small_ooYBAFtj9v-IMrTHAAGaI_vzPwkAAABhAGNYDoAAZo7382.jpg",
     *      "addTime": "1533249154",
     *      "isVideo": 0,
     *      "videoUrl": "",
     *      "saleStock": 4,
     *      "requireLikes": 12,
     *      "isSubscribe": false,
     *      "gliId":1
     *  }
     * ])
     *
     * @return array
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年08月24日
     */
    public function getOneyuanData(int $userId = 0, int $status = 1, int $page = 1, int $limit = 10): array
    {
        return EellyClient::request('goods/like', 'getOneyuanData', true, $userId, $status, $page, $limit);
    }

    /**
     * 获取活动页的一元商品.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * --------------|-------|--------------
     * specialPrice  |int    |点赞价格
     * goodsId       |int    |商品ID
     * storeId       |int    |店铺ID
     * goodsName     |string |商品名称
     * originalPrice |double |原价
     * goodsStatus   |int    |状态
     * goodsImg      |string |商品图
     * addTime       |string |添加时间
     * isVideo       |int    |是否是视频
     * videoUrl      |string |视频地址
     * saleStock     |int    |库存
     * requireLikes  |int    |需要集赞数量
     * isSubscribe   |bool   |是否订阅，true是，false否
     * gliId         |int    |商品点赞ID
     *
     *
     * @param int         $userId 登录的用户ID
     * @param int         $status 1为正在上架的，0为第二期的
     * @param int         $page   第几页
     * @param int         $limit  页数
     * @param UidDTO|null $uidDTO
     *
     * @returnExample([
     * {
     *      "specialPrice": 1,
     *      "goodsId": "5578939",
     *      "storeId": "1760244",
     *      "goodsName": "运费",
     *      "originalPrice": 0.02,
     *      "goodsStatus": 0,
     *      "goodsImg": "https:\/\/img.eelly.test\/G01\/M00\/00\/06\/small_oYYBAFtMOZWIGOgHAAGL_sMz2wAAAACagKbTqgAAYwW358.jpg",
     *      "addTime": "1531693335",
     *      "isVideo": 0,
     *      "videoUrl": "",
     *      "saleStock": 2,
     *      "requireLikes": 12,
     *      "isSubscribe": false,
     *      "gliId":1
     *  }, 
     *  {
     *      "specialPrice": 0.03,
     *      "goodsId": "5578945",
     *      "storeId": "1760467",
     *      "goodsName": "测试物流",
     *      "originalPrice": 0.02,
     *      "goodsStatus": 0,
     *      "goodsImg": "https:\/\/img.eelly.test\/G02\/M00\/00\/03\/small_ooYBAFtj9v-IMrTHAAGaI_vzPwkAAABhAGNYDoAAZo7382.jpg",
     *      "addTime": "1533249154",
     *      "isVideo": 0,
     *      "videoUrl": "",
     *      "saleStock": 4,
     *      "requireLikes": 12,
     *      "isSubscribe": false,
     *      "gliId":1
     *  }
     * ])
     *
     * @return array
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年08月24日
     */
    public function getOneyuanDataAsync(int $userId = 0, int $status = 1, int $page = 1, int $limit = 10)
    {
        return EellyClient::request('goods/like', 'getOneyuanData', false, $userId, $status, $page, $limit);
    }

    /**
     * 获取广告图和领取动态数据.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------------------------------|-------|--------------
     * advertImg                        |string |广告图
     * orderLikeSuccessList             |array  |动态数据
     * orderLikeSuccessList["likes"]    |int    |点赞数量
     * orderLikeSuccessList["orderId"]  |int    |订单号
     * orderLikeSuccessList["buyerId"]  |int    |用户ID
     * orderLikeSuccessList["price"]    |int    |价格，单位分
     * orderLikeSuccessList["quantity"] |int    |商品数量
     * orderLikeSuccessList["userName"] |string |用户名
     * orderLikeSuccessList["portrait"] |string |头像
     * orderLikeSuccessList["content"]  |string |内容
     *
     *
     * @returnExample({
     *   "advertImg": "https://eellytest.eelly.com/system/system_34Yy1VDNNVUCAf0RliDv_icon.png",
     *   "orderLikeSuccessList": [
     *       {
     *           "likes": "1",
     *           "orderId": "50001717",
     *           "buyerId": "2108412",
     *           "price": "980",
     *           "quantity": "1",
     *           "userName": "",
     *           "portrait": "https://uc.eelly.test/images/noavatar_small.png",
     *           "content": "成功集赞1个，用9.8元成功领了1件衣服"
     *       },
     *       {
     *           "likes": "1",
     *           "orderId": "50001708",
     *           "buyerId": "2108412",
     *           "price": "1",
     *           "quantity": "2",
     *           "userName": "",
     *           "portrait": "https://uc.eelly.test/images/noavatar_small.png",
     *           "content": "成功集赞1个，用0.01元成功领了2件衣服"
     *       },
     *       {
     *           "likes": "1",
     *           "orderId": "50001668",
     *           "buyerId": "2848170",
     *           "price": "3829",
     *           "quantity": "1",
     *           "userName": "",
     *           "portrait": "https://uc.eelly.test/images/noavatar_small.png",
     *           "content": "成功集赞1个，用38.29元成功领了1件衣服"
     *       },
     *       {
     *           "likes": "1",
     *           "orderId": "50001662",
     *           "buyerId": "2108483",
     *           "price": "1",
     *           "quantity": "1",
     *           "userName": "龚",
     *           "portrait": "https://uc.eelly.test/images/noavatar_small.png",
     *           "content": "成功集赞1个，用0.01元成功领了1件衣服"
     *       }
     *   ]
     * })
     *
     * @return array
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年08月28日
     *
     * @Cache(lifetime=300)
     */
    public function getAppletRecommendData(): array
    {
        return EellyClient::request('goods/like', 'getAppletRecommendData', true);
    }

    /**
     * 获取广告图和领取动态数据.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------------------------------|-------|--------------
     * advertImg                        |string |广告图
     * orderLikeSuccessList             |array  |动态数据
     * orderLikeSuccessList["likes"]    |int    |点赞数量
     * orderLikeSuccessList["orderId"]  |int    |订单号
     * orderLikeSuccessList["buyerId"]  |int    |用户ID
     * orderLikeSuccessList["price"]    |int    |价格，单位分
     * orderLikeSuccessList["quantity"] |int    |商品数量
     * orderLikeSuccessList["userName"] |string |用户名
     * orderLikeSuccessList["portrait"] |string |头像
     * orderLikeSuccessList["content"]  |string |内容
     *
     *
     * @returnExample({
     *   "advertImg": "https://eellytest.eelly.com/system/system_34Yy1VDNNVUCAf0RliDv_icon.png",
     *   "orderLikeSuccessList": [
     *       {
     *           "likes": "1",
     *           "orderId": "50001717",
     *           "buyerId": "2108412",
     *           "price": "980",
     *           "quantity": "1",
     *           "userName": "",
     *           "portrait": "https://uc.eelly.test/images/noavatar_small.png",
     *           "content": "成功集赞1个，用9.8元成功领了1件衣服"
     *       },
     *       {
     *           "likes": "1",
     *           "orderId": "50001708",
     *           "buyerId": "2108412",
     *           "price": "1",
     *           "quantity": "2",
     *           "userName": "",
     *           "portrait": "https://uc.eelly.test/images/noavatar_small.png",
     *           "content": "成功集赞1个，用0.01元成功领了2件衣服"
     *       },
     *       {
     *           "likes": "1",
     *           "orderId": "50001668",
     *           "buyerId": "2848170",
     *           "price": "3829",
     *           "quantity": "1",
     *           "userName": "",
     *           "portrait": "https://uc.eelly.test/images/noavatar_small.png",
     *           "content": "成功集赞1个，用38.29元成功领了1件衣服"
     *       },
     *       {
     *           "likes": "1",
     *           "orderId": "50001662",
     *           "buyerId": "2108483",
     *           "price": "1",
     *           "quantity": "1",
     *           "userName": "龚",
     *           "portrait": "https://uc.eelly.test/images/noavatar_small.png",
     *           "content": "成功集赞1个，用0.01元成功领了1件衣服"
     *       }
     *   ]
     * })
     *
     * @return array
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年08月28日
     *
     * @Cache(lifetime=300)
     */
    public function getAppletRecommendDataAsync()
    {
        return EellyClient::request('goods/like', 'getAppletRecommendData', false);
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