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

use Eelly\DTO\ReplyDTO;

/**
 * 评论回复.
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ReplyInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getReply(int $ReplyId): ReplyDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addReply(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateReply(int $ReplyId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteReply(int $ReplyId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listReplyPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
