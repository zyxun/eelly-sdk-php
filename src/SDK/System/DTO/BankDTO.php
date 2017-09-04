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

namespace Eelly\SDK\System\DTO;

use Eelly\DTO\AbstractDTO;

/**
 * Class BankDTO.
 */
class BankDTO extends AbstractDTO
{
    /**
     * 银行信息表主键id
     *
     * @var int
     */
    public $bankId;
    
    /**
     * 银行名称
     *
     * @var string
     */
    public $name;
    
    /**
     * 银行编码
     *
     * @var string
     */
    public $code;
    
    /**
     * 银行logo
     *
     * @var string
     */
    public $logo;
    
    /**
     * 银行使用标志
     *
     * @var int
     */
    public $useFlag;
    
    /**
     * 排序
     *
     * @var int
     */
    public $sort;
    
    /**
     * 状态：0 禁用 1 正常
     *
     * @var int
     */
    public $status;
    
}
