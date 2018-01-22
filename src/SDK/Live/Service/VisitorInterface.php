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

namespace Eelly\SDK\Live\Service;

use \SDK\Live\DTO\VisitorDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
interface VisitorInterface
{
    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getVisitor(int $visitorId): VisitorDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addVisitor(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateVisitor(int $visitorId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteVisitor(int $visitorId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listVisitorPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}