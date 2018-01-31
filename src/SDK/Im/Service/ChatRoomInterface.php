<?php
declare(strict_types=1);
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Im\Service;

/**
 * 聊天室
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ChatRoomInterface
{
    /**
     * 获取直播间的基础数据.
     *
     * @param array $liveIds 多个直播值
     * @return array
     * @requestExample({"liveId":1})
     * @returnExample({"1":{"liveId":1,"chatroom":null,"_id":{"$oid":"5a7021d0044b8c00094de7ff"},"chatRoomName":"1111","liveTotalOnline":233}})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年01月31日
     */
    public function getChatRoomByLiveId(array $liveIds): array;
}