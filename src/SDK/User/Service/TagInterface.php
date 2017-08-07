<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\User\Service;

use Eelly\DTO\TagDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface TagInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getTag(int $TagId): TagDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addTag(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateTag(int $TagId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteTag(int $TagId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listTagPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}