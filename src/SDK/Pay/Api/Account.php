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
use Eelly\SDK\Pay\DTO\AccountDTO;
use Eelly\SDK\Pay\Service\AccountInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Account implements AccountInterface
{
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


    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getAccount(int $paId): AccountDTO
    {
        return EellyClient::request('pay/account', 'getAccount', true, $paId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addAccount(array $data): bool
    {
        // TODO: Implement addAccount() method.
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateAccount(int $accountId, array $data): bool
    {
        // TODO: Implement updateAccount() method.
    }

    /**
     * 我的余额，管理=》app资金管理.
     *
     * @param int $storeId 店铺ID,如果是店铺ID
     * @param UidDTO|null $user 登录用户
     *
     * @return array
     * @requestExample({"storeId":1})
     * @returnExample({
     *     "money":"0.02",
     *     "frozenMoney":"0.01",
     *     "isWechatBindPurse":"true",
     *     "wechatNickname":"molimoq",
     *     "bindMobile":"13800138000",
     *     "isSetPayPwd":true,
     *     "isCapitalFreeze":true,
     *     "limitedFunctionality": true
     * })
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年11月09日
     */
    public function getAccountMoneyManage(int $storeId = 0, UidDTO $user = null): array
    {
        // TODO: Implement getAccountMoneyManage() method.
    }
}
