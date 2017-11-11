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
     *
     * @throws WithdrawException
     *
     * @return bool
     * @requestExample({"data":{"paId":1,"money":100,"gbCode":512000,"bankId":184,"bankName":"支付宝","bankSubbranch":"支付宝",
     *     "bankAccount":"13711221122"}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月10日
     */
    public function addWithdraw(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateWithdraw(int $withdrawId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listWithdrawPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
