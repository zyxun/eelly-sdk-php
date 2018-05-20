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

interface ApplyWithdrawInterface
{
    /**
     * 申请提现表单(用户钱包相关信息).
     *
     * > 返回数据说明
     *
     * key | type |  value
     * --- | ---- | -------
     * pb                          | int    |  用户账户id(钱包Id)
     * commissionRatio             | float  |  提现手续费率
     * money                       | int    |  账户可用金额(分)
     * todayApplyTimes             | int    |  今日还可提现次数
     * defaultBank                 | map    |  默认银行信息
     * defaultBank['pbId']         | int    |  银行id
     * defaultBank['bankName']     | int    |  银行名称
     * defaultBank['bankAccount']  | int    |  银行账号
     *
     * @param int         $storeId 店铺id
     * @param UidDTO|null $uidDTO  uid dto
     *
     * @return array
     *
     * @author hehui<hehui@eelly.net>
     */
    public function prepareApplyForm(int $storeId, UidDTO $uidDTO = null): array;

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
     * @author hehui<hehui@eelly.net>
     */
    public function applyForBank(int $paId, int $pbId, int $money, string $payPassword, UidDTO $uidDTO = null): bool;
}
