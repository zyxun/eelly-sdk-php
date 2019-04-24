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

use Eelly\DTO\ReplyDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\ReplyInterface;

/**
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Reply
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getReply(int $ReplyId): ReplyDTO
    {
        return EellyClient::request('system/reply', __FUNCTION__, true, $ReplyId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getReplyAsync(int $ReplyId)
    {
        return EellyClient::request('system/reply', __FUNCTION__, false, $ReplyId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addReply(array $data): bool
    {
        return EellyClient::request('system/reply', __FUNCTION__, true, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addReplyAsync(array $data)
    {
        return EellyClient::request('system/reply', __FUNCTION__, false, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateReply(int $ReplyId, array $data): bool
    {
        return EellyClient::request('system/reply', __FUNCTION__, true, $ReplyId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateReplyAsync(int $ReplyId, array $data)
    {
        return EellyClient::request('system/reply', __FUNCTION__, false, $ReplyId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteReply(int $ReplyId): bool
    {
        return EellyClient::request('system/reply', __FUNCTION__, true, $ReplyId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteReplyAsync(int $ReplyId)
    {
        return EellyClient::request('system/reply', __FUNCTION__, false, $ReplyId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listReplyPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('system/reply', __FUNCTION__, true, $condition, $currentPage, $limit);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listReplyPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('system/reply', __FUNCTION__, false, $condition, $currentPage, $limit);
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
