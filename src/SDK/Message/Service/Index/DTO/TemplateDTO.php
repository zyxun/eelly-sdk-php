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

class TemplateDTO extends AbstractDTO
{
    /**
     * 消息模板ID，自增主键
     *
     * @var int
     */
    public $mt_id;

    /**
     * 消息模板类型：1 站内消息 2 邮件 4 手机短信
     *
     * @var int
     */
    public $type;

    /**
     * 消息模板名称
     *
     * @var string
     */
    public $name;

    /**
     * 消息模板内容
     *
     * @var string
     */
    public $content;

    /**
     * 状态：0 未启用 1 启用
     *
     * @var int
     */
    public $status;

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
