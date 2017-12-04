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

class TemplateDTO extends AbstractDTO
{
    /**
     * 消息模板ID，自增主键.
     *
     * @var int
     */
    public $mtId;

    /**
     * 消息模板类型：1 站内消息 2 邮件 4 手机短信
     *
     * @var int
     */
    public $type;

    /**
     * 息模板使用范围：1 买家用户 2 卖家用户，所有用户位计算1+2=3
     *
     * @var int
     */
    public $range;

    /**
     * 消息模板名称.
     *
     * @var string
     */
    public $name;

    /**
     * 消息模板分组名称.
     *
     * @var string
     */
    public $groupName;

    /**
     * 消息模板内容.
     *
     * @var string
     */
    public $content;

    /**
     * 状态：0 未启用 1 启用.
     *
     * @var int
     */
    public $status;

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
