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
use Eelly\SDK\Pay\Service\ApplyWithdrawInterface;

class ApplyWithdraw implements ApplyWithdrawInterface
{
    /**
     * {@inheritdoc}
     */
    public function prepareApplyForm(int $storeId, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('pay/applyWithdraw', __FUNCTION__, true, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function applyForBank(int $paId, int $pbId, int $money, string $payPassword, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('pay/applyWithdraw', __FUNCTION__, true, $paId, $pbId, $money, $payPassword);
    }
}
