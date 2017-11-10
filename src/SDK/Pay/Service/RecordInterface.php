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

use Eelly\DTO\RecordDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface RecordInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRecord(int $recordId): RecordDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRecord(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listRecordPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
