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

namespace Eelly\SDK\Contact\Api;

use Eelly\DTO\RelationDTO;
use Eelly\SDK\Contact\Service\RelationInterface;
use Eelly\SDK\EellyClient;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Relation implements RelationInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRelation(int $relationId): RelationDTO
    {
        return EellyClient::request('contact/relation', 'getRelation', $relationId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRelation(array $data): bool
    {
        return EellyClient::request('contact/relation', 'addRelation', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateRelation(int $relationId, array $data): bool
    {
        return EellyClient::request('contact/relation', 'updateRelation', $relationId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteRelation(int $relationId): bool
    {
        return EellyClient::request('contact/relation', 'deleteRelation', $relationId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listRelationPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('contact/relation', 'listRelationPage', $condition, $currentPage, $limit);
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
