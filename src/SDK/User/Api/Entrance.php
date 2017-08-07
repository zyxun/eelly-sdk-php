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
use Eelly\SDK\User\Service\EntranceInterface;
use Eelly\DTO\EntranceDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Entrance implements EntranceInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getEntrance(int $EntranceId): EntranceDTO
    {
        return EellyClient::request('user/entrance', 'getEntrance', $EntranceId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addEntrance(array $data): bool
    {
        return EellyClient::request('user/entrance', 'addEntrance', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateEntrance(int $EntranceId,array $data): bool
    {
        return EellyClient::request('user/entrance', 'updateEntrance', $EntranceId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteEntrance(int $EntranceId): bool
    {
        return EellyClient::request('user/entrance', 'deleteEntrance', $EntranceId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listEntrancePage(array $condition = [],int $limit = 10,int $currentPage = 1): array
    {
        return EellyClient::request('user/entrance', 'listEntrancePage', $condition, $limit, $currentPage);
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