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

namespace Eelly\SDK\User\Service;

use Eelly\DTO\UidDTO;
use Eelly\DTO\UserDTO;
use Eelly\SDK\User\Exception\UserException;

/**
 * 用户基础信息.
 *
 * @author hehui<hehui@eelly.net>
 */
interface UserInterface
{
    /**
     * 校验手机号码是否存在.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * --|-------|--------------
     * 0 |int    |手机号码存在返回用户ID,否则返回空
     *
     *
     * @param string $mobile 手机号
     *
     * @return int 存在返回用户Id，否则返回0
     * @requestExample({"mobile":"13512719777"})
     * @returnExample(148084)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月24日
     * @Validation(
     *    @Regex(0,{message:"手机号",'pattern':'/^1\d{10}$/'})
     * )
     */
    public function checkIsExistUserMobile(string $mobile): int;

    /**
     * 校验邮箱是否存在
     *
     * @param string $email
     * @return int
     *
     * @author zhangyangxun
     * @since 2018-10-22
     */
    public function checkIsExistUserEmail(string $email): int ;

    /**
     * 校验密码强度.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * --|-------|--------------
     * 0 |bool   | -1:密码不符合规则[现在直接报错了];<2:密码过于简单值越大强度越高
     *
     * @param string $password 密码
     *
     * @return int -1:密码不符合规则;<2:密码过于简单
     * @requestExample({"password":"!ab123456"})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月28日
     */
    public function checkPasswordPowerRule(string $password): bool;

    /**
     * 更新用户数据.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * --|-------|--------------
     * 0 |bool   |返回值
     *
     * @param int   $userId 用户登录ID
     * @param array $data   需要更新的用户数据
     *
     * @return bool
     * @requestExample({'username':'username','passwordOld':'password_old','password':'password','mobile':'mobile','avatar':'avatar','status':'status'})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月28日
     * @Validation(
     *  @OperatorValidator(0,{message : "非法用户ID",operator:["gt",0]}),
     *  @PresenceOf(1,{message : "数据不能为空"})
     * )
     */
    public function updateUser(int $userId, array $data): bool;

    /**
     * 注册用户.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * --|-------|--------------
     * 0 |int    | 返回值用户ID
     *
     * @param array  $data             注册数据
     * @param string $data["mobile"]   注册数据
     * @param string $data["password"] 注册密码,可以不填，填了必须符合密码规则
     *
     * @throws \Eelly\Exception\LogicException
     *
     * @return int 用户ID
     * @requestExample({"mobile":13512719787,"password":"123456"})
     * @returnExample(148086)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月24日
     */
    public function registerUser(array $data): int;

    /**
     * 检查用户密码.
     *
     * @param string $username 用户名(支持使用用户名和手机号)
     * @param string $password 用户密码
     *
     * @throws \Eelly\Exception\LogicException
     *
     * @return bool 该用户密码是否正确
     *
     * @requestExample({"username":"molimoq", "password":"123456"})
     *
     * @returnExample(true)
     *
     * @author hehui<hehui@eelly.net>
     */
    public function checkPassword(string $username, string $password): bool;

    /**
     * 通过密码获取用户信息.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------|-------|--------------
     * uid      |int    |用户ID
     * username |string |用户名
     * mobile   |string |手机号
     *
     * 支持使用用户名加密码和用户名加手机获取
     *
     * @param string $username 用户名(支持使用用户名和手机号)
     * @param string $password 用户密码
     *
     * @throws \Eelly\Exception\LogicException
     *
     * @return UserDTO
     *
     * @requestExample({"username":"molimoq", "password":"123456"})
     *
     * @returnExample({"uid":148086,"username":"molimoq","mobile":"13800138000"})
     *
     * @author hehui<hehui@eelly.net>
     *
     * @deprecated
     */
    public function getUserByPassword(string $username, string $password): UserDTO;

    /**
     * 获取用户信息.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------|-------|--------------
     * uid      |int    |用户ID
     * username |string |用户名
     * mobile   |string |手机号
     *
     * @param UidDTO $user 登录用户
     *
     * @throws \Exception
     *
     * @return UserDTO
     *
     * @requestExample()
     *
     * @returnExample({"uid":148086,"username":"molimoq","mobile":"13800138000"})
     *
     * @author hehui<hehui@eelly.net>
     */
    public function getInfo(UidDTO $user = null): UserDTO;

