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
use Eelly\SDK\Pay\DTO\RechargeDTO;
use Eelly\SDK\Pay\Exception\RechargeException;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface RechargeInterface
{

    /**
     * 获取充值交易流水 记录
     * @param string $billNo
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------|-------|--------------
     * precId      |string |    充值交易ID，自增主键
     * paId        |string |    会员帐户ID
     * money       |string |    充值金额：单位为分
     * refundMoney |string |    已退款金额：单位为分
     * channel     |string |    充值渠道：0 线下 1 支付宝 2 微信钱包 3 QQ钱包 4 银联 5 移动支付
     * style       |string |    充值方式：0 未知 1 储蓄卡 2 信用卡 3 余额充值
     * bankId      |string |    充值银行ID：el_system->system_bank->bank_id
     * bankName    |string |    充值银行名称（冗余）
     * bankAccount |string |    充值帐号：支付宝账号/微信绑定open_id/QQ
     * billNo      |string |    衣联交易号
     * thirdNo     |string |    第三方交易号(支付宝/微信/银联)
     * status      |string |    处理状态：0 待处理 1 成功 2 处理中 3 失败
     * checkStatus |string |    对帐状态：0 未对帐 1 对帐成功 2 对帐中 3 对帐失败
     * remark      |string |    备注
     * adminRemark |string |    系统及管理备注，不需要给用户看的
     * handleTime  |string |    处理时间
     * createdTime |string |    添加时间
     * updateTime  |string |    修改时间
     *
     * @throws RechargeException
     *
     * @return RechargeDTO
     * @requestExample({"billNo":"1001"})
     * @returnExample({"precId":"1","paId":"1","money":"100","refundMoney":"0","channel":"1","style":"0","bankId":"111",
     *     "bankName":"\u652f\u4ed8\u5b9d","bankAccount":"\u652f\u4ed8\u5b9d\u8d26\u53f7sssss","billNo":"17111047444f6cvA6a",
     *     "thirdNo":"","status":"0","checkStatus":"0","remark":"\u6d4b\u8bd5\u6d4b\u8bd5","adminRemark":"admin\u6d4b\u8bd5",
     *     "handleTime":"0","createdTime":"1510303156","updateTime":"2017-11-10 16:39:16"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月10日
     */
    public function getRecharge(string $billNo): RechargeDTO;

    /**
     * 添加充值交易流水 记录
     *
     * @param array $data
     * @param int $data["paId"]     会员资金账户id
     * @param int $data["userId"]   用户id
     * @param int $data["money"]    充值金额
     * @param int $data["channel"]  充值渠道：0 线下 1 支付宝 2 微信钱包 3 QQ钱包 4 银联 5 移动支付
     * @param int $data["style"]    充值方式：0 未知 1 储蓄卡 2 信用卡 3 余额充值
     * @param int $data["bankId"]   充值银行ID
     * @param string $data["bankName"]  充值银行名称
     * @param string $data["bankAccount"]   充值帐号：支付宝账号/微信绑定open_id/QQ
     * @param string $data["remark"]    备注
     * @param string $data["adminRemark"]   系统及管理备注
     *
     * @throws RechargeException
     *
     * @return int
     * @requestExample({"data":{"userId":148086,"paId":1,"money":100,"channel":1,"style":0,"bankId":111,"bankName":"银行名",
     *     "bankAccount":"银行账号",
     *     "remark":"","adminRemark":""}})
     * @returnExample(1)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月10日
     */
    public function addRecharge(array $data): int;

    /**
     * 更新充值交易流水
     * @param int   $rechargeId
     * @param array $data
     * @param string $data['thirdNo'] 第三方交易号
     * @param int $data['status'] 处理状态：0 待处理 1 成功 2 处理中 3 失败
     * @param int $data['checkStatus'] 对帐状态：0 未对帐 1 对帐成功 2 对帐中 3 对帐失败
     * @param string $data['remark'] 备注
     *
     * @throws RechargeException
     *
     * @return bool
     * @requestExample({"rechargeId":1,"data":{"thirdNo":1,"status":1,"checkStatus":1,"remark":"helloWorld"}})
     * @returnExample(true)
     *
     * @author 张泽强<zhangzeqiang@eelly.net>
     * @since  2017年11月15日
     */
    public function updateRecharge(int $rechargeId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listRechargePage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
