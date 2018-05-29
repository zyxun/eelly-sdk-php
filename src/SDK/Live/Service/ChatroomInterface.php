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

namespace Eelly\SDK\Live\Service;

/**
 * 直播间聊天室.
 */
interface ChatroomInterface
{
    /**
     * 修改直播间商品价格推送聊天室消息.
     *
     * @param int    $liveId                直播id
     * @param array  $extBody               扩展消息体
     * @param int    $extBody['goodsId']    商品id
     * @param string $extBody['goodsImage'] 商品图片
     * @param string $extBody['goodsName']  商品名
     * @param int    $extBody['goodsPrice'] 商品价格（分）
     * @param int    $extBody['minBuy']     起批量
     *
     * @return bool
     *
     * @requestExample({
     *     "goodsImage": "https://img.eelly.com/a.jpg",
     *     "goodsName": "商品名",
     *     "goodsPrice": "1500",
     *     "minBuy": "3"
     * })
     *
     * @returnExample(true)
     *
     * @author hehui<hehui@eelly.net>
     */
    public function sendChangeLiveGoodsPriceChatroomMsg(int $liveId, array $extBody): bool;
}
