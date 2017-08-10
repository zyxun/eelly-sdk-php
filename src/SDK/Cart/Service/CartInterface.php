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

namespace Eelly\SDK\Cart\Service;

use Eelly\DTO\UserDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface CartInterface
{
    /**
     * 添加进购物车.
     *
     * @param int     $goodsId  商品id
     * @param int     $spId     商品规格id
     * @param int     $quantity 商品数量
     * @param int     $price    商品价格，单位为分
     * @param UserDTO $user     用户信息
     *
     * @throws \Eelly\SDK\Cart\Exception\CartException
     *
     * @return bool 返回bool值
     * @requestExample([1,2,1,2,10000,{"user_id":"1","username":"liangxinyi"}])
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-31
     */
    public function addCart(int $goodsId, int $spId, int $quantity, int $price, UserDTO $user): bool;

    /**
     * 清空购物车.
     *
     * @param UserDTO $user 用户信息
     *
     * @throws \Eelly\SDK\Cart\Exception\CartException
     *
     * @return bool
     * @requestExample({"user_id":"1","username":"liangxinyi"})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-31
     */
    public function clearCart(UserDTO $user): bool;

    /**
     * 获取购物车列表.
     *
     * @param UserDTO $user 用户信息
     *
     * @return array
     * @requestExample({"user_id":"1","username":"liangxinyi"})
     * @returnExample({"goods_3_2":"{\"goods_id\":3,\"sp_id\":2,\"quantity\":3,\"price\":10000,\"created_time\":1501517584,\"update_time\":0}","goods_1_2":"{\"goods_id\":1,\"sp_id\":2,\"quantity\":12,\"price\":10000,\"created_time\":1501515811,\"update_time\":\"2017-07-31 23:43:38\"}"})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-31
     */
    public function listCart(UserDTO $user): array;

    /**
     * 删除指定id购物车数据.
     *
     * @param int string 指定购物车key值，数据格式$cartId='goods_1_2'
     * @param int     $spId 商品规格id
     * @param UserDTO $user 用户信息
     *
     * @throws \InvalidArgumentException
     * @throws \Eelly\SDK\Cart\Exception\CartException
     *
     * @return bool
     * @requestExample(['goods_1_2',{"user_id":"1","username":"liangxinyi"}])
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-31
     */
    public function deleteCart(string $cartId, UserDTO $user): bool;

    /**
     * 更新指定id购物车.
     *
     * @param string  $cartId   指定购物车key值，数据格式$cartId='goods_1_2'
     * @param int     $quantity 商品数量
     * @param UserDTO $user     用户信息
     *
     * @throws \InvalidArgumentException
     * @throws \Eelly\SDK\Cart\Exception\CartException
     *
     * @return bool
     * @requestExample(['goods_1_2,3',{"user_id":"1","username":"liangxinyi"}])
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-31
     */
    public function updateCart(string $cartId, int $quantity, UserDTO $user): bool;

    /**
     * 批量移除购物车.
     *
     * @param array   $cartIds 购物车key值id数组,数据格式$cartIds=[0=>'goods_1_2']
     * @param UserDTO $user    用户信息
     *
     * @throws \InvalidArgumentException
     * @throws \Eelly\SDK\Cart\Exception\CartException
     *
     * @return bool
     * @requestExample([[1,2,3],{"user_id":"1","username":"liangxinyi"}])
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-31
     */
    public function deleteCartBatch(array $cartIds, UserDTO $user): bool;
}
