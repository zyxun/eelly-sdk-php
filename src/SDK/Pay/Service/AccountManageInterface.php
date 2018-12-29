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
 * 会员资金账户.
 */
interface AccountManageInterface
{

    /**
     * 更改账户状态
     *
     * @internal
     *
     * @param int $userId   会员ID
     * @param int $storeId  店铺ID
     * @param int $toStatus 目标状态
     * @return bool
     *
     * @author zhangyangxun
     * @since 2018-12-29
     */
    public function updateAccountStatus(int $userId, int $storeId, int $toStatus): bool ;
}
