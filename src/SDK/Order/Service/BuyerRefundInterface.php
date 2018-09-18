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
 * 买家退货退款
 *
 * @author sunanzhi <sunanzhi@hotmail.com>
 */
interface BuyerRefundInterface
{

    /**
     * 未发货申请退款
     *
     * > params 数据说明
     * 
     * key | type | value
     * --- | ---- | -----
     * returnAmount | int    | 退款金额 单位分
     * remarkType   | int    | 退款原因
     * remark       | string | 退款说明 (可选)
     * certificate  | array  | 退款凭证图片 (可选)
     * 
     * @param array $params 申请退款的数据
     * @param integer $orderId 订单id
     * @param UidDTO $user 当前登陆的用户
     * @return boolean
     * 
     * @requestExample({
     *      "returnAmount":"100",
     *      "remarkType":"1",
     *      "remark":"我就是想退个货而已",
     *      "certificate":{"0":"123456.jpg","1":"dfghj.jpg","2":"ertyuio.jpg"}
     * })
     * @returnExample(true)
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.18
     */
    public function requestReturnAmount(array $params, int $orderId, UidDTO $user = null): bool;

    /**
     * 未发货申请退款修改
     * 
     * > params 数据说明
     * key | type | value
     * --- | ---- | -----
     * returnAmount | int    | 退款金额 单位分
     * remarkType   | int    | 退款原因
     * remark       | string | 退款说明 (可选)
     * certificate  | array  | 退款凭证图片 (可选)
     * 
     * @param array $params 修改申请退款的数据
     * @param integer $orderId 订单id
     * @param UidDTO $user 当前登陆的用户
     * @return boolean
     * 
     * @requestExample({
     *      "returnAmount":"100",
     *      "remarkType":"1",
     *      "remark":"我就是想退个货而已",
     *      "certificate":{"0":"123456.jpg","1":"dfghj.jpg","2":"ertyuio.jpg"}
     * })
     * @returnExample(true)
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.13
     */
    public function requestReturnAmountEdit(array $params, int $orderId, UidDTO $user = null): bool;

    /**
     * 已发货申请退款/退货退款
     *
     * > params 数据说明
     * 
     * key | type | value
     * --- | ---- | -----
     * returnAmount | int    | 退款金额 
     * type         | int    | 申请类型 1:仅退款 2:退货退款
     * remarkType   | int    | 退款原因
     * orderGoods   | array  | 退款商品
     * remark       | string | 退款说明 (可选)
     * certificate  | array  | 退款凭证 (可选)
     * 
     * > orderGoods 退款商品数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * ogId     | int | 退款商品id
     * quantity | int | 退货数量
     * 
     * @param array $params 申请退货退款的数据
     * @param integer $orderId 订单id
     * @param UidDTO $user 当前登陆的用户
     * @return boolean
     * 
     * @requestExample({
     *      "returnAmount":"100",
     *      "type":"1",
     *      "orderGoods":[{"ogId":"540931","quantity":"2"},{"ogId":"540921","quantity":"3"}],
     *      "remarkType":"1",
     *      "remark":"我就是想退个货而已",
     *      "certificate":{"0":"123456.jpg","1":"dfghj.jpg","2":"ertyuio.jpg"}
     * })
     * @returnExample(true)
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.13
     */
    public function requestRefund(array $params, int $orderId, UidDTO $user = null): bool;

