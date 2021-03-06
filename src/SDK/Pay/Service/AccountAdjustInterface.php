<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Pay\Service;

use Eelly\SDK\Pay\DTO\AccountAdjustDTO;

/**
 * 帐户资金核算(只计算当前时间前一天资金有变更的帐户).
 * 
 * @author zhangyingdi<zhangyingdi@eelly.net>
 * @since  2017-11-22
 */
interface AccountAdjustInterface
{
    
    /**
     * 根据账户资金核算主键id,获取对应的信息.
     *
     * @param int $paaId 账户资金核算主键id
     *
     * @throws \Eelly\SDK\Pay\Exception\AccountException
     *
     * @return AccountAdjustDTO
     * @requestExample({
     *     "paaId":1
     * })
     * @returnExample({
     *     "paaId":3,
     *     "paId":2,
     *     "accountMoney":100,
     *     "changeMoney":10,
     *     "status":1,
     *     "remark":"",
     *     "createdTime":1510211720
     * })
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     * @since  2017-11-22
     */
    public function getAccountAdjust(int $paaId): AccountAdjustDTO;
    
    /**
     * 新增账户资金核算记录.
     *
     * @param array $data 账户资金核算数据
     * @param int $data['paId'] 账户id
     * @param int $data['accountMoney'] 帐户金额
     * @param int $data['changeMoney'] 帐户变更金额汇总
     * @param int $data['status'] 比较结果：0 未比较 1 平衡 2 不平衡
     * @param string $data['remark'] 备注
     *
     * @throws \Eelly\SDK\Pay\Exception\AccountException
     *
     * @return bool
     * @requestExample({
     *     "data":{
     *         "paId":2,
     *         "accountMoney":100,
     *         "changeMoney":10,
     *         "status":1,
     *         "remark":""
     *     }
     * })
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     * @since  2017-11-09
     */
    public function addAccountAdjust(array $data): bool;
    
    /**
     * 更新账户资金核算记录.
     *
     * @param int $paaId 账户资金核算主键id
     * @param array $data 账户资金核算数据
     * @param int $data['paId'] 账户id
     * @param int $data['accountMoney'] 帐户金额
     * @param int $data['changeMoney'] 帐户变更金额汇总
     * @param int $data['status'] 比较结果：0 未比较 1 平衡 2 不平衡
     * @param string $data['remark'] 备注
     *
     * @throws \Eelly\SDK\Pay\Exception\AccountException
     *
     * @return bool
     * @requestExample({
     *     "paaId":1,
     *     "data":{
     *         "paId":2,
     *         "accountMoney":100,
     *         "changeMoney":10,
     *         "status":1,
     *         "remark":""
     *     }
     * })
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     * @since  2017-11-09
     */
    public function updateAccountAdjust(int $paaId, array $data): bool;
    
}