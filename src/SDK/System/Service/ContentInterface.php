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

use Eelly\DTO\ContentDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ContentInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getContent(int $ContentId): ContentDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addContent(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateContent(int $ContentId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteContent(int $ContentId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listContentPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}