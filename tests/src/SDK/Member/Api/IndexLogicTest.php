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
use Eelly\SDK\Member\Exception\MemberException;

class IndexLogicTest extends TestCase
{
    private $logic;

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
        $this->logic = new Index();
    }

    public function testReturnInt(): void
    {
        $return = $this->logic->returnInt();
        $this->assertInternalType('int', $return);
    }

    public function testReturnString(): void
    {
        $return = $this->logic->returnString();
        $this->assertInternalType('string', $return);
    }

    public function testReturnArray(): void
    {
        $return = $this->logic->returnArray();
        $this->assertInternalType('array', $return);
    }

    public function testReturnBool(): void
    {
        $return = $this->logic->returnBool();
        $this->assertInternalType('bool', $return);
    }

    public function testReturnfloat(): void
    {
        $return = $this->logic->returnfloat();
        $this->assertInternalType('float', $return);
    }

    public function testReturnNull(): void
    {
        $return = $this->logic->returnNull();
        $this->assertNull($return);
    }

    public function testThrowException():void
    {
        $this->expectException(MemberException::class);
        $this->logic->throwException();
    }
}
