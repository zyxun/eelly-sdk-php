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
use Eelly\SDK\Pay\Service\CallbackAdjustInterface;
use Eelly\DTO\CallbackAdjustDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class CallbackAdjust implements CallbackAdjustInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCallbackAdjust(int $callbackAdjustId): CallbackAdjustDTO
    {
        return EellyClient::request('pay/callbackadjust', 'getCallbackAdjust', $callbackAdjustId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCallbackAdjust(array $data): bool
    {
        return EellyClient::request('pay/callbackadjust', 'addCallbackAdjust', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCallbackAdjust(int $callbackAdjustId, array $data): bool
    {
        return EellyClient::request('pay/callbackadjust', 'updateCallbackAdjust', $callbackAdjustId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCallbackAdjust(int $callbackAdjustId): bool
    {
        return EellyClient::request('pay/callbackadjust', 'deleteCallbackAdjust', $callbackAdjustId);
    }

    /**
     *
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