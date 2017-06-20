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
use PHPUnit\Framework\TestCase;

/**
 * @author hehui<hehui@eelly.net>
 */
class ApiLoggerTest extends TestCase
{
    private $logger;

    /**
     * {@inheritdoc}
     *
     * @see \PHPUnit\Framework\TestCase::setUp()
     */
    public function setUp(): void
    {
        $options = [
            'clientId' => 'myawesomeapp',
            'clientSecret' => 'abc123',
            'redirectUri' => '',
            'urlAuthorize' => 'http://api.eelly.dev',
            'urlAccessToken' => 'http://api.eelly.dev/oauth/authorizationServer/accessToken',
            'urlResourceOwnerDetails' => 'http://api.eelly.dev',
        ];
        EellyClient::init($options);
        $this->logger = new ApiLogger();
    }

    public function testLog(): void
    {
        $this->logger->log('400000000000000000000001', ['test' => 123, 'arr' => ['a' => 1, 'b' => 2]]);
    }
}
