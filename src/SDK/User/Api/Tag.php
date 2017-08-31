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

namespace Eelly\SDK\User\Api;

use Eelly\DTO\TagDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\User\Service\TagInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Tag implements TagInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getTag(int $TagId): TagDTO
    {
        return EellyClient::request('user/tag', 'getTag', $TagId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addTag(array $data): bool
    {
        return EellyClient::request('user/tag', 'addTag', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateTag(int $TagId, array $data): bool
    {
        return EellyClient::request('user/tag', 'updateTag', $TagId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteTag(int $TagId): bool
    {
        return EellyClient::request('user/tag', 'deleteTag', $TagId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listTagPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('user/tag', 'listTagPage', $condition, $limit, $currentPage);
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
