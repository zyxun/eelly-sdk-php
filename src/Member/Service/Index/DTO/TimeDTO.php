<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Member\Service\Index\DTO;

use Eelly\SDK\AbstractDTO;

/**
 * @author hehui<hehui@eelly.net>
 */
class TimeDTO extends AbstractDTO
{
    /**
     * 名称.
     *
     * @var string
     */
    public $name;

    /**
     * 时间.
     *
     * @var string
     */
    public $time;
}
