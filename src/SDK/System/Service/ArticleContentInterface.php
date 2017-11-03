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

use Eelly\DTO\UidDTO;
use Eelly\SDK\System\DTO\ArticleContentDTO;

/**
 * 文章内容.
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ArticleContentInterface
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
    public function getContent(int $articleId): ArticleContentDTO;

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
    public function addContent(int $articleId, string $content, UidDTO $user = null): bool;

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
    public function updateContent(int $articleId, string $content, UidDTO $user = null): bool;
}
