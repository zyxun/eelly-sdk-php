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

namespace Eelly\SDK\Im\Api;

use Eelly\SDK\EellyClient;
use Shadon\Neteaseim\Command\Action;

class NeteaseimClient
{
    public static function executeAction(Action $action): bool
    {
        return EellyClient::requestJson('im/neteaseimClient', __FUNCTION__, ['serializedAction' => serialize($action)]);
    }
}
