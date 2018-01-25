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
use Eelly\SDK\Live\Service\LabelRefInterface;
use SDK\Live\DTO\LabelRefDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class LabelRef implements LabelRefInterface
{
    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getLabelRef(int $labelRefId): LabelRefDTO
    {
        return EellyClient::request('live/labelRef', 'getLabelRef', true, $labelRefId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getLabelRefAsync(int $labelRefId)
    {
        return EellyClient::request('live/labelRef', 'getLabelRef', false, $labelRefId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addLabelRef(array $data): bool
    {
        return EellyClient::request('live/labelRef', 'addLabelRef', true, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addLabelRefAsync(array $data)
    {
        return EellyClient::request('live/labelRef', 'addLabelRef', false, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateLabelRef(int $labelRefId, array $data): bool
    {
        return EellyClient::request('live/labelRef', 'updateLabelRef', true, $labelRefId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateLabelRefAsync(int $labelRefId, array $data)
    {
        return EellyClient::request('live/labelRef', 'updateLabelRef', false, $labelRefId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteLabelRef(int $labelRefId): bool
    {
        return EellyClient::request('live/labelRef', 'deleteLabelRef', true, $labelRefId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteLabelRefAsync(int $labelRefId)
    {
        return EellyClient::request('live/labelRef', 'deleteLabelRef', false, $labelRefId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listLabelRefPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('live/labelRef', 'listLabelRefPage', true, $condition, $currentPage, $limit);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listLabelRefPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('live/labelRef', 'listLabelRefPage', false, $condition, $currentPage, $limit);
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