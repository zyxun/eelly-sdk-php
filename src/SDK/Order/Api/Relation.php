PhpParser\Node\Identifier {#1157
  +name: "array"
  #attributes: array:2 [
    "startLine" => 26
    "endLine" => 26
  ]
}
<?php

namespace Eelly\SDK\Order\Api;

use Eelly\SDK\EellyClient;

class Relation
{
    public static function totalOrder(int $sellerId, int $buyerId): array
    {
        return EellyClient::requestJson('order/relation', __FUNCTION__, ['sellerId' => $sellerId, 'buyerId' => $buyerId]);
    }
}
