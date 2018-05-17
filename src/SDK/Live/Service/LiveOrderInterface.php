<?php
/**
 * Created by PhpStorm.
 * User: heui
 * Date: 2018/5/10
 * Time: 15:50
 */

namespace Eelly\SDK\Live\Service;


use Eelly\DTO\UidDTO;

/**
 * 直播订单.
 *
 * @author hehui<hehui@eelly.net>
 */
interface LiveOrderInterface
{
    /**
     * 获取直播间直播期间的小程序订单信息.
     *
     *
     * @param int $liveId  直播id
     * @param int $type   订单类型(1 待付款 2 已付款)
     * @param UidDTO|null $uidDTO  uid dto
     *
     * @return array
     * 
     * @author hehui<hehui@eelly.net>
     */
    public function myAppletLiveOrders(int $liveId, int $type, UidDTO $uidDTO = null):array;
}