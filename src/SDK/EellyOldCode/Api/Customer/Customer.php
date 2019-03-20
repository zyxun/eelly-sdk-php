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

namespace Eelly\SDK\EellyOldCode\Api\Customer;

use Eelly\SDK\EellyClient;

/**
 * Class Customer.
 *
 *  modules/Customer/Service/CustomerService.php
 *
 * @author zhangyangxun
 */
class Customer
{
    /**
     * 设置客户的关注状态
     *
     * @param int $fromUid 用户id
     * @param int $fromType 类型 1.店家 2.厂家 3.百里挑一
     * @param int $toUid 对方id
     * @param int $toType 对方类型 1.店家 2.厂家 3.百里挑一
     * @param bool $isFollow 是否关注
     * @return mixed
     *
     * @author hehui<hehui@eelly.net>
     * @since  2016年11月14日
     */
    public function setCustomerFollow($fromUid, $fromType, $toUid, $toType, $isFollow)
    {
        return EellyClient::request('eellyOldCode/customer/customer', __FUNCTION__, true, $fromUid, $fromType, $toUid, $toType, $isFollow);
    }

}
