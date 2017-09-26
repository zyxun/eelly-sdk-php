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

use Eelly\DTO\TagRelDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface TagRelInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getTagRel(int $tagRelId): TagRelDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addTagRel(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateTagRel(int $tagRelId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteTagRel(int $tagRelId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listTagRelPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}