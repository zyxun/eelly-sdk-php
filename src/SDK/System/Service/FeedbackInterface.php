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

use Eelly\DTO\FeedbackDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface FeedbackInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getFeedback(int $FeedbackId): FeedbackDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addFeedback(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateFeedback(int $FeedbackId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteFeedback(int $FeedbackId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listFeedbackPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
