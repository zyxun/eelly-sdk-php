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

namespace Eelly\SDK\Im\Service;

/**
 * IM消息逻辑接口层
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface MsgInterface
{
    /**
     * 保存IM消息
     *
     * @param array $msg
     * @return mixed
     *
     * @author zhangyangxun
     * @since 2019-03-13
     */
    public function saveNeteaseMsg(array $msg);

    /**
     * 发送消息
     *
     * @param array $msg
     * @return mixed
     * @author zhangyangxun
     * @since 2019/6/11
     */
    public function sendMsg(array $msg);
}