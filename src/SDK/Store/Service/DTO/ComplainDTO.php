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

namespace Eelly\SDK\Store\Service\DTO;

use Eelly\DTO\AbstractDTO;

/**
 * ComplainDTO.
 *
 * @author wangjiang<wangjiang@eelly.net>
 */
class ComplainDTO extends AbstractDTO
{
    /**
     * 投诉举报id.
     *
     * @var int
     */
    public $complainId;

    /**
     * 投诉举报维度 1店铺2交易3商品
     *
     * @var int
     */
    public $dimension;

    /**
     * 投诉举报内容.
     *
     * @var string
     */
    public $content;

    /**
     * 投诉举报证据.
     *
     * @var string
     */
    public $evidence;

    /**
     * 投诉举报状态 0待跟进1已跟进2买家撤销3成立4不成立.
     *
     * @var int
     */
    public $status;

    /**
     * 申诉标识 0未申诉1已申诉.
     *
     * @var int
     */
    public $appealFlag;

    /**
     * 投诉举报时间.
     *
     * @var string
     */
    public $createdTime;
}
