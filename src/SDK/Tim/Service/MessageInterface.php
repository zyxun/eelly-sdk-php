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

namespace Eelly\SDK\Tim\Service;

/**
 * IM消息逻辑接口层
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface MessageInterface
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
    public function sendMessage(string $from = null, string $to, string $msgType, array $msgContent, array $offlinePushInfo = null, array $extension = null): bool ;
}