    /**
     * 批量获取用户基本信息.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------|-------|--------------
     * userId   |int    | 用户id
     * username |string | 用户名
     * mobile   |string | 用户手机号
     * avatar   |string | 用户头像
     *
     * @param array $userIds 用户一维数据user_id: [148086,148087,148088]
     *
     * @return array
     * @requestExample({"userIds":{148086,148087,148088}})
     * @returnExample({{"userId":148086,"username":"molimoq","mobile":"13632444448","avatar":"avatar"}})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月25日
     * @Validation(
     *     @PresenceOf(0,{message : "用户id不能为空"})
     * )
     */
    public function getListByUserIds(array $userIds): array;

    /**
     * 添加用户.
     *
     * @param array  $data
     * @param string $data ["username"] 用户名
     * @param string $data ["passwordOld"] 旧密码以前平台的
     * @param string $data ["password"] 新密码
     * @param int    $data ["mobile"] 手机号
     * @param string $data ["avatar"] 头像
     * @param int    $data ["status"] 状态
     *
     * @throws UserException
     *
     * @return int
     * @requestExample({"data":{"username":"xxx","password_old":"xxx","password":"xxx","mobile":13711223344,"avatar":"xxx","status":0}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/29
     */
    public function addUser(array $data): int;

    /**
     * uc请求添加用户.
     *
     * @param array $userArray
     *
     * @return bool
     */
    public function addUcuser(array $userArray): bool;

    /**
     * 获取会员搜索引擎所需数据.
     *
     * @param int $currentPage 当前页
     * @param int $limit       限制数
     *
     * @throws \Eelly\SDK\
     *
     * @return array
     * @requestExample({"currentPage":1,"limit":100})
     * @returnExample()
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-23
     */
    public function listUserElasticData(int $currentPage = 1, int $limit = 100): array;

    /**
     * 根据传过来的用户id，获取对应的用户资料.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------|-------|--------------
     * userId   |string |用户ID
     * mobile   |string |手机号码
     * avatar   |string |头像
     * realname |string |真实姓名
     * username |string |用户帐号：帐号和昵称合并
     *
     * @param int $userId 用户id
     *
     * @throws \Eelly\Exception\LogicException
     *
     * @return array
     *
     *
     * @requestExample({"userId":"148086"})
     * @returnExample({"userId":"148086","mobile":"13430245678","avatar":"","realname":"陌陌","username":"molimoq"})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2017-11-26
     */
    public function getMineDataApp(int $userId): array;

    /**
     * 更新用户头像.
     *
     * @param int    $uid
     * @param string $avatar
     *
     * @throws UserException
     *
     * @return bool
     * @requestExample({"uid":1,"avatar":""})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017-11-06
     */
    public function updateUserAvatar(int $uid, string $avatar): bool;

    /**
     * 根据用户id获取二维码数据.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------|-------|--------------
     * userId      |int    |用户ID
     * userName    |string |用户名
     * portraitUrl |string |二维码
     * addressName |string |地址
     *
     * @param int $userId 用户id
     *
     * @throws UserException
     *
     * @return array
     * @requestExample({"userId":"148086"})
     * @returnExample({"userId":148086, "userName":"molimoq", "portraitUrl":"https://img01.eelly.com/G03/M00/00/52/small_p4YB1.jpg","addressName": "广东.广州"})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2017-11-06
     */
    public function getCodeCardInfo(int $userId): array;

    /**
     * 查看用户绑定状态
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------------|-------|--------------
     * isBindMobile   |bool   | 是否绑定手机号
     * mobile         |string | 手机号，部分隐藏的
     * phoneMob       |string | 手机号
     * isBindQQ       |bool   | 是否绑定qq
     * qqNickname     |string | qq昵称
     * isBindWechat   |bool   | 是否绑定微信
     * WechatNickname |string | 微信昵称
     * isBindEmail    |bool   | 是否绑定邮箱
     * email          |string | 邮箱
     *
     * @param int    $type 类型 1:手机 2:QQ 3:微信 4:全部(手机+QQ+微信+邮箱)
     * @param UidDTO $user 用户登录信息
     *
     * @throws UserException
     *
     * @return array
     * @requestExample({"type":4})
     * @returnExample({"isBindMobile":true, "mobile":"134****8648","phoneMob":"13430248648","isBindQQ":true,"qqNickname":"","isBindWechat":false,"WechatNickname":"","isBindEmail":true,"email":"molimoq@eelly.net"})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2017-11-06
     */
    public function checkBindStatus(int $type, UidDTO $user = null): array;

