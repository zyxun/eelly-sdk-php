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

/**
 * 小程序资金.
 *
 * @author hehui<hehui@eelly.net>
 */
interface AppletAccountInterface
{
    /**
     * 小程序资金统计数据.
     *
     * > 返回数据说明
     *
     * key | type |  value
     * --- | ---- | -------
     * remainingMoney          | int    | 账户余额(分)
     * todayGainingsMoney      | int    | 今日收入(分)
     * gainingsMoney           | int    | 累计收入(分)
     * waitingSettlementMoney  | int    | 等待结算(分)
     * payingMoney             | int    | 累计支出(分)
     *
     * @param UidDTO $uidDTO uid dto(该参数不需要，代表需要登录)
     *
     * @return array
     *
     * @author hehui<hehui@eelly.net>
     */
    public function statistics(UidDTO $uidDTO = null): array;
}
