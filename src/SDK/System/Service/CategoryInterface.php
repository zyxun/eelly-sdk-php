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

use Eelly\DTO\CategoryDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface CategoryInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCategory(int $CategoryId): CategoryDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCategory(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCategory(int $CategoryId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCategory(int $CategoryId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCategoryPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}