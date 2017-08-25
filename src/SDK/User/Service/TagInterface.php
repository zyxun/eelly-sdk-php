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

namespace Eelly\SDK\User\Service;

use Eelly\DTO\TagDTO;

/**
 * 用户标签信息.
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface TagInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getTag(int $TagId): TagDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addTag(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateTag(int $TagId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteTag(int $TagId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listTagPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
