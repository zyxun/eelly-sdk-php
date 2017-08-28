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

use Eelly\DTO\CategoryDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\CategoryInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Category implements CategoryInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCategory(int $CategoryId): CategoryDTO
    {
        return EellyClient::request('system/category', 'getCategory', $CategoryId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCategory(array $data): bool
    {
        return EellyClient::request('system/category', 'addCategory', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCategory(int $CategoryId, array $data): bool
    {
        return EellyClient::request('system/category', 'updateCategory', $CategoryId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCategory(int $CategoryId): bool
    {
        return EellyClient::request('system/category', 'deleteCategory', $CategoryId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCategoryPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('system/category', 'listCategoryPage', $condition, $limit, $currentPage);
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
