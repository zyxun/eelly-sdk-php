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
 * Class Shipping.
 *
 *  modules/Store/Service/ShippingService.php
 *
 * @author zhangyingdi<zhangyingdi@eelly.net>
 */
class Shipping
{
    /**
     * 获取店铺设置的默认运费模板使用的物流方式.
     *
     * ####一般使用方式
     * <code>
     *  ShippingServer::getInstance->getDefaultStyleList(158252)
     * </code>
     *
     * @param int $storeId 店铺ID
     *
     * @service
     * > 数据说明
     *   key | value
     *   --------------------|--------------------
     *   status              |    状态码:200 | 701
     *   info                |    提示信息
     *                       |    200: 成功
     *                       |    701: 未找到数据
     *   retval              |    $retval
     *
     * @return array
     *
     * > $retval 数组说明
     *   key | value
     *   --------------------|--------------------
     *   type                |    integer 物流方式
     *   name                |    string  物流方式名称
     *   use                 |    integer 是否使用
     *
     * @author 郭凯<guokai@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2019.07.18
     */
    public function getDefaultStyleList($storeId)
    {
        return EellyClient::request('eellyOldCode/store/shipping', __FUNCTION__, true, $storeId);
    }

}
