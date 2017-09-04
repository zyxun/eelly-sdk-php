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
use Eelly\SDK\System\DTO\CategoryDTO;

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
    public function getCategory(int $categoryId): CategoryDTO
    {
        return EellyClient::request('system/category', 'getCategory', $categoryId);
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
    public function updateCategory(int $categoryId, array $data): bool
    {
        return EellyClient::request('system/category', 'updateCategory', $categoryId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCategory(int $categoryId): bool
    {
        return EellyClient::request('system/category', 'deleteCategory', $categoryId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCategory(): array
    {
        return EellyClient::request('system/category', 'listCategoryPage');
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