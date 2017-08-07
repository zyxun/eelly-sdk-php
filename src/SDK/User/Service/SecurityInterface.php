<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\User\Service;

use Eelly\DTO\SecurityDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface SecurityInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSecurity(int $SecurityId): SecurityDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSecurity(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSecurity(int $SecurityId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSecurity(int $SecurityId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSecurityPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}