    /**
     * 已发货申请退款/退货退款 修改
     *
     * > params 数据说明
     * 
     * key | type | value
     * --- | ---- | -----
     * returnAmount | int    | 退款金额 
     * type         | int    | 申请类型 1:仅退款 2:退货退款
     * remarkType   | int    | 退款原因
     * orderGoods   | array  | 退款商品
     * remark       | string | 退款说明 (可选)
     * certificate  | array  | 退款凭证 多图数组形式 (可选)
     * 
     * > orderGoods 退款商品数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * ogId     | int | 退款商品id
     * quantity | int | 退货数量
     * 
     * @param array $params 申请退货退款的数据
     * @param integer $orderId 订单id
     * @param UidDTO $user 当前登陆的用户
     * @return boolean
     * 
     * @requestExample({
     *      "returnAmount":"100",
     *      "type":"1",
     *      "orderGoods":[{"ogId":"540931","quantity":"2"},{"ogId":"540921","quantity":"3"}],
     *      "remarkType":"1",
     *      "remark":"我就是想退个货而已",
     *      "certificate":{"0":"123456.jpg","1":"dfghj.jpg","2":"ertyuio.jpg"}
     * })
     * @returnExample(true)
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.14
     */
    public function requestRefundEdit(array $params, int $orderId, UidDTO $user = null): bool;

    /**
     * 申请退货退款页面所需订单数据
     *
     * > 返回数据说明
     * 
     * key | type | value
     * --- | ---- | -----
     * orderId          | int       | 订单id
     * orderAmount      | int       | 订单总额
     * freight          | int       | 订单运费
     * orderGoods       | array     | 订单商品 (请求的type 不为1出现)
     * remark           | array     | 退款原因（根据返回情况展示）
     * discountAmount   | int       | 优惠金额 有优惠才会出现此数据
     * 
     * > orderGoods 数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * goodsName  | string | 商品名称
     * orderGoods | array  | 改商品下有多少规格商品
     * 
     * > orderGoods->data 商品规格数组数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * ogId             | int    | 订单商品id
     * quantity         | int    | 所选规格数量
     * sourceQuantity   | int    | 原商品规格下单数量
     * goodsId          | int    | 商品id
     * price            | int    | 商品下单金额 单位：分
     * discountAmount   | int    | 商品优惠后的金额
     * goodsName        | string | 商品名称
     * goodsImage       | string | 商品图片
     * spec             | string | 商品规格
     * gsId             | int    | 规格id
     * 
     * > remark 数据说明
     * 
     * key | value
     * --- | ----
     * 0   | 其他
     * 1   | 无理由退货
     * 2   | 退运费
     * 3   | 商品质量问题
     * 4   | 超时未发货
     * 5   | 卖家错发/漏发
     * 6   | 未收到货
     * 7   | 商品语描述不符
     * 8   | 商品破损/残缺
     * 11  | 商品缺货
     * 13  | 不想要了/不想拍了
     * 
     * @param integer $orderId 订单id
     * @param integer $phase 准备类型 1:未发货申请退款，2:已发货申请退款，3:已发货申请退货退款
     * @param UidDTO $user 当前登陆的用户
     * @return array
     * 
     * @requestExample({"orderId":"50001744","phase":"2"})
     * @returnExample({"orderId":50001744,"orderAmount":"23400","freight":"0","orderGoods":[{"goodsName":"\u3010\u65e5\u97e9\u5973\u88c5\u65d7\u8230\u5e97\u3011 2018\u65b0\u6b3e \u9488\u7ec7\u886b\/\u6bdb\u8863  \u5305\u90ae","orderGoods":[{"ogId":"20001424","orderId":"50001744","goodsId":"1450168197","gsId":"195022004","price":"2900","quantity":"3","goodsName":"\u3010\u65e5\u97e9\u5973\u88c5\u65d7\u8230\u5e97\u3011 2018\u65b0\u6b3e \u9488\u7ec7\u886b\/\u6bdb\u8863  \u5305\u90ae","goodsImage":"G02\/M00\/00\/03\/small_ooYBAFqaRR6IF0K1AAFPWNeoLjcAAABgQK8bi8AAU9w267.jpg","goodsNumber":"","spec":"\u989c\u8272:,\u5c3a\u7801:","createdTime":"1536044322","updateTime":"2018-09-04 14:58:42","discountAmount":2776}]},{"goodsName":"fgh ","orderGoods":[{"ogId":"20001425","orderId":"50001744","goodsId":"1450168334","gsId":"195022184","price":"11100","quantity":"1","goodsName":"fgh ","goodsImage":"G02\/M00\/00\/03\/small_ooYBAFrDQlaIcTeFAAHMuyce2dIAAABggCCW44AAczT140.jpg","goodsNumber":"","spec":"\u989c\u8272:,\u5c3a\u7801:","createdTime":"1536044322","updateTime":"2018-09-04 14:58:42","discountAmount":10626}]}],"remark":{"0":"\u5176\u4ed6","1":"\u65e0\u7406\u7531\u9000\u8d27","3":"\u5546\u54c1\u8d28\u91cf\u95ee\u9898","5":"\u5356\u5bb6\u9519\u53d1\/\u6f0f\u53d1","7":"\u5546\u54c1\u4e0e\u63cf\u8ff0\u4e0d\u7b26","8":"\u5546\u54c1\u7834\u635f\/\u6b8b\u7f3a"}})
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.13
     */
    public function prepareOrderRefund(int $orderId, int $phase, UidDTO $user = null): array;

