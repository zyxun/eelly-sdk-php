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
 * @author eellytools<localhost.shell@gmail.com>
 */
class Reply implements ReplyInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getReply(int $ReplyId): ReplyDTO
    {
        return EellyClient::request('system/reply', 'getReply', $ReplyId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addReply(array $data): bool
    {
        return EellyClient::request('system/reply', 'addReply', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateReply(int $ReplyId, array $data): bool
    {
        return EellyClient::request('system/reply', 'updateReply', $ReplyId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteReply(int $ReplyId): bool
    {
        return EellyClient::request('system/reply', 'deleteReply', $ReplyId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listReplyPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('system/reply', 'listReplyPage', $condition, $limit, $currentPage);
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
