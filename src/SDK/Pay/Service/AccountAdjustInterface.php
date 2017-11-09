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

use Eelly\DTO\AccountAdjustDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface AccountAdjustInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getAccountAdjust(int $accountAdjustId): AccountAdjustDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addAccountAdjust(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateAccountAdjust(int $accountAdjustId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteAccountAdjust(int $accountAdjustId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listAccountAdjustPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}