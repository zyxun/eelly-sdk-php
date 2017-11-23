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
use Eelly\SDK\Pay\Service\VoucherInterface;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Voucher implements VoucherInterface
{

    /**
     * 新增凭证明细信息
     * 
     * @return bool
     * 
     * @param array $data 请求参数
     * @param string $data["voucherCode"] 凭证代码
     * @param int $data["money"] 发生额
     * @param int $data['refId'] 关联业务ID
     * @param string $data['remark'] 备注
     * 
     * @requestExample({"data":{"voucherCode":"110","money":"12","refId":0,"remark":"12"}})
     * @returnExample(true)
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月13日
     */
    public function addVoucher(array $data): bool
    {
        return EellyClient::request('pay/voucher', 'addVoucher', true, $data);
    }

    /**
     * 根据结算日期 获取指定时间内的科目明细信息
     * 
     * @param $data array 请求的参数
     * @param string $data['workDate'] 结算日期
     * @param int $data['currentPage'] 当前页面
     * @param int $data['limit'] 每页数量
     * 
     * @requestExample({"data":{"workDate":"20170101","currentPage":"1","limit":"100"}})
     * @returnExample([{"voucherSn":"2017111400000001","workDate":"20171114","voucherCode":"101","money":"100","refId":"101","remark":"haha","createdTime":"1510627144","voucherName":"充值凭证","refDb":"","refTable":"","refField":""}])
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月14日
     */
    public function getVoucherByWorkData(array $data): array
    {
        return EellyClient::request('pay/voucher', 'getVoucherByWorkData', true, $data);
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