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
 * Class UserFileDTO.
 *
 * @author hehui<hehui@eelly.net>
 */
class UserFileDTO extends AbstractDTO
{
    /**
     * 文件id.
     *
     * @var string
     */
    public $fileId;

    /**
     * 文件访问地址.
     *
     * @var string
     */
    public $fileUri;
}
