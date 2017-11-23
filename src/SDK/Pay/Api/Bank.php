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
use Eelly\SDK\Pay\Service\BankInterface;
use Eelly\DTO\UidDTO;
use Eelly\SDK\Pay\DTO\BankDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Bank implements BankInterface
{

    /**
     * 获取一条价用户银行信息,并且判断是否是自己的.
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------------|-------|--------------
     * pbId           |int    | 用户银行信息ID，自增主键
     * userId         |int    | 用户ID
     * gbCode         |int    | 开户银行所在地区ID
     * bankId         |int    | 开户银行ID
     * bankSubbranch  |string | 支行名称
     * bankAccount    |string | 银行账号
     * realName       |string | 真实姓名
     * phone          |string | 手机号
     * isDefault      |int    | 是否默认使用此卡：0 否 1 是
     * createdTime    |string | 添加时间
     * updateTime     |null   | 修改时间
     *
     * @param int         $pbId 用户银行信息ID
     * @param UidDTO|null $user 登录用户
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
    public function getBank(int $pbId, UidDTO $user = null): BankDTO
    {
        return EellyClient::request('pay/bank', 'getBank',true,  $pbId, $user);
    }

    /**
     * 添加用户银行信息.
     *
     * @param array       $data                  银行卡数据
     * @param string      $data["realName"]      持卡人
     * @param string      $data["bankAccount"]   银行账号
     * @param int         $data["bankId"]        开户银行ID
     * @param string      $data["mobile"]        手机号
     * @param int|null    $data["isDefault"]     是否默认使用此卡
     * @param string|null $data["bankSubbranch"] 支行名称
     * @param int|null    $data["gbCode"]        开户银行所在地区ID
     * @param string      $data["passwordPay"]   加密密码
     * @param string      $data["timeStamp"]     时间戳
     * @param int|null    $data["storeId"]       店铺ID,不是店铺请不要传
     * @param UidDTO|null $user                  登录用户
     *
     * @return bool
     * @requestExample({
     *     "realName":"molimoq","bankAccount":"9843010902492123",
     *     "bankId":1,"mobile":"13800138000","passwordPay":"MDAxUGlRa0kwQndYbEFoSmpFeU16UTFOZz09ODI1YWZmNzZjMzZiY2YzN2Y3MTljNDE1NGNkZTc4NTE=",
     *     "timeStamp":"1510296438"
     * })
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年11月11日
     */
    public function addBank(array $data): bool
    {
        return EellyClient::request('pay/bank', 'addBank',true,  $data);
    }

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
     * @param UidDTO|null $user 用户信息
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
    public function updateBank(int $pbId, array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('pay/bank', 'updateBank', true, $pbId, $data, $user);
    }

    /**
     * 删除用户银行信息，自己删自己的银行卡信息.
     *
     * @param int         $pbId 用户银行信息ID
     * @param UidDTO|null $user 用户信息
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
    public function deleteBank(int $pbId, UidDTO $user = null): bool
    {
        return EellyClient::request('pay/bank', 'deleteBank', true, $pbId, $user);
    }

    /**
     * 获取用户银行卡.
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * --------------|-------|--------------
     * id            |int    |用户银行信息ID，自增主键
     * userId        |int    |用户ID
     * gbCode        |string |开户银行所在地区ID
     * bankId        |int    |开户银行ID
     * bankSubbranch |string |支行名称
     * bankAccount   |string |银行账号
     * realName      |string |真实姓名
     * mobile        |string |手机号
     * isDefault     |int    |是否默认使用此卡：0 否 1 是
     *
     * @param UidDTO|null $user 登录用户
     *
     * @return array
     * @requestExample()
     * @returnExample({{"id":1,"userId":148086,"gbCode":"1","bankId":1,"bankSubbranch":"111"
     * ,"bankAccount":"1111","realName":"molimoq","mobile":"","isDefault":0}})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年11月10日
     */
    public function getBankUser(UidDTO $user = null): array
    {
        return EellyClient::request('pay/bank', 'getBankUser', true, $user);
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