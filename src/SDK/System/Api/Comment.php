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

namespace Eelly\SDK\System\Api;

use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\System\DTO\CommentDTO;
use Eelly\SDK\System\Service\CommentInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Comment implements CommentInterface
{
    /**
     * 获取评论信息.
     *
     * @param int $commentId 评论id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array
     * @requestExample({"commentId":1})
     * @returnExample({"commentId":1,"type":2,"itemId":123,"content":"新中国","userId":148086,"username":"莫琼小店",
     *  "user_ip":"","status":0,"createdTime":1505109590})
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-9-12
     */
    public function getComment(int $commentId): CommentDTO
    {
        return EellyClient::request('system/comment', 'getComment', $commentId);
    }

    /**
     * 添加评论信息.
     *
     * @param array  $data
     * @param int    $data["type"]     评论资源类型：1 店铺 2 商品 3 朋友圈消息 4 店铺消息
     * @param int    $data["itemId"]   被评论资源编号
     * @param string $data["content"]  评论内容
     * @param int    $data["style"]    款式竞争力
     * @param string $data["price"]    商品性价比
     * @param string $data["service"]  商家友好度
     * @param int    $data["supply"]   货源稳定性
     * @param int    $data["avgScore"] 四项评分的总平均分
     * @param int    $data["image"]    上传的图片：限制3张图
     * @param UidDTO $user             登录用户信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"data":{"type":2,"itemId":123,"content":"新中国","style":1,"price":2,"service":3,"supply":4,"avgScore":"4.5","image":""}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-9-12
     */
    public function addComment(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('system/comment', 'addComment', $data, $user);
    }

    /**
     * 删除评论.
     *
     * @param int $commentId 评论id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"commentId":4})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-9-12
     */
    public function deleteComment(int $commentId): bool
    {
        return EellyClient::request('system/comment', 'deleteComment', $commentId);
    }

    /**
     * 分页获取评论数据.
     *
     * @param array $condition         查询条件
     * @param int   $condition["type"] 评论资源类型
     * @param int   $currentPage       页码
     * @param int   $limit             分页条数
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * -------------------|-------|--------------
     * items              |array  |
     * items[commentId]   |int    | 评论id
     * items[type]        |int    | 评论资源类型：1 店铺 2 商品 3 朋友圈消息 4 店铺消息
     * items[itemId]      |int    | 被评论资源编号
     * items[content]     |string | 评论内容
     * items[userId]      |int    | 发布者用户ID
     * items[username]    |string | 发布者用户名
     * items[userIp]      |string | 评论发布者IP
     * items[status]      |int    | 状态：0 未读 1 已读 4 删除
     * items[createdTime] |int    | 添加时间
     * items[style]       |int    | 款式竞争力
     * items[price]       |int    | 商品性价比
     * items[service]     |int    | 商家友好度
     * items[supply]      |int    | 货源稳定性
     * items[avgScore]    |string | 四项评分的总平均分
     * items[image]       |string | 上传的图片：限制3张图
     * page               |array  |
     * page[first]        |int    | 第一页
     * page[before]       |int    | 上一页
     * page[current]      |int    | 当前页
     * page[last]         |int    | 最后一页
     * page[next]         |int    | 下一页
     * page[total_pages]  |int    | 总页数
     * page[total_items]  |int    | 总数
     * page[limit]        |int    | 每页显示的数量
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array
     * @requestExample({"condition":{"type":2},"currentPage":1,"limit":10})
     * @returnExample(["items": [{"commentId":1,"type":2,"itemId":123,"content":"新中国","userId":148086,"username":"莫琼小店",
     *  "userIp":"","status":0,"createdTime":1505109590,"style":1,"price":2,"service":3,"supply":4,"avgScore":"4.5","image":""}],
     *  "page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"total_pages": 1,"total_items": 1,"limit": 10}])
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-9-12
     */
    public function listCommentPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('system/comment', 'listCommentPage', $condition, $currentPage, $limit);
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
