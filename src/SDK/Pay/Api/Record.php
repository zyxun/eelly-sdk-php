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
use Eelly\SDK\Pay\Service\RecordInterface;
use Eelly\SDK\Pay\DTO\RecordDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Record implements RecordInterface
{

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRecord(int $prId): RecordDTO
    {
        return EellyClient::request('pay/record', 'getRecord',true,  $prId);
    }

    /**
     * 添加会员核心交易数据.
     *
     * @param array $data
     * @param int $data["fromPaId"]     来源帐户ID
     * @param int $data["toPaId"]       目标帐户ID
     * @param int $data["type"]         操作类型：1 充值 2 提现 3 消费 4 结算 5 退款 6 诚保冻结 7 诚保解冻
     * @param int $data["itemId"]       关联ID
     * @param string $data["billNo"]    衣联交易号
     * @param string $data["money"]     成交金额：单位为分
     * @param string $data["remark"]    备注：JSON格式
     *
     * @throws RecordException
     *
     * @return int
     * @requestExample({"data":{"fromPaId":111,"toPaId":222,"type":2,"itemId":11101,"billNo":"1711114177786cvA2s","money":"100",
     *     "remark":"备注"}})
     * @returnExample(1)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月11日
     */
    public function addRecord(array $data): int
    {
        return EellyClient::request('pay/record', 'addRecord',true,  $data);
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