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
use Eelly\SDK\System\DTO\StsTokenDTO;
use Eelly\SDK\System\Service\OssInterface;

class Oss implements OssInterface
{
    /**
     * {@inheritdoc}
     */
    public function stsToken(string $bizName, string $bizId = '', UidDTO $uidDTO = null): StsTokenDTO
    {
        return EellyClient::request('system/oss', __FUNCTION__, true, $bizName, $bizId);
    }
}
