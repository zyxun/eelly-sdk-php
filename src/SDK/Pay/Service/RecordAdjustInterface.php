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

use Eelly\SDK\Pay\DTO\RecordAdjustDTO;


/**
 * 交易流水核算
 *
 * @author zhangyingdi<zhangyingdi@eelly.net>
 */
interface RecordAdjustInterface
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
    public function getRecordAdjust(int $prId): RecordAdjustDTO;

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
    public function addRecordAdjust(int $prId, string $billNo, int $type): bool;

    /**
     * @author zhangyingdi<zhangyingdi@eelly.net>
     */
    public function updateRecordAdjust(int $recordAdjustId, array $data): bool;

    /**
     * @author zhangyingdi<zhangyingdi@eelly.net>
     */
    public function deleteRecordAdjust(int $recordAdjustId): bool;

    /**
     * @author zhangyingdi<zhangyingdi@eelly.net>
     */
    public function listRecordAdjustPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
