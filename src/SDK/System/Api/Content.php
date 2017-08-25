<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\System\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\ContentInterface;
use Eelly\DTO\ContentDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Content implements ContentInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getContent(int $ContentId): ContentDTO
    {
        return EellyClient::request('system/content', 'getContent', $ContentId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addContent(array $data): bool
    {
        return EellyClient::request('system/content', 'addContent', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateContent(int $ContentId, array $data): bool
    {
        return EellyClient::request('system/content', 'updateContent', $ContentId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteContent(int $ContentId): bool
    {
        return EellyClient::request('system/content', 'deleteContent', $ContentId);
    }

    /**
     *
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