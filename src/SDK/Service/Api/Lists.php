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
use Eelly\SDK\Service\DTO\ListsDTO;
use Eelly\SDK\Service\Service\ListsInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Lists implements ListsInterface
{

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getLists(int $slId): ListsDTO
    {
        return EellyClient::request('service/Lists', 'getLists', $slId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addLists(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/Lists', 'addLists', $data, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateLists(int $slId, array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/Lists', 'updateLists', $slId, $data, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteLists(int $slId, UidDTO $user = null): bool
    {
        return EellyClient::request('service/Lists', 'deleteLists', $slId, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listListsPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('service/Lists', 'listListsPage', $condition, $currentPage, $limit);
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
