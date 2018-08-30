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
 * Sts token DTO.
 *
 * @author hehui<hehui@eelly.net>
 */
class StsTokenDTO extends AbstractDTO
{
    /**
     * AccessKeyId.
     *
     * @var string
     */
    public $accessKeySecret;

    /**
     * AccessKeySecret.
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * Token.
     *
     * @var string
     */
    public $expiration;

    /**
     * 该Token失效的时间.
     *
     * @var string
     */
    public $securityToken;

    /**
     * 业务强制使用的目录.
     *
     * @var string
     */
    public $dir;
}
