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

namespace Eelly\SDK\Tim\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Tim\Service\MessageInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Message implements MessageInterface
{
    /**
     * 发送单聊消息
     *
     * @internal
     * @param string|null $from
     * @param string      $to
     * @param string      $msgType
     * @param array       $msgContent
     * @param array|null  $offlinePushInfo
     * @param array|null  $extension ['syncOtherMachine' => 0, 'msgLifeTime' => 0, 'msgRandom' => 0, 'msgTimeStamp' => 0]
     * @return bool
     * @see https://cloud.tencent.com/document/product/269/2282
     */
    public function sendMessage(string $from = null, string $to, string $msgType, array $msgContent, array $offlinePushInfo = null, array $extension = null): bool
    {
        return EellyClient::request('tim/message', 'sendMessage', true, $from, $to, $msgType, $msgContent, $offlinePushInfo, $extension);
    }

    /**
     * 发送单聊消息
     *
     * @internal
     * @param string|null $from
     * @param string      $to
     * @param string      $msgType
     * @param array       $msgContent
     * @param array|null  $offlinePushInfo
     * @param array|null  $extension ['syncOtherMachine' => 0, 'msgLifeTime' => 0, 'msgRandom' => 0, 'msgTimeStamp' => 0]
     * @return bool
     * @see https://cloud.tencent.com/document/product/269/2282
     */
    public function sendMessageAsync(string $from = null, string $to, string $msgType, array $msgContent, array $offlinePushInfo = null, array $extension = null)
    {
        return EellyClient::request('tim/message', 'sendMessage', false, $from, $to, $msgType, $msgContent, $offlinePushInfo, $extension);
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