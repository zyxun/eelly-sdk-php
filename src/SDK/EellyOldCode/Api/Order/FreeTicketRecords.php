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

namespace Eelly\SDK\EellyOldCode\Api\Order;

use Eelly\SDK\EellyClient;

/**
 * Class Order.
 *
 * var/eelly-old-code/modules/Order/Service/FreeTicketRecordsService.php
 *
 * @author wechan
 */
class FreeTicketRecords
{
    /**
     * 根据用户id获取可用包邮卡列表.
     *
     *
     * @param int $userId
     *
     * @return array
     *
     * > 数据说明
     *   key | value
     *   --------------------|--------------------
     *   id                  |    int 主键
     *   free_amount         |    int 发放优惠金额
     *   use_limit_money     |    int 使用金额限制 例如>= 10超过10元才可以使用
     *   valid_start_time    |    int 有效使用开始时间
     *   valid_end_time      |    int 有效使用结束时间
     */
    public function getFreeTicketListByUserId($userId)
    {
        return EellyClient::request('eellyOldCode/order/FreeTicketRecords', __FUNCTION__, true, $userId);
    }
}
