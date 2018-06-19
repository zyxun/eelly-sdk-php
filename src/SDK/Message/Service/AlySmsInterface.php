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
 * @author sunanzhi <sunanzhi@hotmail.com>
 */
interface AlySmsInterface
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
    public function checkCode(string $mobile, int $templateId, int $code):bool;

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
    public function sendCode(string $mobile, int $templateId, int $sendType, int $length = 4):bool;

    /**
     * 发送短信
     *
     * @param string $mobile 发送的手机号码
     * @param string $content 发送的参数内容
     * @param integer $templateId 模版id @see https://api.eelly.local/message/alySms/showTemplate
     * @param integer $sendType 发送验证码的平台 1:android端，2:ios端，3:web端，4:其他
     * @param int $senderId 发送者ID 0 系统消息
     * @param int $receiveType 接收类型 接收类型：1 全部用户(系统) 2 全部卖家(系统) 3 全部买家(系统) 4 指定用户
     * @param int $receiverId 接收者ID
     * 
     * @requestExample({"mobile":"18826237472", "content":'{"buyerName":"sunanzhi", "storeName":"衣联商城", "orderSn":"9854648958"}',"templateId":62, "sendType":1})
     * @returnExample('true')
     * 
     * @return bool
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     */
    public function sendSms(string $mobile, string $content, int $templateId, int $sendType, int $senderId = 0, int $receiveType = 0, int $receiverId = 0): bool;

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
    public function showTemplate():void;

}
