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

use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\System\DTO\ArticleDTO;
use Eelly\SDK\System\Service\ArticleInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Article implements ArticleInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getArticle(int $articleId): ArticleDTO
    {
        return EellyClient::request('system/article', 'getArticle', $articleId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addArticle(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('system/article', 'addArticle', $data, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateArticle(int $articleId, array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('system/article', 'updateArticle', $articleId, $data, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteArticle(int $articleId, UidDTO $user = null): bool
    {
        return EellyClient::request('system/article', 'deleteArticle', $articleId, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listArticlePage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('system/article', 'listArticlePage', $condition, $currentPage, $limit);
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
