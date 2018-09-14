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

namespace Eelly\SDK\Order\Service;

use Eelly\DTO\UidDTO;

/**
 * 卖家退货退款
 *
 * @author zhangyingdi<zhangyingdi@eellly.net>
 */
interface SellerRefundInterface
{

    /**
     * 待发货订单，买家申请退款，卖家立即发货操作
     *
     * @param int $orderId 订单id
     * @param UidDTO $uidDTO
     * @return bool
     *
     * @requestExample({"orderId":5000214})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.13
     */
    public function immediateDelivery(int $orderId, UidDTO $uidDTO): bool;

    /**
     * 卖家同意退款操作 (仅退款)
     *
     * @param int $orderId  订单id
     * @param UidDTO $uidDTO
     * @return bool
     *
     * @requestExample({"orderId":5000214})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.14
     */
    public function agreeRefundMoney(int $orderId, UidDTO $uidDTO): bool;

    /**
     * 卖家拒绝退货退款操作
     *
     * @param int $orderId  订单id
     * @param string $reason 拒绝原因
     * @param string $images  图片凭证(#隔开)
     * @param UidDTO $uidDTO
     * @return bool
     *
     * @requestExample({"orderId":5000214, "reason":"test", "images":"https://img02.eelly.com/abc.jpg#https://img02.eelly.com/add.jpg"})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.14
     */
    public function refusedRefund(int $orderId, string $reason, string $images, UidDTO $uidDTO): bool;

    /**
     * 卖家申请客服介入
     *
     * @param int $orderId  订单id
     * @param string $phone  联系手机号码
     * @param string $wechat 联系微信号
     * @param UidDTO $uidDTO
     * @return bool
     *
     * @requestExample({"orderId":5000214, "phone":"13430245645", "wechat":"hello"})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.14
     */
    public function sellerApplyService(int $orderId, string $phone, string $wechat, UidDTO $uidDTO):bool;

    /**
     * 卖家同意退货操作
     *
     * @param int $orderId  订单id
     * @param array $addressData 卖家退货地址相关信息
     * @param UidDTO $uidDTO
     * @return bool
     *
     * @requestExample({"orderId":5000214, "addressData":{"address":"test","consignee":"demo","phone":"13430245645","mobile":"","region_name":"gz","code":"510000"}})
     * @returnExample({true})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.14
     */
    public function agreeReturnGoods(int $orderId, array $addressData = [], UidDTO $uidDTO): bool;
}
