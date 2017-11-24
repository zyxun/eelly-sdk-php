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

namespace Eelly\SDK\User\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\User\Service\ExtendInterface;
use Eelly\SDK\User\DTO\ExtendDTO;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Extend implements ExtendInterface
{
    /**
     * 获取用户的扩展信息.
     *
     * @param int $userId
     *                    ### 返回数据说明
     *
     * 字段|类型|说明
     * --------------|-------|--------------
     * userId        |int    | 用户id
     * realname      |string | 真实姓名
     * gender        |string | 性别：0 未知 1 男 2 女
     * birthday      |int    | 出生日期
     * gbCode        |int    | 地区编码
     * address       |string | 详细地址
     * email         |string | 绑定邮箱
     * regTime       |int    | 注册时间
     * regIp         |string | 注册IP
     * regChannel    |int    | 注册渠道
     * regType       |int    | 注册方式
     * regFromUserId |int    | 推荐的用户ID
     * scanFlag      |int    | 是否允许被雷达扫客扫描：0 否 1 是
     * flag          |string | 用户标识
     * createdTime   |int    | 添加时间
     * updateTime    |string | 修改时间
     *
     * @throws ExtendException
     *
     * @return ExtendDTO
     * @requestExample({"extendId":1})
     * @returnExample({"userId":148086,"realname":"xx","gender":"1","birthday":1506500037,"gbCode":4401,"address":"xxx",
     *     "email":"xxx","regTime":1506500037,"regIp":"127.0.0.1","regChannel":0,"regType":0,"regFromUserId":0,
     *     "flag":"1","scanFlag":"1","createdTime":1506500037,"updateTime":"2017/9/27 16:13:55"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/27
     */
    public function getExtend(int $userId): ExtendDTO
    {
        return EellyClient::request('user/extend', __FUNCTION__, true, $userId);
    }

    /**
     * 获取用户的扩展信息.
     *
     * @param int $userId
     *                    ### 返回数据说明
     *
     * 字段|类型|说明
     * --------------|-------|--------------
     * userId        |int    | 用户id
     * realname      |string | 真实姓名
     * gender        |string | 性别：0 未知 1 男 2 女
     * birthday      |int    | 出生日期
     * gbCode        |int    | 地区编码
     * address       |string | 详细地址
     * email         |string | 绑定邮箱
     * regTime       |int    | 注册时间
     * regIp         |string | 注册IP
     * regChannel    |int    | 注册渠道
     * regType       |int    | 注册方式
     * regFromUserId |int    | 推荐的用户ID
     * scanFlag      |int    | 是否允许被雷达扫客扫描：0 否 1 是
     * flag          |string | 用户标识
     * createdTime   |int    | 添加时间
     * updateTime    |string | 修改时间
     *
     * @throws ExtendException
     *
     * @return ExtendDTO
     * @requestExample({"extendId":1})
     * @returnExample({"userId":148086,"realname":"xx","gender":"1","birthday":1506500037,"gbCode":4401,"address":"xxx",
     *     "email":"xxx","regTime":1506500037,"regIp":"127.0.0.1","regChannel":0,"regType":0,"regFromUserId":0,
     *     "flag":"1","scanFlag":"1","createdTime":1506500037,"updateTime":"2017/9/27 16:13:55"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/27
     */
    public function getExtendAsync(int $userId)
    {
        return EellyClient::request('user/extend', __FUNCTION__, false, $userId);
    }

    /**
     * 添加用户的扩展信息.
     *
     * @param array  $data
     * @param int    $data["userId"]        用户id
     * @param string $data["realname"]      真实姓名
     * @param string $data["gender"]        性别：0 未知 1 男 2 女
     * @param int    $data["birthday"]      出生日期
     * @param int    $data["gbCode"]        地区编码
     * @param string $data["address"]       详细地址
     * @param string $data["email"]         绑定邮箱
     * @param int    $data["regTime"]       注册时间
     * @param string $data["regIp"]         注册IP
     * @param int    $data["regChannel"]    注册渠道 0 商城注册 1 APP注册 2 WAP注册
     * @param int    $data["regType"]       注册方式 0 未知 1 手机 2 邮箱 3 QQ绑定 4 微信 可增加
     * @param int    $data["regFromUserId"] 推荐的用户ID
     * @param string $data["flag"]          用户标识 1 绑定手机 2 绑定邮箱 4 设置密保 8 实名认证 16 用户身份 32 刷单用户
     *
     * @throws ExtendException
     *
     * @return bool
     * @requestExample({"data":{"userId":148086,"realname":"xx","gender":"1","birthday":1506500037,"gbCode":4401,"address":"xxx",
     *     "email":"xxx","regTime":1506500037,"regIp":"127.0.0.1","regChannel":0,"regType":0,"regFromUserId":0,"flag":"1"}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/27
     */
    public function addExtend(array $data): bool
    {
        return EellyClient::request('user/extend', __FUNCTION__, true, $data);
    }

    /**
     * 添加用户的扩展信息.
     *
     * @param array  $data
     * @param int    $data["userId"]        用户id
     * @param string $data["realname"]      真实姓名
     * @param string $data["gender"]        性别：0 未知 1 男 2 女
     * @param int    $data["birthday"]      出生日期
     * @param int    $data["gbCode"]        地区编码
     * @param string $data["address"]       详细地址
     * @param string $data["email"]         绑定邮箱
     * @param int    $data["regTime"]       注册时间
     * @param string $data["regIp"]         注册IP
     * @param int    $data["regChannel"]    注册渠道 0 商城注册 1 APP注册 2 WAP注册
     * @param int    $data["regType"]       注册方式 0 未知 1 手机 2 邮箱 3 QQ绑定 4 微信 可增加
     * @param int    $data["regFromUserId"] 推荐的用户ID
     * @param string $data["flag"]          用户标识 1 绑定手机 2 绑定邮箱 4 设置密保 8 实名认证 16 用户身份 32 刷单用户
     *
     * @throws ExtendException
     *
     * @return bool
     * @requestExample({"data":{"userId":148086,"realname":"xx","gender":"1","birthday":1506500037,"gbCode":4401,"address":"xxx",
     *     "email":"xxx","regTime":1506500037,"regIp":"127.0.0.1","regChannel":0,"regType":0,"regFromUserId":0,"flag":"1"}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/27
     */
    public function addExtendAsync(array $data)
    {
        return EellyClient::request('user/extend', __FUNCTION__, false, $data);
    }

    /**
     * 更新用户扩展信息.
     *
     * @param int    $userId                用户id
     * @param array  $data
     * @param int    $data["userId"]        用户id
     * @param string $data["realname"]      真实姓名
     * @param string $data["gender"]        性别：0 未知 1 男 2 女
     * @param int    $data["birthday"]      出生日期
     * @param int    $data["gbCode"]        地区编码
     * @param string $data["address"]       详细地址
     * @param string $data["email"]         绑定邮箱
     * @param int    $data["regTime"]       注册时间
     * @param string $data["regIp"]         注册IP
     * @param int    $data["regChannel"]    注册渠道 0 商城注册 1 APP注册 2 WAP注册
     * @param int    $data["regType"]       注册方式 0 未知 1 手机 2 邮箱 3 QQ绑定 4 微信 可增加
     * @param int    $data["regFromUserId"] 推荐的用户ID
     * @param string $data["flag"]          用户标识 1 绑定手机 2 绑定邮箱 4 设置密保 8 实名认证 16 用户身份 32 刷单用户
     *
     * @throws ExtendException
     *
     * @return bool
     * @requestExample({"extendId":1, "data":{"userId":148086,"realname":"xx","gender":"1","birthday":1506500037,"gbCode":4401,"address":"xxx",
     *     "email":"xxx","regTime":1506500037,"regIp":"127.0.0.1","regChannel":0,"regType":0,"regFromUserId":0,"flag":"1"}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/27
     */
    public function updateExtend(int $userId, array $data): bool
    {
        return EellyClient::request('user/extend', __FUNCTION__, true, $userId, $data);
    }

    /**
     * 更新用户扩展信息.
     *
     * @param int    $userId                用户id
     * @param array  $data
     * @param int    $data["userId"]        用户id
     * @param string $data["realname"]      真实姓名
     * @param string $data["gender"]        性别：0 未知 1 男 2 女
     * @param int    $data["birthday"]      出生日期
     * @param int    $data["gbCode"]        地区编码
     * @param string $data["address"]       详细地址
     * @param string $data["email"]         绑定邮箱
     * @param int    $data["regTime"]       注册时间
     * @param string $data["regIp"]         注册IP
     * @param int    $data["regChannel"]    注册渠道 0 商城注册 1 APP注册 2 WAP注册
     * @param int    $data["regType"]       注册方式 0 未知 1 手机 2 邮箱 3 QQ绑定 4 微信 可增加
     * @param int    $data["regFromUserId"] 推荐的用户ID
     * @param string $data["flag"]          用户标识 1 绑定手机 2 绑定邮箱 4 设置密保 8 实名认证 16 用户身份 32 刷单用户
     *
     * @throws ExtendException
     *
     * @return bool
     * @requestExample({"extendId":1, "data":{"userId":148086,"realname":"xx","gender":"1","birthday":1506500037,"gbCode":4401,"address":"xxx",
     *     "email":"xxx","regTime":1506500037,"regIp":"127.0.0.1","regChannel":0,"regType":0,"regFromUserId":0,"flag":"1"}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/27
     */
    public function updateExtendAsync(int $userId, array $data)
    {
        return EellyClient::request('user/extend', __FUNCTION__, false, $userId, $data);
    }

    /**
     * 分页获取用户扩展信息.
     *
     * @param array  $condition
     * @param int    $condition["userId"]        用户id
     * @param string $condition["gender"]        性别：0 未知 1 男 2 女
     * @param int    $condition["gbCode"]        地区编码
     * @param int    $condition["regChannel"]    注册渠道 0 商城注册 1 APP注册 2 WAP注册
     * @param int    $condition["regType"]       注册方式 0 未知 1 手机 2 邮箱 3 QQ绑定 4 微信 可增加
     * @param int    $condition["regFromUserId"] 推荐的用户ID
     * @param string $condition["flag"]          用户标识 1 绑定手机 2 绑定邮箱 4 设置密保 8 实名认证 16 用户身份 32 刷单用户
     * @param int    $currentPage
     * @param int    $limit
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * --------------|-------|--------------
     * userId        |int    |
     * realname      |string |
     * gender        |string |
     * birthday      |int    |
     * gbCode        |int    |
     * address       |string |
     * email         |string |
     * regTime       |int    |
     * regIp         |string |
     * regChannel    |int    |
     * regType       |int    |
     * regFromUserId |int    |
     * flag          |string |
     *
     * @throws ExtendException
     *
     * @return array
     * @requestExample({"condition":{"userId":148086,"gender":"1","gbCode":4401,
     *     "regChannel":0,"regType":0,"regFromUserId":0,"flag":"1"}, "currentPage":1,"limit":10})
     * @returnExample([{"userId":148086,"realname":"xx","gender":"1","birthday":1506500037,"gbCode":4401,"address":"xxx",
     *     "email":"xxx","regTime":1506500037,"regIp":"127.0.0.1","regChannel":0,"regType":0,"regFromUserId":0,"flag":"1"}])
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/27
     */
    public function listExtendPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('user/extend', __FUNCTION__, true, $condition, $currentPage, $limit);
    }

    /**
     * 分页获取用户扩展信息.
     *
     * @param array  $condition
     * @param int    $condition["userId"]        用户id
     * @param string $condition["gender"]        性别：0 未知 1 男 2 女
     * @param int    $condition["gbCode"]        地区编码
     * @param int    $condition["regChannel"]    注册渠道 0 商城注册 1 APP注册 2 WAP注册
     * @param int    $condition["regType"]       注册方式 0 未知 1 手机 2 邮箱 3 QQ绑定 4 微信 可增加
     * @param int    $condition["regFromUserId"] 推荐的用户ID
     * @param string $condition["flag"]          用户标识 1 绑定手机 2 绑定邮箱 4 设置密保 8 实名认证 16 用户身份 32 刷单用户
     * @param int    $currentPage
     * @param int    $limit
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * --------------|-------|--------------
     * userId        |int    |
     * realname      |string |
     * gender        |string |
     * birthday      |int    |
     * gbCode        |int    |
     * address       |string |
     * email         |string |
     * regTime       |int    |
     * regIp         |string |
     * regChannel    |int    |
     * regType       |int    |
     * regFromUserId |int    |
     * flag          |string |
     *
     * @throws ExtendException
     *
     * @return array
     * @requestExample({"condition":{"userId":148086,"gender":"1","gbCode":4401,
     *     "regChannel":0,"regType":0,"regFromUserId":0,"flag":"1"}, "currentPage":1,"limit":10})
     * @returnExample([{"userId":148086,"realname":"xx","gender":"1","birthday":1506500037,"gbCode":4401,"address":"xxx",
     *     "email":"xxx","regTime":1506500037,"regIp":"127.0.0.1","regChannel":0,"regType":0,"regFromUserId":0,"flag":"1"}])
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/27
     */
    public function listExtendPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('user/extend', __FUNCTION__, false, $condition, $currentPage, $limit);
    }

    /**
     * 检查手机号码是否已被绑定.
     *
     * @param string $mobile 手机号码
     *
     * @throws ExtendException
     *
     * @return bool
     * @requestExample({"mobile":"13430245645"})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2017-11-06
     */
    public function checkMobileIsBind(string $mobile): bool
    {
        return EellyClient::request('user/extend', __FUNCTION__, true, $mobile);
    }

    /**
     * 检查手机号码是否已被绑定.
     *
     * @param string $mobile 手机号码
     *
     * @throws ExtendException
     *
     * @return bool
     * @requestExample({"mobile":"13430245645"})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2017-11-06
     */
    public function checkMobileIsBindAsync(string $mobile)
    {
        return EellyClient::request('user/extend', __FUNCTION__, false, $mobile);
    }

    /**
     * 获得用户当前能否被雷达检查的状态
     *
     * @param UidDTO $user 用户登录信息
     *
     * @return array
     * @requestExample({})
     * @returnExample({"status":"1"})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2017-11-06
     */
    public function getScanFlagStatus(UidDTO $user = null): array
    {
        return EellyClient::request('user/extend', __FUNCTION__, true, $user);
    }

    /**
     * 获得用户当前能否被雷达检查的状态
     *
     * @param UidDTO $user 用户登录信息
     *
     * @return array
     * @requestExample({})
     * @returnExample({"status":"1"})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2017-11-06
     */
    public function getScanFlagStatusAsync(UidDTO $user = null)
    {
        return EellyClient::request('user/extend', __FUNCTION__, false, $user);
    }

    /**
     * 改变用户能否被雷达检查的状态
     *
     * @param int    $scanFlag 是否允许被雷达扫客扫描：0 否 1 是
     * @param UidDTO $user     用户登录信息
     *
     * @return bool
     * @requestExample({"scanFlag":0})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2017-11-06
     */
    public function changeScanFlagStatus(int $scanFlag, UidDTO $user = null): bool
    {
        return EellyClient::request('user/extend', __FUNCTION__, true, $scanFlag, $user);
    }

    /**
     * 改变用户能否被雷达检查的状态
     *
     * @param int    $scanFlag 是否允许被雷达扫客扫描：0 否 1 是
     * @param UidDTO $user     用户登录信息
     *
     * @return bool
     * @requestExample({"scanFlag":0})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2017-11-06
     */
    public function changeScanFlagStatusAsync(int $scanFlag, UidDTO $user = null)
    {
        return EellyClient::request('user/extend', __FUNCTION__, false, $scanFlag, $user);
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