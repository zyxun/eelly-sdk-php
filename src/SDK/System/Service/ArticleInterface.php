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

namespace Eelly\SDK\System\Service;

use Eelly\SDK\System\DTO\ArticleDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ArticleInterface
{

    /**
     * 获取指定id文章
     *
     * @param int $articleId 文章id
     *
     * @return \Eelly\SDK\System\DTO\ArticleDTO
     * @requestExample({"articleId":1})
     * @returnExample({"articleId":1,"categoryId":1,"title":"标题","content":"内容","belongId":0,"username":"发布者用户名","copyFrom":"文章来源","status":0})
     * @throws \Eelly\SDK\System\Exception\SystemException
     * @author wujunhua<wujunhua@eelly.net>
     * @since 2017-08-31
     */
    public function getArticle(int $articleId): ArticleDTO;

    /**
     * 新增文章
     *
     * @param array  $data               文章数据
     * @param int    $data['categoryId'] 文章分类id
     * @param string $data['title']      文章标题
     * @param string $data['content']    文章内容
     * @param int    $data['belongId']   文章归属id 0:系统
     * @param string $data['copyFrom']   文章来源 系统发布的来源为【衣联网】
     *
     * @return bool 新增结果
     * @requestExample({"data":{"categoryId":1,"title":"文章标题","content":"文章内容","belongId":0,"copyFrom":"文章来源"}})
     * @returnExample(true)
     * @throws \Eelly\SDK\System\Exception\SystemException
     * @author wujunhua<wujunhua@eelly.net>
     * @since 2017-08-31
     */
    public function addArticle(array $data): bool;

    /**
     * 修改文章
     *
     * @param int    $articleId          文章id
     * @param array  $data               文章数据
     * @param int    $data['categoryId'] 文章分类id
     * @param string $data['title']      文章标题
     * @param string $data['content']    文章内容
     * @param int    $data['belongId']   文章归属id 0:系统
     * @param string $data['copyFrom']   文章来源 系统发布的来源为【衣联网】
     *
     * @return bool 修改结果
     * @requestExample({"articleId":1,"data":{"categoryId":1,"title":"文章标题","content":"文章内容","belongId":0,"copyFrom":"文章来源"}})
     * @returnExample(true)
     * @throws \Eelly\SDK\System\Exception\SystemException
     * @author wujunhua<wujunhua@eelly.net>
     * @since 2017-08-31
     */
    public function updateArticle(int $articleId, array $data): bool;

    /**
     * 删除文章
     *
     * @param int $articleId 文章id
     *
     * @return bool 删除结果
     * @requestExample({"articleId":1})
     * @returnExample(true)
     * @throws \Eelly\SDK\System\Exception\SystemException
     * @author wujunhua<wujunhua@eelly.net>
     * @since 2017-08-31
     */
    public function deleteArticle(int $articleId): bool;

    /**
     * 分页获取文章列表
     *
     * @param array  $condition               文章的查询条件
     * @param string $condition['title']      文章标题
     * @param string $condition['categoryId'] 文章分类id
     * @param int    $currentPage             当前页码
     * @param int    $limit                   每页条数
     *
     * @return array 文章列表
     * @requestExample({"condition":{"title":"文章标题","categoryId":1}})
     * @returnExample({"item":[{"articleId":"1","title":"文章标题","username":"","status":"0","createdTime":"1504321656","updateTime":"2017-09-02 08:52:35","categoryName":"分类名"}],"page":{"first":1,"before":1,"current":1,"last":1,"next":1,"totalPages":1,"totalItems":1,"limit":1}})
     * @throws \Eelly\SDK\System\Exception\SystemException
     * @author wujunhua<wujunhua@eelly.net>
     * @since 2017-08-31
     */
    public function listArticlePage(array $condition = [], int $currentPage = 1, int $limit = 10): array;

}

