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
 * Class StatisticDTO.
 */
class CommentReplyDTO extends AbstractDTO
{
    /**
     * 评论回复ID.
     *
     * @var int
     */
    public $scrId;

    /**
     * 主评论ID.
     *
     * @var int
     */
    public $commentId;

    /**
     * 父回复id
     *
     * @var int
     */
    public $parentId;

    /**
     * 评论回复内容
     *
     * @var int
     */
    public $content;

    /**
     * 评论回复人id
     *
     * @var string
     */
    public $userId;

    /**
     * 评论回复人用户名.
     *
     * @var string
     */
    public $username;

    /**
     * 评论回复人IP.
     *
     * @var string
     */
    public $userIp;

    /**
     * 被回复者id
     *
     * @var int
     */
    public $receiverId;

    /**
     * 添加时间.
     *
     * @var int
     */
    public $createdTime;
}
