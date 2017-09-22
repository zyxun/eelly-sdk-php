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

use Eelly\DTO\ExtendDTO;

/**
 * 评论扩展.
 * 
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ExtendInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getExtend(int $ExtendId): ExtendDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addExtend(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateExtend(int $ExtendId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteExtend(int $ExtendId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listExtendPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
