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

namespace Eelly\SDK\User\Service;

use Eelly\DTO\AddressDTO;

/**
 * 用户地址信息.
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface AddressInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getAddress(int $AddressId): AddressDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addAddress(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateAddress(int $AddressId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteAddress(int $AddressId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listAddressPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
