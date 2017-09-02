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

namespace Eelly\SDK\System\Api;

use Eelly\DTO\KeyDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\KeyInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Key implements KeyInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getKey(int $KeyId): KeyDTO
    {
        return EellyClient::request('system/key', 'getKey', $KeyId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addKey(array $data): bool
    {
        return EellyClient::request('system/key', 'addKey', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateKey(int $KeyId, array $data): bool
    {
        return EellyClient::request('system/key', 'updateKey', $KeyId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteKey(int $KeyId): bool
    {
        return EellyClient::request('system/key', 'deleteKey', $KeyId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listKeyPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('system/key', 'listKeyPage', $condition, $limit, $currentPage);
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
