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

use Eelly\DTO\ContentDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\ContentInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Content implements ContentInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getContent(int $ContentId): ContentDTO
    {
        return EellyClient::request('system/content', 'getContent', $ContentId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addContent(array $data): bool
    {
        return EellyClient::request('system/content', 'addContent', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateContent(int $ContentId, array $data): bool
    {
        return EellyClient::request('system/content', 'updateContent', $ContentId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteContent(int $ContentId): bool
    {
        return EellyClient::request('system/content', 'deleteContent', $ContentId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listContentPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('system/content', 'listContentPage', $condition, $limit, $currentPage);
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
