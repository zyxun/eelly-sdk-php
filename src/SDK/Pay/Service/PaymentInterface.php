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

namespace Eelly\SDK\Pay\Service;

use Eelly\DTO\UidDTO;
use Eelly\SDK\Pay\DTO\PaymentDTO;
use Eelly\SDK\Pay\Exception\PayException;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface PaymentInterface
{
    /**
     * 根据交易号 获取支付交易流水
     * @param string $billNo
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------|-------|--------------
     * ppId        |string |    支付交易ID，自增主键
     * paId        |string |    会员帐户ID
     * type        |string |    支付类型：1 订单支付 2 购买服务
     * itemId      |string |    关联对象ID：如订单ID、购买服务记录ID等
     * billNo      |string |    衣联交易号
     * money       |string |    支付金额：单位为分
     * precId      |string |    支付批次：pay_recharge->prec_id，合并支付交易批次相同，纯余额支付为0
     * status      |string |    处理状态：0 待处理 1 成功 2 处理中 3 失败
     * checkStatus |string |    对帐状态：0 未对帐 1 对帐成功 2 对帐中 3 对帐失败
     * remark      |string |    备注
     * createdTime |string |    添加时间
     * updateTime  |string |    修改时间
     *
     * @throws PayException
     *
     * @return PaymentDTO
     * @requestExample({"billNo":"1001"})
     * @returnExample({"ppId":"4","paId":"1","type":"1","itemId":"10001","billNo":"1711104274386cvAeR","money":"100","precId":"0","status":"0","checkStatus":"0","remark":"\u6d4b\u8bd5\u63d2\u51651\u6b21","createdTime":"1510296034","updateTime":"2017-11-10 14:40:34"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月10日
     */
    public function getPayment(string $billNo): PaymentDTO;

    /**
     * 添加支付交易流水记录.
     *
     * @param array $data
     * @param int $data["paId"]     会员帐户ID
     * @param int $data["type"]     支付类型：1 订单支付 2 购买服务
     * @param int $data["itemId"]   关联对象ID：如订单ID、购买服务记录ID等
     * @param int $data["money"]    支付金额：单位为分
     * @param int $data["precId"]   支付批次：pay_recharge->prec_id，合并支付交易批次相同，纯余额支付为0
     * @param int $data["status"]   处理状态：0 待处理 1 成功 2 处理中 3 失败
     * @param int $data["checkStatus"]  对帐状态：0 未对帐 1 对帐成功 2 对帐中 3 对帐失败
     * @param string $data ["remark"]   备注
     * @param UidDTO|null $uidDTO
     *
     * @throws PayException
     *
     * @return int
     * @requestExample({"data":{"paId":1,"type":1,"itemId":10001,"money":100,"precId":0,"status":0,"checkStatus":0,"remark":"备注"}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月10日
     */
    public function addPayment(array $data, UidDTO $uidDTO = null): int;

    /**
     * 更新支付交易流水记录
     * @param int   $paymentId
     * @param array $data
     * @param int $data['precId'] 支付批次：pay_recharge->prec_id，合并支付交易批次相同，纯余额支付为0
     * @param int $data['status'] 处理状态：0 待处理 1 成功 2 处理中 3 失败
     * @param int $data['checkStatus'] 对帐状态：0 未对帐 1 对帐成功 2 对帐中 3 对帐失败
     * @param string $data['remark'] 备注
     *
     * @throws PaymentException
     *
     * @return bool
     * @requestExample({"paymentId":1,"data":{"precId":1,"status":1,"checkStatus":1,"remark":"helloWorld"}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月13日
     */
    public function updatePayment(int $paymentId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listPaymentPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
