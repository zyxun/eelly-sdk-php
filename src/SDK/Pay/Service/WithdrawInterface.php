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
use Eelly\SDK\Pay\DTO\WithdrawDTO;
use Eelly\SDK\Pay\Exception\WithdrawException;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface WithdrawInterface
{

    /**
     * 获取提现交易流水记录
     * @param string $billNo
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
     * @requestExample({"billNo":"xxxxsss"})
     * @returnExample({"pwId":"2","paId":"1","money":"100","gbCode":"512000","bankId":"184","bankName":"\u652f\u4ed8\u5b9d","bankSubbranch":"\u652f\u4ed8\u5b9d\u652f\u884c\u540d\u79f0","bankAccount":"13711221122","billNo":"1711114177486cvAfJ","thirdNo":"","status":"0","checkStatus":"0","remark":"","adminRemark":"","handleTime":"0","createdTime":"1510380251","updateTime":"2017-11-11 14:04:11"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月10日
     */
    public function getWithdraw(string $billNo): WithdrawDTO;

    /**
     * 添加提现交易流水 记录
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
    public function addWithdraw(array $data, UidDTO $uidDTO = null): int;

    /**
     * 更新提现交易记录.
     * @param int   $pwId
     * @param array $data
     * @param string $data['thirdNo'] 第三方交易号
     * @param int $data['status'] 处理状态：0 待处理 1 成功 2 处理中 3 失败
     * @param int $data['checkStatus'] 对帐状态：0 未对帐 1 对帐成功 2 对帐中 3 对帐失败
     * @param string $data['remark'] 备注
     *
     * @throws
     *
     * @return bool
     * @requestExample({"pwId":1,"data":{"thirdNo":1,"status":1,"checkStatus":1,"remark":""}})
     * @returnExample(true)
     *
     * @author 张泽强<zhangzeqiang@eelly.net>
     * @since  2017年11月16日
     */
    public function updateWithdraw(int $pwId, array $data): bool;

    /**
     * 个人提现记录.
     * @param array $condition
     * @param int $condition['paId']    会员帐户ID
     * @param int $condition['status']  处理状态：0 待处理 1 成功 2 处理中 3 失败
     * @param int $condition['checkStatus'] 对帐状态：0 未对帐 1 对帐成功 2 对帐中 3 对帐失败
     * @param int   $currentPage
     * @param int   $limit
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
     *          "thirdNo":"",
     *          "status":"0",
     *          "checkStatus":"0",
     *          "remark":"",
     *          "adminRemark":"",
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
    public function listWithdrawPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;

    /**
     * 提现操作入口
     * @param array       $data
     * @param int $data['pwId']           提现交易流水id
     * @param int $data['paId']           会员资金账户id
     * @param int $data['userId']         提现用户id
     * @param int $data['channel']        充值渠道：0 线下 1 支付宝 2 微信钱包 3 QQ钱包 4 银联 5 移动支付
     * @param string $data['subject']     支付请求标题
     * @param string $data ['account']    衣联财务账号标识,
     *                                    值为: 126mail.pc, 126mail.wap, eellyMail.pc, eellyMail.app,
     *                                         union.pc,
     *                                         eelly.wap, eellyBuyer.wap, order.app, eelly.app, eellySeller.app, storeUnion.wap
     * @param string $data['platform']    ALIPAY_WAP:ALIPAY_WEB:ALIPAY_APP
     *
     * @throws WithdrawException
     *
     * @requestExample()
     * @returnExample()
     *
     * @author 张泽强<zhangzeqiang@eelly.net>
     * @since  2017年11月16日
     */
    public function goWithdraw(array $data);
}
