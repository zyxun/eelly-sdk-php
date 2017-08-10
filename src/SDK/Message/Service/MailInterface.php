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
 * @author eellytools<localhost.shell@gmail.com>
 */
interface MailInterface
{
    /**
     * @param array  $messageMail                短信消息内容
     * @param int    $messageMail['message_id']  消息ID
     * @param int    $messageMail['receiver_id'] 接收者ID
     * @param string $messageMail['mail_to']     邮箱地址
     * @param string $messageMail['content']     短信内容
     * @param int    $messageMail['status']      发送状态：0 待发送 1 成功 2 已发送，状态未知 4 失败
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return int
     * @requestExample([""])
     * @returnExample(1)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-3
     */
    public function addMail(array $messageMail): int;
}
