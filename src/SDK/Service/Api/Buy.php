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

namespace Eelly\SDK\Service\Api;

use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Service\DTO\BuyDTO;
use Eelly\SDK\Service\Service\BuyInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Buy implements BuyInterface
{

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getBuy(int $storeId, UidDTO $user = null): BuyDTO
    {
        return EellyClient::request('service/Buy', 'getBuy', $storeId, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addBuy(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/Buy', 'addBuy', $data, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listBuyPage(int $storeId = null, int $userId = null, int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('service/Buy', 'listBuyPage', $storeId, $userId, $currentPage, $limit);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateExpireTime(int $sbId, UidDTO $user = null): bool
    {
        return EellyClient::request('service/Buy', 'updateExpireTime', $sbId, $user);
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
