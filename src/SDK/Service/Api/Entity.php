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
use Eelly\SDK\Service\DTO\EntityDTO;
use Eelly\SDK\Service\Service\EntityInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Entity implements EntityInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getEntity(int $storeId, UidDTO $user = null): EntityDTO
    {
        return EellyClient::request('service/Entity', 'getEntity', $storeId, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addEntity(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/Entity', 'addEntity', $data, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateEntity(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/Entity', 'updateEntity', $data, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function checkEntity(int $storeId, int $status, UidDTO $user = null): bool
    {
        return EellyClient::request('service/Entity', 'checkEntity', $storeId, $status, $user);
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
