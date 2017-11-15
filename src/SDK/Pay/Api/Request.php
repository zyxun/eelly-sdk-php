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

namespace Eelly\SDK\Pay\Api;

use Eelly\DTO\RequestDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\RequestInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Request implements RequestInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRequest(int $requestId): RequestDTO
    {
        return EellyClient::request('pay/request', 'getRequest', $requestId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addRequest(array $data): bool
    {
        return EellyClient::request('pay/request', 'addRequest', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateRequest(int $requestId, array $data): bool
    {
        return EellyClient::request('pay/request', 'updateRequest', $requestId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteRequest(int $requestId): bool
    {
        return EellyClient::request('pay/request', 'deleteRequest', $requestId);
    }

    /**
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
