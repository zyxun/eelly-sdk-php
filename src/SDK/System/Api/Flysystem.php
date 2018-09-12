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

namespace Eelly\SDK\System\Api;

use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\System\DTO\UserFileDTO;
use Eelly\SDK\System\Service\FlysystemInterface;
use GuzzleHttp\Psr7\UploadedFile;

class Flysystem implements FlysystemInterface
{
    /**
     * {@inheritdoc}
     */
    public function uploadFile(UploadedFile $uploadedFile, string $bizName = 'other', string $bizId = '', UidDTO $uidDTO = null): UserFileDTO
    {
        return EellyClient::request('system/flysystem', __FUNCTION__, true, $uploadedFile, $bizName, $bizId);
    }
}
