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

use Eelly\DTO\BankDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface BankInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getBank(int $bankId): BankDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addBank(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateBank(int $bankId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteBank(int $bankId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listBankPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}