    /**
     * 退货退款详情
     * 
     * > 返回数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * orderId          | int    | 订单id
     * osId             | int    | 订单状态
     * orderSn          | string | 订单号
     * orOsId           | int    | 退货退款状态
     * applyAmount      | int    | 申请退款金额 单位：分
     * orType           | int    | 申请类型 1:退款 2:退货
     * remarkType       | string | 退款原因
     * remark           | string | 退款说明
     * certificate      | array  | 图片凭证
     * storeId          | int    | 店铺id
     * storeName        | string | 店铺名称
     * createdTime      | date   | 下单时间
     * payTime          | date   | 支付时间
     * cancelTime       | date   | 撤销退货退款时间
     * finishedTime     | date   | 完成退货退款时间
     * updateTime       | date   | 退货退款更新时间
     * countLogs        | int    | 协商记录总数
     * statusContent    | string | 状态说明
     * status           | int    | 状态
     * firstRequestTime | date   | 首次申请退货退款时间
     * countDown        | int    | 倒计时 没有则 0
     * orderGoods       | array  | 退货退款商品数据
     * 
     * > status 和 statusContent 对应关系
     * 
     * key | value | extra
     * --- | ----- | -----
     * 0   | 订单出错，请联系客服           | 没有对应的状态
     * 1   | 退款申请已提交，等待卖家处理     | -
     * 2   | 退款结算中                    | 卖家同意退款，衣联系统正在结算
     * 3   | 卖家拒绝退款，等待我处理        | -
     * 4   | 退货申请已提交，等待卖家处理     | -
     * 5   | 卖家拒绝退货，等待我处理        | -
     * 6   | 卖家同意退货，等待我退货        | -
     * 7   | 我已发货，等待卖家收货          | -
     * 8   | 退款结算中                    | 卖家确认收到退货，衣联系统正在结算
     * 9   | 我已申请衣联客服介入            | 买家申请仲裁
     * 10  | 卖家申请衣联客服介入            | 卖家申请仲裁
     * 11  | 衣联客服已介入处理             | -
     * 12  | 交易取消                      | 全额退款成功，订单取消
     * 13  | 售后完成，属于卖家责任          | -
     * 14  | 售后完成，属于买家责任          | -
     * 15  | 售后完成，属于双方共同责任       | -
     * 16  | 退款关闭                      | 您主动撤销申请，退款关闭
     * 17  | 退款完成                      | 部分退款成功，交易完成
     * 18  | 退款取消                      | 卖家发货，申请取消
     * 19  | 售后完成，其他原因              | -
     *
     * > orderGoods 数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * goodsName  | string | 商品名称
     * orderGoods | array  | 改商品下有多少规格商品
     * 
     * > orderGoods->data 商品规格数组数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * ogId             | int    | 订单商品id
     * quantity         | int    | 所选规格数量
     * sourceQuantity   | int    | 原商品规格下单数量
     * goodsId          | int    | 商品id
     * price            | int    | 商品下单金额 单位：分
     * discountAmount   | int    | 商品优惠后的金额
     * goodsName        | string | 商品名称
     * goodsImage       | string | 商品图片
     * spec             | string | 商品规格
     * gsId             | int    | 规格id
     * 
     * @param integer $orderId 订单id
     * @param UidDTO $user 当前登陆的用户
     * @return array
     * 
     * @requestExample({"orderId":"50001744"})
     * @returnExample({"orderId":50001744,"osId":"4","orderSn":"2153604432213748","orOsId":"22","applyAmount":"100","orType":"1","remarkType":"\u5546\u54c1\u7f3a\u8d27","remark":"\u6211\u4eab\u53d7\u4e70\u5bb6\u7684\u6743\u76ca\uff0c\u6240\u4ee5\u6211\u4e0d\u8981\u4e86","certificate":["123.jpg","456.jpg","789.jpg"],"storeId":"148086","storeName":"\u65e5\u97e9\u5973\u88c5\u65d7\u8230\u5e97","createdTime":"2018-09-04 14:58:42","payTime":"","cancelTime":"","shipTime":"1970-01-01 08:02:03","finishedTime":"","statusContent":"\u6211\u5df2\u7533\u8bf7\u8863\u8054\u5ba2\u670d\u4ecb\u5165","status":9,"firstRequestTime":"2018-09-14 15:57:06","lastRequestTime":"2018-09-14 18:37:52","countLogs":14,"countDown":0,"orderGoods":[{"goodsName":"\u3010\u65e5\u97e9\u5973\u88c5\u65d7\u8230\u5e97\u3011 2018\u65b0\u6b3e \u9488\u7ec7\u886b\/\u6bdb\u8863  \u5305\u90ae","orderGoods":[{"ogId":"20001424","quantity":"1","sourceQuantity":"3","goodsId":"1450168197","price":"2900","goodsName":"\u3010\u65e5\u97e9\u5973\u88c5\u65d7\u8230\u5e97\u3011 2018\u65b0\u6b3e \u9488\u7ec7\u886b\/\u6bdb\u8863  \u5305\u90ae","goodsImage":"G02\/M00\/00\/03\/small_ooYBAFqaRR6IF0K1AAFPWNeoLjcAAABgQK8bi8AAU9w267.jpg","goodsNumber":"","spec":"\u989c\u8272:,\u5c3a\u7801:","gsId":"195022004","discountAmount":2776}]},{"goodsName":"fgh ","orderGoods":[{"ogId":"20001425","quantity":"1","sourceQuantity":"1","goodsId":"1450168334","price":"11100","goodsName":"fgh ","goodsImage":"G02\/M00\/00\/03\/small_ooYBAFrDQlaIcTeFAAHMuyce2dIAAABggCCW44AAczT140.jpg","goodsNumber":"","spec":"\u989c\u8272:,\u5c3a\u7801:","gsId":"195022184","discountAmount":10626}]}]})
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.13
     */
    public function orderRefundDetail(int $orderId, UidDTO $user = null):array;

