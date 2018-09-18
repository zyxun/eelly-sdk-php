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
     * @param string $uniqueCode 模版规范编码
     * @param int $length 验证码长度
     * 
     * @requestExample({"mobile":"13512719887", "uniqueCode":"USER_EDIT_LOGIN_PWD", "length":4})
     * @returnExample(true)
     * 
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.7.17
     */
    public function sendCode(string $mobile, string $uniqueCode, int $length = 4): bool
    {
        return EellyClient::request('message/sms', 'sendCode', true, $mobile, $uniqueCode, $length);
    }

    /**
     * 发送手机验证码.
     *
     * @param string $mobile 手机号码
     * @param string $uniqueCode 模版规范编码
     * @param int $length 验证码长度
     * 
     * @requestExample({"mobile":"13512719887", "uniqueCode":"USER_EDIT_LOGIN_PWD", "length":4})
     * @returnExample(true)
     * 
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.7.17
     */
    public function sendCodeAsync(string $mobile, string $uniqueCode, int $length = 4)
    {
        return EellyClient::request('message/sms', 'sendCode', false, $mobile, $uniqueCode, $length);
    }

    /**
     * 校验验证码
     *
     * @param string $mobile 手机号
     * @param integer $code 验证码
     * @param string $uniqueCode 模版规范编码
     * @return boolean
     * @requestExample({"mobile":"13512719887","code":"2345","uniqueCode":"USER_EDIT_LOGIN_PWD"})
     * @returnExample(true)
     * @author sunanzhi <sunanzhi@hotmail.com>
     */
    public function checkCode(string $mobile, int $code, string $uniqueCode): bool
    {
        return EellyClient::request('message/sms', 'checkCode', true, $mobile, $code, $uniqueCode);
    }

    /**
     * 校验验证码
     *
     * @param string $mobile 手机号
     * @param integer $code 验证码
     * @param string $uniqueCode 模版规范编码
     * @return boolean
     * @requestExample({"mobile":"13512719887","code":"2345","uniqueCode":"USER_EDIT_LOGIN_PWD"})
     * @returnExample(true)
     * @author sunanzhi <sunanzhi@hotmail.com>
     */
    public function checkCodeAsync(string $mobile, int $code, string $uniqueCode)
    {
        return EellyClient::request('message/sms', 'checkCode', false, $mobile, $code, $uniqueCode);
    }

    /**
     * 发送短信消息
     *
     * @param string $mobile 手机号
     * @param string $content 参数内容 json格式
     * @param string $uniqueCode 模版规范编码
     * @param integer $senderId 发送者id
     * @param integer $receiveType 接收类型：1 全部用户(系统) 2 全部卖家(系统) 3 全部买家(系统) 4 指定用户
     * @param integer $receiverId 接收者ID
     * @return boolean
     * @requestExample({"mobile":"13512719887","content":'{"day":"3"}',"uniqueCode":"USER_EDIT_LOGIN_PWD","senderId":0,"receiveType":"4","receiverId":"12123"})
     * @returnExample(true)
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.7.17
     */
    public function sendSms(string $mobile, string $content, string $uniqueCode, int $senderId = 0, int $receiveType = 4, int $receiverId = 0): bool
    {
        return EellyClient::request('message/sms', 'sendSms', true, $mobile, $content, $uniqueCode, $senderId, $receiveType, $receiverId);
    }

    /**
     * 发送短信消息
     *
     * @param string $mobile 手机号
     * @param string $content 参数内容 json格式
     * @param string $uniqueCode 模版规范编码
     * @param integer $senderId 发送者id
     * @param integer $receiveType 接收类型：1 全部用户(系统) 2 全部卖家(系统) 3 全部买家(系统) 4 指定用户
     * @param integer $receiverId 接收者ID
     * @return boolean
     * @requestExample({"mobile":"13512719887","content":'{"day":"3"}',"uniqueCode":"USER_EDIT_LOGIN_PWD","senderId":0,"receiveType":"4","receiverId":"12123"})
     * @returnExample(true)
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.7.17
     */
    public function sendSmsAsync(string $mobile, string $content, string $uniqueCode, int $senderId = 0, int $receiveType = 4, int $receiverId = 0)
    {
        return EellyClient::request('message/sms', 'sendSms', false, $mobile, $content, $uniqueCode, $senderId, $receiveType, $receiverId);
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