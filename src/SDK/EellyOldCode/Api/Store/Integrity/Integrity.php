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

namespace Eelly\SDK\EellyOldCode\Api\Store\Integrity;

/**
 * Class Favorite.
 *
 *  modules/Store/Service/Integrity/Integrity
 */
class Integrity
{
    /**
     * 厂+缴纳诚信保障金.
     *
     * @param int $storeId 店铺ID
     * @param int $money   缴纳金额
     */
    public function appPayCautionMoney($storeId, $money)
    {
        return \Eelly\SDK\EellyClient::request('eellyOldCode/store/integrity/integrity', __FUNCTION__, true, $storeId, $money);
    }
}
