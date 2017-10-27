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
 * 标签名称.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 * @since  2017年10月12日
 */
class TagRelDTO extends AbstractDTO
{
    /**
     * 联系人标签关系ID，自增主键
     *
     * @var int
     */
    public $ctrId;
    /**
     * 联系人ID
     *
     * @var int
     */
    public $contactId;

    /**
     * 联系人标签表：标签名称
     *
     * @var int
     */
    public $name;

}