    /**
     * 修改退货退款数据所需数据
     *
     * > 返回数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * orderId          | int    | 订单id
     * orderAmount      | int    | 订单总额 单位：分
     * freight          | int    | 运费 单位分
     * applyAmount      | int    | 申请的金额 单位：分
     * phase            | int    | 数据类型 1:未发货发起的退款 2:已发货发起的退款 3:已发货发起的退货退款
     * remarkType       | int    | 退款原因
     * remark           | array  | 退款原因列表
     * certificate      | array  | 图片凭证
     * 
     * > remark 数据说明
     * 
     * key | value
     * --- | ----
     * 0   | 其他
     * 1   | 无理由退货
     * 2   | 退运费
     * 3   | 商品质量问题
     * 4   | 超时未发货
     * 5   | 卖家错发/漏发
     * 6   | 未收到货
     * 7   | 商品语描述不符
     * 8   | 商品破损/残缺
     * 11  | 商品缺货
     * 13  | 不想要了/不想拍了
     * 
     * > orderGoods 数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * goodsName  | string | 商品名称
     * orderGoods | array  | 改商品下有多少规格商品
     * 
     * > orderGoods->data 商品规格数组数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * ogId             | int    | 订单商品id
     * quantity         | int    | 原商品规格下单数量
     * selQuantity      | int    | 选中的数量
     * goodsId          | int    | 商品id
     * price            | int    | 商品下单金额 单位：分
     * discountAmount   | int    | 商品优惠后的金额
     * goodsName        | string | 商品名称
     * goodsImage       | string | 商品图片
     * spec             | string | 商品规格
     * gsId             | int    | 规格id
     * 
     * @param integer $orderId 订单id 
     * @param UidDTO $user 当前登陆的用户
     * @return array
     * 
     * @requestExample({"orderId":"50001744"})
     * @returnExample({"orderId":50001744,"orderAmount":"23400","freight":"0","applyAmount":"100","phase":"2","remarkType":"11","remark":{"0":"\u5176\u4ed6","6":"\u672a\u6536\u5230\u8d27","11":"\u5546\u54c1\u7f3a\u8d27"},"certificate":["123.jpg","456.jpg","789.jpg"],"orderGoods":[{"goodsName":"\u3010\u65e5\u97e9\u5973\u88c5\u65d7\u8230\u5e97\u3011 2018\u65b0\u6b3e \u9488\u7ec7\u886b\/\u6bdb\u8863  \u5305\u90ae","orderGoods":[{"ogId":"20001424","orderId":"50001744","goodsId":"1450168197","gsId":"195022004","price":"2900","quantity":"3","goodsName":"\u3010\u65e5\u97e9\u5973\u88c5\u65d7\u8230\u5e97\u3011 2018\u65b0\u6b3e \u9488\u7ec7\u886b\/\u6bdb\u8863  \u5305\u90ae","goodsImage":"G02\/M00\/00\/03\/small_ooYBAFqaRR6IF0K1AAFPWNeoLjcAAABgQK8bi8AAU9w267.jpg","goodsNumber":"","spec":"\u989c\u8272:,\u5c3a\u7801:","createdTime":"1536044322","updateTime":"2018-09-04 14:58:42","discountAmount":2776,"selQuantity":"1"}]},{"goodsName":"fgh ","orderGoods":[{"ogId":"20001425","orderId":"50001744","goodsId":"1450168334","gsId":"195022184","price":"11100","quantity":"1","goodsName":"fgh ","goodsImage":"G02\/M00\/00\/03\/small_ooYBAFrDQlaIcTeFAAHMuyce2dIAAABggCCW44AAczT140.jpg","goodsNumber":"","spec":"\u989c\u8272:,\u5c3a\u7801:","createdTime":"1536044322","updateTime":"2018-09-04 14:58:42","discountAmount":10626,"selQuantity":"1"}]}]})
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.17
     */
    public function orderRefundEdit(int $orderId, UidDTO $user = null):array;

