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

use Eelly\DTO\RequestDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface RequestInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRequest(int $requestId): RequestDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRequest(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateRequest(int $requestId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteRequest(int $requestId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listRequestPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}