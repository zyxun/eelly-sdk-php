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

use Eelly\SDK\User\DTO\UserBindDTO;

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
     * @param array $data
     *
     * @throws
     *
     * @return bool
     * @requestExample()
     * @returnExample()
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017/9/27
     */
    public function addBind(array $data): bool;
//
//    /**
//     * @author eellytools<localhost.shell@gmail.com>
//     */
//    public function updateBind(int $BindId, array $data): bool;
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
