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

class SubjectAdjustDTO extends AbstractDTO
{
    /**
     * 结算日期：格式YYYYMMDD
     *
     * @var string
     */
    public $workDate;

    /**
     * 科目代码
     *
     * @var string
     */
    public $subjectCode;

    /**
     * 科目资金发生额：科目贷方金额减去借方金额
     *
     * @var int
     */
    public $subjectMoney;
    
    /**
     * 帐户变动流水发生额
     *
     * @var int
     */
    public $accountMoney;

    /**
     * 比较结果：0 未比较 1 平衡 2 不平衡
     *
     * @var int
     */
    public $balanceStatus;
    
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
