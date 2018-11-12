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

namespace Eelly\SDK\Cart\Service;

use Eelly\DTO\UidDTO;

/**
 * 购物车.
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface CartInterface
{
    /**
     * 购物车列表.
     *
     * > 返回数据说明
     * key | type | value
     * --- | ---- | -----
     * useful               | array  | 有效购物车
     * unuseful             | array  | 无效购物车
     *
     * > useful unuseful 字段说明
     * key | type | value
     * --- | ---- | -----
     * isMix                | int    | 是否混批 0:否， 1:是
     * mixMoney             | float  | 混批价格 （isMix为1的时候才出现）
     * mixNum               | int    | 混批数量 （isMix为1的时候才出现）
     * tipType              | int    | 提示分类  (0:正常，3:不满足混批)
     * batchQuantity        | int    | 店铺起批设置
     * tipReason            | string | 提示内容 跟随tipType
     * storePrice           | float  | 该店铺下的价格
     * quantity             | int    | 该店铺下的数量
     * storeId              | int    | 店铺id
     * storeName            | string | 店铺名称
     * storeAddress         | string | 店铺地址
     * storeCart            | array  | 该店铺下的所有商品
     *
     * > storeCart 店铺下商品字段说明
     * key | type | value
     * --- | ---- | -----
     * uniqueId             | string | 购物车唯一识别
     * storeId              | int    | 店铺id
     * defaultImage         | string | 商品图片
     * goodsName            | string | 商品名称
     * goodsNumber          | string | 商品货号
     * goodsId              | int    | 商品id
     * quantity             | int    | 商品数量
     * goodsPrice           | foat   | 商品总价
     * singlePrice          | foat   | 商品单价
     * lowerLimit           | int    | 商品最低起批量 0:代表无限制
     * attributes           | array  | 商品规格属性
     * priceInfo            | array  | 价格详情信息
     * priceInfo['goods_id']        | int | 商品id
     * priceInfo['store_id']        | int | 店铺id
     * priceInfo['price_type']      | int | 价格类型
     * priceInfo['price_lower']     | float  | 最低价
     * priceInfo['price_upper']     | float  | 最高价
     * priceInfo['price_data']      | array  | 阶梯价数组（含一或多个，规格报价时只有一个）
     * priceInfo['price_specdata']  | array  | 规格价数组（含一或多个，阶梯价时不存在此key）
     * priceInfo['price_detail']    | array  | 活动相关的详情数据（没活动时不存在此key）
     * priceInfo['price_title']     | string | 活动标题
     * priceInfo['price_crm']       | array  | crm的原价数组（详情页特殊需要）
     * tipType                      | int    | 提示分类 （0:正常，1:规格被抢空，2:规格发生改变）
     * tipReason                    | string | 提示分类的原因 同 tipType
     * createdTime                  | int    | 创建时间
     * updateTime                   | int    | 更新时间
     * useful                       | bool   | 是否有效 true 有效，false 无效
     * colorSum                     | int    | 颜色数量
     * sizeSum                      | int    | 尺寸数量
     * unit                         | string | 商品单位 例:件
     * ifShow                       | int    | 商品状态 0 下架, 1 上架, 2 自动下架, 3 等待上架, 4 自动上架, 5 卖家已删除
     * close                        | int    | 店铺状态 0=正常，1=禁售，2=店铺关闭，3=店铺挂起，4=店铺暂停营业
     *
     * > attributes 商品规格数据说明
     * key | type | value
     * --- | ---- | -----
     * attributes[]['spId']     | int    | 规格id
     * attributes[]['color']    | string | 规格颜色
     * attributes[]['size']     | string | 规格尺寸
     * attributes[]['quantity'] | int    | 规格数量
     * attributes[]['sourceQuantity'] | int    | 商品现有的规格数量
     * attributes[]['loseSpec'] | bool   | 是否不存在该规格 true 是， false， 否
     *
     * > priceInfo['price_data'] 数据说明
     * key | type | value
     * --- | ---- | -----
     * lower_limit | int    | 数量左区间
     * upper_limit | int    | 数量右区间
     * price       | float  | 价格
     *
     * > priceInfo['price_specdata'] 数据说明
     * key | type | value
     * --- | ---- | -----
     * spec_id          | int    | 规格id
     * goods_id         | int    | 商品id
     * spec_1           | string | 规格第一名称，颜色
     * spec_2           | string | 规格第二名称，尺码
     * color_rgb        | string | 颜色RGB值
     * price            | float  | 价格
     * stock            | int    | 库存数量
     * sku              | string | 库存号
     *
     * > riceInfo['price_detail'] 数据说明
     * > 数据说明（只列出公共key，不同活动返回的数组也不同）
     * key | type | value
     * --- | ---- | -----
     * act_id       | int    | 活动id
     * goods_id     | int    | 商品id
     * price        | float  | 价格
     * tag          | string | 活动标签
     * start_time   | int    | 活动开始时间
     * end_time     | int    | 活动结束时间
     * type         | int    | 活动类型
     * expire_time  | int    | 倒计时剩余秒数（无倒计时的活动不存在此key）
     *
     * > tipType 分类说明
     * > tipReason 原因来源
     * key | value
     * --- | -----
     * 0 | 正常情况
     * 1 | 您选的商品规格已被抢空
     * 2 | 该商品规格发生变更，请重新选择
     * 3 | 数量或金额不满足商家混批规则
     *
     * > 价格类型说明 price_type
     * key | type | value
     * --- | ---- | -----
     * 1001 | int | 'Distributor' 一件代发价
     * 2001 | int | 'MarketActivity' 平台活动价(平台店铺活动报名没有特价)
     * 2002 | int | 'ClearanceActivity' 首页限时特惠
     * 3001 | int | 'StoreActivity' 店铺活动价
     * 1002 | int | 'Customer' crm会员价
     * 1    | int | 'Ladder' 阶梯价------最基础的价格，必需有-------
     * 2    | int | 'Spec' 规格报价
     *
     * @param UidDTO $user 用户信息
     *
     * @return array
     * @requestExample()
     * @returnExample({
     *   "useful":[{"isMix":0,"storeId":1760244,"storeName":"\u5973\u88c5\u5927\u5927","storeAddress":"广东 广州 十三行商圈的 十三行新中国大厦","tipType":0,"batchQuantity":"2","storePrice":0.03,"quantity":3,"tipReason":"\u6b63\u5e38\u60c5\u51b5","storeCart":[{"uniqueId":"b547767c68d674539b946327ecfdeddf","storeId":1760244,"storeName":"\u5973\u88c5\u5927\u5927","defaultImage":"G03/M00/00/B0/small_pYYBAFUvareIVSLaAAYKRm6bJisAABFIAIv_CQABgpe928.jpg","goodsName":"\u8fd0\u8d39","goodsNumber":"1234513","goodsId":5578939,"quantity":3,"goodsPrice":"0.03","singlePrice":"0.01","lowerLimit":"2","attributes":[{"spId":32090865,"color":"\u7d2b\u8272","size":"xl","quantity":3,"loseSpec":false}],"pirceInfo":{"goods_id":"5578939","store_id":"1760244","price_type":2001,"price_lower":"0.01","price_upper":"0.01","price_data":[{"lower_limit":"1","upper_limit":"0","price":"0.01","type":"1"}],"price_pay":"0.01","price_title":"\u9650\u65f6\u7279\u60e0","price_detail":{"act_id":"3401","goods_id":"5578939","nums":"0","mbr_buy_limit":"0","price":"0.01","type_info":"a:0:{}","tag":"\u9650\u65f6\u7279\u60e0","start_time":"1503561600","end_time":"1535702399","type":"16","is_limit_mbrbuy":"1","single":"0","is_set_nums":"1","expire_time":913726}},"tipType":0,"tipReason":"\u6b63\u5e38\u60c5\u51b5","createdTime":1534817474,"updateTime":1534849131,"useful":true,"colorSum":1,"sizeSum":1,"unit":"件","ifShow":"1","close":"0"}]},{"isMix":0,"storeId":1760467,"storeName":"test\u5e97\u94fa\u6d4b\u8bd5","storeAddress":"广东 广州 十三行商圈的 十三行新中国大厦","tipType":0,"batchQuantity":"2","price":55.5,"quantity":3,"tipReason":"\u6b63\u5e38\u60c5\u51b5","storeCart":[{"uniqueId":"701eb18b6a9bec5e13973101df32b8c8","storeId":1760467,"storeName":"test\u5e97\u94fa\u6d4b\u8bd5","goodsName":"19\u5757\u94b1\u7279\u4ef7","goodsNumber":"1234513","goodsId":5578934,"quantity":3,"price":"55.50","attributes":[{"spId":32090859,"color":"\u7d2b\u8272","size":"xl","quantity":3,"loseSpec":false}],"pirceInfo":{"goods_id":"5578934","store_id":"1760467","price_type":2001,"price_lower":"20.00","price_upper":"20.00","price_data":[{"lower_limit":"1","upper_limit":"0","price":"20.00","type":"1"}],"price_pay":"18.50","price_title":"\u9650\u65f6\u7279\u60e0","price_detail":{"act_id":"3401","goods_id":"5578934","nums":"0","mbr_buy_limit":"0","price":"18.50","type_info":"a:0:{}","tag":"\u9650\u65f6\u7279\u60e0","start_time":"1503561600","end_time":"1535702399","type":"16","is_limit_mbrbuy":"1","single":"0","is_set_nums":"1","expire_time":913638}},"tipType":0,"tipReason":"\u6b63\u5e38\u60c5\u51b5","createdTime":1534817561,"updateTime":1534849131,"useful":true,"colorSum":1,"sizeSum":1,"unit":"件","ifShow":"1","close":"0"}]}],"unuseful":[{"isMix":1,"storeId":159771,"storeName":"\u827e\u6b27\u4e25\u9009\u5927\u7801\u5973\u88c5","storeAddress":"广东 广州 十三行商圈的 十三行新中国大厦","tipType":0,"batchQuantity":"2","price":538,"quantity":9,"tipReason":"\u6b63\u5e38\u60c5\u51b5","mixMoney":100,"mixNum":2,"storeCart":[{"uniqueId":"f54a532d0f2b60071cfec2149476f1c3","storeId":159771,"storeName":"\u827e\u6b27\u4e25\u9009\u5927\u7801\u5973\u88c5","goodsName":"ioeoi1120\u80d6mm\u5927\u7801\u5973\u88c5\u6625\u88c5 \u649e\u8272\u53e3\u888b\u8fde\u5e3d2015\u4f11\u95f2\u5957\u88c5\u6625\u5b63\u8fd0\u52a8\u5957\u88c5\u5973","goodsNumber":"1234513","goodsId":5155477,"quantity":1,"price":"74.00","attributes":[{"spId":28738538,"color":"\u7d2b\u8272","size":"xl","quantity":1,"loseSpec":false},{"spId":28738538111,"color":"\u7d2b\u8272","size":"xl","quantity":0,"loseSpec":true}],"pirceInfo":{"goods_id":"5155477","store_id":"159771","price_type":1,"price_lower":"74.00","price_upper":"89.00","price_data":[{"lower_limit":"3","upper_limit":"4","price":"89.00","type":"1"},{"lower_limit":"5","upper_limit":"9","price":"79.00","type":"2"},{"lower_limit":"10","upper_limit":"0","price":"74.00","type":"3"}]},"tipType":2,"tipReason":"\u8be5\u5546\u54c1\u89c4\u683c\u53d1\u751f\u53d8\u66f4\uff0c\u8bf7\u91cd\u65b0\u9009\u62e9","createdTime":1534817709,"updateTime":1534849131,"useful":false,"mixMoney":100,"mixNum":2,"colorSum":1,"sizeSum":1,"unit":"件","ifShow":"1","close":"0"},{"uniqueId":"372f86e3539ef75e5b49f393e98decc7","storeId":159771,"storeName":"\u827e\u6b27\u4e25\u9009\u5927\u7801\u5973\u88c5","goodsName":"ioeoi\u6b63\u54c1\u26069568\u65f6\u5c1a\u5178\u96c5\u6cd5\u5f0f\u957f\u5927\u8863","goodsNumber":"1234513","goodsId":27767,"quantity":8,"price":"464.00","attributes":[{"spId":9521387,"color":"\u7d2b\u8272","size":"xl","quantity":3,"loseSpec":false},{"spId":9521390,"color":"\u9ec4\u8272","size":"4xl","quantity":5,"loseSpec":false},{"spId":9521391,"color":"\u9ec4\u8272","size":"4xl","quantity":0,"loseSpec":true}],"pirceInfo":{"goods_id":"27767","store_id":"159771","price_type":1,"price_lower":"58.00","price_upper":"58.00","price_data":[{"lower_limit":"1","upper_limit":"0","price":"58.00","type":"1"}]},"tipType":2,"tipReason":"\u8be5\u5546\u54c1\u89c4\u683c\u53d1\u751f\u53d8\u66f4\uff0c\u8bf7\u91cd\u65b0\u9009\u62e9","createdTime":1534733379,"updateTime":1534849131,"useful":false,"colorSum":2,"sizeSum":2,"unit":"件","ifShow":"1","close":"0"}]}]
     * })
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     *
     * @since 2018.8.16
     */
    public function listCart(UidDTO $user = null): array;

    /**
     * 添加购物车.
     *
     * @param int    $goodsId                商品id
     * @param array  $attributes             其他属性 如果规格属性是空数组 [] 则默认找该商品其中一个规格加入购物车（场景用于快速加入购物车）
     * @param array  $attributes['spId']     规格属性Id
     * @param array  $attributes['quantity'] 属性购买数量
     * @param UidDTO $user                   用户
     *
     * @throws \Eelly\SDK\Cart\Exception\CartException
     *
     * @return bool 返回bool值
     * @requestExample({
     *   "goodsId":27767,"attributes":[{"spId":9521387,"quantity":3},{"spId":9521390,"quantity":5}]
     * })
     * @returnExample(true)
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     *
     * @since 2018.8.16
     */
    public function addCart(int $goodsId, array $attributes, UidDTO $user = null): bool;

    /**
     * 添加购物车web.
     *
     * @param int    $goodsId                商品id
     * @param array  $attributes             其他属性 如果规格属性是空数组 [] 则默认找该商品其中一个规格加入购物车（场景用于快速加入购物车）
     * @param array  $attributes['spId']     规格属性Id
     * @param array  $attributes['quantity'] 属性购买数量
     * @param int    $userId                 用户
     *
     * @throws \Eelly\SDK\Cart\Exception\CartException
     *
     * @return bool 返回bool值
     * @requestExample({
     *  27767, [{"spId":9521387,"quantity":3},{"spId":9521390,"quantity":5}], 148086
     * })
     * @returnExample(true)
     *
     * @author sunanzhi/zhangyangxun
     * @since 2018-11-12
     */
    public function addCartWeb(int $goodsId, array $attributes, int $userId): bool;

    /**
     * 获取指定商品来更新购物车.
     *
     * > 返回数据说明
     * key | type | value
     * --- | ---- | ----
     * storeInfo | array | 店铺数据说明
     * goodsInfo | array | 商品数据说明
     * data[]    | array | 规格数据说明
     * priceInfo | array | 价格数据说明
     *
     * > storeInfo 数据说明
     * key | type | value
     * --- | ---- | ----
     * isMix                | int    | 是否混批 0:否， 1:是
     * mixMoney             | float  | 混批价格 （isMix为1的时候才出现）
     * mixNum               | int    | 混批数量 （isMix为1的时候才出现）
     * storeQuantity        | int    | 店铺起批数量
     *
     * > goodsInfo 数据说明
     * key | type | value
     * --- | ---- | ----
     * ifShow | int     | 商品状态 0 下架, 1 上架, 2 自动下架, 3 等待上架, 4 自动上架, 5 卖家已删除
     * close  | int     | 店铺状态 0=正常，1=禁售，2=店铺关闭，3=店铺挂起，4=店铺暂停营业
     * unit   | string  | 商品单位 例如：件
     * goodsImage | string | 商品图片
     * uniqueId   | string | 购物车唯一标识
     *
     * > data 数据说明
     * key | type | value
     * --- | ---- | -----
     * spec_id         | int    | 规格id
     * goods_id        | int    | 商品id
     * spec_1          | string | 规格颜色
     * spec_2          | string | 规格码数
     * color_rgb       | string | rgb颜色
     * price           | float  | 规格价
     * stock           | int    | 规格库存
     * sku             | string | 未知
     * selQuantity     | int    | 选中的数量 默认为0
     * showQuantity    | int    | 初始展示的数量 默认为库存一致
     *
     * > 返回数据 priceInfo 说明 https://api.eelly.test/cart/cart/listCart
     *
     * @param int    $goodsId 商品id
     * @param UidDTO $user    用户
     *
     * @return array
     *
     * @requestExample({
     *      "goodsId":"5155477"
     * })
     * @returnExample({
     *      "storeInfo":{"isMix":"1","mixMoney":"100","mixNum":"2","storeQuantity":"1"},
     *      "goodsInfo":{"ifShow":"2","close":"0","unit":"件","goodsImage":"G03/M08/00/11/small_usauiblsiiwhnf_dhjahi.jpg","uniqueId":"372f86e3539ef75e5b49f393e98decc7"},
     *      "data":[{
     *          "spec_id":"28738542",
     *          "goods_id":"5155477",
     *          "spec_1":"蓝色",
     *          "spec_2":"xxl",
     *          "color_rgb":"",
     *          "price":"0.00",
     *          "stock":"20",
     *          "sku":"",
     *          "selQuantity":"0",
     *          "showQuantity":"20"
     *      }],
     *      "priceInfo":"具体看说明"
     * })
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     *
     * @since 2018.8.27
     */
    public function getCart(int $goodsId, UidDTO $user = null): array;

    /**
     * 更新购物车.
     *
     * > 返回数据说明
     * key | type | value
     * --- | ---- | -----
     * uniqueId             | string | 购物车唯一识别
     * storeId              | int    | 店铺id
     * defaultImage         | string | 商品图片
     * goodsName            | string | 商品名称
     * goodsNumber          | string | 商品货号
     * goodsId              | int    | 商品id
     * quantity             | int    | 商品数量
     * goodsPrice           | foat   | 商品总价
     * singlePrice          | foat   | 商品单价
     * lowerLimit           | int    | 商品最低起批量 0:代表无限制
     * attributes           | array  | 商品规格属性
     * priceInfo            | array  | 价格详情信息
     * priceInfo['goods_id']        | int | 商品id
     * priceInfo['store_id']        | int | 店铺id
     * priceInfo['price_type']      | int | 价格类型
     * priceInfo['price_lower']     | float  | 最低价
     * priceInfo['price_upper']     | float  | 最高价
     * priceInfo['price_data']      | array  | 阶梯价数组（含一或多个，规格报价时只有一个）
     * priceInfo['price_specdata']  | array  | 规格价数组（含一或多个，阶梯价时不存在此key）
     * priceInfo['price_detail']    | array  | 活动相关的详情数据（没活动时不存在此key）
     * priceInfo['price_title']     | string | 活动标题
     * priceInfo['price_crm']       | array  | crm的原价数组（详情页特殊需要）
     * tipType                      | int    | 提示分类 （0:正常，1:规格被抢空，2:规格发生改变）
     * tipReason                    | string | 提示分类的原因 同 tipType
     * createdTime                  | int    | 创建时间
     * updateTime                   | int    | 更新时间
     * useful                       | bool   | 是否有效 true 有效，false 无效
     * colorSum                     | int    | 颜色数量
     * sizeSum                      | int    | 尺寸数量
     * unit                         | string | 商品单位 例:件
     * ifShow                       | int    | 商品状态 0 下架, 1 上架, 2 自动下架, 3 等待上架, 4 自动上架, 5 卖家已删除
     * close                        | int    | 店铺状态 0=正常，1=禁售，2=店铺关闭，3=店铺挂起，4=店铺暂停营业
     *
     * > attributes 商品规格数据说明
     * key | type | value
     * --- | ---- | -----
     * attributes[]['spId']     | int    | 规格id
     * attributes[]['color']    | string | 规格颜色
     * attributes[]['size']     | string | 规格尺寸
     * attributes[]['quantity'] | int    | 规格数量
     * attributes[]['sourceQuantity'] | int    | 商品现有的规格数量
     * attributes[]['loseSpec'] | bool   | 是否不存在该规格 true 是， false， 否
     *
     * > priceInfo['price_data'] 数据说明
     * key | type | value
     * --- | ---- | -----
     * lower_limit | int    | 数量左区间
     * upper_limit | int    | 数量右区间
     * price       | float  | 价格
     *
     * > priceInfo['price_specdata'] 数据说明
     * key | type | value
     * --- | ---- | -----
     * spec_id          | int    | 规格id
     * goods_id         | int    | 商品id
     * spec_1           | string | 规格第一名称，颜色
     * spec_2           | string | 规格第二名称，尺码
     * color_rgb        | string | 颜色RGB值
     * price            | float  | 价格
     * stock            | int    | 库存数量
     * sku              | string | 库存号
     *
     * > riceInfo['price_detail'] 数据说明
     * > 数据说明（只列出公共key，不同活动返回的数组也不同）
     * key | type | value
     * --- | ---- | -----
     * act_id       | int    | 活动id
     * goods_id     | int    | 商品id
     * price        | float  | 价格
     * tag          | string | 活动标签
     * start_time   | int    | 活动开始时间
     * end_time     | int    | 活动结束时间
     * type         | int    | 活动类型
     * expire_time  | int    | 倒计时剩余秒数（无倒计时的活动不存在此key）
     *
     * > tipType 分类说明
     * > tipReason 原因来源
     * key | value
     * --- | -----
     * 0 | 正常情况
     * 1 | 您选的商品规格已被抢空
     * 2 | 该商品规格发生变更，请重新选择
     * 3 | 数量或金额不满足商家混批规则
     *
     * @param string $uniqueId   指定购物车唯一值
     * @param array  $attributes 修改属性
     * @param UidDTO $user       用户信息
     *
     * @throws \Eelly\SDK\Cart\Exception\CartException
     *
     * @return bool
     * @requestExample({
     *   "uniqueId":"372f86e3539ef75e5b49f393e98decc7","attributes":[{"spId":9521387,"quantity":3},{"spId":9521390,"quantity":5}]
     * })
     * @returnExample({
     *   "uniqueId":"372f86e3539ef75e5b49f393e98decc7","defaultImage":"G03/M00/00/B0/small_pYYBAFUvareIVSLaAAYKRm6bJisAABFIAIv_CQABgpe928.jpg","goodsName":"ioeoi正品☆9568时尚典雅法式长大衣","goodsNumber":"1234513","goodsId":27767,"quantity":8,"goodsPrice":"464.00","singlePrice":"58.00","lowerLimit":"3","attributes":[{"spId":9521387,"color":"紫色","size":"xl","quantity":3,"loseSpec":false},{"spId":9521390,"color":"黄色","size":"xl","quantity":5,"loseSpec":false}],"pirceInfo":{"goods_id":"27767","store_id":"159771","price_type":1,"price_lower":"58.00","price_upper":"58.00","price_data":[{"lower_limit":"1","upper_limit":"0","price":"58.00","type":"1"}]},"tipType":2,"tipReason":"该商品规格发生变更，请重新选择","createdTime":1534408722,"updateTime":1534413098,"useful":false,"colorSum":2,"sizeSum":1,"unit":"件","ifShow":"1","close":"0"
     * })
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     *
     * @since 2018.8.16
     */
    public function updateCart(string $uniqueId, array $attributes, UidDTO $user = null): array;

    /**
     * 清空购物车.
     *
     * @param UidDTO $user 用户信息
     *
     * @throws \Eelly\SDK\Cart\Exception\CartException
     *
     * @return bool 返回bool值
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     *
     * @since 2018.8.16
     */
    public function clearCart(UidDTO $user = null): bool;

    /**
     * 删除指定id购物车数据.
     *
     *
     * @param string $uniqueId 指定购物车key值 列表中存在
     * @param UidDTO $user     用户信息
     *
     * @throws \Eelly\SDK\Cart\Exception\CartException
     *
     * @return bool
     * @requestExample({
     *   "uniqueId":"372f86e3539ef75e5b49f393e98decc7"
     * })
     * @returnExample(true)
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     *
     * @since 2018.8.16
     */
    public function deleteCart(string $uniqueId, UidDTO $user = null): bool;

    /**
     * 删除购物车数据web.
     *
     *
     * @param int $goodsId
     * @param int $userId
     *
     * @throws \Eelly\SDK\Cart\Exception\CartException
     *
     * @return bool
     *
     * @author zhangyangxun
     * @since 2018-11-12
     */
    public function deleteCartWeb(int $goodsId, int $userId): bool;

    /**
     * 批量移除购物车.
     *
     * @param array  $uniqueIds 购物车key值id数组
     * @param UidDTO $user      用户信息
     *
     * @throws \Eelly\SDK\Cart\Exception\CartException
     *
     * @return bool 返回bool值
     * @requestExample({
     *   "372f86e3539ef75e5b49f393e98decc7","37uu99hne112j6e3539ef9f93e98deuy"
     * })
     * @returnExample(true)
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     *
     * @since 2018.8.16
     */
    public function deleteCartBatch(array $uniqueIds, UidDTO $user = null): bool;

    /**
     * 获取购物车数量限制.
     *
     * @return int
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     *
     * @since 2018.8.16
     */
    public function getMaxCount(): int;

    /**
     * 获取购物车数量.
     *
     * @param UidDTO $user 当前登陆的用户
     *
     * @return int
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     *
     * @since 2018.8.16
     */
    public function getCartCount(UidDTO $user = null): int;

    /**
     * 通过用户id获取购物车数量.
     *
     * @param int $userId 用户ID
     *
     * @return integer
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     *
     * @since 2018.10.16
     */
    public function getCartCountByUserId(int $userId): int;

    /**
     * 批量获取购物车商品
     *
     * > 返回数据说明
     * key | type | value
     * --- | ---- | -----
     * uniqueId             | string | 购物车唯一识别
     * storeId              | int    | 店铺id
     * defaultImage         | string | 商品图片
     * goodsName            | string | 商品名称
     * goodsNumber          | string | 商品货号
     * goodsId              | int    | 商品id
     * quantity             | int    | 商品数量
     * goodsPrice           | foat   | 商品总价
     * singlePrice          | foat   | 商品单价
     * lowerLimit           | int    | 商品最低起批量 0:代表无限制
     * attributes           | array  | 商品规格属性
     * priceInfo            | array  | 价格详情信息
     * priceInfo['goods_id']        | int | 商品id
     * priceInfo['store_id']        | int | 店铺id
     * priceInfo['price_type']      | int | 价格类型
     * priceInfo['price_lower']     | float  | 最低价
     * priceInfo['price_upper']     | float  | 最高价
     * priceInfo['price_data']      | array  | 阶梯价数组（含一或多个，规格报价时只有一个）
     * priceInfo['price_specdata']  | array  | 规格价数组（含一或多个，阶梯价时不存在此key）
     * priceInfo['price_detail']    | array  | 活动相关的详情数据（没活动时不存在此key）
     * priceInfo['price_title']     | string | 活动标题
     * priceInfo['price_crm']       | array  | crm的原价数组（详情页特殊需要）
     * tipType                      | int    | 提示分类 （0:正常，1:规格被抢空，2:规格发生改变）
     * tipReason                    | string | 提示分类的原因 同 tipType
     * createdTime                  | int    | 创建时间
     * updateTime                   | int    | 更新时间
     * useful                       | bool   | 是否有效 true 有效，false 无效
     * colorSum                     | int    | 颜色数量
     * sizeSum                      | int    | 尺寸数量
     * unit                         | string | 商品单位 例:件
     * ifShow                       | int    | 商品状态 0 下架, 1 上架, 2 自动下架, 3 等待上架, 4 自动上架, 5 卖家已删除
     * close                        | int    | 店铺状态 0=正常，1=禁售，2=店铺关闭，3=店铺挂起，4=店铺暂停营业
     *
     * > attributes 商品规格数据说明
     * key | type | value
     * --- | ---- | -----
     * attributes[]['spId']     | int    | 规格id
     * attributes[]['color']    | string | 规格颜色
     * attributes[]['size']     | string | 规格尺寸
     * attributes[]['quantity'] | int    | 规格数量
     * attributes[]['sourceQuantity'] | int    | 商品现有的规格数量
     * attributes[]['loseSpec'] | bool   | 是否不存在该规格 true 是， false， 否
     *
     * > priceInfo['price_data'] 数据说明
     * key | type | value
     * --- | ---- | -----
     * lower_limit | int    | 数量左区间
     * upper_limit | int    | 数量右区间
     * price       | float  | 价格
     *
     * > priceInfo['price_specdata'] 数据说明
     * key | type | value
     * --- | ---- | -----
     * spec_id          | int    | 规格id
     * goods_id         | int    | 商品id
     * spec_1           | string | 规格第一名称，颜色
     * spec_2           | string | 规格第二名称，尺码
     * color_rgb        | string | 颜色RGB值
     * price            | float  | 价格
     * stock            | int    | 库存数量
     * sku              | string | 库存号
     *
     * > riceInfo['price_detail'] 数据说明
     * > 数据说明（只列出公共key，不同活动返回的数组也不同）
     * key | type | value
     * --- | ---- | -----
     * act_id       | int    | 活动id
     * goods_id     | int    | 商品id
     * price        | float  | 价格
     * tag          | string | 活动标签
     * start_time   | int    | 活动开始时间
     * end_time     | int    | 活动结束时间
     * type         | int    | 活动类型
     * expire_time  | int    | 倒计时剩余秒数（无倒计时的活动不存在此key）
     *
     * > tipType 分类说明
     * > tipReason 原因来源
     * key | value
     * --- | -----
     * 0 | 正常情况
     * 1 | 您选的商品规格已被抢空
     * 2 | 该商品规格发生变更，请重新选择
     * 3 | 数量或金额不满足商家混批规则
     *
     * @param array $uniqueIds 指定购物车key值数组，userId _ goodsId, 数据格式中md5值
     * @param int   $userId    用户id
     *
     * @return array
     *
     * @requestExample({
     *   "uniqueIds":[{"f54a532d0f2b60071cfec2149476f1c3","372f86e3539ef75e5b49f393e98decc7","701eb18b6a9bec5e13973101df32b8c8"}],
     *   "userId":"123456789"
     * })
     * @returnExample({
     *   [{"uniqueId":"f54a532d0f2b60071cfec2149476f1c3","storeId":159771,"storeName":"\u827e\u6b27\u4e25\u9009\u5927\u7801\u5973\u88c5","defaultImage":"G03/M00/00/B0/small_pYYBAFUvareIVSLaAAYKRm6bJisAABFIAIv_CQABgpe928.jpg","goodsName":"ioeoi1120\u80d6mm\u5927\u7801\u5973\u88c5\u6625\u88c5 \u649e\u8272\u53e3\u888b\u8fde\u5e3d2015\u4f11\u95f2\u5957\u88c5\u6625\u5b63\u8fd0\u52a8\u5957\u88c5\u5973","goodsNumber":"1234513","goodsId":5155477,"quantity":1,"goodsPrice":"74.00","singlePrice":"74.00","lowerLimit":"4","attributes":[{"spId":28738538,"color":"\u7d2b\u8272","size":"xl","quantity":1,"loseSpec":false},{"spId":28738538111,"color":"\u7d2b\u8272","size":"xl","quantity":0,"loseSpec":true}],"pirceInfo":{"goods_id":"5155477","store_id":"159771","price_type":1,"price_lower":"74.00","price_upper":"89.00","price_data":[{"lower_limit":"3","upper_limit":"4","price":"89.00","type":"1"},{"lower_limit":"5","upper_limit":"9","price":"79.00","type":"2"},{"lower_limit":"10","upper_limit":"0","price":"74.00","type":"3"}]},"tipType":2,"tipReason":"\u8be5\u5546\u54c1\u89c4\u683c\u53d1\u751f\u53d8\u66f4\uff0c\u8bf7\u91cd\u65b0\u9009\u62e9","createdTime":1534817709,"updateTime":1534903157,"useful":false,"colorSum":1,"sizeSum":1,"unit":"件","ifShow":"1","close":"0"},{"uniqueId":"372f86e3539ef75e5b49f393e98decc7","storeId":159771,"storeName":"\u827e\u6b27\u4e25\u9009\u5927\u7801\u5973\u88c5","goodsName":"ioeoi\u6b63\u54c1\u26069568\u65f6\u5c1a\u5178\u96c5\u6cd5\u5f0f\u957f\u5927\u8863","goodsNumber":"1234513","goodsId":27767,"quantity":8,"price":"464.00","attributes":[{"spId":9521387,"color":"\u7d2b\u8272","size":"xl","quantity":3,"loseSpec":false},{"spId":9521390,"color":"\u9ec4\u8272","size":"4xl","quantity":5,"loseSpec":false},{"spId":9521391,"color":"\u9ec4\u8272","size":"4xl","quantity":0,"loseSpec":true}],"pirceInfo":{"goods_id":"27767","store_id":"159771","price_type":1,"price_lower":"58.00","price_upper":"58.00","price_data":[{"lower_limit":"1","upper_limit":"0","price":"58.00","type":"1"}]},"tipType":2,"tipReason":"\u8be5\u5546\u54c1\u89c4\u683c\u53d1\u751f\u53d8\u66f4\uff0c\u8bf7\u91cd\u65b0\u9009\u62e9","createdTime":1534733379,"updateTime":1534903158,"useful":false,"colorSum":2,"sizeSum":2,"unit":"件","ifShow":"1","close":"0"},{"uniqueId":"701eb18b6a9bec5e13973101df32b8c8","storeId":1760467,"storeName":"test\u5e97\u94fa\u6d4b\u8bd5","goodsName":"19\u5757\u94b1\u7279\u4ef7","goodsNumber":"1234513","goodsId":5578934,"quantity":3,"price":"55.50","attributes":[{"spId":32090859,"color":"\u7d2b\u8272","size":"xl","quantity":3,"loseSpec":false}],"pirceInfo":{"goods_id":"5578934","store_id":"1760467","price_type":2001,"price_lower":"20.00","price_upper":"20.00","price_data":[{"lower_limit":"1","upper_limit":"0","price":"20.00","type":"1"}],"price_pay":"18.50","price_title":"\u9650\u65f6\u7279\u60e0","price_detail":{"act_id":"3401","goods_id":"5578934","nums":"0","mbr_buy_limit":"0","price":"18.50","type_info":"a:0:{}","tag":"\u9650\u65f6\u7279\u60e0","start_time":"1503561600","end_time":"1535702399","type":"16","is_limit_mbrbuy":"1","single":"0","is_set_nums":"1","expire_time":913638}},"tipType":0,"tipReason":"\u6b63\u5e38\u60c5\u51b5","createdTime":1534817561,"updateTime":1534903157,"useful":true,"colorSum":1,"sizeSum":1,"unit":"件","ifShow":"1","close":"0"}]
     * })
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     *
     * @since 2018.8.22
     */
    public function getCartBatch(array $uniqueIds, int $userId): array;

    /**
     * 获取商品数据规格
     *
     * * > 返回数据说明
     *
     * key | type | value
     * --- | ---- | ----
     * storeInfo | array | 店铺数据说明
     * goodsInfo | array | 商品数据说明
     * data[]    | array | 规格数据说明
     * priceInfo | array | 价格数据说明
     *
     * > storeInfo 数据说明
     *
     * key | type | value
     * --- | ---- | ----
     * isMix                | int    | 是否混批 0:否， 1:是
     * mixMoney             | float  | 混批价格 （isMix为1的时候才出现）
     * mixNum               | int    | 混批数量 （isMix为1的时候才出现）
     * storeQuantity        | int    | 店铺起批数量
     *
     * > goodsInfo 数据说明
     *
     * key | type | value
     * --- | ---- | ----
     * ifShow | int     | 商品状态 0 下架, 1 上架, 2 自动下架, 3 等待上架, 4 自动上架, 5 卖家已删除
     * close  | int     | 店铺状态 0=正常，1=禁售，2=店铺关闭，3=店铺挂起，4=店铺暂停营业
     * unit   | string  | 商品单位 例如：件
     * goodsImage | string | 商品图片
     *
     * > data 数据说明
     *
     * key | type | value
     * --- | ---- | -----
     * spec_id         | int    | 规格id
     * goods_id        | int    | 商品id
     * spec_1          | string | 规格颜色
     * spec_2          | string | 规格码数
     * color_rgb       | string | rgb颜色
     * price           | float  | 规格价
     * stock           | int    | 规格库存
     * sku             | string | 未知
     * selQuantity     | int    | 选中的数量 默认为0
     * showQuantity    | int    | 初始展示的数量 默认为库存一致
     *
     * > 返回数据 priceInfo 说明 https://api.eelly.test/cart/cart/listCart
     *
     * @param int $goodsId 商品id
     *
     * @return array
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     *
     * @since 2018.9.20
     */
    public function getGoods(int $goodsId): array;

    /**
     * 提交订单后删除购物车接口，不对外.
     *
     * @param array $goodsId 商品id 数组
     * @param int   $userId  用户id
     *
     * @return boolean
     *
     * @requestExample({
     *  "goodsId":{"50001744", "50001855"},
     *  "userId":"148086"
     * })
     * @returnExample(true)
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     *
     * @since 2018.10.13
     */
    public function delCartByOrder(array $goodsId, int $userId): bool;

    /**
     * 获取用户购物车商品id.
     *
     * @param int $userId 用户id
     *
     * @return array
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     *
     * @since 2018.10.16
     */
    public function getCartGoodsId(int $userId): array;
}
