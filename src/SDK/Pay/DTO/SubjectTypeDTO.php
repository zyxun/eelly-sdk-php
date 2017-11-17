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

class SubjectTypeDTO extends AbstractDTO
{
    /**
     * 科目代码
     * 
     * @var string
     */
    public $subjectCode;
    
    /**
     * 科目名称
     * 
     * @var string
     */
    public $subjectName;
    
    /**
     * 添加时间
     * 
     * @var string
     */
    public $createdTime;
}
