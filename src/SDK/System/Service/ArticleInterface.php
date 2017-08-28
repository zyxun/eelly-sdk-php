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

namespace Eelly\SDK\System\Service;

use Eelly\DTO\ArticleDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ArticleInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getArticle(int $ArticleId): ArticleDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addArticle(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateArticle(int $ArticleId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteArticle(int $ArticleId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listArticlePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
