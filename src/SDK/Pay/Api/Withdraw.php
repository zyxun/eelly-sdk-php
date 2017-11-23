<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Pay\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\WithdrawInterface;
use Eelly\SDK\Pay\DTO\WithdrawDTO;
use Eelly\DTO\UidDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Withdraw implements WithdrawInterface
{

    /**
     * 获取提现交易流水记录.
     *
     * @param string $billNo    衣联交易号
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * --------------|-------|--------------
     * pwId          |string |  提现交易ID，自增主键
     * paId          |string |  会员帐户ID
     * money         |string |  提现金额：单位为分
     * gbCode        |string |  银行地区ID
     * bankId        |string |  提现银行ID：el_system->system_bank->bank_id
     * bankName      |string |  提现银行名称（冗余）
     * bankSubbranch |string |  支行名称
     * bankAccount   |string |  银行账号/支付宝账号/微信绑定open_id
     * billNo        |string |  衣联交易号
     * thirdNo       |string |  第三方交易号(支付宝/微信/银联)
     * status        |string |  处理状态：0 待处理 1 成功 2 处理中 3 失败
     * checkStatus   |string |  对帐状态：0 未对帐 1 对帐成功 2 对帐中 3 对帐失败
     * remark        |string |  备注
     * adminRemark   |string |  系统及管理备注，不需要给用户看的
     * handleTime    |string |  处理时间
     * createdTime   |string |  添加时间
     * updateTime    |string |  修改时间
     *
     * @throws WithdrawException
     *
     * @return WithdrawDTO
     * @requestExample({"billNo":"11122"})
     * @returnExample({"pwId":"1","paId":"1","money":"100","gbCode":"512000","bankId":"184","bankName":"支付宝","bankSubbranch":"支付宝支行名称1","bankAccount":"13711221122","billNo":"1711114177786cvA2s","thirdNo":"","status":"0","checkStatus":"0","remark":"","adminRemark":"","handleTime":"0","createdTime":"1510380242","updateTime":"2017-11-21 11:40:16"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月10日
     */
    public function getWithdraw(string $billNo): WithdrawDTO
    {
        return EellyClient::request('pay/withdraw', 'getWithdraw',true, $billNo);
    }

    /**
     * 添加提现交易流水 记录.
     *
     * @param array $data
     * @param int $data["paId"]     会员帐户ID
     * @param int $data["money"]        提现金额
     * @param int $data["gbCode"]   银行地区ID
     * @param int $data["bankId"]   提现银行ID：el_system->system_bank->bank_id
     * @param string $data["bankName"]  提现银行名称
     * @param string $data["bankSubbranch"] 支行名称
     * @param string $data["bankAccount"]   银行账号/支付宝账号/微信绑定open_id
     * @param UidDTO $uidDTO
     *
     * @throws WithdrawException
     *
     * @return int
     * @requestExample({"data":{"paId":1,"money":100,"gbCode":512000,"bankId":184,"bankName":"支付宝","bankSubbranch":"支付宝",
     *     "bankAccount":"13711221122"}})
     * @returnExample(1)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月10日
     */
    public function addWithdraw(array $data, UidDTO $uidDTO = null): int
    {
        return EellyClient::request('pay/withdraw', 'addWithdraw', true,$data, $uidDTO);
    }

    /**
     * 更新提现交易记录.
     *
     * @param int   $pwId           提现交易ID
     * @param array $data
     * @param string $data['thirdNo'] 第三方交易号
     * @param int $data['status'] 处理状态：0 待处理 1 成功 2 处理中 3 失败
     * @param int $data['checkStatus'] 对帐状态：0 未对帐 1 对帐成功 2 对帐中 3 对帐失败
     * @param string $data['remark'] 备注
     *
     * @throws WithdrawException
     *
     * @return bool
     * @requestExample({"pwId":1,"data":{"thirdNo":1,"status":1,"checkStatus":1,"remark":"备注"}})
     * @returnExample(true)
     *
     * @author 张泽强<zhangzeqiang@eelly.net>
     * @since  2017年11月16日
     */
    public function updateWithdraw(int $pwId, array $data): bool
    {
        return EellyClient::request('pay/withdraw', 'updateWithdraw', true, $pwId, $data);
    }

    /**
     * 个人提现记录.
     *
     * @param array $condition
     * @param int $condition['paId']    会员帐户ID
     * @param int $condition['status']  处理状态：0 待处理 1 成功 2 处理中 3 失败
     * @param int $condition['checkStatus'] 对帐状态：0 未对帐 1 对帐成功 2 对帐中 3 对帐失败
     * @param int   $currentPage        当前页数
     * @param int   $limit              每页显示数量
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * -----------------------|-------|--------------
     * items                  |array  |
     * items["pwId"]          |string | 提现交易ID，自增主键
     * items["paId"]          |string | 会员帐户ID
     * items["money"]         |string | 提现金额：单位为分
     * items["gbCode"]        |string | 银行地区ID
     * items["bankId"]        |string | 提现银行ID：el_system->system_bank->bank_id
     * items["bankName"]      |string | 提现银行名称（冗余）
     * items["bankSubbranch"] |string | 支行名称
     * items["bankAccount"]   |string | 银行账号/支付宝账号/微信绑定open_id
     * items["billNo"]        |string | 衣联交易号
     * items["thirdNo"]       |string | 第三方交易号(支付宝/微信/银联)
     * items["status"]        |string | 处理状态：0 待处理 1 成功 2 处理中 3 失败
     * items["checkStatus"]   |string | 对帐状态：0 未对帐 1 对帐成功 2 对帐中 3 对帐失败
     * items["remark"]        |string | 备注
     * items["adminRemark"]   |string | 系统及管理备注，不需要给用户看的
     * items["handleTime"]    |string | 处理时间
     * items["createdTime"]   |string | 添加时间
     * items["updateTime"]    |string | 修改时间
     * page                   |array  |
     * page["totalPages"]     |int    | 总页数
     * page["totalItems"]     |int    | 总数量
     * page["limit"]          |int    | 每页显示数量
     *
     * @throws WithdrawException
     *
     * @return array
     * @requestExample({"condition":{"paId":1,"status":1,"checkStatus":1},"currentPage":1,"limit":10})
     * @returnExample({
     *     "items":[{
     *          "pwId":"1",
     *          "paId":"1",
     *          "money":"100",
     *          "gbCode":"512000",
     *          "bankId":"184",
     *          "bankName":"\u652f\u4ed8\u5b9d",
     *          "bankSubbranch":"\u652f\u4ed8\u5b9d\u652f\u884c\u540d\u79f0",
     *          "bankAccount":"13711221122",
     *          "billNo":"1711114177786cvA2s",
     *          "thirdNo":"xxx",
     *          "status":"0",
     *          "checkStatus":"0",
     *          "remark":"备注",
     *          "adminRemark":"系统备注",
     *          "handleTime":"0",
     *          "createdTime":"1510380242",
     *          "updateTime":"2017-11-11 14:04:02"
     *     }],
     *     "page":{
     *          "totalPages":5,
     *          "totalItems":5,
     *          "limit":1}
     * })
     *
     * @author 张泽强<zhangzeqiang@eelly.net>
     * @since  2017年11月16日
     */
    public function listWithdrawPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('pay/withdraw', 'listWithdrawPage', true, $condition, $currentPage, $limit);
    }

    /**
     * 提现操作入口.
     *
     * @param array       $data
     * @param int $data['pwId']           提现交易流水id
     * @param int $data['paId']           会员资金账户id
     * @param int $data['userId']         提现用户id
     * @param int $data['channel']        充值渠道：0 线下 1 支付宝 2 微信钱包 3 QQ钱包 4 银联 5 移动支付
     * @param string $data['subject']     支付请求标题
     * @param string $data['account']    衣联财务账号标识,值为: 126mail.pc, 126mail.wap, eellyMail.pc, eellyMail.app,union.pc,eelly.wap, eellyBuyer.wap, order.app, eelly.app, eellySeller.app, storeUnion.wap
     * @param string $data['platform']    平台的支付网关(tradeLogic->$requestPay的键名)
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ----------|-------|--------------
     * platform  |string |  平台的支付网关(tradeLogic->$requestPay的键名),纯余额支付则返回空
     * data      |array  |
     * data["0"] |string |  当platform=alipayWap时返回url地址；当platform=alipayWap时返回url地址；当platform=alipayApp时返回是订单ID
     *
     * @throws WithdrawException
     *
     * @return array
     * @requestExample({"pwId":1,"paId":1,"userId":148086,"channel":1,"subject":"提现交易","account":"126mail.pc","platform":"ALIPAY_WAP"})
     * @returnExample({
     *     "platform": 'alipayWap',
     *     'data':{
     *          'platform=alipayWap:url地址','platform=alipayWap:url地址',
     *          'platform=alipayApp:返回是订单ID'
     *     }
     * })
     *
     * @author 张泽强<zhangzeqiang@eelly.net>
     * @since  2017年11月16日
     */
    public function goWithdraw(array $data): array
    {
        return EellyClient::request('pay/withdraw', 'goWithdraw', true, $data);
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