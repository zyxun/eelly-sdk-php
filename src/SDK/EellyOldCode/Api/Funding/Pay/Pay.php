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

namespace Eelly\SDK\EellyOldCode\Api\Funding\Pay;

use Eelly\SDK\EellyClient;

/**
 * Class Cart.
 *
 *  modules/funding/pay/Service/PayService.php
 *
 * @author wechan
 */
class Pay
{
    /**
     * 根据PrId获取关联的诚信服务ID
     *
     * @param  int  $prId        支付ID
     * @return int  $serviceId   服务ID
     */
    public function getPayIntegrityRelationByPrId($prId)
    {
        return EellyClient::request('eellyOldCode/funding/pay/pay', __FUNCTION__, true, $prId);
    }
}
