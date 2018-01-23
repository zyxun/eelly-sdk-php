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

namespace Eelly\SDK\Live\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Live\Service\LabelInterface;
use SDK\Live\DTO\LabelDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Label implements LabelInterface
{
    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getLabel(int $labelId): LabelDTO
    {
        return EellyClient::request('live/label', 'getLabel', true, $labelId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getLabelAsync(int $labelId)
    {
        return EellyClient::request('live/label', 'getLabel', false, $labelId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addLabel(array $data): bool
    {
        return EellyClient::request('live/label', 'addLabel', true, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addLabelAsync(array $data)
    {
        return EellyClient::request('live/label', 'addLabel', false, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateLabel(int $labelId, array $data): bool
    {
        return EellyClient::request('live/label', 'updateLabel', true, $labelId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateLabelAsync(int $labelId, array $data)
    {
        return EellyClient::request('live/label', 'updateLabel', false, $labelId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteLabel(int $labelId): bool
    {
        return EellyClient::request('live/label', 'deleteLabel', true, $labelId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteLabelAsync(int $labelId)
    {
        return EellyClient::request('live/label', 'deleteLabel', false, $labelId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listLabelPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('live/label', 'listLabelPage', true, $condition, $currentPage, $limit);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listLabelPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('live/label', 'listLabelPage', false, $condition, $currentPage, $limit);
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