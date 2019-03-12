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
     * @param array  $data
     * @param int    $data['userId']    会员ID
     * @param int    $data['storeId']   店铺ID
     * @param int    $data['toStatus']  目标状态
     * @param int    $data['adminId']   操作人ID
     * @param string $data['remark']    操作备注
     * @return bool
     *
     * @author zhangyangxun
     * @since 2018-12-29
     */
    public function updateAccountStatus(array $data): bool
    {
        return EellyClient::request('pay/accountManage', 'updateAccountStatus', true, $data);
    }

    /**
     * 更改账户状态
     *
     * @internal
     *
     * @param array  $data
     * @param int    $data['userId']    会员ID
     * @param int    $data['storeId']   店铺ID
     * @param int    $data['toStatus']  目标状态
     * @param int    $data['adminId']   操作人ID
     * @param string $data['remark']    操作备注
     * @return bool
     *
     * @author zhangyangxun
     * @since 2018-12-29
     */
    public function updateAccountStatusAsync(array $data)
    {
        return EellyClient::request('pay/accountManage', 'updateAccountStatus', false, $data);
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