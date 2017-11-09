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

use Eelly\DTO\AccountDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface AccountInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getAccount(int $accountId): AccountDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addAccount(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateAccount(int $accountId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteAccount(int $accountId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listAccountPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}