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
        return EellyClient::request('user/bind', 'getBind', false, $bindId);
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
        return EellyClient::request('user/bind', 'addBind', true, $data);
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
     * @param int $uid  用户id
     * @param string $appId  app id
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
     * @param int $uid  用户id
     * @param string $appId  app id
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
     * 获取第三方平台配置信息
     * 
     * @param string $thirdPartyName 第三方平台名字
     * 
     * @author wechan
     * @since 2018年7月10日
     */
    public function getThirdTartyBingingConf(string $thirdPartyName): array
    {
        return EellyClient::request('user/bind', 'getThirdTartyBingingConf', true, $thirdPartyName);
    }

    /**
     * 获取第三方平台配置信息
     * 
     * @param string $thirdPartyName 第三方平台名字
     * 
     * @author wechan
     * @since 2018年7月10日
     */
    public function getThirdTartyBingingConfAsync(string $thirdPartyName)
    {
        return EellyClient::request('user/bind', 'getThirdTartyBingingConf', false, $thirdPartyName);
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