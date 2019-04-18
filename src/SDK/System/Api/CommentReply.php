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
use Eelly\SDK\System\DTO\CommentReplyDTO;
use Eelly\SDK\System\Service\CommentReplyInterface;

/**
 * @author shadonTools<localhost.shell@gmail.com>
 */
class CommentReply
{
    /**
     * 获取评论回复记录.
     *
     * @param int $scrId 评论回复id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return CommentReplyDTO
     *
     * @requestExample({"scrId":1})
     * @returnExample({"scrId":1,"commentId":1, "parentId":0,"content":"reply test","useId":1,"username":"","userIp":"",
     *     "receiverId":148086,"createdTime":1503560249})
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-27
     */
    public function getCommentReply(int $scrId): CommentReplyDTO
    {
        return EellyClient::request('system/commentReply', __FUNCTION__, true, $scrId);
    }

    /**
     * 获取评论回复记录.
     *
     * @param int $scrId 评论回复id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return CommentReplyDTO
     *
     * @requestExample({"scrId":1})
     * @returnExample({"scrId":1,"commentId":1, "parentId":0,"content":"reply test","useId":1,"username":"","userIp":"",
     *     "receiverId":148086,"createdTime":1503560249})
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-27
     */
    public function getCommentReplyAsync(int $scrId)
    {
        return EellyClient::request('system/commentReply', __FUNCTION__, false, $scrId);
    }

    /**
     * 添加一条评论回复记录.
     *
     * @param array  $data
     * @param int    $data["scrId"]       评论回复id
     * @param int    $data["commentId"]   主评论ID
     * @param int    $data["parentId"]    父回复id
     * @param string $data["content"]     评论回复内容
     * @param int    $data["useId"]       评论回复人id
     * @param string $data["username"]    评论回复人用户名
     * @param string $data["userIp"]      评论回复人ip
     * @param int    $data["receiverId"]  被回复者id
     * @param int    $data["createdTime"] 添加时间
     * @param UidDTO $user                登录用户信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     *
     * @requestExample({"data":{"scrId":1,"commentId":1, "parentId":0,"content":"reply test","useId":1,"username":"","userIp":"",
     *     "receiverId":148086,"createdTime":1503560249}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-27
     */
    public function addCommentReply(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('system/commentReply', __FUNCTION__, true, $data, $user);
    }

    /**
     * 添加一条评论回复记录.
     *
     * @param array  $data
     * @param int    $data["scrId"]       评论回复id
     * @param int    $data["commentId"]   主评论ID
     * @param int    $data["parentId"]    父回复id
     * @param string $data["content"]     评论回复内容
     * @param int    $data["useId"]       评论回复人id
     * @param string $data["username"]    评论回复人用户名
     * @param string $data["userIp"]      评论回复人ip
     * @param int    $data["receiverId"]  被回复者id
     * @param int    $data["createdTime"] 添加时间
     * @param UidDTO $user                登录用户信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     *
     * @requestExample({"data":{"scrId":1,"commentId":1, "parentId":0,"content":"reply test","useId":1,"username":"","userIp":"",
     *     "receiverId":148086,"createdTime":1503560249}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-27
     */
    public function addCommentReplyAsync(array $data, UidDTO $user = null)
    {
        return EellyClient::request('system/commentReply', __FUNCTION__, false, $data, $user);
    }

    /**
     * 删除评论回复记录.
     *
     * @param int $scrId 评论回复id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     *
     * @requestExample({"scrId":1})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-27
     */
    public function deleteCommentReply(int $scrId): bool
    {
        return EellyClient::request('system/commentReply', __FUNCTION__, true, $scrId);
    }

    /**
     * 删除评论回复记录.
     *
     * @param int $scrId 评论回复id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     *
     * @requestExample({"scrId":1})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-27
     */
    public function deleteCommentReplyAsync(int $scrId)
    {
        return EellyClient::request('system/commentReply', __FUNCTION__, false, $scrId);
    }

    /**
     * 分页获取评论回复记录列表.
     *
     *
     * @param array  $condition
     * @param int    $condition["commentId"] 主评论id
     * @param string $currentPage            页码
     * @param string $limit                  分页条数
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * -----------------------|-------|--------------
     * items                  |array  |
     * items["scrId"]         |int    | 评论回复id
     * items["commentId"]     |int    | 主评论ID
     * items["parentId"]      |int    | 父回复id
     * items["content"]       |string | 评论回复内容
     * items["useId"]         |int    | 评论回复人id
     * items["username"]      |string | 评论回复人用户名
     * items["userIp"]        |string | 评论回复人ip
     * items["receiverId"]    |int    | 被回复者id
     * items["createdTime"]   |int    | 添加时间
     * page                   |array  |
     * page[first]            |int    | 第一页
     * page[before]           |int    | 上一页
     * page[current]          |int    | 当前页
     * page[last]             |int    | 最后一页
     * page[next]             |int    | 下一页
     * page[total_pages]      |int    | 总页数
     * page[total_items]      |int    | 总数
     * page[limit]            |int    | 每页显示的数量
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array
     *
     * @requestExample({"condition":{"commentId":1},"currentPage": "1","limit": "10"})
     * @returnExample(["items":[{"scrId":1,"commentId":1, "parentId":0,"content":"reply test","useId":1,"username":"","userIp":"","receiverId":148086,"createdTime":1503560249}],"page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"total_pages": 1,"total_items": 1,"limit": 10}])
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-27
     */
    public function listCommentReplyPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('system/commentReply', __FUNCTION__, true, $condition, $currentPage, $limit);
    }

    /**
     * 分页获取评论回复记录列表.
     *
     *
     * @param array  $condition
     * @param int    $condition["commentId"] 主评论id
     * @param string $currentPage            页码
     * @param string $limit                  分页条数
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * -----------------------|-------|--------------
     * items                  |array  |
     * items["scrId"]         |int    | 评论回复id
     * items["commentId"]     |int    | 主评论ID
     * items["parentId"]      |int    | 父回复id
     * items["content"]       |string | 评论回复内容
     * items["useId"]         |int    | 评论回复人id
     * items["username"]      |string | 评论回复人用户名
     * items["userIp"]        |string | 评论回复人ip
     * items["receiverId"]    |int    | 被回复者id
     * items["createdTime"]   |int    | 添加时间
     * page                   |array  |
     * page[first]            |int    | 第一页
     * page[before]           |int    | 上一页
     * page[current]          |int    | 当前页
     * page[last]             |int    | 最后一页
     * page[next]             |int    | 下一页
     * page[total_pages]      |int    | 总页数
     * page[total_items]      |int    | 总数
     * page[limit]            |int    | 每页显示的数量
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array
     *
     * @requestExample({"condition":{"commentId":1},"currentPage": "1","limit": "10"})
     * @returnExample(["items":[{"scrId":1,"commentId":1, "parentId":0,"content":"reply test","useId":1,"username":"","userIp":"","receiverId":148086,"createdTime":1503560249}],"page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"total_pages": 1,"total_items": 1,"limit": 10}])
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-27
     */
    public function listCommentReplyPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('system/commentReply', __FUNCTION__, false, $condition, $currentPage, $limit);
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
