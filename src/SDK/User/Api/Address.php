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

namespace Eelly\SDK\User\Api;

use Eelly\DTO\AddressDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\User\Service\AddressInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Address implements AddressInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getAddress(int $AddressId): AddressDTO
    {
        return EellyClient::request('user/address', 'getAddress', $AddressId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addAddress(array $data): bool
    {
        return EellyClient::request('user/address', 'addAddress', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateAddress(int $AddressId, array $data): bool
    {
        return EellyClient::request('user/address', 'updateAddress', $AddressId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteAddress(int $AddressId): bool
    {
        return EellyClient::request('user/address', 'deleteAddress', $AddressId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listAddressPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('user/address', 'listAddressPage', $condition, $limit, $currentPage);
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
