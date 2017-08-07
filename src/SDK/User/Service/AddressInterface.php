<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\User\Service;

use Eelly\DTO\AddressDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface AddressInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getAddress(int $AddressId): AddressDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addAddress(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateAddress(int $AddressId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteAddress(int $AddressId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listAddressPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}