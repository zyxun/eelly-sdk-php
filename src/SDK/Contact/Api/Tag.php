<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Contact\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Contact\Service\TagInterface;
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
    public function getTag(int $tagId): TagDTO
    {
        return EellyClient::request('contact/tag', 'getTag', $tagId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addTag(array $data): bool
    {
        return EellyClient::request('contact/tag', 'addTag', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateTag(int $tagId, array $data): bool
    {
        return EellyClient::request('contact/tag', 'updateTag', $tagId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteTag(int $tagId): bool
    {
        return EellyClient::request('contact/tag', 'deleteTag', $tagId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listTagPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('contact/tag', 'listTagPage', $condition, $currentPage, $limit);
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