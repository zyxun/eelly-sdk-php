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

use Eelly\DTO\ReplyDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ReplyInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getReply(int $ReplyId): ReplyDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addReply(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateReply(int $ReplyId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteReply(int $ReplyId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listReplyPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}