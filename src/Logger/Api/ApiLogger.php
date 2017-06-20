<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
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
    public function log(string $traceId, array $request = [], array $response = [], array $extras = []): void
    {
        EellyClient::request('logger/apiLogger', __FUNCTION__, $traceId, $request, $response, $extras);
    }
}
