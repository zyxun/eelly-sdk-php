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
use Eelly\SDK\Live\Service\ChatroomInterface;

/**
 * Class Chatroom.
 */
class Chatroom implements ChatroomInterface
{
    /**
     * {@inheritdoc}
     */
    public function sendChangeLiveGoodsPriceChatroomMsg(int $liveId, array $extBody): bool
    {
        return EellyClient::request('live/chatroom', __FUNCTION__, true, $liveId, $extBody);
    }
}
