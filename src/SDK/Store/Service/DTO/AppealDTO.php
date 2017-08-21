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
 * AppealDTO.
 *
 * @author wangjiang<wangjiang@eelly.net>
 */
class AppealDTO extends AbstractDTO
{
    /**
     * 申诉id
     *
     * @var int
     */
    public $appealId;

    /**
     * 投诉举报维度 1店铺2交易3商品
     *
     * @var int
     */
    public $dimension;

    /**
     * 投诉举报内容
     *
     * @var string
     */
    public $complainContent;

    /**
     * 投诉举报证据
     *
     * @var string
     */
    public $complainEvidence;

    /**
     * 申诉内容
     *
     * @var string
     */
    public $appealContent;

    /**
     * 申诉证据
     *
     * @var string
     */
    public $appealEvidence;

    /**
     * 申诉状态 0待处理1申诉撤销2申诉成功3申诉失败
     *
     * @var int
     */
    public $status;

    /**
     * 投诉举报时间
     *
     * @var string
     */
    public $createdTime;
}