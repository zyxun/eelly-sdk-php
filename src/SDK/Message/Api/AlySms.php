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
use Eelly\SDK\Message\Service\AlySmsInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class AlySms implements AlySmsInterface
{
    /**
     * 校验验证码
     * 
     * @param string $mobile 手机号码
     * @param integer $templateId 模版id 
     * @param string $code 校验的验证码
     * 
     * @requestExample({"mobile":"18826237472","templateId":95,"code":1234})
     * @returnExample('true')
     * 
     * @return bool
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     */
    public function checkCode(string $mobile, int $templateId, int $code): bool
    {
        return EellyClient::request('message/alySms', 'checkCode', true, $mobile, $templateId, $code);
    }

    /**
     * 校验验证码
     * 
     * @param string $mobile 手机号码
     * @param integer $templateId 模版id 
     * @param string $code 校验的验证码
     * 
     * @requestExample({"mobile":"18826237472","templateId":95,"code":1234})
     * @returnExample('true')
     * 
     * @return bool
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     */
    public function checkCodeAsync(string $mobile, int $templateId, int $code)
    {
        return EellyClient::request('message/alySms', 'checkCode', false, $mobile, $templateId, $code);
    }

    /**
     * 发送验证码
     * 
     * @param string $mobile 发送的手机号码
     * @param integer $templateId 模版id 
     * @param integer $sendType 发送验证码的平台 1:android端，2:ios端，3:web端，4:其他
     * @param integer $length 验证码的长度
     * 
     * @requestExample({"mobile":"188262637472", "templateId":95, "sendType":1, "code":1234})
     * @returnExample('true')
     * 
     * @return bool
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018-6-15
     */
    public function sendCode(string $mobile, int $templateId, int $sendType, int $length = 4): bool
    {
        return EellyClient::request('message/alySms', 'sendCode', true, $mobile, $templateId, $sendType, $length);
    }

    /**
     * 发送验证码
     * 
     * @param string $mobile 发送的手机号码
     * @param integer $templateId 模版id 
     * @param integer $sendType 发送验证码的平台 1:android端，2:ios端，3:web端，4:其他
     * @param integer $length 验证码的长度
     * 
     * @requestExample({"mobile":"188262637472", "templateId":95, "sendType":1, "code":1234})
     * @returnExample('true')
     * 
     * @return bool
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018-6-15
     */
    public function sendCodeAsync(string $mobile, int $templateId, int $sendType, int $length = 4)
    {
        return EellyClient::request('message/alySms', 'sendCode', false, $mobile, $templateId, $sendType, $length);
    }

    /**
     * 发送短信
     *
     * @param string $mobile 发送的手机号码
     * @param string $content 发送的参数内容
     * @param integer $templateId 模版id @see http://url.com 
     * @param integer $sendType 发送验证码的平台 1:android端，2:ios端，3:web端，4:其他
     * 
     * @requestExample({"mobile":"18826237472", "content":'{"buyerName":"sunanzhi", "storeName":"衣联商城", "orderSn":"9854648958"}',"templateId":62, "sendType":1})
     * @returnExample('true')
     * 
     * @return bool
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     */
    public function sendSms(string $mobile, string $content, int $templateId, int $sendType): bool
    {
        return EellyClient::request('message/alySms', 'sendSms', true, $mobile, $content, $templateId, $sendType);
    }

    /**
     * 发送短信
     *
     * @param string $mobile 发送的手机号码
     * @param string $content 发送的参数内容
     * @param integer $templateId 模版id @see http://url.com 
     * @param integer $sendType 发送验证码的平台 1:android端，2:ios端，3:web端，4:其他
     * 
     * @requestExample({"mobile":"18826237472", "content":'{"buyerName":"sunanzhi", "storeName":"衣联商城", "orderSn":"9854648958"}',"templateId":62, "sendType":1})
     * @returnExample('true')
     * 
     * @return bool
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     */
    public function sendSmsAsync(string $mobile, string $content, int $templateId, int $sendType)
    {
        return EellyClient::request('message/alySms', 'sendSms', false, $mobile, $content, $templateId, $sendType);
    }

    /**
     * 展示模版
     * 
     * >模版数据案例
     * 
     * templateId    |  title             |    content      |  params
     * ----------------| --------------   | ------------    |  -----------
     * 62              |  订单-退货退款完成  | 亲爱的${buyerName}店主，你好！你在店铺:${storeName}的订单${orderSn}的退货退款已完成。 | buyerName, storeName, orderSn
     * 
     * >${{ 参数 } 内容是参数，严格要求一致，否则发送失败
     * 
     * @requestExample({})
     * @returnExample()
     * @return void
     */
    public function showTemplate(): void
    {
        return EellyClient::request('message/alySms', 'showTemplate', true);
    }

    /**
     * 展示模版
     * 
     * >模版数据案例
     * 
     * templateId    |  title             |    content      |  params
     * ----------------| --------------   | ------------    |  -----------
     * 62              |  订单-退货退款完成  | 亲爱的${buyerName}店主，你好！你在店铺:${storeName}的订单${orderSn}的退货退款已完成。 | buyerName, storeName, orderSn
     * 
     * >${{ 参数 } 内容是参数，严格要求一致，否则发送失败
     * 
     * @requestExample({})
     * @returnExample()
     * @return void
     */
    public function showTemplateAsync()
    {
        return EellyClient::request('message/alySms', 'showTemplate', false);
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