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

namespace Eelly\SDK\Pay\Api;

use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\AppletAccountInterface;

class AppletAccount implements AppletAccountInterface
{
    /**
     * {@inheritdoc}
     */
    public function statistics(UidDTO $uidDTO = null): array
    {
        return EellyClient::request('pay/appletAccount', __FUNCTION__, true);
    }

    /**
     * {@inheritdoc}
     */
    public function myBindBanks(UidDTO $uidDTO = null): array
    {
        return EellyClient::request('pay/appletAccount', __FUNCTION__, true);
    }
}
