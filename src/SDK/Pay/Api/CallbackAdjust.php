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

use Eelly\DTO\CallbackAdjustDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\CallbackAdjustInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class CallbackAdjust implements CallbackAdjustInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCallbackAdjust(int $callbackAdjustId): CallbackAdjustDTO
    {
        return EellyClient::request('pay/callbackadjust', 'getCallbackAdjust', $callbackAdjustId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCallbackAdjust(array $data): bool
    {
        return EellyClient::request('pay/callbackadjust', 'addCallbackAdjust', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCallbackAdjust(int $callbackAdjustId, array $data): bool
    {
        return EellyClient::request('pay/callbackadjust', 'updateCallbackAdjust', $callbackAdjustId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCallbackAdjust(int $callbackAdjustId): bool
    {
        return EellyClient::request('pay/callbackadjust', 'deleteCallbackAdjust', $callbackAdjustId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCallbackAdjustPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('pay/callbackadjust', 'listCallbackAdjustPage', $condition, $currentPage, $limit);
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
