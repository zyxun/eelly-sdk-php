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

namespace Eelly\SDK\Message\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Message\Service\SmsInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Sms implements SmsInterface
{
    /**
     * 校验验证码.
     *
     * @param string $token token即是mongodb没有加ObjectID($id)ID
     * @param string $code  验证码
     * @requestExample({'token':'124sd33ww2','code':1234})
     * @returnExample('13512719887')
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年11月01日
     * @Validation(
     *  @PresenceOf(0,{message : "非法的token"}),
     *  @PresenceOf(1,{message : "非法的验证码"}),
     *  @InclusionIn(2,{message : '非法类型',domain:[1,2,3]})
     * )
     */
    public function getMobileByToken(string $token, string $code, int $type): string
    {
        return EellyClient::request('message/sms', __FUNCTION__, true, $token, $code, $type);
    }

    /**
     * 校验验证码.
     *
     * @param string $token token即是mongodb没有加ObjectID($id)ID
     * @param string $code  验证码
     * @requestExample({'token':'124sd33ww2','code':1234})
     * @returnExample('13512719887')
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年11月01日
     * @Validation(
     *  @PresenceOf(0,{message : "非法的token"}),
     *  @PresenceOf(1,{message : "非法的验证码"}),
     *  @InclusionIn(2,{message : '非法类型',domain:[1,2,3]})
     * )
     */
    public function getMobileByTokenAsync(string $token, string $code, int $type)
    {
        return EellyClient::request('message/sms', __FUNCTION__, false, $token, $code, $type);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}