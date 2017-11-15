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

namespace Eelly\SDK\System\DTO;

use Eelly\DTO\AbstractDTO;

/**
 * Class CategoryDTO.
 */
class ArticleDTO extends AbstractDTO
{
    /**
     * 文章id.
     *
     * @var int
     */
    public $articleId;

    /**
     * 文章分类id.
     *
     * @var int
     */
    public $categoryId;

    /**
     * 文章标题.
     *
     * @var string
     */
    public $title;

    /**
     * 文章内容.
     *
     * @var string
     */
    public $content;

    /**
     * 导读内容.
     *
     * @var string
     */
    public $simpleContent;

    /**
     * 配图.
     *
     * @var string
     */
    public $image;

    /**
     * 关键字.
     *
     * @var string
     */
    public $keywords;

    /**
     * 文章归属ID 0:系统
     *
     * @var int
     */
    public $belongId;

    /**
     * 发布者用户ID.
     *
     * @var int
     */
    public $userId;

    /**
     * 发布者用户名.
     *
     * @var string
     */
    public $username;

    /**
     * 文章来源：系统发布的来源为【衣联网】.
     *
     * @var int
     */
    public $copyFrom;

    /**
     * 状态 0:未审核 1:审核通过 2:审核不通过 4:删除，默认值由分类决定.
     *
     * @var int
     */
    public $status;
}
