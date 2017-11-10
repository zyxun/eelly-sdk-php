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

use Eelly\DTO\CallbackDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\CallbackInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Callback implements CallbackInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCallback(int $callbackId): CallbackDTO
    {
        return EellyClient::request('pay/callback', 'getCallback', $callbackId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCallback(array $data): bool
    {
        return EellyClient::request('pay/callback', 'addCallback', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCallback(int $callbackId, array $data): bool
    {
        return EellyClient::request('pay/callback', 'updateCallback', $callbackId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCallback(int $callbackId): bool
    {
        return EellyClient::request('pay/callback', 'deleteCallback', $callbackId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCallbackPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('pay/callback', 'listCallbackPage', $condition, $currentPage, $limit);
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
