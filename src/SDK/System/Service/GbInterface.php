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

namespace Eelly\SDK\System\Service;

use Eelly\DTO\GbDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface GbInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getGb(int $GbId): GbDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addGb(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateGb(int $GbId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteGb(int $GbId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listGbPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}
