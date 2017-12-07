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
use Eelly\SDK\User\Service\BindInterface;
use Eelly\SDK\User\DTO\UserBindDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Bind implements BindInterface
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
     * type        |int    | 绑定类型：1 QQ绑定 2 微信绑定 3 新浪微博 4 腾讯微博
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
        return EellyClient::request('user/bind', __FUNCTION__, true, $bindId);
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
     * type        |int    | 绑定类型：1 QQ绑定 2 微信绑定 3 新浪微博 4 腾讯微博
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
        return EellyClient::request('user/bind', __FUNCTION__, false, $bindId);
    }

    /**
     * 添加绑定.
     *
     * @param array  $data
     * @param int    $data['userId']  绑定类型：1 QQ绑定 2 微信绑定 3 新浪微博 4 腾讯微博
     * @param int    $data['type']    绑定类型：1 QQ绑定 2 微信绑定 3 新浪微博 4 腾讯微博
     * @param string $data['unionId'] 第三方平台union_id
     * @param string $data['openId']  第三方平台open_id
     * @param string $data['appId']   微信公众平台ID,对应mobile.mobile_wechat表appid字段
     * @param int    $data['status']  绑定状态：1 绑定状态 2 解绑状态
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
        return EellyClient::request('user/bind', __FUNCTION__, true, $data);
    }

    /**
     * 添加绑定.
     *
     * @param array  $data
     * @param int    $data['userId']  绑定类型：1 QQ绑定 2 微信绑定 3 新浪微博 4 腾讯微博
     * @param int    $data['type']    绑定类型：1 QQ绑定 2 微信绑定 3 新浪微博 4 腾讯微博
     * @param string $data['unionId'] 第三方平台union_id
     * @param string $data['openId']  第三方平台open_id
     * @param string $data['appId']   微信公众平台ID,对应mobile.mobile_wechat表appid字段
     * @param int    $data['status']  绑定状态：1 绑定状态 2 解绑状态
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
        return EellyClient::request('user/bind', __FUNCTION__, false, $data);
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
        return EellyClient::request('user/bind', __FUNCTION__, true, $bindId, $data);
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
        return EellyClient::request('user/bind', __FUNCTION__, false, $bindId, $data);
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
        return EellyClient::request('user/bind', __FUNCTION__, true, $condition, $currentPage, $limit);
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
        return EellyClient::request('user/bind', __FUNCTION__, false, $condition, $currentPage, $limit);
    }

    /**
     * 根据用户id获取绑定信息.
     *
     * @param int $uid
     * @param int $type 1 QQ绑定 2 微信绑定 3 新浪微博 4 腾讯微博
     * @param int $status 绑定状态：(1 绑定状态 2 解绑状态)
     *
     * @return array
     * @requestExample({"uid":148086})
     * @returnExample({"ubId":1,"userId":"148086","type":1,"unionId":"xxx","openId":"xx","appId":"xxx","status":1,
     *     "createdTime":1506419757,"updateTime":"2017/9/26 17:55:57"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017/10/10
     * @Validation(
     *     @Digit(0, {message: "用户id类型错误"}),
     *     @InclusionIn(1,{message:"绑定类型错误",domain:[0,1,2,3,4]})
     * )
     */
    public function getBindByUserId(int $uid, int $type = 0, int $status = 0): array
    {
        return EellyClient::request('user/bind', __FUNCTION__, true, $uid, $type, $status);
    }

    /**
     * uc根据用户和类型更新绑定信息.
     *
     * @param int $userId
     * @param int $type     1 QQ绑定 2 微信绑定 3 新浪微博 4 腾讯微博
     * @param string $key      第三方平台用户信息
     * @param int $isBind   1 绑定 2 解绑
     *
     * @return bool
     * @requestExample({"userId":1,"type":1,"key":"","isBind":2})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
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
        return EellyClient::request('user/bind', __FUNCTION__, true, $userId, $type, $key, $isBind);
    }

    /**
     * 根据某字段值检查用户id是否存在.
     *
     * @param string $contactId
     * @param int    $type          1 QQ绑定 2 微信绑定 3 新浪微博 4 腾讯微博
     * @param string $fields      字段名称:union_id, open_id
     * @return int
     * @requestExample({"contactId":"xxxx","type":"122222","fields":"union_id"})
     * @returnExample(12)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017/10/10
     * @Validation(
     *     @PresenceOf(0,{message : "第三方平台信息不能为空"}),
     *     @InclusionIn(1,{message:"绑定类型错误",domain:[1,2,3,4]}),
     *     @InclusionIn(2,{message:"绑定类型错误",domain:['union_id','open_id']})
     * )
     */
    public function checkContact(string $contactId, int $type, string $fields): int
    {
        return EellyClient::request('user/bind', __FUNCTION__, true, $contactId, $type, $fields);
    }

    /**
     * 根据第三方平台openid,unionid 获取用户信息.
     *
     * @param int    $type           1 QQ绑定 2 微信绑定 3 新浪微博 4 腾讯微博
     * @param string $unionId        第三方平台用户信息
     *
     * @return array
     * @requestExample({"type":1,"unionId":"122222"})
     * @returnExample({"ubId":1,"userId":"148086","type":1,"unionId":"xxx","openId":"xx","appId":"xxx","status":1,"createdTime":1506419757,"updateTime":"2017/9/26 17:55:57"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017/10/10
     * @Validation(
     *     @InclusionIn(1,{message:"绑定类型错误",domain:[1,2,3,4]}),
     *     @PresenceOf(2,{message : "第三方平台信息不能为空"})
     * )
     */
    public function getByContact(int $type, string $unionId): array
    {
        return EellyClient::request('user/bind', __FUNCTION__, true, $type, $unionId);
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