    /**
     * 绑定手机.
     *
     * @param array  $data
     * @param string $data['mobile']    手机号
     * @param string $data['captcha']   验证码
     * @param string $data['type']      验证码类型
     * @param string $data['opType']    操作类型  (add添加绑定手机 edit修改绑定手机)
     * @param string $data['mobileNew'] 新的手机号码 (修改绑定的手机号)
     * @param UidDTO $user              用户登录信息
     *
     * @return bool
     *
     * @requestExample({"data":{"mobile":"13430245645", "captcha":"123456","type":"boundMobile","opType":"add","mobileNew":""}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2017-11-06
     */
    public function bindingMobile(array $data, UidDTO $user = null): bool;

    /**
     * 判断用户是否已经绑定手机.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * -------------|-------|--------------
     * isBindMobile |bool   | 是否绑定手机
     * mobile       |string | 手机号码，有****的
     * phoneMob     |string | 手机号码
     *
     * @param int $userId 用户id
     *
     * @return array
     * @requestExample({"userId":"148086"})
     * @returnExample({"isBindMobile":true, "mobile":"134****5645","phoneMob":"13430245645"})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2017-11-06
     */
    public function checkUserIsBindingMobile(int $userId): array;

    /**
     * 判断用户是否已经绑定邮箱.
     *
     * @param int $userId 用户id
     *
     * @return array
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2017-11-03
     */
    public function checkUserIsBindingEmail(int $userId): array;

    /**
     * 获取用户信息.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------|-------|--------------
     * uid      |int    |用户ID
     * username |string |用户名
     * mobile   |string |手机号
     *
     * @param int $uid 用户id
     *
     * @return UserDTO
     * @requestExample({"uid":"148086"})
     * @returnExample({"uid":148086,"username":"molimoq","mobile":"13800138000"})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @author hehui<hehui@eelly.net>
     *
     * @since 2017-11-06
     * @deprecated
     */
    public function getUser(int $uid): UserDTO;

    /**
     * 忘记密码
     *
     * @param string $mobile 手机号码
     * @param string $password 新密码
     * @param string $confirmPassword 确认密码
     * @return boolean
     * 
     * @requestExample({"mobile":"18826237472","password":"testPassword+1","confrimPassword":"testPassword+1"})
     * @returnExample(true)
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.7.30
     */
    public function forgetPassword(string $mobile, string $password, string $confirmPassword):bool;
    
    /**
     * 根据ip计算用户登录失败的次数
     *
     * @param string $ip ip地址
     *
     * @author wechan
     * @since 2018年08月01日
     */
    public function setLoginErrorCount(string $ip):bool;
    
    /**
     * 根据ip计算用户登录失败的次数
     *
     * @param string $ip ip地址
     *
     * @author wechan
     * @since 2018年08月01日
     */
    public function getLoginErrorCount(string $ip):int;

    /**
     * 获取用户信息，适用多场景
     *
     * @param array       $params
     * @param UidDTO|null $user
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-10-13
     */
    public function getUserInfo(array $params, UidDTO $user = null): array ;

    /**
     * 商城登录用户信息
     *
     * @param int $userId
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-10-17
     */
    public function getMallLoginUser(int $userId):array ;

    /**
     * 商城个人中心资料
     *
     * @param int $userId
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-10-17
     */
    public function getMallUcProfile(int $userId):array;

    /**
     * 获取用户标识信息
     *
     * @param int $userId
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-10-18
     */
    public function getUserFlagInfo(int $userId):array ;

    /**
     * Uc通过条件获取用户信息.
     *
     * @param array  $data
     * @param int    $data["type"]  获取类型  2:username, 3:根据用户id获取字段
     * @param string $data["val"]   对应类型的值
     * @param string $data["field"] 字段
     *                              ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------|-------|--------------
     * userId      |string |    用户id
     * username    |string |    用户名
     * passwordOld |string |    用户旧密码
     * password    |string |    用户新密码
     * mobile      |string |    用户手机
     * avatar      |string |    用户头像
     * status      |string |    用户状态
     * createdTime |string |    创建时间
     * updateTime  |string |    更新时间
     * email       |string |    邮箱地址
     * regIp       |string |    注册ip
     *
     * @throws UserException
     *
     * @return array
     * @requestExample({"data":{"type":1,"val":"1111@qq.com"}})
     * @returnExample({"userId":"1","username":"admin_moq","passwordOld":"17130970363720a389d2c582ddb9042f03b2bd","password":"","mobile":"","avatar":"","status":"0","createdTime":"1258946046","updateTime":"2017-11-25 10:50:56","email":"111@eelly.com","regIp":"116.22.30.27"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017年12月7日
     */
    public function getInfoByFieldUc(array $data = []): array;

