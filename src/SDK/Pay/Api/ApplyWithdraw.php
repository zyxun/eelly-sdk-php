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

namespace Eelly\SDK\Pay\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\ApplyWithdrawInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class ApplyWithdraw implements ApplyWithdrawInterface
{
    /**
     * 申请提现表单(用户钱包相关信息).
     *
     * > 返回数据说明
     *
     * key | type |  value
     * --- | ---- | -------
     * paId                        | int    |  用户账户id(钱包Id)
     * commissionRatio             | float  |  提现手续费率
     * money                       | int    |  账户可用金额(分)
     * todayApplyTimes             | int    |  今日还可提现次数
     * defaultBank                 | map    |  默认银行信息(没设置默认返回null)
     * defaultBank['pbId']         | int    |  银行id
     * defaultBank['bankName']     | int    |  银行名称
     * defaultBank['bankAccount']  | int    |  银行账号
     * defaultBank['bankLogo']     | string |  银行logo
     *
     * @param int         $storeId 店铺id
     * @param UidDTO|null $uidDTO  uid dto
     *
     * @return array
     *
     * @requestExample({"storeId":148086})
     *
     * @returnExample(
     * {
     *     "paId": "3",
     *     "commissionRatio": "0.000",
     *     "money": "0",
     *     "todayApplyTimes": 1,
     *     "defaultBank": {
     *         "pbId": "6",
     *         "userId": "148086",
     *         "gbCode": "0",
     *         "bankId": "1",
     *         "bankName": "中行上海分行",
     *         "bankSubbranch": "",
     *         "bankAccount": "9843010902492123",
     *         "realName": "molimoq",
     *         "phone": "13800138000",
     *         "isDefault": "1",
     *         "bankLogo": "https://img.eelly.test/G02/M00/00/03/ooYBAFsAKMqINMbUAAAlgu1EpR0AAABgwCtjPEAACWa292.png",
     *         "createdTime": "1510388565",
     *         "updateTime": "2018-05-21 11:49:49"
     *     }
     * })
     *
     * @author hehui<hehui@eelly.net>
     */
    public function prepareApplyForm(int $storeId, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('pay/applyWithdraw', 'prepareApplyForm', true, $storeId, $uidDTO);
    }

    /**
     * 申请提现表单(用户钱包相关信息).
     *
     * > 返回数据说明
     *
     * key | type |  value
     * --- | ---- | -------
     * paId                        | int    |  用户账户id(钱包Id)
     * commissionRatio             | float  |  提现手续费率
     * money                       | int    |  账户可用金额(分)
     * todayApplyTimes             | int    |  今日还可提现次数
     * defaultBank                 | map    |  默认银行信息(没设置默认返回null)
     * defaultBank['pbId']         | int    |  银行id
     * defaultBank['bankName']     | int    |  银行名称
     * defaultBank['bankAccount']  | int    |  银行账号
     * defaultBank['bankLogo']     | string |  银行logo
     *
     * @param int         $storeId 店铺id
     * @param UidDTO|null $uidDTO  uid dto
     *
     * @return array
     *
     * @requestExample({"storeId":148086})
     *
     * @returnExample(
     * {
     *     "paId": "3",
     *     "commissionRatio": "0.000",
     *     "money": "0",
     *     "todayApplyTimes": 1,
     *     "defaultBank": {
     *         "pbId": "6",
     *         "userId": "148086",
     *         "gbCode": "0",
     *         "bankId": "1",
     *         "bankName": "中行上海分行",
     *         "bankSubbranch": "",
     *         "bankAccount": "9843010902492123",
     *         "realName": "molimoq",
     *         "phone": "13800138000",
     *         "isDefault": "1",
     *         "bankLogo": "https://img.eelly.test/G02/M00/00/03/ooYBAFsAKMqINMbUAAAlgu1EpR0AAABgwCtjPEAACWa292.png",
     *         "createdTime": "1510388565",
     *         "updateTime": "2018-05-21 11:49:49"
     *     }
     * })
     *
     * @author hehui<hehui@eelly.net>
     */
    public function prepareApplyFormAsync(int $storeId, UidDTO $uidDTO = null)
    {
        return EellyClient::request('pay/applyWithdraw', 'prepareApplyForm', false, $storeId, $uidDTO);
    }