    /**
     * 撤销退货退款
     * 
     * @param integer $orderId 订单id
     * @param UidDTO $user 当前登陆的用户
     * @return boolean
     * 
     * @requestExample({"orderId":"50001744"})
     * @returnExample(true)
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.13
     */
    public function undoOrderRefund(int $orderId, UidDTO $user = null):bool;

    /**
     * 协商记录
     *
     * > 返回数据说明
     * 
     * key | type | value
     * --- | ---- | -----
     * orlId            | int    | 日志id
     * toOsId           | int    | 日志当时状态
     * handleType       | int    | 操作者类型：0 系统或管理员操作 1 买家操作 2 卖家操作
     * handleName       | string | 操作者名称
     * handleId         | int    | 操作者id
     * remark           | string | 备注
     * certificate      | array  | 凭证数据 空数组显示remark即可
     * createdTime      | date   | 创建时间
     * 
     * > certificate 数据说明之退货数据
     * 
     * key | type | value
     * --- | ---- | -----
     * consignee        | string | 收件人姓名
     * gbCode           | string | 地区编码
     * regionName       | string | 地区名称
     * address          | string | 详情地址
     * zipcode          | string | 邮编
     * phoneTel         | string | 收件人联系号
     * phoneMob         | string | 收件人手机号
     * invoiceCode      | string | 送货编码
     * invoiceName      | string | 快递公司
     * invoiceNo        | string | 送货单号
     * 
     * > certificate 数据说明之申请数据凭证
     * 
     * key | type | value
     * --- | ---- | -----
     * orderId          | int    | 订单id
     * osId             | int    | 当时订单状态值
     * type             | int    | 类型 1:退款 2:退货
     * phase            | int    | 发生退货退款阶段：1 未发货发起的退款 2 已发货发起的退款 3 已发货发起的退货退款
     * applyAmount      | int    | 申请金额
     * certificate      | array  | 图片凭证数组 
     * remarkType       | string | 退货退款原因
     * remark           | string | 退货退款说明
     * 
     * > certificate 数据说明之卖家拒绝
     * 
     * key | type | value
     * --- | ---- | -----
     * remark       | string | 备注日志内容
     * refuseReason | string | 拒绝理由
     * certificate  | array  | 图片凭证数组
     * 
     * > certificate 数据说明之卖家同意退货
     * 
     * key | type | value
     * --- | ---- | -----
     * address      | string | 收货地址
     * consignee    | string | 收货人姓名
     * phone        | string | 电话号码
     * mobile       | string | 手机号码
     * regionName   | string | 省市区中文
     * code         | string | 地区编码
     * 
     * @param integer $orderId 订单id
     * @param UidDTO $user 当前登陆的用户
     * @return array
     * 
     * @requestExample({"orderId":"50001744"})
     * @returnExample([
     *      {"orlId":529383,"toOsId":22,"handleType":1,"handleName":"\u4e70\u5bb6\u540d\u79f0","handleId":148086,"remark":"\u4e70\u5bb6 \u4e70\u5bb6\u540d\u79f0 \u64a4\u9500\u4e86\u5ba2\u670d\u7533\u8bf7","certificate":"[]","createdTime":"2018-09-18 15:35:01"},
     *      {"orlId":529383,"toOsId":22,"handleType":1,"handleName":"\u4e70\u5bb6\u540d\u79f0","handleId":148086,"remark":"\u4e70\u5bb6 \u4e70\u5bb6\u540d\u79f0 \u64a4\u9500\u4e86\u5ba2\u670d\u7533\u8bf7","certificate":{"address":"收货地址","consignee":"收件人姓名","phone":"电话号码","mobile":"手机号码","regionName":"省市区中文","code":"地区编码"},"createdTime":"2018-09-18 15:35:01"},
     *      {"orlId":529382,"toOsId":18,"handleType":1,"handleName":"\u4e70\u5bb6\u540d\u79f0","handleId":148086,"remark":"\u4e70\u5bb6 \u4e70\u5bb6\u540d\u79f0 \u64a4\u9500\u4e86\u5ba2\u670d\u7533\u8bf7","certificate":{"refuseReason":"卖家拒绝理由","remark":"此时此刻买家申请的remark数据","certificate":{"0":"12345.jpg","1":"3456789jpg","2":"0987654567.jpg"}},"createdTime":"2018-09-18 15:17:29"},
     *      {"orlId":529377,"toOsId":18,"handleType":1,"handleName":"\u4e70\u5bb6\u540d\u79f0","handleId":148086,"remark":"\u4e70\u5bb6 \u4e70\u5bb6\u540d\u79f0 \u4fee\u6539\u4e86\u9000\u8d27\u4fe1\u606f","certificate":{"addrId":"482501","consignee":"\u65b9\u5065\u7fa4","address":"1","zipcode":"510000","phoneTel":"1","phoneMob":"1","regionName":"\u5e7f\u4e1c\u7701 \u5e7f\u5dde\u5e02 \u8d8a\u79c0\u533a","gbCode":"440104","storeId":1762613,"invoiceCode":"ztkd","invoiceName":"\u4e2d\u901a\u5feb\u9012yyyy","invoiceNo":"123456789ty34567"},"createdTime":"2018-09-18 10:50:20"},
     *      {"orlId":529371,"toOsId":20,"handleType":1,"handleName":"\u4e70\u5bb6\u540d\u79f0","handleId":148086,"remark":"\u4e70\u5bb6 \u4e70\u5bb6\u540d\u79f0 \u91cd\u65b0\u7533\u8bf7\u4e86\u9000\u8d27\u9000\u6b3e","certificate":{"orderId":50001744,"osId":20,"type":1,"phase":2,"applyAmount":100,"certificate":["123.jpg","456.jpg","789.jpg"],"remarkType":"\u5546\u54c1\u7f3a\u8d27","remark":"\u6211\u4eab\u53d7\u4e70\u5bb6\u7684\u6743\u76ca\uff0c\u6240\u4ee5\u6211\u4e0d\u8981\u4e86"},"createdTime":"2018-09-14 18:37:52"}
     * ])
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.13
     */
    public function orderRefundLog(int $orderId, UidDTO $user = null):array;

