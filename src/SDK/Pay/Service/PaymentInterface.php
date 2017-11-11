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

namespace Eelly\SDK\Pay\Service;

use Eelly\DTO\UidDTO;
use Eelly\SDK\Pay\DTO\PaymentDTO;
use Eelly\SDK\Pay\Exception\PayException;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface PaymentInterface
{
    /**
     * 根据交易号 获取支付交易流水
     * @param string $billNo
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------|-------|--------------
     * ppId        |string |
     * paId        |string |
     * type        |string |
     * itemId      |string |
     * billNo      |string |
     * money       |string |
     * precId      |string |
     * status      |string |
     * checkStatus |string |
     * remark      |string |
     * createdTime |string |
     * updateTime  |string |
     *
     * @throws PayException
     *
     * @return PaymentDTO
     * @requestExample({"billNo":"1001"})
     * @returnExample({"ppId":"4","paId":"1","type":"1","itemId":"10001","billNo":"1711104274386cvAeR","money":"100","precId":"0","status":"0","checkStatus":"0","remark":"\u6d4b\u8bd5\u63d2\u51651\u6b21","createdTime":"1510296034","updateTime":"2017-11-10 14:40:34"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月10日
     */
    public function getPayment(string $billNo): PaymentDTO;

    /**
     * 添加支付交易流水记录.
     *
     * @param array $data
     * @param int $data["paId"]
     * @param int $data["type"]
     * @param int $data["itemId"]
     * @param int $data["money"]
     * @param int $data["precId"]
     * @param int $data["status"]
     * @param int $data["checkStatus"]
     * @param string $data ["remark"]
     * @param UidDTO|null $uidDTO
     *
     * @throws PayException
     *
     * @return bool
     * @requestExample({"data":{"paId":1,"type":1,"itemId":10001,"money":100,"precId":0,"status":0,"checkStatus":0,"remark":"备注"}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月10日
     */
    public function addPayment(array $data, UidDTO $uidDTO = null): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updatePayment(int $paymentId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listPaymentPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
