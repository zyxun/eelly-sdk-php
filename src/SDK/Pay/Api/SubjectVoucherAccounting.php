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

namespace Eelly\SDK\Pay\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\SubjectVoucherAccountingInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class SubjectVoucherAccounting implements SubjectVoucherAccountingInterface
{
    /**
     * 会计主流程
     * 
     * @param array $data 请求参数
     * @param string $data['voucherCode'] 凭证代码
     * @param int $data['money'] 发生额
     * @param int $data['refId'] 关联业务ID
     * @param string $data['remark'] 备注
     * 
     * @requestExample({"data":{"voucherCode":"110","money":"12","refId":0,"remark":"12"}})
     * @returnExample()
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since  2017年11月15日
     */
    public function payAccounting(array $data): bool
    {
        return EellyClient::request('pay/subjectVoucherAccounting', 'payAccounting', true, $data);
    }

    /**
     * 会计主流程
     * 
     * @param array $data 请求参数
     * @param string $data['voucherCode'] 凭证代码
     * @param int $data['money'] 发生额
     * @param int $data['refId'] 关联业务ID
     * @param string $data['remark'] 备注
     * 
     * @requestExample({"data":{"voucherCode":"110","money":"12","refId":0,"remark":"12"}})
     * @returnExample()
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since  2017年11月15日
     */
    public function payAccountingAsync(array $data)
    {
        return EellyClient::request('pay/subjectVoucherAccounting', 'payAccounting', false, $data);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}