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

namespace Eelly\SDK\Tim\Api;

use Eelly\SDK\EellyClient;

class UserContacts
{
    public function updateTimUserContactsInternal(string $fromId, string $toId, array $values): bool
    {
        return EellyClient::requestJson('tim/userContacts', __FUNCTION__, [
            'fromId' => $fromId,
            'toId'   => $toId,
            'values' => $values,
        ]);
    }
}
