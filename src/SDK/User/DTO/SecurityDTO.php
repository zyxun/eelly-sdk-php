<?php
declare(strict_types=1);
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\User\DTO;


use Eelly\DTO\AbstractDTO;

class SecurityDTO extends AbstractDTO
{
    /**
     * 密保ID，自增主键.
     *
     * @var int
     */
    public $usId;

    /**
     * 用户ID.
     *
     * @var int
     */
    public $userId;

    /**
     * 密保问题ID，el_config库配置.
     *
     * @var int
     */
    public $questionId;

    /**
     * 密保答案.
     *
     * @var string
     */
    public $answer;

    /**
     * 添加时间.
     *
     * @var int
     */
    public $createdTime;

    /**
     * 修改时间.
     *
     * @var string
     */
    public $updateTime;
}