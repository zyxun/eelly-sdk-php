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

use \SDK\Live\DTO\SubscribeDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
interface SubscribeInterface
{
    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSubscribe(int $subscribeId): SubscribeDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSubscribe(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSubscribe(int $subscribeId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSubscribe(int $subscribeId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSubscribePage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}