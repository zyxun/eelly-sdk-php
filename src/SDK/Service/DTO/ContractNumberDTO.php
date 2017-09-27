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

namespace Eelly\SDK\Service\DTO;

use Eelly\DTO\AbstractDTO;

class ContractNumberDTO extends AbstractDTO
{

    /**
     * 合同编号ID.
     *
     * @var int
     */
    public $scnId;

    /**
     * 合同id.
     *
     * @var int
     */
    public $scId;

    /**
     * 合同编号
     *
     * @var int
     */
    public $number;

    /**
     * 编号状态：0 未使用 1 已使用 2 临时占用，当线下占用合同时状态变更为临时占用，签订合同时变更状态为已使用
     *
     * @var int
     */
    public $status;

}
