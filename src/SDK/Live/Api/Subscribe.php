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
use Eelly\SDK\Live\Service\SubscribeInterface;
use SDK\Live\DTO\SubscribeDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Subscribe implements SubscribeInterface
{
    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSubscribe(int $subscribeId): SubscribeDTO
    {
        return EellyClient::request('live/subscribe', 'getSubscribe', true, $subscribeId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSubscribeAsync(int $subscribeId)
    {
        return EellyClient::request('live/subscribe', 'getSubscribe', false, $subscribeId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSubscribe(array $data): bool
    {
        return EellyClient::request('live/subscribe', 'addSubscribe', true, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSubscribeAsync(array $data)
    {
        return EellyClient::request('live/subscribe', 'addSubscribe', false, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSubscribe(int $subscribeId, array $data): bool
    {
        return EellyClient::request('live/subscribe', 'updateSubscribe', true, $subscribeId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSubscribeAsync(int $subscribeId, array $data)
    {
        return EellyClient::request('live/subscribe', 'updateSubscribe', false, $subscribeId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSubscribe(int $subscribeId): bool
    {
        return EellyClient::request('live/subscribe', 'deleteSubscribe', true, $subscribeId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSubscribeAsync(int $subscribeId)
    {
        return EellyClient::request('live/subscribe', 'deleteSubscribe', false, $subscribeId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSubscribePage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('live/subscribe', 'listSubscribePage', true, $condition, $currentPage, $limit);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSubscribePageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('live/subscribe', 'listSubscribePage', false, $condition, $currentPage, $limit);
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