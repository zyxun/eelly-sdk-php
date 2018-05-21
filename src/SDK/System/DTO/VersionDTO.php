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
 * Class VersionDTO.
 */
class VersionDTO extends AbstractDTO
{
    /**
     * 版本ID，自增主键.
     *
     * @var int
     */
    public $versionId;

    /**
     * 应用名称.
     *
     * @var string
     */
    public $appName;

    /**
     * 下载地址
     *
     * @var string
     */
    public $downUrl;

    /**
     * 版本号.
     *
     * @var string
     */
    public $version;

    /**
     * 版本名称.
     *
     * @var string
     */
    public $verName;

    /**
     * 是否强制更新：0 否 1 是.
     *
     * @var int
     */
    public $isForced;

    /**
     * 备注.
     *
     * @var string
     */
    public $remark;

    /**
     * 添加时间.
     *
     * @var int
     */
    public $createdTime;
}
