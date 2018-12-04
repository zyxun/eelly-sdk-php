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
    public function appPayCautionMoney($storeId, $money) {
        return \Eelly\SDK\EellyClient::request('eellyOldCode/store/integrity/integrity', __FUNCTION__, true, $storeId, $money);
    }

    /**
     * 厂+缴纳诚信保障金.
     *
     * @param array $relData 支付请求数据
     */
    public function appPayIntegrityMoney($relData)
    {
        return \Eelly\SDK\EellyClient::request('eellyOldCode/store/integrity/integrity', __FUNCTION__, true, $relData);
    }
    
    /**
     * 根据主键Id获取待完成的诚信保障收支明细
     * 
     * @param int $iprId
     */
    public function getIntegrityRecordByIprId($iprId)
    {
        return \Eelly\SDK\EellyClient::request('eellyOldCode/store/integrity/integrity', __FUNCTION__, true, $iprId);
    }
    
    /**
     * 根据主键Id 更新诚信保障收支明细 為成功狀態
     * 
     * @param int $iprId 
     * @param array $data 更新的數據
     */
    public function updateIntegrityRecordByIprId($iprId)
    {
        return \Eelly\SDK\EellyClient::request('eellyOldCode/store/integrity/integrity', __FUNCTION__, true, $iprId);
    }
    
    /**
     * 诚信保障金余额支付
     *
     * @param array $relData 支付请求数据
     */
    public function balancePayIntegrityMoney($relData)
    {
        return \Eelly\SDK\EellyClient::request('eellyOldCode/store/integrity/integrity', __FUNCTION__, true, $relData);
    }
}
