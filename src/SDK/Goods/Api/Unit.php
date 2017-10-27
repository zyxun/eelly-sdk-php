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
use Eelly\SDK\Goods\Service\UnitInterface;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Unit implements UnitInterface
{

    /**
     * 新增商品计量单位
     * 新增商品计量单位
     *
     * @param array $unitData 计量单位数据
     * @param string $unitData["name"] 单位名称
     * @param int $unitData["type"] 单位类型 0 基础单位 1 批量单位
     * @param int $unitData["status"] 状态 0 无效  1 有效
     * @param int $unitData["sort"] 排序
     * @return bool 新增结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "unitData":{
     *         "name":"单位名称",
     *         "type":1,
     *         "status":1,
     *         "sort":2
     *     }
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月27日
     */
    public function addUnit(array $unitData): bool
    {
        return EellyClient::request('goods/unit', 'addUnit', $unitData);
    }

    /**
     * 修改商品计量单位
     * 修改商品计量单位
     *
     * @param array $unitData 计量单位数据
     * @param int $unitData["unitId"] 计量单位id
     * @param string $unitData["name"] 单位名称
     * @param int $unitData["type"] 单位类型 0 基础单位 1 批量单位
     * @param int $unitData["status"] 状态 0 无效  1 有效
     * @param int $unitData["sort"] 排序
     * @return bool 修改结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "unitData":{
     *         "unitId":1,
     *         "name":"单位名称",
     *         "type":1,
     *         "status":1,
     *         "sort":2
     *     }
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月27日
     */
    public function updateUnit(array $unitData): bool
    {
        return EellyClient::request('goods/unit', 'updateUnit', $unitData);
    }

    /**
     * 删除商品计量单位
     * 删除商品计量单位
     *
     * @param int $unitId 计量单位id
     * @return bool 删除结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "unitId":1
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月27日
     */
    public function deleteUnit(int $unitId): bool
    {
        return EellyClient::request('goods/unit', 'deleteUnit', $unitId);
    }

    /**
     * 获取商品计量单位信息
     * 获取商品计量单位信息
     *
     * @param int $type 单位类型 -1 全部 0 基础单位 1 批量单位
     * @return array 计量单位信息
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "type":1
     * })
     * @returnExample([
     *     {
     *         "unitId":1,
     *         "name":"单位名称",
     *         "type":0
     *     }
     * ])
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月27日
     */
    public function getUnit(int $type = -1): array
    {
        return EellyClient::request('goods/unit', 'getUnit', $type);
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