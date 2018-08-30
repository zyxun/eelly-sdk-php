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

namespace Eelly\SDK\System\Service;

use Eelly\DTO\UidDTO;
use Eelly\SDK\System\DTO\UserFileDTO;
use GuzzleHttp\Psr7\UploadedFile;

/**
 * Flysystem文件处理.
 *
 * @author hehui<hehui@eelly.net>
 */
interface FlysystemInterface
{
    /**
     * 文件上传.
     *
     * @param UploadedFile $uploadedFile 上传的文件
     * @param string       $bizName      业务名
     * @param string       $bizId        业务关联id
     * @param UidDTO|null  $uidDTO       需要登录
     *
     * @return UserFileDTO
     */
    public function uploadFile(UploadedFile $uploadedFile, string $bizName = 'other', string $bizId = '', UidDTO $uidDTO = null): UserFileDTO;
}
