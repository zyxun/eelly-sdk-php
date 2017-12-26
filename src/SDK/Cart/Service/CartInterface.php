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

use Eelly\DTO\UidDTO;

/**
 * 购物车.
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface CartInterface
{
    /**
     * 添加进购物车.
     *
     * @param int    $goodsId    商品id
     * @param int    $quantity   商品数量
     * @param int    $price      商品价格
     * @param array  $attributes 额外参数
     * @param int    $attributes ["spId"] 商品规格id
     * @param array  $attributes ["color"] 颜色
     * @param array  $attributes ["size"]  码数
     * @param UidDTO $user       用户信息
     *
     * @throws \Eelly\SDK\Cart\Exception\CartException
     *
     * @return bool 返回bool值
     * @requestExample({"goodsId":1,"quantity":1,"price":10000})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年12月25日
     *
     * @Validation(
     *  @OperatorValidator(0,{message:"商品ID必须大于0",operator:["gt",0]}),
     *  @OperatorValidator(1,{message:"商品数量必须大于0",operator:["gt",0]}),
     *  @OperatorValidator(2,{message:"商品价格必须大于0",operator:["gt",0]})
     *)
     */
    public function addCart(int $goodsId, int $quantity, int $price, array $attributes = [], UidDTO $user = null): bool;

    /**
     * 清空购物车.
     *
     * @param UidDTO $user 用户信息
     *
     * @throws \Eelly\SDK\Cart\Exception\CartException
     *
     * @return bool 返回bool值
     * @requestExample()
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017-7-31
     */
    public function clearCart(UidDTO $user = null): bool;

    /**
     * 获取购物车列表.
     *
     * @param UidDTO $user 用户信息
     *
     * @return array 个人购物车列表
     * @requestExample()
     * @returnExample({{"rawId":"86e69d4b3503164e1de220c61e860d40","goodsId":11,"quantity":1,"price":11,"size":"大码","color":"红色"},{"rawId":"9b38f2c4f4cb25879e326e66f2ce0ae4","goodsId":11,"quantity":1,"price":11,"size":"大码","color":"红色"}})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017-7-31
     */
    public function listCart(UidDTO $user): array;

    /**
     * 删除指定id购物车数据.
     *
     *
     * @param string $rawId 指定购物车key值，goods+商品id+规格id,数据格式中md5值
     * @param UidDTO $user 用户信息
     *
     * @throws \InvalidArgumentException
     * @throws \Eelly\SDK\Cart\Exception\CartException
     *
     * @return bool
     * @requestExample({"rawId":"86e69d4b3503164e1de220c61e860d40"})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年12月26日
     * @Validation(
     *     @PresenceOf(0,{message :"非法购物车key值"})
     * )
     */
    public function deleteCart(string $rawId, UidDTO $user): bool;

    /**
     * 更新指定id购物车.
     *
     *
     * @param string $rawId 指定购物车key值
     * @param array  $data  修改数据
     * @param UidDTO $user  用户信息
     *
     * @throws \Eelly\SDK\Cart\Exception\CartException
     *
     * @return bool
     * @requestExample({"rawId":"86e69d4b3503164e1de220c61e860d40","data":{"quantity":2,"price":120}})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017-7-31
     * @Validation(
     *     @PresenceOf(0,{message :"非法购物车key值"})
     * )
     */
    public function updateCart(string $rawId, array $data = [], UidDTO $user = null): bool;

    /**
     * 批量移除购物车.
     *
     * @param array  $rawIds 购物车key值id数组,数据格式$cartIds=[0=>'goods_1_2']
     * @param UidDTO $user   用户信息
     *
     * @throws \Eelly\SDK\Cart\Exception\CartException
     *
     * @return bool 返回bool值
     * @requestExample({"rawIds":{"86e69d4b3503164e1de220c61e860d40","9b38f2c4f4cb25879e326e66f2ce0ae4"}})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年12月26日
     * @Validation(
     *     @PresenceOf(0,{message :"非法购物车key值"})
     * )
     */
    public function deleteCartBatch(array $rawIds, UidDTO $user): bool;
}
