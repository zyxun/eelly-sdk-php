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

namespace Eelly\SDK\Goods\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Goods\Service\FavoriteInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Favorite
{
    /**
     * 新增商品收藏
     * 新增商品收藏.
     *
     * @param int               $goodsId 商品id
     * @param \Eelly\DTO\UidDTO $user    登录用户信息
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "goodsId":1
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月14日
     */
    public function addFavorite(int $goodsId, UidDTO $user = null): bool
    {
        return EellyClient::request('goods/favorite', __FUNCTION__, true, $goodsId, $user);
    }

    /**
     * 新增商品收藏
     * 新增商品收藏.
     *
     * @param int               $goodsId 商品id
     * @param \Eelly\DTO\UidDTO $user    登录用户信息
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "goodsId":1
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月14日
     */
    public function addFavoriteAsync(int $goodsId, UidDTO $user = null)
    {
        return EellyClient::request('goods/favorite', __FUNCTION__, false, $goodsId, $user);
    }

    /**
     * 删除商品收藏
     * 删除商品收藏.
     *
     * @param int               $goodsId 商品id
     * @param \Eelly\DTO\UidDTO $user    登录用户信息
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 删除结果
     * @requestExample({
     *     "goodsId":1
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月14日
     */
    public function deleteFavorite(int $goodsId, UidDTO $user = null): bool
    {
        return EellyClient::request('goods/favorite', __FUNCTION__, true, $goodsId, $user);
    }

    /**
     * 删除商品收藏
     * 删除商品收藏.
     *
     * @param int               $goodsId 商品id
     * @param \Eelly\DTO\UidDTO $user    登录用户信息
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 删除结果
     * @requestExample({
     *     "goodsId":1
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月14日
     */
    public function deleteFavoriteAsync(int $goodsId, UidDTO $user = null)
    {
        return EellyClient::request('goods/favorite', __FUNCTION__, false, $goodsId, $user);
    }

    /**
     * 获取用户商品收藏
     * 获取用户商品收藏信息.
     *
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return array 商品收藏信息
     * @requestExample()
     * @returnExample([
     *     {
     *         "favoriteId":5,
     *         "goodsName":"商品名称",
     *         "goodsNumber":"商品货号",
     *         "createdTime":"1970-01-01 01:01:01"
     *     }
     * ])
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月14日
     */
    public function getFavorite(UidDTO $user = null): array
    {
        return EellyClient::request('goods/favorite', __FUNCTION__, true, $user);
    }

    /**
     * 获取用户商品收藏
     * 获取用户商品收藏信息.
     *
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return array 商品收藏信息
     * @requestExample()
     * @returnExample([
     *     {
     *         "favoriteId":5,
     *         "goodsName":"商品名称",
     *         "goodsNumber":"商品货号",
     *         "createdTime":"1970-01-01 01:01:01"
     *     }
     * ])
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月14日
     */
    public function getFavoriteAsync(UidDTO $user = null)
    {
        return EellyClient::request('goods/favorite', __FUNCTION__, false, $user);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}