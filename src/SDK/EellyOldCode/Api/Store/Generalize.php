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

namespace Eelly\SDK\EellyOldCode\Api\Store;

use Eelly\SDK\EellyClient;

/**
 * Class Store.
 *
 *  modules/Store/Service/GeneralizeService.php
 */
class Generalize
{
    /**
     * 判断pr_id是否属于推广增值服务
     *
     * @param int $prId
     *
     * @return int $gsublId   购买日志ID
     */
    public function isGeneralizePrId($prId)
    {
        return EellyClient::request('eellyOldCode/store/generalize', __FUNCTION__, true, $prId);
    }

    /**
     * 用余额购买推广增值服务
     * -----------------------------
     * 半自动|需要有预购买日志ID  $gsublId.
     *
     * @param int $userId  用户ID
     * @param int $gsublId 预购买日志ID
     */
    public function useRechargeBuyService($userId, $gsublId)
    {
        return EellyClient::request('eellyOldCode/store/generalize', __FUNCTION__, true, $userId, $gsublId);
    }
    
    /**
     * 获取购买服务文案信息(给api调用)
     * 
     * @param int $gsublId 服务记录表主键id
     * 
     * @author wechan
     * @since 2018年10月30日
     */
    public function getPayServiceDesc(int $gsublId)
    {
        return EellyClient::request('eellyOldCode/store/generalize', __FUNCTION__, true, $gsublId);
    }
}
