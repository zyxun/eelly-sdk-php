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
use Eelly\SDK\System\Service\ArticleInterface;
use Eelly\DTO\ArticleDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Article implements ArticleInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getArticle(int $ArticleId): ArticleDTO
    {
        return EellyClient::request('system/article', 'getArticle', $ArticleId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addArticle(array $data): bool
    {
        return EellyClient::request('system/article', 'addArticle', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateArticle(int $ArticleId, array $data): bool
    {
        return EellyClient::request('system/article', 'updateArticle', $ArticleId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteArticle(int $ArticleId): bool
    {
        return EellyClient::request('system/article', 'deleteArticle', $ArticleId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listArticlePage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('system/article', 'listArticlePage', $condition, $limit, $currentPage);
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