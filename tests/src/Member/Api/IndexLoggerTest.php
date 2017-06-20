<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Member\Api;

use Eelly\SDK\EellyClient;
use PHPUnit\Framework\TestCase;

class IndexLoggerTest extends TestCase
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
        $this->logger = new Index();
    }

    public function testReturnInt(): void
    {
        $return = $this->logger->returnInt();
        $this->assertInternalType('int', $return);
    }

    public function testReturnString(): void
    {
        $return = $this->logger->returnString();
        $this->assertInternalType('string', $return);
    }

    public function testReturnArray(): void
    {
        $return = $this->logger->returnArray();
        $this->assertInternalType('array', $return);
    }

    public function testReturnBool(): void
    {
        $return = $this->logger->returnBool();
        $this->assertInternalType('bool', $return);
    }

    public function testReturnfloat(): void
    {
        $return = $this->logger->returnfloat();
        $this->assertInternalType('float', $return);
    }

    public function testReturnNull(): void
    {
        $return = $this->logger->returnNull();
        $this->assertNull($return);
    }
}
