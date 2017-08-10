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

namespace Eelly\SDK\Message\Service\DTO;

use Eelly\DTO\AbstractDTO;

class ReplyDTO extends AbstractDTO
{
    /**
     * 消息回复ID，自增主键
     *
     * @var int
     */
    public $mr_id;

    /**
     * 消息ID
     *
     * @var int
     */
    public $message_id;

    /**
     * 回复发送者ID
     *
     * @var int
     */
    public $replay_sender_id;

    /**
     * 回复发送者名字
     *
     * @var string
     */
    public $replay_sender_name;

    /**
     * 回复接收者ID
     *
     * @var int
     */
    public $replay_receiver_id;

    /**
     * 回复发送者名字
     *
     * @var string
     */
    public $replay_receiver_name;

    /**
     * 回复内容
     *
     * @var string
     */
    public $content;

    /**
     * 是否已读：0 否 1 是
     *
     * @var int
     */
    public $is_read;

    /**
     * 删除标志：0 正常 1 回复发送者删除 2 回复接收者删除
     *
     * @var int
     */
    public $delete_flag;

    /**
     * 添加时间
     *
     * @var int
     */
    public $created_time;

    /**
     * 修改时间
     *
     * @var unknown
     */
    public $update_time;
}
