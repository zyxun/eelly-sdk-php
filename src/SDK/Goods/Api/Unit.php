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
use Eelly\SDK\Goods\Service\UnitInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Unit implements UnitInterface
{
    /**
     * 新增商品计量单位
     * 新增商品计量单位.
     *
     * @param array  $unitData           计量单位数据
     * @param string $unitData["name"]   单位名称
     * @param int    $unitData["type"]   单位类型 0 基础单位 1 批量单位
     * @param int    $unitData["status"] 状态 0 无效  1 有效
     * @param int    $unitData["sort"]   排序
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "unitData":{
     *         "name":"单位名称",
     *         "type":1,
     *         "status":1,
     *         "sort":2
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月27日
     */
    public function addUnit(array $unitData): bool
    {
        return EellyClient::request('goods/unit', __FUNCTION__, true, $unitData);
    }

    /**
     * 新增商品计量单位
     * 新增商品计量单位.
     *
     * @param array  $unitData           计量单位数据
     * @param string $unitData["name"]   单位名称
     * @param int    $unitData["type"]   单位类型 0 基础单位 1 批量单位
     * @param int    $unitData["status"] 状态 0 无效  1 有效
     * @param int    $unitData["sort"]   排序
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "unitData":{
     *         "name":"单位名称",
     *         "type":1,
     *         "status":1,
     *         "sort":2
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月27日
     */
    public function addUnitAsync(array $unitData)
    {
        return EellyClient::request('goods/unit', __FUNCTION__, false, $unitData);
    }

    /**
     * 修改商品计量单位
     * 修改商品计量单位.
     *
     * @param array  $unitData           计量单位数据
     * @param int    $unitData["unitId"] 计量单位id
     * @param string $unitData["name"]   单位名称
     * @param int    $unitData["type"]   单位类型 0 基础单位 1 批量单位
     * @param int    $unitData["status"] 状态 0 无效  1 有效
     * @param int    $unitData["sort"]   排序
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 修改结果
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
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月27日
     */
    public function updateUnit(array $unitData): bool
    {
        return EellyClient::request('goods/unit', __FUNCTION__, true, $unitData);
    }

    /**
     * 修改商品计量单位
     * 修改商品计量单位.
     *
     * @param array  $unitData           计量单位数据
     * @param int    $unitData["unitId"] 计量单位id
     * @param string $unitData["name"]   单位名称
     * @param int    $unitData["type"]   单位类型 0 基础单位 1 批量单位
     * @param int    $unitData["status"] 状态 0 无效  1 有效
     * @param int    $unitData["sort"]   排序
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 修改结果
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
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月27日
     */
    public function updateUnitAsync(array $unitData)
    {
        return EellyClient::request('goods/unit', __FUNCTION__, false, $unitData);
    }

    /**
     * 删除商品计量单位
     * 删除商品计量单位.
     *
     * @param int $unitId 计量单位id
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 删除结果
     * @requestExample({
     *     "unitId":1
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月27日
     */
    public function deleteUnit(int $unitId): bool
    {
        return EellyClient::request('goods/unit', __FUNCTION__, true, $unitId);
    }

    /**
     * 删除商品计量单位
     * 删除商品计量单位.
     *
     * @param int $unitId 计量单位id
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 删除结果
     * @requestExample({
     *     "unitId":1
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月27日
     */
    public function deleteUnitAsync(int $unitId)
    {
        return EellyClient::request('goods/unit', __FUNCTION__, false, $unitId);
    }

    /**
     * 获取商品计量单位信息
     * 获取商品计量单位信息.
     *
     * @param int $type 单位类型 -1 全部 0 基础单位 1 批量单位
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return array 计量单位信息
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
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月27日
     */
    public function getUnit(int $type = -1): array
    {
        return EellyClient::request('goods/unit', __FUNCTION__, true, $type);
    }

    /**
     * 获取商品计量单位信息
     * 获取商品计量单位信息.
     *
     * @param int $type 单位类型 -1 全部 0 基础单位 1 批量单位
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return array 计量单位信息
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
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月27日
     */
    public function getUnitAsync(int $type = -1)
    {
        return EellyClient::request('goods/unit', __FUNCTION__, false, $type);
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