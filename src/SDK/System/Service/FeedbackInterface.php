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

use Eelly\DTO\FeedbackDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface FeedbackInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getFeedback(int $FeedbackId): FeedbackDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addFeedback(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateFeedback(int $FeedbackId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteFeedback(int $FeedbackId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listFeedbackPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}