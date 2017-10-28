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
use Eelly\SDK\Goods\Service\DescriptionInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Description implements DescriptionInterface
{

    /**
     * 新增商品描述
     * 新增商品描述信息
     *
     * @param int $goodsId 商品id
     * @param array $descrData 描述数据
     * @param int $descrData["0"]["type"] 描述类型 1 pc 2 手机
     * @param string $descrData["0"]["description"] 描述内容
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 新增结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "goodsId":1,
     *     "descrData":[
     *         {
     *             "type":1,
     *             "description":"描述信息"
     *         }
     *     ]
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年10月17日
     */
    public function addDescription(int $goodsId, array $descrData, UidDTO $user = null): bool
    {
        return EellyClient::request('goods/description', 'addDescription', $goodsId, $descrData, $user);
    }

    /**
     * 修改商品描述
     * 修改商品描述信息
     *
     * @param int $goodsId 商品id
     * @param array $descrData 描述数据
     * @param int $descrData["type"] 描述类型 1 pc 2 手机
     * @param string $descrData["description"] 描述内容
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 修改结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "goodsId":1,
     *     "descrData":{
     *         "type":2,
     *         "description":"描述信息"
     *     }
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年10月17日
     */
    public function updateDescription(int $goodsId, array $descrData, UidDTO $user = null): bool
    {
        return EellyClient::request('goods/description', 'updateDescription', $goodsId, $descrData, $user);
    }

    /**
     * 删除商品描述
     * 删除商品描述信息
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
     * @since 2017年10月17日
     */
    public function deleteDescription(int $goodsId, UidDTO $user = null): bool
    {
        return EellyClient::request('goods/description', 'deleteDescription', $goodsId, $user);
    }

    /**
     * 获取商品描述
     * 获取商品描述信息
     *
     * @param int $goodsId 商品id
     * @return array 描述信息
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "goodsId":1
     * })
     * @returnExample({
     *     "goodsName":"商品名称",
     *     "pcDescription":"pc描述",
     *     "mobileDescription":"手机描述",
     *     "createdTime":"1970-01-01 01:01:01"
     * })
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年10月17日
     */
    public function getDescription(int $goodsId): array
    {
        return EellyClient::request('goods/description', 'getDescription', $goodsId);
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