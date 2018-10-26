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

namespace Eelly\SDK\EellyOldCode\Api\Messages;

use Eelly\SDK\EellyClient;

/**
 * Class Messages.
 *
 *  modules/Messages/Service/MessagesService.php
 *
 * @author zhangyangxun
 */
class Messages
{
    /**
     * @param string $tplIndex
     * @param int    $receiver
     * @param array  $data
     * @param int    $userId
     *
     * @return mixed
     */
    public function sendInfo(string $tplIndex, int $receiver, array $data, int $userId = 0)
    {
        return EellyClient::request('eellyOldCode/messages/messages', __FUNCTION__, true, $tplIndex, $receiver, $data, $userId);
    }

    /**
     * @param string $tplIndex
     * @param int    $receiver
     * @param array  $data
     *
     * @return mixed
     */
    public function sendAppInfo(string $tplIndex, int $receiver, array $data)
    {
        return EellyClient::request('eellyOldCode/messages/messages', __FUNCTION__, true, $tplIndex, $receiver, $data);
    }

    /**
     * @param string $tplIndex
     * @param int    $receiver
     * @param array  $data
     * @param int    $userId
     *
     * @return mixed
     */
    public function sendSms(string $tplIndex, int $receiver, array $data, int $userId = 0)
    {
        return EellyClient::request('eellyOldCode/messages/messages', __FUNCTION__, true, $tplIndex, $receiver, $data, $userId);
    }
}
