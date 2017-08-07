<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\User\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\User\Service\AddressInterface;
use Eelly\DTO\AddressDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Address implements AddressInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getAddress(int $AddressId): AddressDTO
    {
        return EellyClient::request('user/address', 'getAddress', $AddressId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addAddress(array $data): bool
    {
        return EellyClient::request('user/address', 'addAddress', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateAddress(int $AddressId,array $data): bool
    {
        return EellyClient::request('user/address', 'updateAddress', $AddressId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteAddress(int $AddressId): bool
    {
        return EellyClient::request('user/address', 'deleteAddress', $AddressId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listAddressPage(array $condition = [],int $limit = 10,int $currentPage = 1): array
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