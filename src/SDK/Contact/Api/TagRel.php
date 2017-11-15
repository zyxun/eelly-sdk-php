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

use Eelly\DTO\TagRelDTO;
use Eelly\SDK\Contact\Service\TagRelInterface;
use Eelly\SDK\EellyClient;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class TagRel implements TagRelInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getTagRel(int $tagRelId): TagRelDTO
    {
        return EellyClient::request('contact/tagrel', 'getTagRel', $tagRelId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addTagRel(array $data): bool
    {
        return EellyClient::request('contact/tagrel', 'addTagRel', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateTagRel(int $tagRelId, array $data): bool
    {
        return EellyClient::request('contact/tagrel', 'updateTagRel', $tagRelId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteTagRel(int $tagRelId): bool
    {
        return EellyClient::request('contact/tagrel', 'deleteTagRel', $tagRelId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listTagRelPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('contact/tagrel', 'listTagRelPage', $condition, $currentPage, $limit);
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
