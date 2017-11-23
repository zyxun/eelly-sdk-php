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

namespace Eelly\SDK\Pay\DTO;

use Eelly\DTO\AbstractDTO;

class RefundDTO extends AbstractDTO
{
    /**
     * 退款交易ID，自增主键
     *
     * @var int
     */
    public $prefId;

    /**
     * 帐户ID
     *
     * @var int
     */
    public $paId;

    /**
     * 退款类型：1 订单退款 2 服务退款
     *
     * @var int
     */
    public $type;

    /**
     * 关联对象ID：如订单ID、购买服务记录ID等
     *
     * @var int
     */
    public $itemId;

    /**
     * 衣联交易号
     *
     * @var string
     */
    public $billNo;

    /**
     * 退款金额：单位为分
     *
     * @var int
     */
    public $money;
    
    /**
     * 处理状态：0 待处理 1 成功 2 处理中 3 失败
     *
     * @var int
     */
    public $status;
    
    /**
     * 对帐状态：0 未对帐 1 对帐成功 2 对帐中 3 对帐失败
     *
     * @var int
     */
    public $checkStatus;
    
    /**
     * 备注
     *
     * @var string
     */
    public $remark;
    
    /**
     * 系统及管理备注，不需要给用户看的
     *
     * @var string
     */
    public $adminRemark;
    
    /**
     * 处理时间
     *
     * @var string
     */
    public $handleTime;
    
    /**
     * 添加时间
     *
     * @var int
     */
    public $createdTime;
}
