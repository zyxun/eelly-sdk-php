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
 * Class KeyDTO.
 */
class KeyDTO extends AbstractDTO
{
    /**
     * 字典编码
     *
     * @var string
     */
    public $code;

    /**
     * @return string
     */
    public function getCodeName(): string
    {
        return $this->code;
    }

}
