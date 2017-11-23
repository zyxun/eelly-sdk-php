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
use Eelly\SDK\Pay\Service\RecordAdjustInterface;
use Eelly\SDK\Pay\DTO\RecordAdjustDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class RecordAdjust implements RecordAdjustInterface
{

    /**
     * 根据交易流水ID，返回对应的详细记录
     *
     * @param int $prId 交易流水id
     * @return RecordAdjustDTO
     *
     * @throws \Eelly\SDK\Pay\Exception\AccountException
     * @requestExample({"prId":1})
     * @returnExample({"prId":1,"billNo":"eelly123","type":1,"changeMoney":100,"voucherMoney":100,"settlementMoney":100,"status":1,"remark":"","createdTime":1510211720})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2017-11-17
     */
    public function getRecordAdjust(int $prId): RecordAdjustDTO
    {
        return EellyClient::request('pay/recordadjust', 'getRecordAdjust',true,  $prId);
    }

    /**
     * 添加交易流水核算记录
     *
     * @param int     $prId    交易流水ID
     * @param string  $billNo  衣联交易号
     * @param int     $type    操作类型：1 充值 2 提现 3 消费 4 结算 5 退款 6 诚保冻结 7 诚保解冻
     * @return bool
     *
     * @requestExample({"prId":1,"billNo":"eelly1234", "type":1})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2017-11-17
     */
    public function addRecordAdjust(int $prId, string $billNo, int $type): bool
    {
        return EellyClient::request('pay/recordadjust', 'addRecordAdjust',true,  $prId, $billNo, $type);
    }

    /**
     * @author zhangyingdi<zhangyingdi@eelly.net>
     */
    public function updateRecordAdjust(int $recordAdjustId, array $data): bool
    {
        return EellyClient::request('pay/recordadjust', 'updateRecordAdjust',true,  $recordAdjustId, $data);
    }

    /**
     * @author zhangyingdi<zhangyingdi@eelly.net>
     */
    public function deleteRecordAdjust(int $recordAdjustId): bool
    {
        return EellyClient::request('pay/recordadjust', 'deleteRecordAdjust', true, $recordAdjustId);
    }

    /**
     * @author zhangyingdi<zhangyingdi@eelly.net>
     */
    public function listRecordAdjustPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('pay/recordadjust', 'listRecordAdjustPage', true, $condition, $currentPage, $limit);
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