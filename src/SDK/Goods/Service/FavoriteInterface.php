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

namespace Eelly\SDK\Goods\Service;

use Eelly\DTO\UidDTO;

/**
 * 商品收藏.
 *
 * @author wangjiang<wangjiang@eelly.net>
 */
interface FavoriteInterface
{
    /**
     * 新增商品收藏
     * 新增商品收藏
     *
     * @param int $goodsId 商品id
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 新增结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "goodsId":1
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年10月14日
     */
    public function addFavorite(int $goodsId, UidDTO $user = null): bool;

    /**
     * 删除商品收藏
     * 删除商品收藏
     *
     * @param int $goodsId 商品id
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 删除结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "goodsId":1
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年10月14日
     */
    public function deleteFavorite(int $goodsId, UidDTO $user = null): bool;

    /**
     * 获取用户商品收藏
     * 获取用户商品收藏信息
     *
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return array 商品收藏信息
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample()
     * @returnExample([
     *     {
     *         "favoriteId":5,
     *         "goodsName":"商品名称",
     *         "goodsNumber":"商品货号",
     *         "createdTime":"1970-01-01 01:01:01"
     *     }
     * ])
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年10月14日
     */
    public function getFavorite(UidDTO $user = null): array;
}
