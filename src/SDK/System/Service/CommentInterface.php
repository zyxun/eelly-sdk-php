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

use Eelly\DTO\CommentDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface CommentInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getComment(int $CommentId): CommentDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addComment(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateComment(int $CommentId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteComment(int $CommentId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCommentPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
