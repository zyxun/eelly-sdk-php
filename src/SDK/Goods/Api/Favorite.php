<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Goods\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Goods\Service\FavoriteInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Favorite implements FavoriteInterface
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
    public function addFavorite(int $goodsId, UidDTO $user = null): bool
    {
        return EellyClient::request('goods/favorite', 'addFavorite', $goodsId, $user);
    }

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
    public function deleteFavorite(int $goodsId, UidDTO $user = null): bool
    {
        return EellyClient::request('goods/favorite', 'deleteFavorite', $goodsId, $user);
    }

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
    public function getFavorite(UidDTO $user = null): array
    {
        return EellyClient::request('goods/favorite', 'getFavorite', $user);
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