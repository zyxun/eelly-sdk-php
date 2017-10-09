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
use Eelly\SDK\Service\DTO\EntityCustomDTO;
use Eelly\SDK\Service\Service\EntityCustomInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class EntityCustom implements EntityCustomInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getEntityCustom(int $secId): EntityCustomDTO
    {
        return EellyClient::request('service/EntityCustom', 'getEntityCustom', $secId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addEntityCustom(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/EntityCustom', 'addEntityCustom', $data, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateEntityCustom(int $secId, array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/EntityCustom', 'updateEntityCustom', $secId, $data, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listEntityCustomPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('service/EntityCustom', 'listEntityCustomPage', $condition, $currentPage, $limit);
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
