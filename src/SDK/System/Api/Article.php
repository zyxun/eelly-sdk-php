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
use Eelly\SDK\System\DTO\ArticleDTO;
use Eelly\SDK\System\Service\ArticleInterface;

/**
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Article implements ArticleInterface
{
    /**
     * 获取指定id文章.
     *
     * @param int $articleId 文章id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return \Eelly\SDK\System\DTO\ArticleDTO
     * @requestExample({"articleId":1})
     * @returnExample({"articleId":1,"categoryId":1,"title":"标题","content":"内容","simpleContent":"导读内容","image":"配图","keywords":"关键词","belongId":0,"userId":1,"username":"发布者用户名","copyFrom":"文章来源","status":0})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-01
     */
    public function getArticle(int $articleId): ArticleDTO
    {
        return EellyClient::request('system/article', __FUNCTION__, true, $articleId);
    }

    /**
     * 获取指定id文章.
     *
     * @param int $articleId 文章id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return \Eelly\SDK\System\DTO\ArticleDTO
     * @requestExample({"articleId":1})
     * @returnExample({"articleId":1,"categoryId":1,"title":"标题","content":"内容","simpleContent":"导读内容","image":"配图","keywords":"关键词","belongId":0,"userId":1,"username":"发布者用户名","copyFrom":"文章来源","status":0})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-01
     */
    public function getArticleAsync(int $articleId)
    {
        return EellyClient::request('system/article', __FUNCTION__, false, $articleId);
    }

    /**
     * 新增文章.
     *
     * @param array  $data               文章数据
     * @param int    $data['categoryId'] 文章分类id
     * @param string $data['title']      文章标题
     * @param string $data['content']    文章内容
     * @param int    $data['belongId']   文章归属id 0:系统
     * @param string $data['copyFrom']   文章来源 系统发布的来源为【衣联网】
     * @param UidDTO $user               登录用户对象
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool 新增结果
     * @requestExample({"data":{"categoryId":1,"title":"文章标题","content":"文章内容","belongId":0,"copyFrom":"文章来源"}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-01
     */
    public function addArticle(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('system/article', __FUNCTION__, true, $data, $user);
    }

    /**
     * 新增文章.
     *
     * @param array  $data               文章数据
     * @param int    $data['categoryId'] 文章分类id
     * @param string $data['title']      文章标题
     * @param string $data['content']    文章内容
     * @param int    $data['belongId']   文章归属id 0:系统
     * @param string $data['copyFrom']   文章来源 系统发布的来源为【衣联网】
     * @param UidDTO $user               登录用户对象
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool 新增结果
     * @requestExample({"data":{"categoryId":1,"title":"文章标题","content":"文章内容","belongId":0,"copyFrom":"文章来源"}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-01
     */
    public function addArticleAsync(array $data, UidDTO $user = null)
    {
        return EellyClient::request('system/article', __FUNCTION__, false, $data, $user);
    }

    /**
     * 修改文章.
     *
     * @param int    $articleId          文章id
     * @param array  $data               文章数据
     * @param int    $data['categoryId'] 文章分类id
     * @param string $data['title']      文章标题
     * @param string $data['content']    文章内容
     * @param int    $data['belongId']   文章归属id 0:系统
     * @param string $data['copyFrom']   文章来源 系统发布的来源为【衣联网】
     * @param UidDTO $user               登录用户对象
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool 修改结果
     * @requestExample({"articleId":1,"data":{"categoryId":1,"title":"文章标题","content":"文章内容","belongId":0,"copyFrom":"文章来源"}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-01
     */
    public function updateArticle(int $articleId, array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('system/article', __FUNCTION__, true, $articleId, $data, $user);
    }

    /**
     * 修改文章.
     *
     * @param int    $articleId          文章id
     * @param array  $data               文章数据
     * @param int    $data['categoryId'] 文章分类id
     * @param string $data['title']      文章标题
     * @param string $data['content']    文章内容
     * @param int    $data['belongId']   文章归属id 0:系统
     * @param string $data['copyFrom']   文章来源 系统发布的来源为【衣联网】
     * @param UidDTO $user               登录用户对象
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool 修改结果
     * @requestExample({"articleId":1,"data":{"categoryId":1,"title":"文章标题","content":"文章内容","belongId":0,"copyFrom":"文章来源"}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-01
     */
    public function updateArticleAsync(int $articleId, array $data, UidDTO $user = null)
    {
        return EellyClient::request('system/article', __FUNCTION__, false, $articleId, $data, $user);
    }

    /**
     * 删除文章.
     *
     * @param int    $articleId 文章id
     * @param UidDTO $user      登录用户对象
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool 删除结果
     * @requestExample({"articleId":1})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-01
     */
    public function deleteArticle(int $articleId, UidDTO $user = null): bool
    {
        return EellyClient::request('system/article', __FUNCTION__, true, $articleId, $user);
    }

    /**
     * 删除文章.
     *
     * @param int    $articleId 文章id
     * @param UidDTO $user      登录用户对象
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool 删除结果
     * @requestExample({"articleId":1})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-01
     */
    public function deleteArticleAsync(int $articleId, UidDTO $user = null)
    {
        return EellyClient::request('system/article', __FUNCTION__, false, $articleId, $user);
    }

    /**
     * 分页获取文章列表.
     *
     * @param array  $condition               文章的查询条件
     * @param string $condition['fieldName']  基础查询类型 [title:文章标题 username:发布者用户名]
     * @param string $condition['fieldValue'] 基础查询值
     * @param int    $condition['categoryId'] 文章分类id
     * @param string $condition['fieldTime']  时间查询类型 [createdTime:添加时间 updateTime:最后修改时间]
     * @param int    $condition['startTime']  开始时间
     * @param int    $condition['endTime']    结束时间
     * @param int    $currentPage             当前页码
     * @param int    $limit                   每页条数
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array 文章列表
     * @requestExample({"condition":{"title":"文章标题","categoryId":1}})
     * @returnExample({"item":[{"articleId":"1","title":"文章标题","username":"","status":"0","createdTime":"1504321656","updateTime":"2017-09-02 08:52:35","categoryName":"分类名"}],"page":{"totalPages":1,"totalItems":1,"limit":1}})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-01
     */
    public function listArticlePage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('system/article', __FUNCTION__, true, $condition, $currentPage, $limit);
    }

    /**
     * 分页获取文章列表.
     *
     * @param array  $condition               文章的查询条件
     * @param string $condition['fieldName']  基础查询类型 [title:文章标题 username:发布者用户名]
     * @param string $condition['fieldValue'] 基础查询值
     * @param int    $condition['categoryId'] 文章分类id
     * @param string $condition['fieldTime']  时间查询类型 [createdTime:添加时间 updateTime:最后修改时间]
     * @param int    $condition['startTime']  开始时间
     * @param int    $condition['endTime']    结束时间
     * @param int    $currentPage             当前页码
     * @param int    $limit                   每页条数
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array 文章列表
     * @requestExample({"condition":{"title":"文章标题","categoryId":1}})
     * @returnExample({"item":[{"articleId":"1","title":"文章标题","username":"","status":"0","createdTime":"1504321656","updateTime":"2017-09-02 08:52:35","categoryName":"分类名"}],"page":{"totalPages":1,"totalItems":1,"limit":1}})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-01
     */
    public function listArticlePageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('system/article', __FUNCTION__, false, $condition, $currentPage, $limit);
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
