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

namespace Eelly\SDK\Pay\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\AccountInterface;
use Eelly\SDK\Pay\DTO\AccountDTO;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Account implements AccountInterface
{
    /**
     * 根据帐户主键id获取账户信息.
     * 
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------------|-------|--------------
     * paId              |int    |用户银行信息ID，自增主键
     * userId            |int    |用户ID：0 平台系统帐户
     * storeId           |int    |店铺ID：0 买家帐户
     * money             |int    |账户可用金额：单位为分
     * frozenMoney       |int    |账户冻结金额：单位为分
     * commissionRatio   |string |提现手续费率
     * passwordPay       |null   |支付密码
     * status            |int    |状态：0 正常 1 风险监控 2 冻结提现 4 冻结支付
     * alipayAccount     |string |支付宝账号
     * wechatPurseOpenId |string |微信钱包绑定的微信账户open_id
     * createdTime       |string |添加时间
     *
     * @param int $paId 账户ID，自增主键
     *
     * @return AccountDTO
     * @requestExample({
     *     "paId":1
     * })
     * @returnExample({
     *     paId:1,
     *     userId:148086,
     *     storeId:0,
     *     money:2190,
     *     frozenMoney:200,
     *     commissionRatio:"0.000",
     *     passwordPay:null,
     *     status:0,
     *     alipayAccount:"",
     *     wechatPurseOpenId:"",
     *     createdTime:"1510278091"
     * })
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年11月15日
     * 
     * @Validation(
     *     @OperatorValidator(0,{message:"账户ID",operator:["gt",0]})
     * )
     */
    public function getAccount(int $paId): AccountDTO
    {
        return EellyClient::request('pay/account', __FUNCTION__, true, $paId);
    }

    /**
     * 根据帐户主键id获取账户信息.
     * 
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------------|-------|--------------
     * paId              |int    |用户银行信息ID，自增主键
     * userId            |int    |用户ID：0 平台系统帐户
     * storeId           |int    |店铺ID：0 买家帐户
     * money             |int    |账户可用金额：单位为分
     * frozenMoney       |int    |账户冻结金额：单位为分
     * commissionRatio   |string |提现手续费率
     * passwordPay       |null   |支付密码
     * status            |int    |状态：0 正常 1 风险监控 2 冻结提现 4 冻结支付
     * alipayAccount     |string |支付宝账号
     * wechatPurseOpenId |string |微信钱包绑定的微信账户open_id
     * createdTime       |string |添加时间
     *
     * @param int $paId 账户ID，自增主键
     *
     * @return AccountDTO
     * @requestExample({
     *     "paId":1
     * })
     * @returnExample({
     *     paId:1,
     *     userId:148086,
     *     storeId:0,
     *     money:2190,
     *     frozenMoney:200,
     *     commissionRatio:"0.000",
     *     passwordPay:null,
     *     status:0,
     *     alipayAccount:"",
     *     wechatPurseOpenId:"",
     *     createdTime:"1510278091"
     * })
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年11月15日
     * 
     * @Validation(
     *     @OperatorValidator(0,{message:"账户ID",operator:["gt",0]})
     * )
     */
    public function getAccountAsync(int $paId)
    {
        return EellyClient::request('pay/account', __FUNCTION__, false, $paId);
    }

    /**
     * 获取用户账户信息，或者店铺账户信息.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------------|-------|--------------
     * paId              |int    |账户ID，自增主键
     * userId            |int    |用户ID：0 平台系统帐户
     * storeId           |int    |店铺ID：0 买家帐户
     * money             |int    |账户可用金额：单位为分
     * frozenMoney       |int    |账户冻结金额：单位为分
     * commissionRatio   |string |提现手续费率
     * passwordPay       |string |支付密码
     * status            |int    |状态：0 正常 1 风险监控 2 冻结提现 4 冻结支付
     * alipayAccount     |string |支付宝账号
     * wechatPurseOpenId |string |微信钱包绑定的微信账户open_id
     * createdTime       |int    |添加时间
     * passwordKey       |string |密码钥匙
     * updateTime        |string |修改时间
     *
     * @param int         $storeId 店铺ID
     * @param UidDTO|null $user    登录用户
     *
     * @return AccountDTO
     * @requestExample({"storeId":148086})
     * @returnExample({"paId":1,"userId":148086,"storeId":0,"money":1300,
     *     "frozenMoney":200,"commissionRatio":"0.000", "passwordPay": "e10adc3949ba59abbe56e057f20f883e",
     *     "status":2, "alipayAccount":"支付宝账户","wechatPurseOpenId":"微信钱包","createdTime":1510278091,"passwordKey":"密钥","updateTime":"2017-11-21 17:46:30"})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年11月09日
     */
    public function getAccountUser(int $storeId = 0, UidDTO $user = null): AccountDTO
    {
        return EellyClient::request('pay/account', __FUNCTION__, true, $storeId, $user);
    }

    /**
     * 获取用户账户信息，或者店铺账户信息.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------------|-------|--------------
     * paId              |int    |账户ID，自增主键
     * userId            |int    |用户ID：0 平台系统帐户
     * storeId           |int    |店铺ID：0 买家帐户
     * money             |int    |账户可用金额：单位为分
     * frozenMoney       |int    |账户冻结金额：单位为分
     * commissionRatio   |string |提现手续费率
     * passwordPay       |string |支付密码
     * status            |int    |状态：0 正常 1 风险监控 2 冻结提现 4 冻结支付
     * alipayAccount     |string |支付宝账号
     * wechatPurseOpenId |string |微信钱包绑定的微信账户open_id
     * createdTime       |int    |添加时间
     * passwordKey       |string |密码钥匙
     * updateTime        |string |修改时间
     *
     * @param int         $storeId 店铺ID
     * @param UidDTO|null $user    登录用户
     *
     * @return AccountDTO
     * @requestExample({"storeId":148086})
     * @returnExample({"paId":1,"userId":148086,"storeId":0,"money":1300,
     *     "frozenMoney":200,"commissionRatio":"0.000", "passwordPay": "e10adc3949ba59abbe56e057f20f883e",
     *     "status":2, "alipayAccount":"支付宝账户","wechatPurseOpenId":"微信钱包","createdTime":1510278091,"passwordKey":"密钥","updateTime":"2017-11-21 17:46:30"})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年11月09日
     */
    public function getAccountUserAsync(int $storeId = 0, UidDTO $user = null)
    {
        return EellyClient::request('pay/account', __FUNCTION__, false, $storeId, $user);
    }

    /**
     * 获取用户账户信息，或者店铺账户信息.
     *
     * @param array $data
     * @param int   $data['storeId'] 店铺ID
     * @param int   $data['userId']  登录用户
     *
     * @return array
     * @requestExample({"data":{"userId":148086,"storeId":1122}})
     * @returnExample()
     *
     * @author 张泽强 <zhangzeqiang@eelly.net>
     *
     * @since  2017年11月18日
     */
    public function getAccountUserInfo(array $data): array
    {
        return EellyClient::request('pay/account', __FUNCTION__, true, $data);
    }

    /**
     * 获取用户账户信息，或者店铺账户信息.
     *
     * @param array $data
     * @param int   $data['storeId'] 店铺ID
     * @param int   $data['userId']  登录用户
     *
     * @return array
     * @requestExample({"data":{"userId":148086,"storeId":1122}})
     * @returnExample()
     *
     * @author 张泽强 <zhangzeqiang@eelly.net>
     *
     * @since  2017年11月18日
     */
    public function getAccountUserInfoAsync(array $data)
    {
        return EellyClient::request('pay/account', __FUNCTION__, false, $data);
    }

    /**
     * 添加会员资金账户.
     *
     * @param array  $data 会员资金账户数据
     * @param int    $data['userId']            用户ID
     * @param int    $data['storeId']           店铺I
     * @param float  $data['money']             账户金额
     * @param float  $data['frozenMoney']       账户冻结金额
     * @param float  $data['commissionRatio']   提现手续费率
     * @param int    $data['status']            状态：0 正常 1 风险监控 2 冻结提现 4 冻结支付
     * @param string $data['alipayAccount']     支付宝账号
     * @param string $data['wechatPurseOpenId'] 微信钱包绑定的微信账户open_id
     * @param string $data['passwordKey']       密码钥匙
     * @param string $data['passwordPay']       支付密码
     * @param UidDTO $user 用户信息
     *
     * @throws \Eelly\SDK\Pay\Exception\AccountException
     *
     * @return bool
     * @requestExample({
     *     "data":{
     *         "storeId":2,
     *         "money":2,
     *         "commissionRatio":3,
     *         "status":1,
     *         "alipayAccount":"",
     *         "wechatPurseOpenId":""
     *     }
     * })
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年09月21日
     */
    public function addAccount(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('pay/account', __FUNCTION__, true, $data, $user);
    }

    /**
     * 添加会员资金账户.
     *
     * @param array  $data 会员资金账户数据
     * @param int    $data['userId']            用户ID
     * @param int    $data['storeId']           店铺I
     * @param float  $data['money']             账户金额
     * @param float  $data['frozenMoney']       账户冻结金额
     * @param float  $data['commissionRatio']   提现手续费率
     * @param int    $data['status']            状态：0 正常 1 风险监控 2 冻结提现 4 冻结支付
     * @param string $data['alipayAccount']     支付宝账号
     * @param string $data['wechatPurseOpenId'] 微信钱包绑定的微信账户open_id
     * @param string $data['passwordKey']       密码钥匙
     * @param string $data['passwordPay']       支付密码
     * @param UidDTO $user 用户信息
     *
     * @throws \Eelly\SDK\Pay\Exception\AccountException
     *
     * @return bool
     * @requestExample({
     *     "data":{
     *         "storeId":2,
     *         "money":2,
     *         "commissionRatio":3,
     *         "status":1,
     *         "alipayAccount":"",
     *         "wechatPurseOpenId":""
     *     }
     * })
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年09月21日
     */
    public function addAccountAsync(array $data, UidDTO $user = null)
    {
        return EellyClient::request('pay/account', __FUNCTION__, false, $data, $user);
    }

    /**
     * 更新会员资金账户信息.
     *
     * @param int         $paId 账户ID
     * @param array       $data 需要更新的账号信息
     * @param int         $data['money']             账户金额
     * @param float       $data['commissionRatio']   提现手续费率
     * @param int         $data['status']            状态：0 正常 1 风险监控 2 冻结提现 4 冻结支付
     * @param string      $data['alipayAccount']     支付宝账号
     * @param string      $data['wechatPurseOpenId'] 微信钱包绑定的微信账户open_id
     * @param string      $data['passwordKey']       密码钥匙
     * @param string      $data['passwordPay']       支付密码
     * @param UidDTO|null $user 登录的用户信息
     *
     * @return bool
     * @requestExample({
     *     "paId":1,
     *     "data":{
     *         "userId":1, 
     *         "storeId":2, 
     *         "money":2, 
     *         "commissionRatio":3,
     *         "status":1,
     *         "alipayAccount":"",
     *         "wechatPurseOpenId":""
     *     }
     * })
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年09月21日
     * 
     * @Validation(
     *     @OperatorValidator(0,{message:"账号Id",operator:["gt",0]}),
     *     @OperatorValidator(1,{message:"数据不能为空"})
     * )
     */
    public function updateAccount(int $paId, array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('pay/account', __FUNCTION__, true, $paId, $data, $user);
    }

    /**
     * 更新会员资金账户信息.
     *
     * @param int         $paId 账户ID
     * @param array       $data 需要更新的账号信息
     * @param int         $data['money']             账户金额
     * @param float       $data['commissionRatio']   提现手续费率
     * @param int         $data['status']            状态：0 正常 1 风险监控 2 冻结提现 4 冻结支付
     * @param string      $data['alipayAccount']     支付宝账号
     * @param string      $data['wechatPurseOpenId'] 微信钱包绑定的微信账户open_id
     * @param string      $data['passwordKey']       密码钥匙
     * @param string      $data['passwordPay']       支付密码
     * @param UidDTO|null $user 登录的用户信息
     *
     * @return bool
     * @requestExample({
     *     "paId":1,
     *     "data":{
     *         "userId":1, 
     *         "storeId":2, 
     *         "money":2, 
     *         "commissionRatio":3,
     *         "status":1,
     *         "alipayAccount":"",
     *         "wechatPurseOpenId":""
     *     }
     * })
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年09月21日
     * 
     * @Validation(
     *     @OperatorValidator(0,{message:"账号Id",operator:["gt",0]}),
     *     @OperatorValidator(1,{message:"数据不能为空"})
     * )
     */
    public function updateAccountAsync(int $paId, array $data, UidDTO $user = null)
    {
        return EellyClient::request('pay/account', __FUNCTION__, false, $paId, $data, $user);
    }

    /**
     * 我的余额，管理=》app资金管理.
     * 
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------------------|-------|--------------
     * money                |string |账户可用金额：单位为元
     * frozenMoney          |string |账户冻结金额：单位为元
     * isWechatBindPurse    |string |是否绑定微信钱包（FALSE.否，TRUE.是）
     * wechatNickname       |string |微信昵称
     * bindMobile           |bool   |绑定的手机号（FALSE.否，TRUE.是）
     * isSetPayPwd          |bool   |是否设置密码（FALSE.否，TRUE.是）
     * isCapitalFreeze      |bool   |是否资金被冻结（FALSE.否，TRUE.是）
     * limitedFunctionality |bool   |提现是否受限 （FALSE.不受限，TRUE.受限）
     *
     * @param int         $storeId 店铺ID,如果是店铺ID
     * @param UidDTO|null $user    登录用户
     *
     * @return array
     * @requestExample({
     *     "storeId":1
     * })
     * @returnExample({
     *     "money":"0.02",
     *     "frozenMoney":"0.01",
     *     "isWechatBindPurse":"true",
     *     "wechatNickname":"molimoq",
     *     "bindMobile":"13800138000",
     *     "isSetPayPwd":true,
     *     "isCapitalFreeze":true,
     *     "limitedFunctionality": true
     * })
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年11月09日
     */
    public function getAccountMoneyManage(int $storeId = 0, UidDTO $user = null): array
    {
        return EellyClient::request('pay/account', __FUNCTION__, true, $storeId, $user);
    }

    /**
     * 我的余额，管理=》app资金管理.
     * 
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------------------|-------|--------------
     * money                |string |账户可用金额：单位为元
     * frozenMoney          |string |账户冻结金额：单位为元
     * isWechatBindPurse    |string |是否绑定微信钱包（FALSE.否，TRUE.是）
     * wechatNickname       |string |微信昵称
     * bindMobile           |bool   |绑定的手机号（FALSE.否，TRUE.是）
     * isSetPayPwd          |bool   |是否设置密码（FALSE.否，TRUE.是）
     * isCapitalFreeze      |bool   |是否资金被冻结（FALSE.否，TRUE.是）
     * limitedFunctionality |bool   |提现是否受限 （FALSE.不受限，TRUE.受限）
     *
     * @param int         $storeId 店铺ID,如果是店铺ID
     * @param UidDTO|null $user    登录用户
     *
     * @return array
     * @requestExample({
     *     "storeId":1
     * })
     * @returnExample({
     *     "money":"0.02",
     *     "frozenMoney":"0.01",
     *     "isWechatBindPurse":"true",
     *     "wechatNickname":"molimoq",
     *     "bindMobile":"13800138000",
     *     "isSetPayPwd":true,
     *     "isCapitalFreeze":true,
     *     "limitedFunctionality": true
     * })
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年11月09日
     */
    public function getAccountMoneyManageAsync(int $storeId = 0, UidDTO $user = null)
    {
        return EellyClient::request('pay/account', __FUNCTION__, false, $storeId, $user);
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