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

namespace Eelly\SDK\Message\Service\Index\DTO;

use Eelly\SDK\AbstractDTO;

class MessageDTO extends AbstractDTO
{
    /**
     * id.
     *
     * @var int
     */
    public $message_id;

    /**
     * @var int 发送者ID：0 系统消息
     */
    public $sender_id;

    /**
     * @var int 接收类型：1 全部用户(系统) 2 全部卖家(系统) 3 全部买家(系统) 4 指定用户
     */
    public $receive_type;

    /**
     * @var int 消息模板ID：0 自定义消息
     */
    public $mt_id;

    /**
     * @var string 消息标题
     */
    public $title;

    /**
     * @var string 消息内容：JSON格式
     */
    public $content;

    /**
     * @var int 状态：0 未处理 1 处理完成 2 处理中，主要用于邮件、短信消息异步处理时标注处理状态
     */
    public $status;

    /**
     * @var int 添加时间
     */
    public $created_time;

    /**
     * @var string 修改时间
     */
    public $update_time;
}
