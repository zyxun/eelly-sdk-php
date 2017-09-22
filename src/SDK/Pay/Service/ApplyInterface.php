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

use Eelly\SDK\Pay\DTO\ApplyDTO;


/**
 * 发起交易申请接口层.
 *
 * @author  肖俊明<xiaojunming@eelly.net>
 * @since 2017年09月21日
 */
interface ApplyInterface
{
    /**
     * 获取一条交易申请信息.
     *
     * @param int $paId 交易申请ID
     * @throws \Eelly\SDK\Pay\Exception\ApplyException
     * @return ApplyDTO
     * @requestExample({"paId":1})
     * @returnExample({"data": {"paId": 1,"userId": 148086,"storeId": 148086,"money": 100,"returnMoney": 12,"type": 1,"channel": 1,"style": 1,"pabId": 1,"payAccount": "1111","batchNumber": 1,"bankCode": "111","billNo": "11","thirdNo": "11","payStatus": 11,"remark": "111","adminRemark": "222","handleTime": "1970-01-01 08:00:00","gbCode": 1,"bankId": 1,"bankSubbranch": "111","bankAccount": "11"}})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年09月21日
     * @Validation(
     *   @OperatorValidator(0,{message : "交易申请I",operator:["gt",0]})
     *  )
     */
    public function getApply(int $applyId): ApplyDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addApply(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function updateApply(int $applyId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function deleteApply(int $applyId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function listApplyPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
