<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\System\Service;

use Eelly\DTO\ArticleDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ArticleInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getArticle(int $ArticleId): ArticleDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addArticle(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateArticle(int $ArticleId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteArticle(int $ArticleId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listArticlePage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}