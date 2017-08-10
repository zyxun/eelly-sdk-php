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
interface SmsInterface
{
    /**
     * @param array  $messageSms                短信消息内容
     * @param int    $messageSms['message_id']  消息ID
     * @param int    $messageSms['receiver_id'] 接收者ID
     * @param string $messageSms['mobile']      手机
     * @param string $messageSms['content']     短信内容
     * @param int    $messageSms['status']      发送状态：0 待发送 1 成功 2 已发送，状态未知 4 失败
     * @param string $messageSms['channel']     发送通道：dsf东时方 yy优易 emay亿美 topen 拓鹏
     * @param string $messageSms['response']    状态报告
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
    public function addSms(array $messageSms): int;
}
