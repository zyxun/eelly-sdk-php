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

namespace Eelly\SDK\System\Api;

use Eelly\DTO\CommentDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\CommentInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Comment implements CommentInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getComment(int $CommentId): CommentDTO
    {
        return EellyClient::request('system/comment', 'getComment', $CommentId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addComment(array $data): bool
    {
        return EellyClient::request('system/comment', 'addComment', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateComment(int $CommentId, array $data): bool
    {
        return EellyClient::request('system/comment', 'updateComment', $CommentId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteComment(int $CommentId): bool
    {
        return EellyClient::request('system/comment', 'deleteComment', $CommentId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCommentPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('system/comment', 'listCommentPage', $condition, $limit, $currentPage);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}
