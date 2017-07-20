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

namespace Eelly\SDK\Oauth\Service\Index\DTO;

use Eelly\SDK\AbstractDTO;

class PaginationDTO extends AbstractDTO
{
    /**
     * @var int 第一页
     */
    public $first;

    /**
     * @var int
     */
    public $before;

    /**
     * @var int 当前页
     */
    public $current;

    /**
     * @var int 上一页
     */
    public $last;

    /**
     * @var int 下一页
     */
    public $next;

    /**
     * @var int 全部页码
     */
    public $total_pages;

    /**
     * @var int 总记录数
     */
    public $total_items;

    /**
     * @var int 一页记录数
     */
    public $limit;
}
