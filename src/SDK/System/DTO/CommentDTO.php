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
class CommentDTO extends AbstractDTO
{
    /**
     * 评论ID
     *
     * @var int
     */
    public $commentId;
    
    /**
     * 评论资源类型：1 店铺 2 商品 3 朋友圈消息 4 店铺消息
     *
     * @var int
     */
    public $type;
    
    /**
     * 被评论资源编号
     *
     * @var int
     */
    public $itemId;
    
    /**
     * 评论内容
     *
     * @var string
     */
    public $content;
    
    /**
     * 发布者用户ID
     *
     * @var int
     */
    public $userId;
    
    /**
     * 发布者用户名
     *
     * @var string
     */
    public $username;
    
    /**
     * 评论发布者IP
     *
     * @var string
     */
    public $userIp;
    
    /**
     * 状态：0 未读 1 已读 4 删除
     *
     * @var int
     */
    public $status;
    
    /**
     * 添加时间
     *
     * @var int
     */
    public $createdTime;
    
}
