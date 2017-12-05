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

namespace Eelly\SDK\Message\Service;

use Eelly\DTO\UidDTO;
use Eelly\SDK\Message\DTO\SiteDTO;
use Eelly\SDK\Message\Exception\SiteException;

/**
 * 站内信消息.
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface SiteInterface
{
    /**
     * 添加站内信消息.
     *
     * @param int $messageId  消息ID
     * @param int $receiverId 接收者ID
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return int
     * @requestExample({"message":1,"receiverId":2,"content":"测试消息"})
     * @returnExample(1)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function addMessageSite(int $messageId, int $receiverId, string $content): int;

    /**
     * 更新站内信成已读.
     *
     * @param int    $msiId 消息读取ID
     * @param UidDTO $user  用户对象
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return bool
     * @requestExample({"msiId":1,"user":{"user_id":1,"username":"lxy"}})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function updateMessageSiteRead(int $msiId, UidDTO $user): bool;

    /**
     * 批量更新站内信成已读状态.
     *
     * @param int     $msiIds 消息读取ID数组
     * @param UserDTO $user   用户对象
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return bool
     * @requestExample({"msiIds":[1,2,3],"user":{"user_id":1,"username":"lxy"}})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function updateMessageSiteReadBatch(array $msiIds, UidDTO $user): bool;

    /**
     * 分页获取用户消息.
     *
     * @param UidDTO $user        用户对象
     * @param int    $limit       每页条数
     * @param int    $currentPage 当前页
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return array
     * @requestExample({"user":{"user_id":1,"username":"lxy"},"limit":10,"currentPage":1})
     * @returnExample()
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function listMessageSitePage(int $currentPage, int $limit, UidDTO $user): array;

    /**
     * 获取用户消息.
     *
     * @param int $msiId 站内信id
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return SiteDTO
     * @requestExample(1)
     * @returnExample()
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-2
     */
    public function getMessageSite(int $msiId): SiteDTO;

    /**
     * 删除用户消息.
     *
     * @param int $msiId 用户消息id
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return mixed
     * @requestExample({"msiId":1,"user":{"user_id":1,"username":"liangxinyi"}})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-2
     */
    public function deleteMessageSite(int $msiId, UidDTO $user): bool;

    /**
     * 批量删除用户消息.
     *
     * @param int $msiIds 用户消息id数组
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return bool
     * @requestExample({"msiIds":[1,2,3,4],"user":{"user_id":1,"username":"liangxinyi"}})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-2
     */
    public function deleteMessageSiteBatch(array $msiIds, UidDTO $user): bool;

    /**
     * 获取站内信列表.
     *
     * @param int   $userId     用户id
     * @param int   $userType   1:买家(店+app)，2:卖家(厂+app)
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * --------------------|-------|--------------
     * tabName             |string |    列表模块名
     * list                |array  |
     * list["msiId"]       |string |    消息读取ID
     * list["messageId"]   |string |    消息id
     * list["title"]       |string |    消息标题
     * list["content"]     |string |    消息内容
     * list["isRead"]      |string |    是否已读：0 否 1 是
     * list["createdTime"] |string |    添加时间
     * list["notRead"]     |string |    未读数量
     *
     * @throws SiteException
     *
     * @return array
     * @requestExample({"userId":1,"userType":1})
     * @returnExample([
     *     {
     *          "tabName":"系统消息",
     *          "list":{"msiId":"1","messageId":"1","title":"ceshi","content":"fffff","isRead":"0","createdTime":"1512369806","notRead":"1"}
     *     },
     *     {
     *          "tabName":"订单消息",
     *          "list":{"msiId":"2","messageId":"2","title":"订单发货消息","content":"收货啦来啦啦啦啦","isRead":"1","createdTime":"1512369905","notRead":"2"}
     *     }
     * ])
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年12月4日
     */
    public function getSiteListByUserType(int $userId, int $userType): array;

    /**
     * 分页获取消息组内的消息.
     *
     * @param int   $userId     用户id
     * @param int   $userType   1:买家(店+app)，2:卖家(厂+app)
     * @param array $condition
     * @param string $condition["groupName"]   分组名称
     * @param int   $condition["page"]          页数
     * @param int   $condition["limit"]         每页数量
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------------------|-------|--------------
     * items                |array  |
     * items["msiId"]       |string |   消息读取ID
     * items["messageId"]   |string |   消息id
     * items["title"]       |string |   消息标题
     * items["content"]     |string |   消息内容
     * items["isRead"]      |string |   是否已读：0 否 1 是
     * items["createdTime"] |string |   添加时间
     * page                 |array  |
     * page["totalPages"]   |int    |   总页数
     * page["totalItems"]   |int    |   总数量
     * page["limit"]        |int    |   每页数量
     *
     * @throws SiteException
     *
     * @return array
     * @requestExample({"userId":1,"userType":1,"condition":{"groupName":"订单消息","page":1,"limit":10}})
     * @returnExample({
     *     "items":[
     *          {"msiId":"4","messageId":"4","title":"订单赶快付款","content":"赶紧去付款！！！！！","isRead":"0","createdTime":"1512369908"},
     *          {"msiId":"3","messageId":"3","title":"订单取消消息","content":"订单取消啦啦啦啦","isRead":"0","createdTime":"1512369907"}
     *     ],
     *     "page":{"totalPages":1,"totalItems":3,"limit":10}
     * })
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年12月4日
     */
    public function getGroupNameList(int $userId, int $userType, array $condition): array;

    /**
     * 获取用户未读的站内信数量.
     *
     * @param int $userId       用户id
     * @param int $userType     1:买家(店+app)，2:卖家(厂+app)
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------|-------|--------------
     * count |string |  未读统计数
     *
     * @throws SiteException
     *
     * @return array
     * @requestExample({"userId":1,"userType":1})
     * @returnExample({"count":"4"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年12月4日
     * @Validation(
     *     @Digit(0, {message:"非法的用户id类型"}),
     *     @InclusionId(1, {message:"非法的用户类型", domain:[1,2]})
     * )
     */
    public function getNotReadCount(int $userId, int $userType): array;

}