    /**
     * 申请提现到银行.
     *
     * @param int    $paId        用户账户id(钱包Id)
     * @param int    $pbId        用户银行id
     * @param int    $money       提现金额(分)
     * @param string $payPassword 支付密码
     * @param UidDTO $uidDTO      uid dto
     *
     * @return bool
     *
     * @requestExample({
     *      "paId": 3,
     *      "pbId": 6,
     *      "money": 10,
     *      "payPassword": "123456"
     * })
     *
     * @returnExample(true)
     *
     * @author hehui<hehui@eelly.net>
     */
    public function applyForBank(int $paId, int $pbId, int $money, string $payPassword, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('pay/applyWithdraw', 'applyForBank', true, $paId, $pbId, $money, $payPassword, $uidDTO);
    }

    /**
     * 申请提现到银行.
     *
     * @param int    $paId        用户账户id(钱包Id)
     * @param int    $pbId        用户银行id
     * @param int    $money       提现金额(分)
     * @param string $payPassword 支付密码
     * @param UidDTO $uidDTO      uid dto
     *
     * @return bool
     *
     * @requestExample({
     *      "paId": 3,
     *      "pbId": 6,
     *      "money": 10,
     *      "payPassword": "123456"
     * })
     *
     * @returnExample(true)
     *
     * @author hehui<hehui@eelly.net>
     */
    public function applyForBankAsync(int $paId, int $pbId, int $money, string $payPassword, UidDTO $uidDTO = null)
    {
        return EellyClient::request('pay/applyWithdraw', 'applyForBank', false, $paId, $pbId, $money, $payPassword, $uidDTO);
    }

    /**
     * 更新提现状态.
     *
     * @param int    $pwId   提现交易ID
     * @param int    $status 处理状态：0 未处理 1 成功 2 失败 3 处理中
     * @param string $remark 备注
     *
     * @return bool
     *
     * @requestExample({"pwId":3, "status": 3})
     *
     * @returnExample(true)
     *
     * @author hehui<hehui@eelly.net>
     */
    public function updateWithdrawStatus(int $pwId, int $status, string $remark = ''): bool
    {
        return EellyClient::request('pay/applyWithdraw', 'updateWithdrawStatus', true, $pwId, $status, $remark);
    }

    /**
     * 更新提现状态.
     *
     * @param int    $pwId   提现交易ID
     * @param int    $status 处理状态：0 未处理 1 成功 2 失败 3 处理中
     * @param string $remark 备注
     *
     * @return bool
     *
     * @requestExample({"pwId":3, "status": 3})
     *
     * @returnExample(true)
     *
     * @author hehui<hehui@eelly.net>
     */
    public function updateWithdrawStatusAsync(int $pwId, int $status, string $remark = '')
    {
        return EellyClient::request('pay/applyWithdraw', 'updateWithdrawStatus', false, $pwId, $status, $remark);
    }

    /**
     * 申请微信钱包提现
     * 
     * > data 数据说明
     * key | type | value
     * --- | ---- | -----
     * money | float | 提现的金额 分单位
     * paId  | int   | 账号id
     * password | string | 支付密码
     *      
     * @param array $data 申请体现的数据
     * @param UidDTO $uidDTO 当前登陆的用户信息
     * @return boolean
     * 
     * @requestExample({"data":[{"money":100,"paId":2,"password":"123456"}]})
     * @returnExample(true)
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.3
     */
    public function applyWechatPurse(array $data, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('pay/applyWithdraw', 'applyWechatPurse', true, $data, $uidDTO);
    }

    /**
     * 申请微信钱包提现
     * 
     * > data 数据说明
     * key | type | value
     * --- | ---- | -----
     * money | float | 提现的金额 分单位
     * paId  | int   | 账号id
     * password | string | 支付密码
     *      
     * @param array $data 申请体现的数据
     * @param UidDTO $uidDTO 当前登陆的用户信息
     * @return boolean
     * 
     * @requestExample({"data":[{"money":100,"paId":2,"password":"123456"}]})
     * @returnExample(true)
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.3
     */
    public function applyWechatPurseAsync(array $data, UidDTO $uidDTO = null)
    {
        return EellyClient::request('pay/applyWithdraw', 'applyWechatPurse', false, $data, $uidDTO);
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