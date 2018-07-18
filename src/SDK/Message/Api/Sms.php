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
     * 发送手机验证码.
     *
     * @param string $mobile 手机号码
     * @param int $templateId 模版id
     * @param int $length 验证码长度
     * 
     * @requestExample({"mobile":"13512719887", "templateId":90, "length":4})
     * @returnExample(true)
     * 
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.7.17
     */
    public function sendCode(string $mobile, int $templateId, int $length = 4): bool
    {
        return EellyClient::request('message/sms', 'sendCode', true, $mobile, $templateId, $length);
    }

    /**
     * 发送手机验证码.
     *
     * @param string $mobile 手机号码
     * @param int $templateId 模版id
     * @param int $length 验证码长度
     * 
     * @requestExample({"mobile":"13512719887", "templateId":90, "length":4})
     * @returnExample(true)
     * 
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.7.17
     */
    public function sendCodeAsync(string $mobile, int $templateId, int $length = 4)
    {
        return EellyClient::request('message/sms', 'sendCode', false, $mobile, $templateId, $length);
    }

    /**
     * 校验验证码
     *
     * @param string $mobile 手机号
     * @param integer $code 验证码
     * @param integer $templateId 模版id
     * @return boolean
     * @requestExample({"mobile":"13512719887","code":"2345","templateId":"90"})
     * @returnExample(true)
     * @author sunanzhi <sunanzhi@hotmail.com>
     */
    public function checkCode(string $mobile, int $code, int $templateId): bool
    {
        return EellyClient::request('message/sms', 'checkCode', true, $mobile, $code, $templateId);
    }

    /**
     * 校验验证码
     *
     * @param string $mobile 手机号
     * @param integer $code 验证码
     * @param integer $templateId 模版id
     * @return boolean
     * @requestExample({"mobile":"13512719887","code":"2345","templateId":"90"})
     * @returnExample(true)
     * @author sunanzhi <sunanzhi@hotmail.com>
     */
    public function checkCodeAsync(string $mobile, int $code, int $templateId)
    {
        return EellyClient::request('message/sms', 'checkCode', false, $mobile, $code, $templateId);
    }

    /**
     * 发送短信消息
     *
     * @param string $mobile 手机号
     * @param string $content 参数内容 json格式
     * @param integer $templateId 模版id
     * @param integer $senderId 发送者id
     * @param integer $receiveType 接收类型：1 全部用户(系统) 2 全部卖家(系统) 3 全部买家(系统) 4 指定用户
     * @param integer $receiverId 接收者ID
     * @return boolean
     * @requestExample({"mobile":"13512719887","content":'{"day":"3"}',"templateId":80,"senderId":0,"receiveType":"4","receiverId":"12123"})
     * @returnExample(true)
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.7.17
     */
    public function sendSms(string $mobile, string $content, int $templateId, int $senderId = 0, int $receiveType = 4, int $receiverId = 0): bool
    {
        return EellyClient::request('message/sms', 'sendSms', true, $mobile, $content, $templateId, $senderId, $receiveType, $receiverId);
    }

    /**
     * 发送短信消息
     *
     * @param string $mobile 手机号
     * @param string $content 参数内容 json格式
     * @param integer $templateId 模版id
     * @param integer $senderId 发送者id
     * @param integer $receiveType 接收类型：1 全部用户(系统) 2 全部卖家(系统) 3 全部买家(系统) 4 指定用户
     * @param integer $receiverId 接收者ID
     * @return boolean
     * @requestExample({"mobile":"13512719887","content":'{"day":"3"}',"templateId":80,"senderId":0,"receiveType":"4","receiverId":"12123"})
     * @returnExample(true)
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.7.17
     */
    public function sendSmsAsync(string $mobile, string $content, int $templateId, int $senderId = 0, int $receiveType = 4, int $receiverId = 0)
    {
        return EellyClient::request('message/sms', 'sendSms', false, $mobile, $content, $templateId, $senderId, $receiveType, $receiverId);
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