    /**
     * 获取退货时所需的数据，店铺数据
     *
     * > 返回数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * storeId      | int    | 店铺id
     * consignee    | string | 收货人姓名
     * gbCode       | int    | 地区编码
     * address      | string | 详情地址
     * zipcode      | string | 邮编
     * phoneTel     | string | 联系手机号
     * phoneMob     | string | 联系号码
     * regionName   | string | 地区名称
     * 
     * @param integer $orderId 订单id
     * @param UidDTO $user 当前登陆的用户
     * @return array
     * 
     * @requestExample({"orderId":"50001744"})
     * @returnExample({"addrId":"482059","consignee":"\u6d4b\u8bd57","address":"1","zipcode":"123456","phoneTel":"1","phoneMob":"1","regionName":"\u5317\u4eac\u5e02 \u5e02\u8f96\u533a \u897f\u57ce\u533a","gbCode":"110102","storeId":148086})
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.17
     */
    public function prepareOrderRefundInvoice(int $orderId, UidDTO $user = null):array;

    /**
     * 退货
     *
     * > params 数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * consignee        | string | 收件人姓名
     * gbCode           | string | 地区编码
     * regionName       | string | 地区名称
     * address          | string | 详情地址
     * zipcode          | string | 邮编
     * phoneTel         | string | 收件人联系号
     * phoneMob         | string | 收件人手机号
     * invoiceCode      | string | 送货编码
     * invoiceName      | string | 快递公司
     * invoiceNo        | string | 送货单号
     * 
     * @param array $params 退货的数据
     * @param integer $orderId 订单id
     * @param UidDTO $user 当前登陆的用户
     * @return boolean
     * 
     * @requestExample({
     *      "params":{"consignee":"\u65b9\u5065\u7fa4","address":"1","zipcode":"510000","phoneTel":"1","phoneMob":"1","regionName":"\u5e7f\u4e1c\u7701 \u5e7f\u5dde\u5e02 \u8d8a\u79c0\u533a","gbCode":"440104","storeId":1762613,"invoiceCode":"ztkd","invoiceName":"\u4e2d\u901a\u5feb\u9012yyyy","invoiceNo":"123456789ty34567"},
     *      "orderId":"50001744"
     * })
     * @returnExample(true)
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.13
     */
    public function orderRefundInvoice(array $params, int $orderId, UidDTO $user = null):bool;

