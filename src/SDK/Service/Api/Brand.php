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
use Eelly\SDK\Service\DTO\BrandDTO;
use Eelly\SDK\Service\Service\BrandInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Brand implements BrandInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getBrand(int $storeId, UidDTO $user = null): BrandDTO
    {
        return EellyClient::request('service/Brand', 'getBrand', true, $storeId, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addBrand(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/Brand', 'addBrand', true, $data, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateBrand(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/Brand', 'updateBrand', true, $data, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function checkBrand(int $storeId, int $status, UidDTO $user = null): bool
    {
        return EellyClient::request('service/Brand', 'checkBrand', true, $storeId, $status, $user);
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
