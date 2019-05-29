<?php

namespace Eelly\SDK\Im\Api;

use Eelly\SDK\EellyClient;
use Shadon\Neteaseim\Command\Action;

class NeteaseimClient
{
    public static function executeAction(Action $action) : bool
    {
        return EellyClient::requestJson('im/neteaseimClient', __FUNCTION__, array('serializedAction' => serialize($action)));
    }
}
