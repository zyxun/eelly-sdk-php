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
use Eelly\SDK\Pay\DTO\AccountDTO;

/**
 * 会员资金账户.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 *
 * @since  2017年09月15日
 */
interface AccountInterface
{
    /**
     * 添加资金账号
     *
     * @param integer $userId 用户id
     * @param integer $storeId 店铺id 店+store = 0
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com> 
     * @since 2018.10.22
     */
    public function addPayAccount(int $userId, int $storeId = 0):bool;

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
     *
     * @since 2017年11月15日
     *
     * @Validation(
     *     @OperatorValidator(0,{message:"账户ID",operator:["gt",0]})
     * )
     */
    public function getAccount(int $paId): AccountDTO;

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
    public function getAccountUser(int $storeId = 0, UidDTO $user = null): AccountDTO;

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
    public function getAccountUserInfo(array $data): array;

    /**
     * 判断是否存在账号，没有执行创建.
     *
     * @param int $userId  用户ID
     * @param int $storeId 店铺ID
     *
     * @return int
     * @requestExample({"userId":148086,"storeId":148086})
     * @returnExample(1)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年01月02日
     * @Validation(
     *  @OperatorValidator(0,{message:"用户ID",operator:["gt",0]})
     *)
     */
    public function checkIsExistAccount(int $userId, int $storeId = 0): int;

    /**
     * 添加会员资金账户.
     *
     * @param array  $data                      会员资金账户数据
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
     * @param UidDTO $user                      用户信息
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
     *
     * @since 2017年09月21日
     */
    public function addAccount(array $data, UidDTO $user = null): bool;

    /**
     * 更新会员资金账户信息.
     *
     * @param int         $paId                      账户ID
     * @param array       $data                      需要更新的账号信息
     * @param int         $data['money']             账户金额
     * @param float       $data['commissionRatio']   提现手续费率
     * @param int         $data['status']            状态：0 正常 1 风险监控 2 冻结提现 4 冻结支付
     * @param string      $data['alipayAccount']     支付宝账号
     * @param string      $data['wechatPurseOpenId'] 微信钱包绑定的微信账户open_id
     * @param string      $data['passwordKey']       密码钥匙
     * @param string      $data['passwordPay']       支付密码
     * @param UidDTO|null $user                      登录的用户信息
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
     *
     * @since 2017年09月21日
     *
     * @Validation(
     *     @OperatorValidator(0,{message:"账号Id",operator:["gt",0]}),
     *     @OperatorValidator(1,{message:"数据不能为空"})
     * )
     */
    public function updateAccount(int $paId, array $data, UidDTO $user = null): bool;

    /**
     * 获取店+账号资金管理
     *
     * ### 返回数据说明
     *
     * key | type | value
     * --- | ---- | -----
     * withdrawCapitalFreeze    | bool      | 冻结提现 true:是，false:否
     * limitedFunctionality     | int       | 提现受限
     * auditStatus              | int       | 是否实名认证 0:否，1:通过
     * setPayPassword           | bool      | 是否设置了支付密码
     * mobile                   | string    | 绑定的手机号码
     * isBindWechat | bool   | 是否绑定定了微信 true 是， false， 否
     * nickname     | string | 微信昵称 isBindWechat为true才出现
     * money        | float  | 账号余额
     * frozenMoney  | float  | 账号冻结金额
     * 
     * @param int         $storeId 店铺ID 默认是0
     * @param UidDTO|null $user    登录用户
     * @return array
     * 
     * @requestExample({"storeId":"0"})
     * @returnExample({"withdrawCapitalFreeze":"false","limitedFunctionality":"0","auditStatus":"1","setPayPassword":"true","mobile":"15018759997","isBindWechat":"true","nickname":"nickname","money":"0.00","frozenMoney":"0.00"})
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.3
     */
    public function getBuyerAccountMoneyManage(int $storeId = 0, UidDTO $user = null): array;

    /**
     * 同步数据.
     *
     * @param array $data
     * @param int   $type
     *
     * @return bool
     *
     * @author hehui<hehui@eelly.net>
     */
    public function synchrodata(array $data, int $type): bool;

    /**
     * 绑定微信钱包
     * 
     * > data数据说明
     * key | type | value 
     * --- | ---- | ----
     * openId | string | 微信公众平台id
     * nickname | string | 微信昵称
     * unionId | string | 微信公众平台唯一id
     * appId | string | 微信平台appId
     * token | string | token(未使用)
     * 
     * > 返回数据说明
     * key | type | value
     * --- | ---- | -----
     * nickname | string | 微信昵称
     * 
     * @param array $data 请求所需数据
     * @param integer $storeId 店铺id 0:店+ 非0:厂家
     * @param UidDTO $user 登陆的账号
     * @return boolean
     * 
     * @requestExample({"data":{["openId":"qwertyuiopsdfghj","nickname":"hello world","unionId":"oldRYuK7MV6d8uyEO3q16cdav3jo","appId":"wxdd557bb66b43f811"]}})
     * @returnExample("hello world")
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.3
     */
    public function bindWechat(array $data, int $storeId = 0, UidDTO $user = null): string;

    /**
     * 判断用户是否设置了支付密码
     *
     * @param integer $userId 用户id
     * @param integer $storeId 店铺id 默认0 店+
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.28
     */
    public function checkIsSetPayPassword(int $userId, int $storeId = 0):bool;

    /**
     * 校验密码是否正确.
     *
     * @param integer $userId 用户的id
     * @param string $payPassword 支付密码
     * @param integer $storeId 店铺id 默认0:店家 非0:厂家
     * @return bool
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.5
     */
    public function checkPayPassword(int $userId, string $payPassword, int $storeId = 0): bool;

    /**
     * 设置支付密码 / 重置支付密码
     *
     * @param integer $userId 用户id
     * @param string $payPassword 支付密码
     * @param integer $storeId 店铺id 默认0 店铺同userId值
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.10.15
     */
    public function setPayPassword(int $userId, string $payPassword, int $storeId = 0):bool;
}
