<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Pay\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\RequestInterface;
use Eelly\DTO\RequestDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Request implements RequestInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRequest(int $requestId): RequestDTO
    {
        return EellyClient::request('pay/request', 'getRequest', $requestId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRequest(array $data): bool
    {
        return EellyClient::request('pay/request', 'addRequest', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateRequest(int $requestId, array $data): bool
    {
        return EellyClient::request('pay/request', 'updateRequest', $requestId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteRequest(int $requestId): bool
    {
        return EellyClient::request('pay/request', 'deleteRequest', $requestId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listRequestPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('pay/request', 'listRequestPage', $condition, $currentPage, $limit);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}