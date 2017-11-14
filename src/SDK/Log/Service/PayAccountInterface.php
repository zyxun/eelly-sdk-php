<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Log\Service;

use Eelly\DTO\PayAccountDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface PayAccountInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getPayAccount(int $payAccountId): PayAccountDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addPayAccount(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updatePayAccount(int $payAccountId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deletePayAccount(int $payAccountId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listPayAccountPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}