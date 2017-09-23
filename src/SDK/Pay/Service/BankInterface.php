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
use Eelly\SDK\Pay\DTO\BankDTO;

/**
 * 用户银行信息.
 * 
 * @author eellytools<localhost.shell@gmail.com>
 */
interface BankInterface
{
    /**
     * 获取一条价用户银行信息.
     *
     * @param int $pbId 用户银行信息ID
     *
     * @throws \Eelly\SDK\Pay\Exception\BankException
     *
     * @return BankDTO
     * @requestExample({'pbId':1})
     * @returnExample({"pbId": 1, "goodsId": 1, "quantity": 2, "price": "2", "type": 3, "createdTime": "2017-09-04 16:07:05"})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月11日
     * @Validation(
     *      @OperatorValidator(0,{message : "用户银行信息ID",operator:["gt",0]})
     * )
     */
    public function getBank(int $pbId): BankDTO;

    /**
     * 获取一条价用户银行信息,并且判断是否是自己的.
     *
     * @param int $pbId 用户银行信息ID
     * @param UidDTO|null $user
     *
     * @throws \Eelly\SDK\Pay\Exception\BankException
     *
     * @return BankDTO
     * @requestExample({'pbId':1})
     * @returnExample({"pbId": 1,"userId": 148086,"gbCode": 0,"bankId": 0,"bankSubbranch": "4541512","bankAccount": "62283625841236512354","realName": "molimoq","phone": "","isDefault": 0,"createdTime": "2015-04-02 15:18:53","updateTime": null,"update_time": "2017-09-19 16:28:26"})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月11日
     * @Validation(
     *      @OperatorValidator(0,{message : "用户银行信息ID",operator:["gt",0]})
     * )
     */
    public function getSelfBank(int $pbId, UidDTO $user = null): BankDTO;

    /**
     * 添加用户银行信息.
     *
     * @param array       $data
     * @param int         $data ['gbCode'] 开户银行所在地区ID
     * @param int         $data ['bankId'] 开户银行ID
     * @param string      $data ['bankSubbranch'] 支行名称
     * @param string      $data ['bankAccount'] 银行账号
     * @param string      $data ['realName'] 银行账号
     * @param string      $data ['phone'] 手机号
     * @param int         $data ['isDefault'] 是否默认使用此卡：0 否 1 是
     * @param UidDTO|null $user
     *
     * @throws \Eelly\SDK\Pay\Exception\BankException
     *
     * @return bool
     * @requestExample({"pbId": 1,"userId": 148086,"gbCode": 0,"bankId": 0,"bankSubbranch": "4541512","bankAccount": "62283625841236512354","realName": "molimoq","phone": "","isDefault": 0,"createdTime": "2015-04-02 15:18:53","updateTime": null,"update_time": "2017-09-19 16:28:26"})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月20日
     */
    public function addBank(array $data, UidDTO $user = null): bool;

    /**
     * 更新用户银行信息,并且判断是否是自己的.
     *
     * @param int         $pbId 用户银行信息ID
     * @param array       $data 银行账户信息
     * @param int         $data ['gbCode'] 开户银行所在地区ID
     * @param int         $data ['bankId'] 开户银行ID
     * @param string      $data ['bankSubbranch'] 支行名称
     * @param string      $data ['bankAccount'] 银行账号
     * @param string      $data ['realName'] 银行账号
     * @param string      $data ['phone'] 手机号
     * @param int         $data ['isDefault'] 是否默认使用此卡：0 否 1 是
     * @param UidDTO|null $user
     *
     * @throws \Eelly\SDK\Pay\Exception\BankException
     *
     * @return bool
     * @requestExample({"pbId":1,"data":{"pbId": 1,"userId": 148086,"gbCode": 0,"bankId": 0,"bankSubbranch": "4541512","bankAccount": "62283625841236512354","realName": "molimoq","phone": "","isDefault": 0,"createdTime": "2015-04-02 15:18:53"}})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月20日
     */
    public function updateSelfBank(int $pbId, array $data, UidDTO $user = null): bool;

    /**
     * 更新用户银行信息,并且判断是否是自己的.
     *
     * @param int    $pbId 用户银行信息ID
     * @param array  $data 银行账户信息
     * @param int    $data ['gbCode'] 开户银行所在地区ID
     * @param int    $data ['bankId'] 开户银行ID
     * @param string $data ['bankSubbranch'] 支行名称
     * @param string $data ['bankAccount'] 银行账号
     * @param string $data ['realName'] 银行账号
     * @param string $data ['phone'] 手机号
     * @param int    $data ['isDefault'] 是否默认使用此卡：0 否 1 是
     *
     * @throws \Eelly\SDK\Pay\Exception\BankException
     *
     * @return bool
     * @requestExample({"pbId":1,"data":{"pbId": 1,"userId": 148086,"gbCode": 0,"bankId": 0,"bankSubbranch": "4541512","bankAccount": "62283625841236512354","realName": "molimoq","phone": "","isDefault": 0,"createdTime": "2015-04-02 15:18:53"}})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月20日
     */
    public function updateBank(int $pbId, array $data): bool;

    /**
     * 删除用户银行信息.
     *
     * @param int $pbId 用户银行信息ID
     *
     * @throws \Eelly\SDK\Pay\Exception\BankException
     *
     * @return bool
     * @requestExample({"pbId":1})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月20日
     * @Validation(
     * @OperatorValidator(0,{message : "银行信息ID",operator:["gt",0]})
     * )
     */
    public function deleteBank(int $pbId): bool;

    /**
     * 删除用户银行信息，自己删自己的银行卡信息.
     *
     * @param int         $pbId 用户银行信息ID
     * @param UidDTO|null $user
     *
     * @throws \Eelly\SDK\Pay\Exception\BankException
     *
     * @return bool
     * @requestExample({"pbId":1})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月20日
     * @Validation(
     * @OperatorValidator(0,{message : "银行信息ID",operator:["gt",0]})
     * )
     */
    public function deleteSelfBank(int $pbId, UidDTO $user = null): bool;

    /**
     * 分页获取操作信息.
     *
     * @param array $condition           条件
     * @param int   $condition['userId'] 用户ID
     * @param int   $currentPage         第几页
     * @param int   $limit               每页条数
     *
     * @throws \Eelly\SDK\Pay\Exception\BankException
     *
     * @return array
     * @requestExample({"condition":{"userId":1}})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月20日
     */
    public function listBankPage(array $condition, int $currentPage = 1, int $limit = 10): array;
}
