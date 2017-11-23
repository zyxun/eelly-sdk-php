<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\User\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\User\Service\UserInterface;
use Eelly\DTO\UserDTO;
use Eelly\DTO\UidDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class User implements UserInterface
{

    /**
     * 校验手机号码是否存在.
     *
     * @param string $mobile 手机号
     *
     * @return int 存在返回用户Id，否则返回0
     * @requestExample({'mobile':'13512719777'})
     * @returnExample(148084)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月24日
     * @Validation(
     *    @Regex(0,{message:"手机号",'pattern':'/^1[34578]\d{9}$/'})
     * )
     */
    public function checkIsExistUserMobile(string $mobile): int
    {
        return EellyClient::request('user/user', 'checkIsExistUserMobile', true, $mobile);
    }

    /**
     * 校验密码强度.
     *
     * @param string $password 密码
     *
     * @return int -1:密码不符合规则;<2:密码过于简单
     * @requestExample({'password':123456})
     * @returnExample({-1})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月28日
     */
    public function checkPasswordPowerRule(string $password): int
    {
        return EellyClient::request('user/user', 'checkPasswordPowerRule', true, $password);
    }

    /**
     * 更新用户数据.
     *
     * @param int $userId 用户登录ID
     * @param array $data 需要更新的用户数据
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
    public function updateUser(int $userId, array $data): bool
    {
        return EellyClient::request('user/user', 'updateUser', true, $userId, $data);
    }

    /**
     * 注册用户.
     *
     * @param array $data 注册数据
     * @param string $data ['mobile'] 注册数据
     * @param string $data ['captcha'] 验证码
     * @param string $data ['password'] 注册密码
     *
     * @throws \Eelly\Exception\LogicException
     *
     * @return int 用户ID
     * @requestExample({'mobile':13512719787,'captcha':123456,'password':'123456'})
     * @returnExample('accessToken')
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月24日
     */
    public function registerUser(array $data): int
    {
        return EellyClient::request('user/user', 'registerUser', true, $data);
    }

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
    public function checkPassword(string $username, string $password): bool
    {
        return EellyClient::request('user/user', 'checkPassword', true, $username, $password);
    }

    /**
     * 通过密码获取用户信息.
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
     */
    public function getUserByPassword(string $username, string $password): UserDTO
    {
        return EellyClient::request('user/user', 'getUserByPassword', true, $username, $password);
    }

    /**
     * 获取用户信息.
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
    public function getInfo(UidDTO $user = null): UserDTO
    {
        return EellyClient::request('user/user', 'getInfo', true, $user);
    }

    /**
     * 批量获取用户基本信息.
     *
     * @param array $userIds 用户一维数据user_id: [148086,148087,148088]
     *
     * @return array
     * @requestExample({'userIds':{148086,148087,148088}})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月25日
     * @Validation(
     *     @PresenceOf(0,{message : "用户id不能为空"})
     * )
     */
    public function getListByUserIds(array $userIds): array
    {
        return EellyClient::request('user/user', 'getListByUserIds', true, $userIds);
    }

    /**
     * 添加用户.
     *
     * @param array $data
     * @param string $data ["username"]
     * @param string $data ["password"]["old"]
     * @param string $data ["password"]
     * @param int $data ["mobile"]
     * @param string $data ["avatar"]
     * @param int $data ["status"]
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
    public function addUser(array $data): int
    {
        return EellyClient::request('user/user', 'addUser', true, $data);
    }

    /**
     * 获取会员搜索引擎所需数据.
     *
     * @param int $currentPage 当前页
     * @param int $limit 限制数
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
    public function listUserElasticData(int $currentPage = 1, int $limit = 100): array
    {
        return EellyClient::request('user/user', 'listUserElasticData', true, $currentPage, $limit);
    }

    /**
     * 根据传过来的用户id，获取对应的用户资料.
     *
     * @param int $userId 用户id
     *
     * @throws \Exception
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
    public function getMineDataApp(int $userId): array
    {
        return EellyClient::request('user/user', 'getMineDataApp', true, $userId);
    }

    /**
     * 更新用户头像.
     *
     * @param int $uid
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
    public function updateUserAvatar(int $uid, string $avatar): bool
    {
        return EellyClient::request('user/user', 'updateUserAvatar', true, $uid, $avatar);
    }

    /**
     * 根据用户id获取二维码数据.
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
    public function getCodeCardInfo(int $userId): array
    {
        return EellyClient::request('user/user', 'getCodeCardInfo', true, $userId);
    }

    /**
     * 查看用户绑定状态
     *
     * @param int $type 类型 1:手机 2:QQ 3:微信 4:全部(手机+QQ+微信+邮箱)
     * @param UidDTO $user 用户登录信息
     *
     * @throws UserException
     *
     * @return array
     * @requestExample({"type":4})
     * @returnExample({"isBindMobile":"true", "mobile":"134****8648","phoneMob":"13430248648","isBindQQ":"true","qqNickname":"","isBindWechat":"false","WechatNickname":"","isBindEmail":"true","email":"molimoq@eelly.net"})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2017-11-06
     */
    public function checkBindStatus(int $type, UidDTO $user = null): array
    {
        return EellyClient::request('user/user', 'checkBindStatus', true, $type, $user);
    }

    /**
     * 绑定手机.
     *
     * @param array $data
     * @param string $data ['mobile']    手机号
     * @param string $data ['captcha']   验证码
     * @param string $data ['type']      验证码类型
     * @param string $data ['opType']    操作类型  (add添加绑定手机 edit修改绑定手机)
     * @param string $data ['mobileNew'] 新的手机号码 (修改绑定的手机号)
     * @param UidDTO $user 用户登录信息
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
    public function bindingMobile(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('user/user', 'bindingMobile', true, $data, $user);
    }

    /**
     * 判断用户是否已经绑定手机.
     *
     * @param int $userId 用户id
     *
     * @return array
     * @requestExample({"userId":"148086"})
     * @returnExample({"isBindMobile":1, "mobile":"134****5645","phoneMob":"13430245645"})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2017-11-06
     */
    public function checkUserIsBindingMobile(int $userId): array
    {
        return EellyClient::request('user/user', 'checkUserIsBindingMobile', true, $userId);
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