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
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface SmsInterface
{

    /**
     * 发送短信.
     *
     * @Async(route=sms)
     *
     * @Validation(
     *     @Regex(1,{pattern:" /^1[34578]\d{9}$/",message : 'phoneNumber字段不是不符合手机号码格式'})
     * )
     *
     * @param int $messageInfo 消息信息数组
     * @param int $messageInfo['message_id'] 消息ID
     * @param int $messageInfo['receiver_id'] 接收者ID
     * @param string $messageInfo['content'] 完整短信内容
     * @param string $phoneNumber 电话号码
     * @param array $message 消息数组，具体平台参数查看短信配置文件
     * @param string $message['content'] 文字内容，使用在像云片类似的以文字内容发送的平台
     * @param string|null $message['template'] 模板ID，使用在以模板ID来发送短信的平台
     * @param array|null $message['data']  模板变量，使用在以模板ID来发送短信的平台
     * @param array|null $gateways 网关，这里的网关配置将会覆盖全局默认值
     * @return bool
     * @requestExample({"messageInfo":{"message_id":1,"receiver_id":1,"content":"测试消息"},"phoneNumber":"13751352647","message":{"content":"测试消息"}})
     * @returnExample(true)
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-8-5
     */
    public function sendSms(array $messageInfo,string $phoneNumber,array $message,array $gateways = []):bool;


}