    /**
     * 获取退货信息
     * 
     * > 返回数据说明(只罗列所需)
     * 
     * key | type | value
     * --- | ---- | ----
     * oiId             | int    | 退货id
     * consignee        | string | 收件人姓名
     * gbCode           | string | 地区编码
     * regionName       | string | 地区名称
     * address          | string | 详情地址
     * zipcode          | string | 邮编
     * phone            | string | 收件人联系号
     * mobile           | string | 收件人手机号
     * invoiceCode      | string | 送货编码
     * invoiceName      | string | 快递公司
     * invoiceNo        | string | 送货单号
     *
     * @param integer $orderId 订单id
     * @param UidDTO $user 当前登陆的用户
     * @return array
     * 
     * @requestExample({"orderId":"50001744"})
     * @returnExample({"oiId":"715","orderId":"50001744","type":"2","consignee":"\u65b9\u5065\u7fa4","gbCode":"440104","regionName":"\u5e7f\u4e1c\u7701 \u5e7f\u5dde\u5e02 \u8d8a\u79c0\u533a","address":"1","zipcode":"510000","phone":"1","mobile":"12345678987","slId":"0","logisticsName":"","invoiceCode":"ztkd","invoiceName":"\u4e2d\u901a\u5feb\u9012yyyy","invoiceNo":"123456789ty34567","status":"0","signTime":"0","remark":"[]","createdTime":"1537236394","updateTime":"2018-09-18 17:21:56"})
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.18
     */
    public function getOrderRefundInvoice(int $orderId, UidDTO $user = null):array;

