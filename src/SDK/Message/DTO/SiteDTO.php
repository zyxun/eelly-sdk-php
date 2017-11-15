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

namespace Eelly\SDK\Message\DTO;

use Eelly\DTO\AbstractDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class SiteDTO extends AbstractDTO
{
    /**
     * 消息读取ID，自增主键.
     *
     * @var int
     */
    public $msiId;

    /**
     * 消息ID.
     *
     * @var int
     */
    public $messageId;

    /**
     * 发送者ID：0 系统消息.
     *
     * @var int
     */
    public $senderId;

    /**
     * 接收者ID.
     *
     * @var int
     */
    public $receiverId;

    /**
     * (冗余)消息标题.
     *
     * @var string
     */
    public $title;

    /**
     * 站内信内容：编译后的消息内容.
     *
     * @var string
     */
    public $content;

    /**
     * 是否已读：0 否 1 是.
     *
     * @var string
     */
    public $isRead;

    /**
     * 添加时间.
     *
     * @var int
     */
    public $createdTime;

    /**
     * 修改时间.
     *
     * @var string
     */
    public $updateTime;
}
