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

/**
 * @author hehui<hehui@eelly.net>
 */
class ApiLogger
{
    /**
     * @see \Eelly\SDK\Logger\Service\ApiLoggerInterface::log()
     */
    public function log(string $traceId, array $request = [], array $response = [], array $extras = []): bool
    {
        return EellyClient::requestJson('logger/apiLogger', __FUNCTION__, ['traceId' => $traceId, 'request' => $request, 'response' => $response, 'extras' => $extras]);
    }
}
