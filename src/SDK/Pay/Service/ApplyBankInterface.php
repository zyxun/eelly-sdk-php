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

use Eelly\SDK\Pay\DTO\ApplyBankDTO;


/**
 * 发起交易申请银行信息.
 * 
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ApplyBankInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getApplyBank(int $applyBankId): ApplyBankDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addApplyBank(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateApplyBank(int $applyBankId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteApplyBank(int $applyBankId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listApplyBankPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
