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
use Eelly\SDK\System\Service\ReplyInterface;
use Eelly\DTO\ReplyDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Reply implements ReplyInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getReply(int $ReplyId): ReplyDTO
    {
        return EellyClient::request('system/reply', 'getReply', $ReplyId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addReply(array $data): bool
    {
        return EellyClient::request('system/reply', 'addReply', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateReply(int $ReplyId, array $data): bool
    {
        return EellyClient::request('system/reply', 'updateReply', $ReplyId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteReply(int $ReplyId): bool
    {
        return EellyClient::request('system/reply', 'deleteReply', $ReplyId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listReplyPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
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