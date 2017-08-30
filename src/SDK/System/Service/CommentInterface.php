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

use Eelly\DTO\CommentDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface CommentInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getComment(int $CommentId): CommentDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addComment(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateComment(int $CommentId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteComment(int $CommentId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCommentPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}