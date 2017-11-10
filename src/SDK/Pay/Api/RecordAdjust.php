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

namespace Eelly\SDK\Pay\Api;

use Eelly\DTO\RecordAdjustDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\RecordAdjustInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class RecordAdjust implements RecordAdjustInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRecordAdjust(int $recordAdjustId): RecordAdjustDTO
    {
        return EellyClient::request('pay/recordadjust', 'getRecordAdjust', $recordAdjustId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRecordAdjust(array $data): bool
    {
        return EellyClient::request('pay/recordadjust', 'addRecordAdjust', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateRecordAdjust(int $recordAdjustId, array $data): bool
    {
        return EellyClient::request('pay/recordadjust', 'updateRecordAdjust', $recordAdjustId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteRecordAdjust(int $recordAdjustId): bool
    {
        return EellyClient::request('pay/recordadjust', 'deleteRecordAdjust', $recordAdjustId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listRecordAdjustPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('pay/recordadjust', 'listRecordAdjustPage', $condition, $currentPage, $limit);
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
