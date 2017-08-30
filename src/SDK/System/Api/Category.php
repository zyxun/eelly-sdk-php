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
use Eelly\SDK\System\Service\CategoryInterface;
use Eelly\DTO\CategoryDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Category implements CategoryInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCategory(int $CategoryId): CategoryDTO
    {
        return EellyClient::request('system/category', 'getCategory', $CategoryId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCategory(array $data): bool
    {
        return EellyClient::request('system/category', 'addCategory', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCategory(int $CategoryId, array $data): bool
    {
        return EellyClient::request('system/category', 'updateCategory', $CategoryId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCategory(int $CategoryId): bool
    {
        return EellyClient::request('system/category', 'deleteCategory', $CategoryId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCategoryPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
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