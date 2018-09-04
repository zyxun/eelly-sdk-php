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
 * Class Info.
 *
 * var/eelly-old-code/modules/Messages/Service/InfoService.php
 *
 * @author hehui<hehui@eelly.net>
 */
class Info
{
    /**
     * @param $userId
     * @param string $messageType
     * @param int    $type
     *
     * @throws \ErrorException
     *
     * @return mixed
     */
    public function getLsatInfoByMessageType($userId, $messageType = 'system', $type = 1)
    {
        return EellyClient::request('eellyOldCode/messages/info', __FUNCTION__, true, $userId, $messageType, $type);
    }
}
