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

use Eelly\DTO\ContentDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ContentInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getContent(int $ContentId): ContentDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addContent(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateContent(int $ContentId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteContent(int $ContentId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listContentPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
