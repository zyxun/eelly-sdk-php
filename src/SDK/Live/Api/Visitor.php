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

namespace Eelly\SDK\Live\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Live\Service\VisitorInterface;
use SDK\Live\DTO\VisitorDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Visitor
{
    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getVisitor(int $visitorId): VisitorDTO
    {
        return EellyClient::request('live/visitor', 'getVisitor', true, $visitorId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getVisitorAsync(int $visitorId)
    {
        return EellyClient::request('live/visitor', 'getVisitor', false, $visitorId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addVisitor(array $data): bool
    {
        return EellyClient::request('live/visitor', 'addVisitor', true, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addVisitorAsync(array $data)
    {
        return EellyClient::request('live/visitor', 'addVisitor', false, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateVisitor(int $visitorId, array $data): bool
    {
        return EellyClient::request('live/visitor', 'updateVisitor', true, $visitorId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateVisitorAsync(int $visitorId, array $data)
    {
        return EellyClient::request('live/visitor', 'updateVisitor', false, $visitorId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteVisitor(int $visitorId): bool
    {
        return EellyClient::request('live/visitor', 'deleteVisitor', true, $visitorId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteVisitorAsync(int $visitorId)
    {
        return EellyClient::request('live/visitor', 'deleteVisitor', false, $visitorId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listVisitorPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('live/visitor', 'listVisitorPage', true, $condition, $currentPage, $limit);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listVisitorPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('live/visitor', 'listVisitorPage', false, $condition, $currentPage, $limit);
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