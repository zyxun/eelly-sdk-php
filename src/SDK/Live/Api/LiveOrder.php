<?php
/**
 * Created by PhpStorm.
 * User: heui
 * Date: 2018/5/10
 * Time: 15:54
 */

namespace Eelly\SDK\Live\Api;


use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Live\Service\LiveOrderInterface;

class LiveOrder implements LiveOrderInterface
{
    /**
     * @inheritDoc
     */
    public function myAppletLiveOrders(int $liveId, int $type, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('live/liveOrder', __FUNCTION__, true, $liveId, $type);
    }

}