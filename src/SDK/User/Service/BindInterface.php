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
use Eelly\SDK\User\DTO\UserBindDTO;
use Eelly\SDK\User\Exception\BindException;

/**
 *  用户第三方绑定.
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface BindInterface
{
    /**
     * 获取用户绑定记录.
     *
     * @param int $bindId 绑定ID
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
    public function getBind(int $bindId): UserBindDTO;

    /**
     * 添加绑定.
     *
     * @param array $data
     * @param int       $data['type'] 绑定类型：1 QQ绑定 2 微信绑定 3 新浪微博 4 腾讯微博
     * @param string    $data['union_id'] 第三方平台union_id
     * @param string    $data['open_id']  第三方平台open_id
     * @param string    $data['app_id']   微信公众平台ID,对应mobile.mobile_wechat表appid字段
     * @param int       $data['status']   绑定状态：1 绑定状态 2 解绑状态
     * @param UidDTO    $uidDTO
     * @throws BindException
     *
     * @return bool
     * @requestExample({"type":"1","union_id":"xxxx","open_id":"xxxx","app_id":"xxxx","status":"1"})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017/9/27
     */
    public function addBind(array $data, UidDTO $uidDTO): bool;

    /**
     * 更新绑定信息.
     *
     * @param int    $BindId
     * @param array  $data
     * @param UidDTO $user
     *
     * @throws BindException
     *
     * @return bool
     * @requestExample({"type":"1",""status":"2"})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017/9/27
     */
    public function updateBind(int $BindId, array $data, UidDTO $user): bool;
//
//    /**
//     * @author eellytools<localhost.shell@gmail.com>
//     */
//    public function deleteBind(int $BindId): bool;
//
//    /**
//     * @author eellytools<localhost.shell@gmail.com>
//     */
//    public function listBindPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
