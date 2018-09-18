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
     * @param array $params 修改申请退款的数据
     * @param integer $orderId 订单id
     * @param UidDTO $user 当前登陆的用户
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.13
     */
    public function requestReturnAmountEdit(array $params, int $orderId, UidDTO $user = null): bool;

    /**
     * 已发货申请退款/退货退款
     *
     * > params 数据说明
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
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.13
     */
    public function requestRefund(array $params, int $orderId, UidDTO $user = null): bool;

    /**
     * 已发货申请退款/退货退款 修改
     *
     * > params 数据说明
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
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.14
     */
    public function requestRefundEdit(array $params, int $orderId, UidDTO $user = null): bool;

    /**
     * 申请退货退款页面所需订单数据
     *
     * > 返回数据说明
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
     * key | type | value
     * --- | ---- | ----
     * key  | string | 商品名称为主键
     * data | array | 改商品下有多少规格商品
     * 
     * > orderGoods->data 商品规格数组数据说明
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
     * 
     * > remark 数据说明
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
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.13
     */
    public function prepareOrderRefund(int $orderId, int $phase, UidDTO $user = null): array;

    /**
     * 退货退款详情
     * 
     * > 返回数据说明
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
     * key | type | value
     * --- | ---- | ----
     * key | string | 商品名称为主键
     * data | array | 改商品下有多少规格商品
     * 
     * > orderGoods->data 商品规格数组数据说明
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
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.13
     */
    public function orderRefundDetail(int $orderId, UidDTO $user = null):array;

    /**
     * 修改退货退款数据所需数据
     *
     * > 返回数据说明
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
     * key | type | value
     * --- | ---- | ----
     * key  | string | 商品名称为主键
     * data | array | 改商品下有多少规格商品
     * 
     * > orderGoods->data 商品规格数组数据说明
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
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.13
     */
    public function undoOrderRefund(int $orderId, UidDTO $user = null):bool;

    /**
     * 协商记录
     *
     * @param integer $orderId 订单id
     * @param UidDTO $user 当前登陆的用户
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.13
     */
    public function orderRefundLog(int $orderId, UidDTO $user = null):array;

    /**
     * 获取退货时所需的数据，店铺数据
     *
     * > 返回数据说明
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
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.17
     */
    public function prepareOrderRefundInvoice(int $orderId, UidDTO $user = null):array;

    /**
     * 退货
     *
     * > params 数据说明
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
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.13
     */
    public function orderRefundInvoice(array $params, int $orderId, UidDTO $user = null):bool;

    /**
     * 获取退货信息
     * 
     * > 返回数据说明(只罗列所需)
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
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.18
     */
    public function getOrderRefundInvoice(int $orderId, UidDTO $user = null):array;

    /**
     * 修改退货信息
     *
     * > params 数据说明
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
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.18
     */
    public function updateOrderRefundInvoice(array $params, int $orderId, int $oiId, UidDTO $user = null):bool;

    /**
     * 申请仲裁
     * 
     * > params 数据说明
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
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.18
     */
    public function cancelOrderArbitrate(int $orderId, UidDTO $user = null): bool;

    /**
     * 获取仲裁介入页面
     *
     * > 返回数据说明
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
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.18
     */
    public function getOrderArbitrate(int $orderId, UidDTO $user = null):array;
}