    /**
     * 修改退货信息
     *
     * > params 数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * consignee        | string | 收件人姓名
     * gbCode           | string | 地区编码
     * regionName       | string | 地区名称
     * address          | string | 详情地址
     * zipcode          | string | 邮编
     * phoneTel         | string | 收件人联系号
     * phoneMob         | string | 收件人手机号
     * invoiceCode      | string | 送货编码
     * invoiceName      | string | 快递公司
     * invoiceNo        | string | 送货单号
     * 
     * @param array $params 退货的数据
     * @param integer $orderId 订单id
     * @param integer $oiId 退货id
     * @param UidDTO $user 当前登陆的用户
     * @return boolean
     * 
     * @requestExample({
     *      "params":{"consignee":"\u65b9\u5065\u7fa4","address":"1","zipcode":"510000","phoneTel":"1","phoneMob":"1","regionName":"\u5e7f\u4e1c\u7701 \u5e7f\u5dde\u5e02 \u8d8a\u79c0\u533a","gbCode":"440104","storeId":1762613,"invoiceCode":"ztkd","invoiceName":"\u4e2d\u901a\u5feb\u9012yyyy","invoiceNo":"123456789ty34567"},
     *      "orderId":"50001744",
     *      "oiId":"5"
     * })
     * @returnExample(true)
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.18
     */
    public function updateOrderRefundInvoice(array $params, int $orderId, int $oiId, UidDTO $user = null):bool;

    /**
     * 申请仲裁
     * 
     * > params 数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * wechat   | string | 微信号
     * phone    | string | 手机号
     *
     * @param array $params 申请仲裁的数据
     * @param integer $orderId 订单id
     * @param UidDTO $user 当前登陆的用户
     * @return boolean
     * 
     * @requestExample({
     *      "params":{"wechat":"微信号","phone":"联系号码"},
     *      "orderId":"50001744"
     * })
     * @returnExample(true)
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.18
     */
    public function requestOrderArbitrate(array $params, int $orderId, UidDTO $user = null):bool;

    /**
     * 撤销仲裁申请
     *
     * @param integer $orderId 订单id
     * @param UidDTO $user 当前登陆的用户
     * @return boolean
     * 
     * @requestExample({"orderId":"50001744"})
     * @returnExample(true)
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.18
     */
    public function cancelOrderArbitrate(int $orderId, UidDTO $user = null): bool;

    /**
     * 获取仲裁介入页面
     *
     * > 返回数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * orderId      | int    | 订单id
     * countLogs    | int    | 协商记录统计
     * tipContent   | string | 顶部文案显示
     * arbitrateStatus | int | 客服介入状态 0:未处理，1:客服介入中，2:已处理，3:客服撤销
     * 
     * @param integer $orderId 订单id
     * @param UidDTO $user 当前登陆的用户
     * @return array
     * 
     * @requestExample({"orderId":"50001744"})
     * @returnExample({
     *      "orderId":"50001744","countLogs":"8","tipContent":"您已申请客服介入，衣联客服将在3-5个工作日内介入处理","arbitrateStatus":"0"
     * })
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.18
     */
    public function getOrderArbitrate(int $orderId, UidDTO $user = null):array;
}