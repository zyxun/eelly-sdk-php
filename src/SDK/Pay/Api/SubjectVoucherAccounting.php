<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Pay\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\SubjectVoucherAccountingInterface;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
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
    public function payAccounting(array $data): void
    {
        return EellyClient::request('pay/subjectvoucheraccounting', 'payAccounting', true, $data);
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