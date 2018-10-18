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
    public $countDown = 0;

    /**
     * 倒计时模板(模板变量 {time}).
     *
     * @var string
     */
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
    public function getCountDown(): int
    {
        return $this->countDown;
    }

    /**
     * @param int $countDown
     *
     * @return OrderBizDataDTO
     */
    public function setCountDown(int $countDown): self
    {
        $this->countDown = $countDown;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountDownTpl(): string
    {
        return $this->countDownTpl;
    }

    /**
     * @param string $countDownTpl
     *
     * @return OrderBizDataDTO
     */
    public function setCountDownTpl(string $countDownTpl): self
    {
        $this->countDownTpl = $countDownTpl;

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
     * @return array
     */
    public function getActions(): array
    {
        return $this->actions;
    }

    /**
     * @param string ...$actions
     * @return OrderBizDataDTO
     */
    public function setActions(string ...$actions): self
    {
        $btnMap = [
            'cancel' => '取消订单',
            'pay' => '立即付款',
            'refund' => '申请退款',
            'notifySendGoods' => '提醒发货',
            'expandReceivedTime' => '延长收货时间',
            'confirmReceived' => '确认收货',
            'agreedDetail' => '查看协商记录',
            'refundDetail' => '退款详情',
            'cancelReturnGoods' => '撤销申请',
            'sendReturnGoods' => '发错退货',
            'queryRefund' => '去处理退款申请',
            'queryReturnGoods' => '去处理退货申请',
            'cancelArbitrate' => '撤销介入申请',
        ];
        foreach ($actions as $item) {
            $this->actions[] = ['btn' => $item, 'name' => $btnMap[$item]];
        }

        return $this;
    }
}
