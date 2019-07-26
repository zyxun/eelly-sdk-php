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

namespace Eelly\SDK\Order\Api;

use Eelly\SDK\EellyClient;

/**
 * @author shadonTools<localhost.shell@gmail.com>
 */
class EvaluationBuyer
{
    public function adminGetListPage(array $condition = [], int $page = 1, int $limit = 20): array
    {
        return EellyClient::request('order/evaluationBuyer', __FUNCTION__, true, $condition, $page, $limit);
    }

    public function adminUpdate(int $orderId, array $data): bool
    {
        return EellyClient::request('order/evaluationBuyer', __FUNCTION__, true, $orderId, $data);
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
