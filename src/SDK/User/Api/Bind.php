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

use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\User\DTO\UserBindDTO;

/**
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Bind
{
    /**
     * 获取用户绑定记录.
     *
     * @param int $bindId 绑定ID
     *
     * @return UserBindDTO
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------|-------|--------------
     * ubId        |int    | 绑定ID
     * userId      |string | 用户Id
     * type        |int    | 绑定类型：1 微信绑定 2 QQ绑定 3 新浪微博 4 腾讯微博
     * unionId     |string | 第三方平台union_id
     * openId      |string | 第三方平台open_id
     * appId       |string | 微信公众平台ID
     * status      |int    | 绑定状态：1 绑定状态 2 解绑状态
     * createdTime |int    | 添加时间
     * updateTime  |string | 修改时间
     *
     * @requestExample({"bindId":1})
     * @returnExample({"ubId":1,"userId":"148086","type":1,"unionId":"xxx","openId":"xx","appId":"xxx","status":1,
     *     "createdTime":1506419757,"updateTime":"2017/9/26 17:55:57"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     */
    public function getBind(int $bindId): UserBindDTO
    {
        return EellyClient::request('user/bind', 'getBind', true, $bindId);
    }

    /**
     * 获取用户绑定记录.
     *
     * @param int $bindId 绑定ID
     *
     * @return UserBindDTO
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------|-------|--------------
     * ubId        |int    | 绑定ID
     * userId      |string | 用户Id
     * type        |int    | 绑定类型：1 微信绑定 2 QQ绑定 3 新浪微博 4 腾讯微博
     * unionId     |string | 第三方平台union_id
     * openId      |string | 第三方平台open_id
     * appId       |string | 微信公众平台ID
     * status      |int    | 绑定状态：1 绑定状态 2 解绑状态
     * createdTime |int    | 添加时间
     * updateTime  |string | 修改时间
     *
     * @requestExample({"bindId":1})
     * @returnExample({"ubId":1,"userId":"148086","type":1,"unionId":"xxx","openId":"xx","appId":"xxx","status":1,
     *     "createdTime":1506419757,"updateTime":"2017/9/26 17:55:57"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     */
    public function getBindAsync(int $bindId)
    {
        return EellyClient::request('user/bind', 'getBind', false, $bindId);
    }

    /**
     * 添加绑定.
     *
     * @param array  $data
     * @param int    $data['userId']   用户id
     * @param int    $data['type']     绑定类型：1 微信绑定 2 QQ绑定 3 新浪微博 4 腾讯微博
     * @param string $data['nickname'] 第三方平台昵称
     * @param string $data['unionId']  第三方平台union_id
     * @param string $data['openId']   第三方平台open_id
     * @param string $data['appId']    微信公众平台ID,对应mobile.mobile_wechat表appid字段
     * @param int    $data['status']   绑定状态：1 绑定状态 2 解绑状态
     *
     * @return bool
     * @requestExample({"type":"1","union_id":"xxxx","open_id":"xxxx","app_id":"xxxx","status":"1"})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/27
     */
    public function addBind(array $data): bool
    {
        return EellyClient::request('user/bind', 'addBind', true, $data);
    }

    /**
     * 添加绑定.
     *
     * @param array  $data
     * @param int    $data['userId']   用户id
     * @param int    $data['type']     绑定类型：1 微信绑定 2 QQ绑定 3 新浪微博 4 腾讯微博
     * @param string $data['nickname'] 第三方平台昵称
     * @param string $data['unionId']  第三方平台union_id
     * @param string $data['openId']   第三方平台open_id
     * @param string $data['appId']    微信公众平台ID,对应mobile.mobile_wechat表appid字段
     * @param int    $data['status']   绑定状态：1 绑定状态 2 解绑状态
     *
     * @return bool
     * @requestExample({"type":"1","union_id":"xxxx","open_id":"xxxx","app_id":"xxxx","status":"1"})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/27
     */
    public function addBindAsync(array $data)
    {
        return EellyClient::request('user/bind', 'addBind', false, $data);
    }

    /**
     * 更新绑定信息.
     *
     * @param int    $bindId          绑定id
     * @param array  $data
     * @param int    $data["type"]    绑定类型
     * @param string $data["unionId"] 第三方平台union_id
     * @param string $data["openId"]  第三方平台open_id
     * @param string $data["appId"]   微信公众平台ID,对应mobile.mobile_wechat表appid字段
     * @param int    $data["status"]  绑定状态：1 绑定状态 2 解绑状态
     *
     * @throws BindException
     *
     * @return bool
     * @requestExample({"bindId":1,{"data":{"type":1,"unionId":"xxxx","openId":"xxxx","appId":"xxxx","status":2}}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/27
     */
    public function updateBind(int $bindId, array $data): bool
    {
        return EellyClient::request('user/bind', 'updateBind', true, $bindId, $data);
    }

    /**
     * 更新绑定信息.
     *
     * @param int    $bindId          绑定id
     * @param array  $data
     * @param int    $data["type"]    绑定类型
     * @param string $data["unionId"] 第三方平台union_id
     * @param string $data["openId"]  第三方平台open_id
     * @param string $data["appId"]   微信公众平台ID,对应mobile.mobile_wechat表appid字段
     * @param int    $data["status"]  绑定状态：1 绑定状态 2 解绑状态
     *
     * @throws BindException
     *
     * @return bool
     * @requestExample({"bindId":1,{"data":{"type":1,"unionId":"xxxx","openId":"xxxx","appId":"xxxx","status":2}}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/27
     */
    public function updateBindAsync(int $bindId, array $data)
    {
        return EellyClient::request('user/bind', 'updateBind', false, $bindId, $data);
    }

    /**
     * 获取绑定的列表.
     *
     * @param array  $condition
     * @param int    $condition["type"]    绑定类型
     * @param int    $condition["userId"]  用户id
     * @param string $condition["unionId"] 第三方平台union_id
     * @param string $condition["openId"]  第三方平台open_id
     * @param string $condition["appId"]   微信公众平台ID,对应mobile.mobile_wechat表appid字段
     * @param int    $condition["status"]  绑定状态：1 绑定状态 2 解绑状态
     * @param int    $currentPage          当前页码
     * @param int    $limit                一页显示的数量
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------|-------|--------------
     * ubId        |int    |
     * userId      |string |
     * type        |int    |
     * unionId     |string |
     * openId      |string |
     * appId       |string |
     * status      |int    |
     * createdTime |int    |
     * updateTime  |string |
     *
     * @throws BindException
     *
     * @return array
     * @requestExample({"condition":{"type":1,"userId":148086,"unionId":"xxxx","openId":"xxxx","appId":"xxxx","status":2},
     *     "currentPage":1,"limit":10})
     * @returnExample([{"ubId":1,"userId":"148086","type":1,"unionId":"xxx","openId":"xx","appId":"xxx","status":1,
     *     "createdTime":1506419757,"updateTime":"2017/9/26 17:55:57"}])
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/27
     */
    public function listBindPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('user/bind', 'listBindPage', true, $condition, $currentPage, $limit);
    }

    /**
     * 获取绑定的列表.
     *
     * @param array  $condition
     * @param int    $condition["type"]    绑定类型
     * @param int    $condition["userId"]  用户id
     * @param string $condition["unionId"] 第三方平台union_id
     * @param string $condition["openId"]  第三方平台open_id
     * @param string $condition["appId"]   微信公众平台ID,对应mobile.mobile_wechat表appid字段
     * @param int    $condition["status"]  绑定状态：1 绑定状态 2 解绑状态
     * @param int    $currentPage          当前页码
     * @param int    $limit                一页显示的数量
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------|-------|--------------
     * ubId        |int    |
     * userId      |string |
     * type        |int    |
     * unionId     |string |
     * openId      |string |
     * appId       |string |
     * status      |int    |
     * createdTime |int    |
     * updateTime  |string |
     *
     * @throws BindException
     *
     * @return array
     * @requestExample({"condition":{"type":1,"userId":148086,"unionId":"xxxx","openId":"xxxx","appId":"xxxx","status":2},
     *     "currentPage":1,"limit":10})
     * @returnExample([{"ubId":1,"userId":"148086","type":1,"unionId":"xxx","openId":"xx","appId":"xxx","status":1,
     *     "createdTime":1506419757,"updateTime":"2017/9/26 17:55:57"}])
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/27
     */
    public function listBindPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('user/bind', 'listBindPage', false, $condition, $currentPage, $limit);
    }

    /**
     * 获取应用绑定信息.
     *
     * @param int    $uid   用户id
     * @param string $appId app id
     *
     * @return array
     *
     * @requestExample({"uid":148086,"appId":"xxxx"})
     *
     * @returnExample({
     *     "ubId": "1",
     *     "userId": "148086",
     *     "type": "1",
     *     "nickname": "bW8=",
     *     "unionId": "xxxx",
     *     "openId": "xxxx",
     *     "appId": "xxxx",
     *     "status": "1",
     *     "createdTime": "0",
     *     "updateTime": "2017-11-03 15:30:00"
     * })
     *
     * @author hehui<hehui@eelly.net>
     */
    public function getBindInfo(int $uid, string $appId): array
    {
        return EellyClient::request('user/bind', 'getBindInfo', true, $uid, $appId);
    }

    /**
     * 获取应用绑定信息.
     *
     * @param int    $uid   用户id
     * @param string $appId app id
     *
     * @return array
     *
     * @requestExample({"uid":148086,"appId":"xxxx"})
     *
     * @returnExample({
     *     "ubId": "1",
     *     "userId": "148086",
     *     "type": "1",
     *     "nickname": "bW8=",
     *     "unionId": "xxxx",
     *     "openId": "xxxx",
     *     "appId": "xxxx",
     *     "status": "1",
     *     "createdTime": "0",
     *     "updateTime": "2017-11-03 15:30:00"
     * })
     *
     * @author hehui<hehui@eelly.net>
     */
    public function getBindInfoAsync(int $uid, string $appId)
    {
        return EellyClient::request('user/bind', 'getBindInfo', false, $uid, $appId);
    }

    /**
     * 绑定第三方应用信息.
     *
     * @param int    $uid      用户ID
     * @param int    $type     绑定类型：1 微信绑定 2 QQ绑定 3 新浪微博 4 腾讯微博
     * @param string $nickname 第三方平台昵称
     * @param string $unionId  第三方平台union_id
     * @param string $openId   第三方平台open_id
     * @param string $appId    微信公众平台ID,对应mobile.mobile_wechat表appid字段
     * @param int    $status   绑定状态：1 绑定状态 2 解绑状态
     *
     * @return bool
     *
     * @author hehui<hehui@eelly.net>
     */
    public function bindUserAppInfo(int $uid, int $type, string $nickname, string $unionId, string $openId, string $appId, int $status): bool
    {
        return EellyClient::request('user/bind', 'bindUserAppInfo', true, $uid, $type, $nickname, $unionId, $openId, $appId, $status);
    }

    /**
     * 绑定第三方应用信息.
     *
     * @param int    $uid      用户ID
     * @param int    $type     绑定类型：1 微信绑定 2 QQ绑定 3 新浪微博 4 腾讯微博
     * @param string $nickname 第三方平台昵称
     * @param string $unionId  第三方平台union_id
     * @param string $openId   第三方平台open_id
     * @param string $appId    微信公众平台ID,对应mobile.mobile_wechat表appid字段
     * @param int    $status   绑定状态：1 绑定状态 2 解绑状态
     *
     * @return bool
     *
     * @author hehui<hehui@eelly.net>
     */
    public function bindUserAppInfoAsync(int $uid, int $type, string $nickname, string $unionId, string $openId, string $appId, int $status)
    {
        return EellyClient::request('user/bind', 'bindUserAppInfo', false, $uid, $type, $nickname, $unionId, $openId, $appId, $status);
    }

    /**
     * 获取第三方平台配置信息.
     *
     * @param string $thirdPartyName 第三方平台名字
     *
     * @author wechan
     *
     * @since 2018年7月10日
     */
    public function getThirdTartyBingingConf(string $thirdPartyName): array
    {
        return EellyClient::request('user/bind', 'getThirdTartyBingingConf', true, $thirdPartyName);
    }

    /**
     * 获取第三方平台配置信息.
     *
     * @param string $thirdPartyName 第三方平台名字
     *
     * @author wechan
     *
     * @since 2018年7月10日
     */
    public function getThirdTartyBingingConfAsync(string $thirdPartyName)
    {
        return EellyClient::request('user/bind', 'getThirdTartyBingingConf', false, $thirdPartyName);
    }

    /**
     * 绑定用户手机号码
     *
     * @param int    $userId 用户id
     * @param string $mobile 手机号码
     *
     * @return bool
     *
     * @requestExample({"userId":148086,"mobile":"13430245645"})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.07.11
     */
    public function bindUserMobile(int $userId, string $mobile, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('user/bind', 'bindUserMobile', true, $userId, $mobile);
    }

    /**
     * 绑定用户手机号码
     *
     * @param int    $userId 用户id
     * @param string $mobile 手机号码
     *
     * @return bool
     *
     * @requestExample({"userId":148086,"mobile":"13430245645"})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.07.11
     */
    public function bindUserMobileAsync(int $userId, string $mobile)
    {
        return EellyClient::request('user/bind', 'bindUserMobile', false, $userId, $mobile);
    }

    /**
     * 重置用户密码
     *
     * @param string      $password 密码
     * @param UidDTO|null $user
     *
     * @return bool
     *
     * @requestExample({"password":"dfdfadfs"})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.07.12
     */
    public function resetPassword(string $password, UidDTO $user = null): bool
    {
        return EellyClient::request('user/bind', 'resetPassword', true, $password, $user);
    }

    /**
     * 重置用户密码
     *
     * @param string      $password 密码
     * @param UidDTO|null $user
     *
     * @return bool
     *
     * @requestExample({"password":"dfdfadfs"})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.07.12
     */
    public function resetPasswordAsync(string $password, UidDTO $user = null)
    {
        return EellyClient::request('user/bind', 'resetPassword', false, $password, $user);
    }

    /**
     * 根据第三方平台openid,unionid 获取用户信息.
     *
     * @param int    $type    1 微信绑定 2 QQ绑定 3 新浪微博 4 腾讯微博
     * @param string $unionId 第三方平台用户信息
     *
     * @return array
     * @requestExample({"type":1,"unionId":"122222"})
     * @returnExample({"ubId":1,"userId":"148086","type":1,"unionId":"xxx","openId":"xx","appId":"xxx","status":1,"createdTime":1506419757,"updateTime":"2017/9/26 17:55:57"})
     *s
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/10/10
     */
    public function getByContact(int $type, string $unionId): array
    {
        return EellyClient::request('user/bind', 'getByContact', true, $type, $unionId);
    }

    /**
     * 根据第三方平台openid,unionid 获取用户信息.
     *
     * @param int    $type    1 微信绑定 2 QQ绑定 3 新浪微博 4 腾讯微博
     * @param string $unionId 第三方平台用户信息
     *
     * @return array
     * @requestExample({"type":1,"unionId":"122222"})
     * @returnExample({"ubId":1,"userId":"148086","type":1,"unionId":"xxx","openId":"xx","appId":"xxx","status":1,"createdTime":1506419757,"updateTime":"2017/9/26 17:55:57"})
     *s
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/10/10
     */
    public function getByContactAsync(int $type, string $unionId)
    {
        return EellyClient::request('user/bind', 'getByContact', false, $type, $unionId);
    }

    /**
     * 根据传过来的where条件更新数据.
     *
     * @param array $where
     * @param array $data
     *
     * @return bool
     *
     * @requestExample({"where":{"user_id":148086}, "data":{"status":2}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.07.25
     */
    public function updateBindInfo(array $where, array $data): bool
    {
        return EellyClient::request('user/bind', 'updateBindInfo', true, $where, $data);
    }

    /**
     * 根据传过来的where条件更新数据.
     *
     * @param array $where
     * @param array $data
     *
     * @return bool
     *
     * @requestExample({"where":{"user_id":148086}, "data":{"status":2}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.07.25
     */
    public function updateBindInfoAsync(array $where, array $data)
    {
        return EellyClient::request('user/bind', 'updateBindInfo', false, $where, $data);
    }

    /**
     * 根据传过来的条件，获取一条绑定记录信息.
     *
     * @param string $condition 查询条件
     * @param array  $binds     绑定的参数
     *
     * @return array
     *
     * @requestExample({"condition":"open_id = :openId:", "binds":{"openId":"ogGal5OPHyn608PChXuDxHyl69eY"}})
     * @returnExample({"userId":"148086","nickname":"QW5keQ==","type":"1","status":"1"})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.07.27
     */
    public function getBindInfoData(string $condition, array $binds): array
    {
        return EellyClient::request('user/bind', 'getBindInfoData', true, $condition, $binds);
    }

    /**
     * 根据传过来的条件，获取一条绑定记录信息.
     *
     * @param string $condition 查询条件
     * @param array  $binds     绑定的参数
     *
     * @return array
     *
     * @requestExample({"condition":"open_id = :openId:", "binds":{"openId":"ogGal5OPHyn608PChXuDxHyl69eY"}})
     * @returnExample({"userId":"148086","nickname":"QW5keQ==","type":"1","status":"1"})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.07.27
     */
    public function getBindInfoDataAsync(string $condition, array $binds)
    {
        return EellyClient::request('user/bind', 'getBindInfoData', false, $condition, $binds);
    }

    /**
     * 绑定/解绑第三方应用.
     *
     * @param array       $data           应用信息 app_id,open_id,union_id
     * @param int         $data['type']   应用类型 1 微信绑定 2 QQ绑定 3 新浪微博 4 腾讯微博
     * @param int         $data['status'] 绑定状态 1 绑定 2 解绑
     * @param UidDTO|null $user           登录用户
     *
     * @return bool
     *
     * @requestExample({"data":{"type":1,"unionId":"xxxx","openId":"xxxx","appId":"xxxx","status":2}})
     * @returnExample(true)
     *
     * @author zhangyangxun
     *
     * @since 2018-10-13
     */
    public function bindThirdParty(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('user/bind', 'bindThirdParty', true, $data, $user);
    }

    /**
     * 绑定/解绑第三方应用.
     *
     * @param array       $data           应用信息 app_id,open_id,union_id
     * @param int         $data['type']   应用类型 1 微信绑定 2 QQ绑定 3 新浪微博 4 腾讯微博
     * @param int         $data['status'] 绑定状态 1 绑定 2 解绑
     * @param UidDTO|null $user           登录用户
     *
     * @return bool
     *
     * @requestExample({"data":{"type":1,"unionId":"xxxx","openId":"xxxx","appId":"xxxx","status":2}})
     * @returnExample(true)
     *
     * @author zhangyangxun
     *
     * @since 2018-10-13
     */
    public function bindThirdPartyAsync(array $data, UidDTO $user = null)
    {
        return EellyClient::request('user/bind', 'bindThirdParty', false, $data, $user);
    }

    /**
     * 根据用户和类型更新绑定信息.
     *
     * @param int    $userId
     * @param int    $type   1 微信绑定 2 QQ绑定 3 新浪微博 4 腾讯微博
     * @param string $key    第三方平台用户信息
     * @param int    $isBind 1 绑定 2 解绑
     *
     * @return bool
     * @requestExample({"userId":1,"type":1,"key":"","isBind":2})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/10/10
     * @Validation(
     *     @Digit(0, {message: "用户id类型错误"}),
     *     @InclusionIn(1,{message:"绑定类型错误",domain:[1,2,3,4]}),
     *     @PresenceOf(2,{message : "第三方平台信息不能为空"}),
     *     @InclusionIn(3,{message:"绑定状态类型错误",domain:[1,2]})
     * )
     */
    public function updateByUserId(int $userId, int $type, string $key, int $isBind = 1): bool
    {
        return EellyClient::request('user/bind', 'updateByUserId', true, $userId, $type, $key, $isBind);
    }

    /**
     * 根据用户和类型更新绑定信息.
     *
     * @param int    $userId
     * @param int    $type   1 微信绑定 2 QQ绑定 3 新浪微博 4 腾讯微博
     * @param string $key    第三方平台用户信息
     * @param int    $isBind 1 绑定 2 解绑
     *
     * @return bool
     * @requestExample({"userId":1,"type":1,"key":"","isBind":2})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/10/10
     * @Validation(
     *     @Digit(0, {message: "用户id类型错误"}),
     *     @InclusionIn(1,{message:"绑定类型错误",domain:[1,2,3,4]}),
     *     @PresenceOf(2,{message : "第三方平台信息不能为空"}),
     *     @InclusionIn(3,{message:"绑定状态类型错误",domain:[1,2]})
     * )
     */
    public function updateByUserIdAsync(int $userId, int $type, string $key, int $isBind = 1)
    {
        return EellyClient::request('user/bind', 'updateByUserId', false, $userId, $type, $key, $isBind);
    }

    /**
     * 根据用户id获取绑定信息.
     *
     * @param int $uid
     * @param int $type   1 微信绑定 2 QQ绑定 3 新浪微博 4 腾讯微博
     * @param int $status 绑定状态：(1 绑定状态 2 解绑状态)
     *
     * @return array
     * @requestExample({"uid":148086})
     * @returnExample({"ubId":1,"userId":"148086","type":1,"unionId":"xxx","openId":"xx","appId":"xxx","status":1,
     *     "createdTime":1506419757,"updateTime":"2017/9/26 17:55:57"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/10/10
     * @Validation(
     *     @Digit(0, {message: "用户id类型错误"}),
     *     @InclusionIn(1,{message:"绑定类型错误",domain:[0,1,2,3,4]})
     * )
     */
    public function getBindByUserId(int $uid, int $type = 0, int $status = 0): array
    {
        return EellyClient::request('user/bind', 'getBindByUserId', true, $uid, $type, $status);
    }

    /**
     * 根据用户id获取绑定信息.
     *
     * @param int $uid
     * @param int $type   1 微信绑定 2 QQ绑定 3 新浪微博 4 腾讯微博
     * @param int $status 绑定状态：(1 绑定状态 2 解绑状态)
     *
     * @return array
     * @requestExample({"uid":148086})
     * @returnExample({"ubId":1,"userId":"148086","type":1,"unionId":"xxx","openId":"xx","appId":"xxx","status":1,
     *     "createdTime":1506419757,"updateTime":"2017/9/26 17:55:57"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/10/10
     * @Validation(
     *     @Digit(0, {message: "用户id类型错误"}),
     *     @InclusionIn(1,{message:"绑定类型错误",domain:[0,1,2,3,4]})
     * )
     */
    public function getBindByUserIdAsync(int $uid, int $type = 0, int $status = 0)
    {
        return EellyClient::request('user/bind', 'getBindByUserId', false, $uid, $type, $status);
    }

    /**
     * 根据传过来的条件，返回对应的数据信息.
     *
     * @param string $condition 条件
     * @param array  $bind      绑定参数
     * @param string $field     要搜索的字段
     *
     * @return array
     *
     * @requestExample({"condition":"user_id IN ({userIds:array})", "bind":{"userIds":[148086]}})
     * @returnExample([{"userId":"148086","nickname":"6LW36aOO5LqG","type":"1","status":"2","openId":"1234"},{"userId":"148086","nickname":"Y29sb3Jz","type":"2","status":"2","openId":"1234"}])
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.11.20
     */
    public function listMessageByCondition(string $condition, array $bind, string $field = 'bindInfo'): array
    {
        return EellyClient::request('user/bind', __FUNCTION__, true, $condition, $bind, $field);
    }

    public function listMessageByConditionAsync(string $condition, array $bind, string $field = 'bindInfo'): array
    {
        return EellyClient::request('user/bind', __FUNCTION__, false, $condition, $bind, $field);
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
