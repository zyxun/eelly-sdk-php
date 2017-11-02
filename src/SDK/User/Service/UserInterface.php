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
     * @param string $mobile 手机号
     * @return int 存在返回用户Id，否则返回0
     * @requestExample({'mobile':'13512719777'})
     * @returnExample(148084)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年10月24日
     * @Validation(
     *    @Regex(0,{message:"手机号",'pattern':'/^1[34578]\d{9}$/'})
     * )
     */
    public function checkIsExistUserMobile(string $mobile): int;

    /**
     * 校验密码强度.
     *
     * @param string $password 密码
     * @return int -1:密码不符合规则;<2:密码过于简单
     * @requestExample({'password':123456})
     * @returnExample({-1})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年10月28日
     */
    public function checkPasswordPowerRule(string $password): int;

    /**
     * 更新用户数据.
     *
     * @param int $userId 用户登录ID
     * @param array $data 需要更新的用户数据
     * @return bool
     * @requestExample({'username':'username','passwordOld':'password_old','password':'password','mobile':'mobile','avatar':'avatar','status':'status'})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
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
     * @param array $data 注册数据
     * @param string $data ['mobile'] 注册数据
     * @param string $data ['captcha'] 验证码
     * @param string $data ['password'] 注册密码
     * @throws \Eelly\Exception\LogicException
     * @return int 用户ID
     * @requestExample({'mobile':13512719787,'captcha':123456,'password':'123456'})
     * @returnExample('accessToken')
     * @author 肖俊明<xiaojunming@eelly.net>
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
    public function getUserByPassword(string $username, string $password): UserDTO;

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
    public function getInfo(UidDTO $user = null): UserDTO;


    /**
     * 批量获取用户基本信息.
     *
     * @param array $userIds 用户一维数据user_id: [148086,148087,148088]
     * @return array
     * @requestExample({'userIds':{148086,148087,148088}})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年10月25日
     * @Validation(
     *     @PresenceOf(0,{message : "用户id不能为空"})
     * )
     */
    public function getListByUserIds(array $userIds): array;

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
    public function addUser(array $data): int;

    /**
     * 获取会员搜索引擎所需数据.
     *
     * @param int $currentPage 当前页
     * @param int $limit 限制数
     * @return array
     * @requestExample({"currentPage":1,"limit":100})
     * @returnExample()
     * @throws \Eelly\SDK\
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-10-23
     */
    public function listUserElasticData(int $currentPage = 1, int $limit = 100): array;
}
