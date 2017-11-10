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

use Eelly\DTO\AccountLogDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface AccountLogInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getAccountLog(int $accountLogId): AccountLogDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addAccountLog(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateAccountLog(int $accountLogId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteAccountLog(int $accountLogId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listAccountLogPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}