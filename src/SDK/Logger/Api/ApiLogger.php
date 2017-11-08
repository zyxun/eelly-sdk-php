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
use Eelly\SDK\Logger\Service\ApiLoggerInterface;

/**
 * @author hehui<hehui@eelly.net>
 */
class ApiLogger implements ApiLoggerInterface
{
    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Logger\Service\ApiLoggerInterface::log()
     */
    public function log(string $traceId, array $request = [], array $response = [], array $extras = []): bool
    {
        return EellyClient::request('logger/apiLogger', __FUNCTION__, true, $traceId, $request, $response, $extras);
    }
}
