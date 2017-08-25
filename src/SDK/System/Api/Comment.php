<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\System\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\CommentInterface;
use Eelly\DTO\CommentDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Comment implements CommentInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getComment(int $CommentId): CommentDTO
    {
        return EellyClient::request('system/comment', 'getComment', $CommentId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addComment(array $data): bool
    {
        return EellyClient::request('system/comment', 'addComment', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateComment(int $CommentId, array $data): bool
    {
        return EellyClient::request('system/comment', 'updateComment', $CommentId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteComment(int $CommentId): bool
    {
        return EellyClient::request('system/comment', 'deleteComment', $CommentId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCommentPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
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