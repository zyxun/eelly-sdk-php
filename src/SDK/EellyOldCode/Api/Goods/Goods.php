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

namespace Eelly\SDK\EellyOldCode\Api\Goods;

use Eelly\SDK\EellyClient;

/**
 * Class Goods.
 *
 *  modules/Goods/Service/GoodsService.php
 *
 * @author hehui<hehui@eelly.net>
 */
class Goods
{
    /**
     * @param $goodsId
     * @param int $userId
     *
     * @return mixed
     */
    public function getWapGoodsInfo($goodsId, $userId = 0)
    {
        return EellyClient::request('eellyOldCode/goods/goods', __FUNCTION__, true, $goodsId, $userId);
    }

    /**
     * @param $goodsId
     * @param $userId
     * @param int $limit
     *
     * @return mixed
     */
    public function getOtherGoods($goodsId, $userId, $limit = 100)
    {
        return EellyClient::request('eellyOldCode/goods/goods', __FUNCTION__, true, $goodsId, $userId, $limit);
    }

    /**
     * @param $userId
     * @param array $goodsIds
     *
     * @return mixed
     */
    public function goodsIndexPermissionNew($userId, array $goodsIds)
    {
        return EellyClient::request('eellyOldCode/goods/goods', __FUNCTION__, true, $userId, $goodsIds);
    }

    /**
     * @param $searchParams
     * @param string $type
     *
     * @return mixed
     */
    public function buyerSearchGoods($searchParams, $type = 'app')
    {
        return EellyClient::request('eellyOldCode/goods/goods', __FUNCTION__, true, $searchParams, $type);
    }

    /**
     * 获取商品数据.
     *
     * @param array $where 条件
     * @param int   $page  页码
     * @param int   $limit 条数
     *
     * @return array
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年06月13日
     */
    public function getGoodsData(array $where, int $page = 1, int $limit = 10): array
    {
        return EellyClient::request('eellyOldCode/goods/goods', __FUNCTION__, true, $where, $page, $limit);
    }

    /**
     * 小程序零售化 获取推荐商品.
     *
     * @param array $goodsIds 商品ID
     * @param int   $page     页码
     * @param int   $limit    条数
     *
     * @return array
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since  2018年08月24日
     */
    public function getRememberGoodsData(array $goodsIds, int $page = 1, int $limit = 10): array
    {
        return EellyClient::request('eellyOldCode/goods/goods', __FUNCTION__, true, $goodsIds, $page, $limit);
    }

    /**
     * 根据$goodsIds 获取商品信息.
     *
     * @param array  $goodsIds 商品id
     * @param int    $userId   用户id
     * @param string $type     类型
     *
     * @return array $goodsInfo
     *
     * @since 2015年6月8日
     */
    public function getGoodsInfo(array $goodsIds, int $userId = 0, string $type = 'mall')
    {
        return EellyClient::request('eellyOldCode/goods/goods', __FUNCTION__, true, $goodsIds, $userId, $type);
    }

    /**
     * 获取商品信息.
     *
     * @param array  $priceInfo 商品的价格信息
     * @param number $specId    规格id
     * @param number $quantity  购买量
     *
     * @return number
     *
     * @author  何砚文<heyanwen@eelly.net>
     *
     * @since   2015-6-10
     */
    public function getGoodsPrice($priceInfo, $specId, $quantity)
    {
        return EellyClient::request('eellyOldCode/goods/goods', __FUNCTION__, true, $priceInfo, $specId, $quantity);
    }

    /**
     * 根据商品id，获取分享赚钱海报需要的数据
     *
     * @param array $goodsIds  商品id
     * @return array
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2019.08.02
     */
    public function getGoodsPosterInfo(array $goodsIds):array
    {
        return EellyClient::request('eellyOldCode/goods/goods', __FUNCTION__, true, $goodsIds);
    }
}
