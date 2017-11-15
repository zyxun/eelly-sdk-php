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

namespace Eelly\SDK\Pay\Service;

use Eelly\DTO\RecordAdjustDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface RecordAdjustInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRecordAdjust(int $recordAdjustId): RecordAdjustDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRecordAdjust(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateRecordAdjust(int $recordAdjustId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteRecordAdjust(int $recordAdjustId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listRecordAdjustPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
