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

namespace Eelly\SDK\Order\Service;

use Eelly\DTO\UidDTO;

/**
 * 买家订单功能.
 *
 * @author hehui<hehui@eelly.com>
 */
interface BuyerOrderInterface
{
    /**
     * 获取小程序订单列表.
     *
     * > 订单筛选值(tab)
     *
     * 状态          | 状态值
     * ------------ | --------
     * 全部          | 0
     * 待付款        | 1
     * 待分享(已付款) | 2
     * 待发货        | 3
     * 待收货        | 4
     * 待评价(已收货) | 5
     *
     * > 返回数据说明
     *
     * key         | type    | value
     * ------------ |------  | --------
     * current      | int    | 当前页码
     * last         | int    | 下一页页码
     * totalPages   | int    | 总页码
     * totalItems   | int    | 数据总量
     * items        | array  |当前数据
     * items[]['orderId']     | string | 订单id
     * items[]['sellerName']  | string | 店铺名
     * items[]['orderStatus'] | int    | 订单状态
     * items[]['orderAmount'] | float | 实付
     * items[]['freight']     | float | 运费
     * items[]['createdDate'] | date | 订单日期
     * items[]['goodsList']   | array | 商品列表
     * items[]['goodsList'][]['goodsName']    | string | 商品名称
     * items[]['goodsList'][]['price']        | float | 商品价格
     * items[]['goodsList'][]['quantity']     | float | 商品数量
     * items[]['goodsList'][]['spec']         | string | 商品属性
     * items[]['goodsList'][]['goodsImage']   | string | 商品图片
     *
     * > 订单状态(orderStatus)
     *
     * 值      |状态说明
     * -------|----------
     * 0      | 未知（错误值）
     * 1      | 待付款
     * 2      | 待分享
     * 3      | 待发货
     * 4      | 待收货
     * 5      | 待评价
     * 6      | 已评价
     * 7      | 集赞失败,已退款
     * 8      | 已退款, 交易取消
     * 9      | 未付款, 交易取消
     *
     * @param int    $tab    订单筛选值
     * @param int    $page   第几页
     * @param int    $limit  分页大小
     * @param UidDTO $uidDTO uid dto
     *
     * @return array
     *
     * @requestExample({"tab":1, "page":2})
     *
     * @returnExample(
     * {
     *     "first": 1,
     *     "before": 1,
     *     "current": 1,
     *     "last": 23,
     *     "next": 2,
     *     "totalPages": 23,
     *     "totalItems": 45,
     *     "limit": 2,
     *     "items": [
     *         {
     *             "orderId": "160",
     *             "sellerName": "莫琼小店",
     *             "osId": "26",
     *             "likes": 2,
     *             "evaluation": null,
     *             "orderAmount": "2",
     *             "freight": "1",
     *             "createdTime": 1524555994,
     *             "orderStatus": 8,
     *             "createdDate": "2018-04-24",
     *             "goodsList": [
     *                 {
     *                     "ogId": "20000215",
     *                     "orderId": "160",
     *                     "goodsId": "1450168293",
     *                     "gsId": "195022196",
     *                     "price": "1",
     *                     "quantity": "2",
     *                     "goodsName": "【莫琼小店】 2018新款 针织衫\/毛衣  包邮",
     *                     "goodsImage": "https:\/\/img03.eelly.test\/G02\/M00\/00\/03\/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg",
     *                     "goodsNumber": "2",
     *                     "spec": "颜色:如图色,尺码:均码",
     *                     "createdTime": "1524555994",
     *                     "updateTime": "2018-04-24 15:46:32"
     *                 }
     *             ]
     *         },
     *         {
     *             "orderId": "159",
     *             "sellerName": "莫琼小店",
     *             "osId": "26",
     *             "likes": 0,
     *             "evaluation": null,
     *             "orderAmount": "2",
     *             "freight": "1",
     *             "createdTime": 1524550065,
     *             "orderStatus": 7,
     *             "createdDate": "2018-04-24",
     *             "goodsList": [
     *                 {
     *                     "ogId": "20000214",
     *                     "orderId": "159",
     *                     "goodsId": "1450168293",
     *                     "gsId": "195022196",
     *                     "price": "1",
     *                     "quantity": "2",
     *                     "goodsName": "【莫琼小店】 2018新款 针织衫\/毛衣  包邮",
     *                     "goodsImage": "https:\/\/img03.eelly.test\/G02\/M00\/00\/03\/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg",
     *                     "goodsNumber": "2",
     *                     "spec": "颜色:如图色,尺码:均码",
     *                     "createdTime": "1524550066",
     *                     "updateTime": "2018-04-24 14:07:43"
     *                 }
     *             ]
     *         }
     *     ]
     * }
     * )
     *
     * @author hehui<hehui@eelly.net>
     */
    public function listAppletOrder(int $tab = 0, int $page = 1, int $limit = 20, UidDTO $uidDTO = null): array;
}
