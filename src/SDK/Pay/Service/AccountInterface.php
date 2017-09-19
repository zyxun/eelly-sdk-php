<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Pay\Service;
use Eelly\SDK\Pay\DTO\AccountDTO;


/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface AccountInterface
{
    /**
     * 获取一条价格记录.
     *
     * @param int $userId 历史记录ID
     * @throws \Eelly\SDK\Pay\Exception\PayException
     * @return AccountDTO
     * @requestExample({'userId':1})
     * @returnExample({"lgpId": 1, "goodsId": 1, "quantity": 2, "price": "2", "type": 3, "createdTime": "2017-09-04 16:07:05"})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年09月15日
     * @Validation(
     *      @OperatorValidator(0,{message : "日志ID",operator:["gt",0]})
     * )
     */
    public function getAccount(int $userId): AccountDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function addAccount(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function updateAccount(int $accountId, array $data): bool;


    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function listAccountPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}