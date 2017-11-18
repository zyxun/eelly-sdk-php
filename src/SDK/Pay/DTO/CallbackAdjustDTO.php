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

class CallbackAdjustDTO extends AbstractDTO
{
    /**
     * 清算流水ID
     *
     * @var int
     */
    public $pcaId;

    /**
     * 交易号
     *
     * @var string
     */
    public $billNo;

    /**
     * 操作类型：1 充值 2 提现 3 退款
     *
     * @var int
     */
    public $type;

    /**
     * 关联id
     *
     * @var int
     */
    public $itemId;

    /**
     * 交易请求金额
     *
     * @var int
     */
    public $itemMoney;
    
    /**
     * 发起请求金额
     * @var int
     */
    public $requestMoney;
    
    /**
     * 回调金额
     *
     * @var int
     */
    public $callbackMoney;
    
    /**
     * 交易流水金额
     *
     * @var int
     */
    public $recordMoney;
    
    /**
     * 帐户变更金额
     *
     * @var int
     */
    public $changeMoney;
    
    /**
     * 比较结果：0 未比较 1 平衡 2 不平衡
     *
     * @var int
     */
    public $status;

    /**
     * 备注
     *
     * @var string
     */
    public $remark;

    /**
     * 添加时间
     *
     * @var int
     */
    public $createdTime;
}