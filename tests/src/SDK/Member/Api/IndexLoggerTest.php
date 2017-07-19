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
            'clientId'                => 'myawesomeapp',
            'clientSecret'            => 'abc123',
            'redirectUri'             => '',
            'urlAuthorize'            => 'http://api.eelly.dev',
            'urlAccessToken'          => 'http://api.eelly.dev/oauth/authorizationServer/accessToken',
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

    public function testThrowException():void
    {
        $return = $this->logger->throwException();
        dd($return);
    }
}
