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

namespace Eelly\SDK\Log\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Log\Service\GoodsPriceInterface;
use Eelly\SDK\Log\DTO\GoodsPriceDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class GoodsPrice implements GoodsPriceInterface
{
    /**
     * 获取一条价格记录.
     *
     * @param int $lgpId 历史记录ID
     *
     * @throws \Eelly\SDK\Log\Exception\GoodsHandleException
     *
     * @return GoodsPriceDTO
     * @requestExample({'lgpId':1})
     * @returnExample({"lgpId": 1, "goodsId": 1, "quantity": 2, "price": "2", "type": 3, "createdTime": "2017-09-04 16:07:05"})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月11日
     * @Validation(
     *      @OperatorValidator(0,{message : "日志ID",operator:["gt",0]})
     * )
     */
    public function getGoodsPrice(int $lgpId): GoodsPriceDTO
    {
        return EellyClient::request('log/goodsPrice', __FUNCTION__, true, $lgpId);
    }

    /**
     * 获取一条价格记录.
     *
     * @param int $lgpId 历史记录ID
     *
     * @throws \Eelly\SDK\Log\Exception\GoodsHandleException
     *
     * @return GoodsPriceDTO
     * @requestExample({'lgpId':1})
     * @returnExample({"lgpId": 1, "goodsId": 1, "quantity": 2, "price": "2", "type": 3, "createdTime": "2017-09-04 16:07:05"})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月11日
     * @Validation(
     *      @OperatorValidator(0,{message : "日志ID",operator:["gt",0]})
     * )
     */
    public function getGoodsPriceAsync(int $lgpId)
    {
        return EellyClient::request('log/goodsPrice', __FUNCTION__, false, $lgpId);
    }

    /**
     * 记录当前的商品的价格.
     *
     * @param array $data
     * @param int   $data ['goodsId'] 商品ID
     * @param int   $data ['quantity'] 区间起始数量
     * @param int   $data ['price'] 商品价格
     * @param int   $data ['type'] 价格类型：1 散批 2 拿货 3 打包
     *
     * @throws \Eelly\SDK\Log\Exception\GoodsHandleException
     *
     * @return bool
     * @requestExample({'data':{'goodsId':1,'quantity':1,'price':200,'type':1}})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月04日
     */
    public function addGoodsPrice(array $data): bool
    {
        return EellyClient::request('log/goodsPrice', __FUNCTION__, true, $data);
    }

    /**
     * 记录当前的商品的价格.
     *
     * @param array $data
     * @param int   $data ['goodsId'] 商品ID
     * @param int   $data ['quantity'] 区间起始数量
     * @param int   $data ['price'] 商品价格
     * @param int   $data ['type'] 价格类型：1 散批 2 拿货 3 打包
     *
     * @throws \Eelly\SDK\Log\Exception\GoodsHandleException
     *
     * @return bool
     * @requestExample({'data':{'goodsId':1,'quantity':1,'price':200,'type':1}})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月04日
     */
    public function addGoodsPriceAsync(array $data)
    {
        return EellyClient::request('log/goodsPrice', __FUNCTION__, false, $data);
    }

    /**
     * 商品价格分页操作.
     *
     * @param int $goodsId     商品id
     * @param int $currentPage 第几页
     * @param int $limit       条数
     *
     * @throws \Eelly\SDK\Log\Exception\GoodsHandleException
     *
     * @return array
     * @requestExample({'goodsId':1,'currentPage':1,'limit':10})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月04日
     */
    public function listGoodsPricePage(int $goodsId, int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('log/goodsPrice', __FUNCTION__, true, $goodsId, $currentPage, $limit);
    }

    /**
     * 商品价格分页操作.
     *
     * @param int $goodsId     商品id
     * @param int $currentPage 第几页
     * @param int $limit       条数
     *
     * @throws \Eelly\SDK\Log\Exception\GoodsHandleException
     *
     * @return array
     * @requestExample({'goodsId':1,'currentPage':1,'limit':10})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月04日
     */
    public function listGoodsPricePageAsync(int $goodsId, int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('log/goodsPrice', __FUNCTION__, false, $goodsId, $currentPage, $limit);
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