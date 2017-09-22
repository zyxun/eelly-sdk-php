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

use Eelly\DTO\ApplyDTO;

/**
 * 发起交易申请.
 * 
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ApplyInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getApply(int $applyId): ApplyDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addApply(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateApply(int $applyId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteApply(int $applyId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listApplyPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
