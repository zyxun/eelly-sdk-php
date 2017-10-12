<?php
declare(strict_types=1);
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Contact\DTO;


use Eelly\DTO\AbstractDTO;

/**
 * 联系人导入通信 DTO.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 * @since  2017年10月12日
 */
class ImportDTO extends AbstractDTO
{
    /**
     * 导入记录ID，自增主键.
     *
     * @var int
     */
    public $ciId;

    /**
     * 联系人所有者用户ID.
     *
     * @var int
     */
    public $ownerId;

    /**
     * 联系人用户ID.
     *
     * @var int
     */
    public $userId;

    /**
     * 导入通讯录状态：0 未导入 1 已导入.
     *
     * @var int
     */
    public $status;
}