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

use Eelly\DTO\FeedbackDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\FeedbackInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Feedback implements FeedbackInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getFeedback(int $FeedbackId): FeedbackDTO
    {
        return EellyClient::request('system/feedback', 'getFeedback', $FeedbackId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addFeedback(array $data): bool
    {
        return EellyClient::request('system/feedback', 'addFeedback', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateFeedback(int $FeedbackId, array $data): bool
    {
        return EellyClient::request('system/feedback', 'updateFeedback', $FeedbackId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteFeedback(int $FeedbackId): bool
    {
        return EellyClient::request('system/feedback', 'deleteFeedback', $FeedbackId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listFeedbackPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('system/feedback', 'listFeedbackPage', $condition, $limit, $currentPage);
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
