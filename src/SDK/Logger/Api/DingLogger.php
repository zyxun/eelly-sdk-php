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

namespace Eelly\SDK\Logger\Api;

use Eelly\SDK\EellyClient;

class DingLogger
{
    public function monolog(array $record): bool
    {
        return EellyClient::requestJson('logger/dingLogger', __FUNCTION__, ['record' => $record]);
    }
}
