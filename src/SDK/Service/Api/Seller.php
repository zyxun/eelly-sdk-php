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
use Eelly\SDK\Service\DTO\SellerDTO;
use Eelly\SDK\Service\Service\SellerInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Seller implements SellerInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSeller(int $storeId, UidDTO $user = null): SellerDTO
    {
        return EellyClient::request('service/Seller', 'getSeller', $storeId, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSeller(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/Seller', 'addSeller', $data, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSeller(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/Seller', 'updateSeller', $data, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function checkSeller(int $storeId, int $status, UidDTO $user = null): bool
    {
        return EellyClient::request('service/Seller', 'checkSeller', $storeId, $status, $user);
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
