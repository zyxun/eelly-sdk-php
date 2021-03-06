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
 * Class ParamDTO.
 */
class ParamDTO extends AbstractDTO
{
    /**
     * 参数字典id.
     *
     * @var int
     */
    public $paramId;

    /**
     * 参数字典编码
     *
     * @var string
     */
    public $code;

    /**
     * 参数名称.
     *
     * @var string
     */
    public $paramName;

    /**
     * 参数描述.
     *
     * @var string
     */
    public $paramDesc;

    /**
     * 参数值状态：0 无效 1 有效.
     *
     * @var int
     */
    public $status;

    /**
     * @return string
     */
    public function getCodeName(): string
    {
        return $this->code;
    }
}
