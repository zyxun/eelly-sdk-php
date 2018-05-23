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

use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\AppletAccountInterface;

class AppletAccount implements AppletAccountInterface
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
     * @param int $storeId 店铺id
     *
     * @return array
     *
     * @author hehui<hehui@eelly.net>
     * @author wechan
     */
    public function statistics(int $storeId): array
    {
        return EellyClient::request('pay/appletAccount', __FUNCTION__, true);
    }

    /**
     * 获取我绑定的银行账户.
     *
     * > 返回数据说明
     *
     * key | type |  value
     * --- | ---- | -------
     * []pbId              | int    |   用户银行id
     * []bankName          | int    |   银行名称
     * []bankAccount       | string |   银行账号
     * []realName          | strng  |   真实姓名
     * []isDefault         | bool   |   是否默认卡
     * []bankLogo          | string |   银行logo
     *
     *
     * @param UidDTO|null $uidDTO uid dto
     *
     * @return array
     *
     * @returnExample(
     * [
     *     {
     *         "pbId": "6",
     *         "userId": "148086",
     *         "gbCode": "0",
     *         "bankId": "1",
     *         "bankName": "中行上海分行",
     *         "bankSubbranch": "",
     *         "bankAccount": "9843010902492123",
     *         "realName": "molimoq",
     *         "phone": "13800138000",
     *         "isDefault": "0",
     *         "createdTime": "1510388565",
     *         "updateTime": "2017-11-11 16:22:45",
     *         "bankLogo": "https:\/\/img.eelly.test\/G01\/M00\/00\/06\/oYYBAFsAKTaIDt6KAAaGplFOcjsAAACagCL3MEABoa-952.jpg"
     *     },
     *     {
     *         "pbId": "7",
     *         "userId": "148086",
     *         "gbCode": "0",
     *         "bankId": "2",
     *         "bankName": "中行上海分行",
     *         "bankSubbranch": "",
     *         "bankAccount": "9843010902492123",
     *         "realName": "molimoq",
     *         "phone": "13800138000",
     *         "isDefault": "0",
     *         "createdTime": "1510388565",
     *         "updateTime": "2018-05-20 10:33:44",
     *         "bankLogo": "https:\/\/img.eelly.test\/G02\/M00\/00\/03\/ooYBAFsAKUCIKRtNAACxzNPHCRoAAABgwCtsosAALHk575.png"
     *     }
     * ])
     *
     * @author hehui<hehui@eelly.net>
     */
    public function myBindBanks(UidDTO $uidDTO = null): array
    {
        return EellyClient::request('pay/appletAccount', __FUNCTION__, true);
    }
}
