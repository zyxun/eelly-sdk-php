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

namespace Eelly\SDK\Store\Service;

use Eelly\DTO\UidDTO;

/**
 * 店铺物流配送区域.
 *
 * @author wangjiang<wangjiang@eelly.net>
 */
interface LogisticsRegionInterface
{
    /**
     * 新增物流配送区域
     * 新增店铺的物流配送区域
     *
     * @param array $regionData 配送区域数据
     * @param int $regionData["modeId"] 配送方式id
     * @param array $regionData["gbCodes"] 区域国标编码列表
     * @param string $regionData["gbCodes"]["0"] 区域国标编码
     * @param string $regionData["gbCodes"]["1"] 区域国标编码
     * @param int $regionData["baseweight"] 区域首重
     * @param int $regionData["overweight"] 区域续重
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 新增结果
     * @throws \Eelly\SDK\Store\Exception\StoreException
     * @requestExample({
     *     "regionData":{
     *         "modeId":1,
     *         "gbCodes":["10001", "10002"],
     *         "baseweight":3,
     *         "overweight":4
     *     }
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月12日
     */
    public function addLogisticsRegion(array $regionData, UidDTO $user = null): bool;

    /**
     * 修改物流配送区域
     * 修改店铺的物流配送区域
     *
     * @param array $regionData 配送区域数据
     * @param int $regionData["regionId"] 配送区域id
     * @param array $regionData["gbCodes"] 区域国标编码列表
     * @param string $regionData["gbCodes"]["0"] 区域国标编码
     * @param string $regionData["gbCodes"]["1"] 区域国标编码
     * @param int $regionData["baseweight"] 区域首重
     * @param int $regionData["overweight"] 区域续重
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 修改结果
     * @throws \Eelly\SDK\Store\Exception\StoreException
     * @requestExample({
     *     "regionData":{
     *         "regionId":1,
     *         "gbCodes":["10001", "10002"],
     *         "baseweight":3,
     *         "overweight":4
     *     }
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月12日
     */
    public function updateLogisticsRegion(array $regionData, UidDTO $user = null): bool;

    /**
     * 删除物流配送区域
     * 删除店铺的物流配送区域
     *
     * @param int $regionId 配送区域id
     * @param UidDTO $user 登录用户信息
     * @return bool 删除结果
     * @throws \Eelly\SDK\Store\Exception\StoreException
     * @requestExample({
     *     "regionId":1
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月12日
     */
    public function deleteLogisticsRegion(int $regionId, UidDTO $user = null): bool;

    /**
     * 获取配送方式
     * 获取店铺的物流配送方式
     *
     * @param int $modeId 物流配送方式id
     * @return array
     * @throws \Eelly\SDK\Store\Exception\StoreException
     * @requestExample({
     *     "modeId":1
     * })
     * @returnExample([
     *     {
     *         "regionId":1,
     *         "templateName":"模板名称",
     *         "mode":1,
     *         "initBaseweight":3,
     *         "initOverweight":4,
     *         "isCod":0,
     *         "gbCodes":["10001", "10002"],
     *         "regionBaseweight":5,
     *         "regionOverweight":6,
     *         "createdTime":"1970-01-01 01:01:01"
     *     }
     * ])
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月11日
     */
    public function getLogisticsRegion(int $modeId): array;
}
