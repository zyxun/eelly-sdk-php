<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Message\Service;


/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface MailInterface
{

    /**
     * @param array $messageMail 短信消息内容
     * @param int $messageMail['message_id'] 消息ID
     * @param int $messageMail['receiver_id'] 接收者ID
     * @param string $messageMail['mail_to'] 邮箱地址
     * @param string $messageMail['content'] 短信内容
     * @param int $messageMail['status'] 发送状态：0 待发送 1 成功 2 已发送，状态未知 4 失败
     * @return int
     * @requestExample([""])
     * @returnExample(1)
     * @throws \Eelly\SDK\Message\Exception\MessageException
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-8-3
     */
    public function addMail(array $messageMail):int ;


}