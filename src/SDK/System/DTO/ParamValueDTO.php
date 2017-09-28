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
 * Class ParamValueDTO.
 */
class ParamValueDTO extends AbstractDTO
{
    /**
     * 参数值主键id.
     *
     * @var int
     */
    public $spvId;

    /**
     * 参数主键id.
     *
     * @var int
     */
    public $paramId;

    /**
     * 参数值
     *
     * @var string
     */
    public $paramValue;

    /**
     * 参数值描述.
     *
     * @var string
     */
    public $paramDesc;

    /**
     * 参数值描述的解释.
     *
     * @var string
     */
    public $remark;

    /**
     * 参数值状态：0 无效 1 有效.
     *
     * @var int
     */
    public $status;
}
