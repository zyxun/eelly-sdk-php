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

namespace Eelly\SDK\Order\DTO;

use Eelly\DTO\AbstractDTO;

/**
 * 订单业务数据.
 *
 * @author hehui<hehui@eelly.net>
 */
class OrderBizDataDTO extends AbstractDTO
{
    /**
     * 业务状态码.
     *
     * @var int
     */
    public $bizCode = 0;

    /**
     * 数据库状态码.
     *
     * @var int
     */
    public $orderStatus = 0;

    /**
     * 订单状态标题.
     *
     * @var string
     */
    public $title = '';

    /**
     * 订单状态描述.
     *
     * @var string
     */
    public $text = '';

    /**
     * 倒计时(秒).
     *
     * @var int
     */
    public $countdown = 0;
    public $countDown = 0;

    /**
     * 倒计时模板(模板变量 {time}).
     *
     * @var string
     */
    public $countdownTpl = '';
    public $countDownTpl = '';

    /**
     * 快递信息.
     *
     * @var string
     */
    public $express = '';

    /**
     * 快递信息的时间戳(秒).
     *
     * @var int
     */
    public $expressTime = 0;

    /**
     * 留言.
     *
     * @var string
     */
    public $note = '';

    /**
     * Tim 账号.
     *
     * @var string
     */
    public $identifier;

    /**
     * 支持的操作.
     *
     * @var array
     */
    public $actions = [];

    /**
     * @return int
     */
    public function getBizCode(): int
    {
        return $this->bizCode;
    }

    /**
     * @param int $bizCode
     *
     * @return OrderBizDataDTO
     */
    public function setBizCode(int $bizCode): self
    {
        $this->bizCode = $bizCode;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrderStatus(): int
    {
        return $this->orderStatus;
    }

    /**
     * @param int $orderStatus
     *
     * @return OrderBizDataDTO
     */
    public function setOrderStatus(int $orderStatus): self
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return OrderBizDataDTO
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return OrderBizDataDTO
     */
    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return int
     */
    public function getCountdown(): int
    {
        return $this->countdown;
    }

    /**
     * @param int $countDown
     *
     * @return OrderBizDataDTO
     */
    public function setCountdown(int $countdown): self
    {
        $this->countdown = $countdown;
        $this->countDown = $countdown;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountdownTpl(): string
    {
        return $this->countdownTpl;
    }

    /**
     * @param string $countDownTpl
     *
     * @return OrderBizDataDTO
     */
    public function setCountdownTpl(string $countdownTpl): self
    {
        $this->countdownTpl = $countdownTpl;
        $this->countDownTpl = $countdownTpl;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpress(): string
    {
        return $this->express;
    }

    /**
     * @param string $express
     *
     * @return OrderBizDataDTO
     */
    public function setExpress(string $express): self
    {
        $this->express = $express;

        return $this;
    }

    /**
     * @return int
     */
    public function getExpressTime(): int
    {
        return $this->expressTime;
    }

    /**
     * @param int $expressTime
     *
     * @return OrderBizDataDTO
     */
    public function setExpressTime(int $expressTime): self
    {
        $this->expressTime = $expressTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getNote(): string
    {
        return $this->note;
    }

    /**
     * @param string $note
     *
     * @return OrderBizDataDTO
     */
    public function setNote(string $note): self
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    /**
     * @param string $identifier
     * @return OrderBizDataDTO
     */
    public function setIdentifier(string $identifier): OrderBizDataDTO
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * @return array
     */
    public function getActions(): array
    {
        return $this->actions;
    }

    /**
     * @param string $btn
     * @param string $name
     */
    public function pushAction(string $btn, string $name): void
    {
        $this->actions[] = ['btn' => $btn, 'name' => $name];
    }
}
