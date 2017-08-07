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
use Eelly\SDK\User\Service\TagInterface;
use Eelly\DTO\TagDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Tag implements TagInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getTag(int $TagId): TagDTO
    {
        return EellyClient::request('user/tag', 'getTag', $TagId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addTag(array $data): bool
    {
        return EellyClient::request('user/tag', 'addTag', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateTag(int $TagId,array $data): bool
    {
        return EellyClient::request('user/tag', 'updateTag', $TagId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteTag(int $TagId): bool
    {
        return EellyClient::request('user/tag', 'deleteTag', $TagId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listTagPage(array $condition = [],int $limit = 10,int $currentPage = 1): array
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