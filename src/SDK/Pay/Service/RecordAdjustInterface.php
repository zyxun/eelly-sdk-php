<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Pay\Service;

use Eelly\DTO\RecordAdjustDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface RecordAdjustInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRecordAdjust(int $recordAdjustId): RecordAdjustDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRecordAdjust(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateRecordAdjust(int $recordAdjustId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteRecordAdjust(int $recordAdjustId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listRecordAdjustPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}