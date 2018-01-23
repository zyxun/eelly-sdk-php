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

namespace Eelly\SDK\Advert\Service;

use \SDK\Advert\DTO\AdvertDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
interface AdvertInterface
{
    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getAdvert(int $advertId): AdvertDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addAdvert(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateAdvert(int $advertId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteAdvert(int $advertId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listAdvertPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}