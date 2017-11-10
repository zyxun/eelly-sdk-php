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

use Eelly\DTO\RecordDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface RecordInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRecord(int $recordId): RecordDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRecord(array $data): bool;


    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listRecordPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}