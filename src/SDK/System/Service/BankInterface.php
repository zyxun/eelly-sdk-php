<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\System\Service;

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
    public function getBank(int $BankId): BankDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addBank(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateBank(int $BankId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteBank(int $BankId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listBankPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}