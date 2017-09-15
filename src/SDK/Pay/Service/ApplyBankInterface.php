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

use Eelly\DTO\ApplyBankDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ApplyBankInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getApplyBank(int $applyBankId): ApplyBankDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addApplyBank(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateApplyBank(int $applyBankId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteApplyBank(int $applyBankId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listApplyBankPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}