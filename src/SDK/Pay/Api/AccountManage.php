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
use Eelly\SDK\Pay\Service\AccountManageInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class AccountManage implements AccountManageInterface
{
    /**
     * 更改账户状态
     *
     * @internal
     *
     * @param int $userId   会员ID
     * @param int $storeId  店铺ID
     * @param int $toStatus 目标状态
     * @param int $adminId  操作人ID
     * @return bool
     *
     * @author zhangyangxun
     * @since 2018-12-29
     */
    public function updateAccountStatus(int $userId, int $storeId, int $toStatus, int $adminId): bool
    {
        return EellyClient::request('pay/accountManage', 'updateAccountStatus', true, $userId, $storeId, $toStatus, $adminId);
    }

    /**
     * 更改账户状态
     *
     * @internal
     *
     * @param int $userId   会员ID
     * @param int $storeId  店铺ID
     * @param int $toStatus 目标状态
     * @param int $adminId  操作人ID
     * @return bool
     *
     * @author zhangyangxun
     * @since 2018-12-29
     */
    public function updateAccountStatusAsync(int $userId, int $storeId, int $toStatus, int $adminId)
    {
        return EellyClient::request('pay/accountManage', 'updateAccountStatus', false, $userId, $storeId, $toStatus, $adminId);
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