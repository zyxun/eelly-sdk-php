<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Logger\Service;

/**
 * @author hehui<hehui@eelly.net>
 */
interface ApiLoggerInterface
{
    /**
     * @param string $traceId  跟踪id
     * @param array  $request  请求信息
     * @param array  $response 返回信息
     * @param array  $extras   扩展的信息
     */
    public function log(string $traceId, array $request = [], array $response = [], array $extras = []): void;
}
