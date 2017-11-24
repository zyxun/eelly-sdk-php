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
use Eelly\SDK\Pay\Service\AccountAdjustInterface;
use Eelly\SDK\Pay\DTO\AccountAdjustDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class AccountAdjust implements AccountAdjustInterface
{
    /**
     * 根据账户日资金核算主键id,获取对应的信息.
     *
     * @param int $paaId 账户日资金核算主键id
     *
     * @throws \Eelly\SDK\Pay\Exception\AccountException
     *
     * @return AccountAdjustDTO
     * @requestExample({"aaId":1})
     * @returnExample({"paaId":3,"paId":2,"accountMoney":100,"changeMoney":10,"status":1,"remark":"","createdTime":1510211720})
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     * @since  2017-11-22
     */
    public function getAccountAdjust(int $paaId): AccountAdjustDTO
    {
        return EellyClient::request('pay/accountAdjust', __FUNCTION__, true, $paaId);
    }

    /**
     * 根据账户日资金核算主键id,获取对应的信息.
     *
     * @param int $paaId 账户日资金核算主键id
     *
     * @throws \Eelly\SDK\Pay\Exception\AccountException
     *
     * @return AccountAdjustDTO
     * @requestExample({"aaId":1})
     * @returnExample({"paaId":3,"paId":2,"accountMoney":100,"changeMoney":10,"status":1,"remark":"","createdTime":1510211720})
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     * @since  2017-11-22
     */
    public function getAccountAdjustAsync(int $paaId)
    {
        return EellyClient::request('pay/accountAdjust', __FUNCTION__, false, $paaId);
    }

    /**
     * 根据账户日资金核算主键id,获取对应的信息.
     *
     * @param array $data 账户日资金核算数据
     * @param int $data['paId'] 账户id
     * @param int $data['accountMoney'] 帐户金额
     * @param int $data['changeMoney'] 帐户变更金额汇总
     * @param int $data['status'] 比较结果：0 未比较 1 平衡 2 不平衡
     * @param string $data['remark'] 备注
     *
     * @throws \Eelly\SDK\Pay\Exception\AccountException
     *
     * @return bool
     * @requestExample({"data":{"paId":2,"accountMoney":100,"changeMoney":10,"status":1,"remark":""}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     * @since  2017-11-09
     */
    public function addAccountAdjust(array $data): bool
    {
        return EellyClient::request('pay/accountAdjust', __FUNCTION__, true, $data);
    }

    /**
     * 根据账户日资金核算主键id,获取对应的信息.
     *
     * @param array $data 账户日资金核算数据
     * @param int $data['paId'] 账户id
     * @param int $data['accountMoney'] 帐户金额
     * @param int $data['changeMoney'] 帐户变更金额汇总
     * @param int $data['status'] 比较结果：0 未比较 1 平衡 2 不平衡
     * @param string $data['remark'] 备注
     *
     * @throws \Eelly\SDK\Pay\Exception\AccountException
     *
     * @return bool
     * @requestExample({"data":{"paId":2,"accountMoney":100,"changeMoney":10,"status":1,"remark":""}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     * @since  2017-11-09
     */
    public function addAccountAdjustAsync(array $data)
    {
        return EellyClient::request('pay/accountAdjust', __FUNCTION__, false, $data);
    }

    /**
     * 根据账户日资金核算主键id,获取对应的信息.
     *
     * @param int $paaId 账户日资金核算主键id
     * @param array $data 账户日资金核算数据
     * @param int $data['paId'] 账户id
     * @param int $data['accountMoney'] 帐户金额
     * @param int $data['changeMoney'] 帐户变更金额汇总
     * @param int $data['status'] 比较结果：0 未比较 1 平衡 2 不平衡
     * @param string $data['remark'] 备注
     *
     * @throws \Eelly\SDK\Pay\Exception\AccountException
     *
     * @return bool
     * @requestExample({"paaId":1,"data":{"paId":2,"accountMoney":100,"changeMoney":10,"status":1,"remark":""}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     * @since  2017-11-09
     */
    public function updateAccountAdjust(int $paaId, array $data): bool
    {
        return EellyClient::request('pay/accountAdjust', __FUNCTION__, true, $paaId, $data);
    }

    /**
     * 根据账户日资金核算主键id,获取对应的信息.
     *
     * @param int $paaId 账户日资金核算主键id
     * @param array $data 账户日资金核算数据
     * @param int $data['paId'] 账户id
     * @param int $data['accountMoney'] 帐户金额
     * @param int $data['changeMoney'] 帐户变更金额汇总
     * @param int $data['status'] 比较结果：0 未比较 1 平衡 2 不平衡
     * @param string $data['remark'] 备注
     *
     * @throws \Eelly\SDK\Pay\Exception\AccountException
     *
     * @return bool
     * @requestExample({"paaId":1,"data":{"paId":2,"accountMoney":100,"changeMoney":10,"status":1,"remark":""}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     * @since  2017-11-09
     */
    public function updateAccountAdjustAsync(int $paaId, array $data)
    {
        return EellyClient::request('pay/accountAdjust', __FUNCTION__, false, $paaId, $data);
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