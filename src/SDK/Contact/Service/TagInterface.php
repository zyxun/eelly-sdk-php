<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Contact\Service;

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
    public function getTag(int $tagId): TagDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addTag(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateTag(int $tagId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteTag(int $tagId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listTagPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}