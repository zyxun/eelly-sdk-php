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

use Eelly\SDK\Pay\Service\SettlementInterface;

class Settlement implements SettlementInterface
{
    /**
     * {@inheritdoc}
     */
    public function queryOrder(
        int $storeId,
        int $orderId,
        string $orderSn,
        int $orderAmount,
        int $initGoodsAmount,
        int $initFreight,
        int $discountAmount,
        int $returnAmount,
        int $returnFreight
    ): bool {
        return EellyClient::request('pay/settlement', __FUNCTION__, true,
            $storeId,
            $orderId,
            $orderSn,
            $orderAmount,
            $initGoodsAmount,
            $initFreight,
            $discountAmount,
            $returnAmount,
            $returnFreight
        );
    }
}
