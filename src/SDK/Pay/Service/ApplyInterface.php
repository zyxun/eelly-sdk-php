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
     * @returnExample({"paId": 1,"userId": 148086,"storeId": 148086,"money": 100,"returnMoney": 12,"type": 1,"channel": 1,"style": 1,"pabId": 1,"payAccount": "1111","batchNumber": 1,"bankCode": "111","billNo": "11","thirdNo": "11","payStatus": 11,"remark": "111","adminRemark": "222","handleTime": "1970-01-01 08:00:00","gbCode": 1,"bankId": 1,"bankSubbranch": "111","bankAccount": "11"})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年09月21日
     * @Validation(
     *   @OperatorValidator(0,{message : "交易申请I",operator:["gt",0]})
     *  )
     */
    public function getApply(int $paId): ApplyDTO;

    /**
     * 添加用户银行信息.
     *
     * @param array $data
     * @param int $data ['gbCode'] 开户银行所在地区ID
     * @param int $data ['bankId'] 开户银行ID
     * @param string $data ['bankSubbranch'] 支行名称
     * @param string $data ['bankAccount'] 银行账号
     * @param string $data ['realName'] 银行账号
     * @param string $data ['phone'] 手机号
     * @param int $data ['isDefault'] 是否默认使用此卡：0 否 1 是
     * @param UidDTO|null $uidDTO
     * @throws \Eelly\SDK\Pay\Exception\BankException
     * @return bool
     * @requestExample({"data":{"pbId": 1,"userId": 148086,"gbCode": 0,"bankId": 0,"bankSubbranch": "4541512","bankAccount": "62283625841236512354","realName": "molimoq","phone": "","isDefault": 0,"createdTime": "2015-04-02 15:18:53"}})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年09月20日
     */
    public function addApply(array $data, UidDTO $uidDTO = null): bool;

    /**
     * 交易更新.
     *
     * @param int $paId 交易申请ID
     * @param array $data 交易申请数据
     * @param int $data ['payStatus'] 开户银行所在地区ID
     * @param int $data ['adminRemark'] 开户银行ID
     * @throws \Eelly\SDK\Pay\Exception\BankException
     * @return bool
     * @requestExample({"paId":1,"data":{"payStatus":1,"adminRemark":"你已经申请成功，已经打款到指定银行了"}})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年09月23日
     */
     public function updateApply(int $paId, array $data): bool;

    /**
     * 自己删除自己的申请信息.
     *
     * @param int $paId 交易申请ID
     * @param UidDTO|null $uidDTO
     * @throws \Eelly\SDK\Pay\Exception\ApplyException
     * @return bool
     * @requestExample({"paId":1})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年09月23日
     * @Validation(
     * @OperatorValidator(0,{message : "交易申请I",operator:["gt",0]})
     * )
     */
    public function deleteSelfApply(int $paId, UidDTO $uidDTO = null): bool;

    /**
     * 删除申请信息.
     *
     * @param int $paId 交易申请ID
     * @throws \Eelly\SDK\Pay\Exception\ApplyException
     * @return bool
     * @requestExample({"paId":1})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年09月23日
     * @Validation(
     * @OperatorValidator(0,{message : "交易申请I",operator:["gt",0]})
     * )
     */
    public function deleteApply(int $paId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function listApplyPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
