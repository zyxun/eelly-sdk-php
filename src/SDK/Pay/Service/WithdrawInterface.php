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

use Eelly\DTO\WithdrawDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface WithdrawInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getWithdraw(int $withdrawId): WithdrawDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addWithdraw(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateWithdraw(int $withdrawId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteWithdraw(int $withdrawId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listWithdrawPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}