    /**
     * 修改密码
     *
     * @param int    $userId        用户ID
     * @param string $oldPassword   旧密码
     * @param string $newPassword   新密码
     * @return bool
     *
     * @author zhangyangxun
     * @since 2018-10-18
     */
    public function updatePassword(int $userId, string $oldPassword, string $newPassword): bool ;

    /**
     * 店+app个人中心主页
     *
     * @param UidDTO|null $user
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-10-24
     */
    public function buyerAppMyIndex(UidDTO $user = null): array ;

    /**
     * 用户绑定手机所需数据接口
     * 
     * > 返回数据说明
     * 
     * key | type | value
     * --- | ---- | -----
     * isSetPayPassword | bool | 是否设置了支付密码
     * isSetMobile | bool | 时候具有绑定手机 
     * mobile | string | 绑定的手机号码
     * isSetSecurity | bool | 是否设置了密保
     *
     * @param integer $userId 用户id
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.10.29
     */
    public function userBindPhoneNeedInfo(int $userId, int $storeId = 0):array;

    /**
     * 检查手机是否已经被绑定
     * 
     * > 返回字段说明
     * 
     * key | type | value
     * --- | ---- | -----
     * isBinding | int | 0 : 未绑定，1:已经绑定
     * username | string | 绑定账号的用户名 
     *
     * @param string $mobile 手机号码
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.10.31
     */
    public function checkMobileIsBinding(string $mobile):array;

    /**
     * 根据账号获取用户信息
     *
     * @param string $accountType   账号类型:username,mobile
     * @param string $account       账号
     * @return array
     *
     * @returnExample({"userId":148086,"mobile":"13612341288","mobileShield":"13*******88"})
     *
     * @author zhangyangxun
     * @since 2018-11-01
     */
    public function getUserByAccount(string $accountType, string $account): array ;

    /**
     * 用户是否设置密码
     *
     * @param UidDTO|null $user
     * @return bool
     *
     * @author zhangyangxun
     * @since 2018-11-05
     */
    public function hasPassword(UidDTO $user = null): bool ;
    
    /**
     * 根据用户id，获取用户名 (旧代码接口迁移)
     *
     * @param array $userIds 用户id
     * @return array
     *
     * @requestExample({"userIds":[1762630, 1762631]})
     * @returnExample({"1762630":{"user_id":1762630,"user_name":"yl_12342177","nickname":"yl_12342177","wechat_name":""},"1762631":{"user_id":1762631,"user_name":"danfeng1","nickname":"danfeng1","wechat_name":""}})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.11.05
     */
    public function getUsernameByUid(array $userIds):array;

    /**
     * 获取用户信息和扩展信息.
     *
     * @param array $userIds 用户id
     * @return array
     *
     * @requestExample({"userIds":[1762254, 2108398]})
     * @returnExample({"1762254":{"user_id":"1762254","user_name":"yl_waqa1945","nickname":"yl_waqa1945","real_name":"","phone_mob":""},"2108398":{"user_id":"2108398","user_name":"yl_jn003778","nickname":"yl_jn003778","real_name":"","phone_mob":""}})
     *
     * @author 李伟权<liweiquan@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2018.11.18
     */
    public function getMemberExtendInfo(array $userIds):array;

    /**
     * 根据用户名获取用户id
     *
     * @param string $userName 用户名
     * @return int
     *
     * @requestExample({"userName":"molimoq"})
     * @returnExample(148086)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.12.11
     */
    public function getUserIdByUserName(string $userName):int;

    /**
     * 根据传过来的用户id跟时间，返回新用户的数量 （当天注册的用户）
     *
     * @param array $userIds 用户id
     * @param int $startTime 开始时间戳
     * @param int $endTime   结束时间戳
     * @return int
     *
     * @requestExample({"userIds":[148086,2286683],"startTime":1545103818,"endTime":1545127044})
     * @returnExample(1)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2019.01.09
     */
    public function getNewUserNum(array $userIds, int $startTime, int $endTime):int;
}
