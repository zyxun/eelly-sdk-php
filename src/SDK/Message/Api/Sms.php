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
     * 发送手机验证码.
     *
     * @param string $mobile 手机号码
     * @param int $type 1:找回密码,2:快速登录,3:注册,4:手机绑定,5:手机修改密码,6:手机登陆店+,7:重置支付密码,8:绑定银行卡
     * @param int $length 验证码长度
     * @requestExample({"mobile":13512719887,"type":1,"length":4})
     * @returnExample({"messageId":"59f95de6f31eea00055f90e9"})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2017年10月31日
     * @Validation(
     *  @Regex(0,{pattern:" /^1[34578]\d{9}$/",message : 'phoneNumber字段不是不符合手机号码格式'}),
     *  @InclusionIn(1,{message : '非法类型',domain:[1,2,3,4,5,6,7,8]})
     * )
     */
    public function sendSmsCode(string $mobile, int $type, int $length = 4): array
    {
        return EellyClient::request('message/sms', __FUNCTION__, true, $mobile, $type, $length);
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