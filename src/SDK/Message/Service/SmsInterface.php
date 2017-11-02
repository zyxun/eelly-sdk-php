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

namespace Eelly\SDK\Message\Service;

/**
 * 发送短信.
 * 
 * @author eellytools<localhost.shell@gmail.com>
 */
interface SmsInterface
{
    /**
     * 校验验证码.
     *
     * @param string $token token即是mongodb没有加ObjectID($id)ID
     * @param string $code 验证码
     * @requestExample({'token':'124sd33ww2','code':1234})
     * @returnExample('13512719887')
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年11月01日
     * @Validation(
     *  @PresenceOf(0,{message : "非法的token"}),
     *  @PresenceOf(1,{message : "非法的验证码"}),
     *  @InclusionIn(2,{message : '非法类型',domain:[1,2,3]})
     * )
     */
    public function getMobileByToken(string $token, string $code, int $type): string;
    /**
     * 发送短信.
     *
     * @Async(route=sms)
     *
     * @Validation(
     *     @Regex(0,{pattern:" /^1[34578]\d{9}$/",message : 'phoneNumber字段不是不符合手机号码格式'})
     * )
     * @param string     $mobile                     电话号码
     * @param array      $message                    消息数组，具体平台参数查看短信配置文件
     * @param int        $message['messageId']       消息ID
     * @param int        $message['receiverId']      接收者ID
     * @param int|null   $message['template']        第三方模板ID，使用在以模板ID来发送短信的平台，默认0
     * @param string|null     $message['data']       模板变量内容，json格式，模板有变量时，必填
     * @param array|null $gateways                   网关，这里的网关配置将会覆盖全局默认值，当message['template']不为空必填
     *
     * @return bool      返回bool值
     * @requestExample({"mobile":"13751352647","message":{"messageId":1,"receiverId":1,"template":"120","data":"{"name":"eelly","time":"2017-09-01"}"}})
     * @returnExample(true)
     * @throws \Eelly\SDK\Message\Exception\MessageException
     * @throws \Overtrue\EasySms\Exceptions\NoGatewayAvailableException
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-5
     */
    //public function sendSms(string $mobile, array $message, array $gateways = []): bool;
}
