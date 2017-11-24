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

use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\ArticleContentInterface;
use Eelly\SDK\System\DTO\ArticleContentDTO;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class ArticleContent implements ArticleContentInterface
{
    /**
     * 获取指定id文章内容.
     *
     * @param int $articleId 文章id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return ArticleContentDTO
     * @requestExample({"articleId":1})
     * @returnExample({"articleId":1,"content":"内容","createdTime":0})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-26
     */
    public function getContent(int $articleId): ArticleContentDTO
    {
        return EellyClient::request('system/articleContent', __FUNCTION__, true, $articleId);
    }

    /**
     * 获取指定id文章内容.
     *
     * @param int $articleId 文章id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return ArticleContentDTO
     * @requestExample({"articleId":1})
     * @returnExample({"articleId":1,"content":"内容","createdTime":0})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-26
     */
    public function getContentAsync(int $articleId)
    {
        return EellyClient::request('system/articleContent', __FUNCTION__, false, $articleId);
    }

    /**
     * 新增文章内容.
     *
     * @param int    $articleId 文章id
     * @param string $content   文章内容
     * @param UidDTO $user      登录用户对象
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool 新增结果
     * @requestExample({"articleId":1,"content":"文章内容"})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-26
     */
    public function addContent(int $articleId, string $content, UidDTO $user = null): bool
    {
        return EellyClient::request('system/articleContent', __FUNCTION__, true, $articleId, $content, $user);
    }

    /**
     * 新增文章内容.
     *
     * @param int    $articleId 文章id
     * @param string $content   文章内容
     * @param UidDTO $user      登录用户对象
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool 新增结果
     * @requestExample({"articleId":1,"content":"文章内容"})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-26
     */
    public function addContentAsync(int $articleId, string $content, UidDTO $user = null)
    {
        return EellyClient::request('system/articleContent', __FUNCTION__, false, $articleId, $content, $user);
    }

    /**
     * 修改文章内容.
     *
     * @param int    $articleId 文章id
     * @param string $content   文章内容
     * @param UidDTO $user      登录用户对象
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool 修改结果
     * @requestExample({"articleId":1,"content":"文章内容"})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-26
     */
    public function updateContent(int $articleId, string $content, UidDTO $user = null): bool
    {
        return EellyClient::request('system/articleContent', __FUNCTION__, true, $articleId, $content, $user);
    }

    /**
     * 修改文章内容.
     *
     * @param int    $articleId 文章id
     * @param string $content   文章内容
     * @param UidDTO $user      登录用户对象
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool 修改结果
     * @requestExample({"articleId":1,"content":"文章内容"})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-26
     */
    public function updateContentAsync(int $articleId, string $content, UidDTO $user = null)
    {
        return EellyClient::request('system/articleContent', __FUNCTION__, false, $articleId, $content, $user);
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