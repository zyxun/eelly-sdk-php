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

use Eelly\DTO\CategoryDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface CategoryInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCategory(int $CategoryId): CategoryDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCategory(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCategory(int $CategoryId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCategory(int $CategoryId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCategoryPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
