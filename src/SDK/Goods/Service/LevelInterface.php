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

/**
 * 二级分类价格档次.
 *
 * @author wangjiang<wangjiang@eelly.net>
 */
interface LevelInterface
{
    /**
     * 新增二级分类价格档次
     * 新增二级分类价格档次
     *
     * @param array $levelData                价格档次数据
     * @param int   $levelData["cateId"]      分类id
     * @param int   $levelData["heightPrice"] 高档起始价格
     * @param int   $levelData["middlePrice"] 中档起始价格
     * @param int   $levelData["lowPrice"]    抵挡起始价格
     * @param int   $levelData["season"]      季节分类 1 春夏款 2 秋冬款
     * @param int   $levelData["status"]      是否启用 0 不启用 1 启用
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "levelData":{
     *         "cateId":1,
     *         "heightPrice":100,
     *         "middlePrice":50,
     *         "lowPrice":10,
     *         "season":1,
     *         "status":1
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月27日
     */
    public function addLevel(array $levelData): bool;

    /**
     * 修改二级分类价格档次
     * 修改二级分类价格档次
     *
     * @param array $levelData                价格档次数据
     * @param int   $levelData["levelId"]     价格档次id
     * @param int   $levelData["cateId"]      分类id
     * @param int   $levelData["heightPrice"] 高档起始价格
     * @param int   $levelData["middlePrice"] 中档起始价格
     * @param int   $levelData["lowPrice"]    抵挡起始价格
     * @param int   $levelData["season"]      季节分类 1 春夏款 2 秋冬款
     * @param int   $levelData["status"]      是否启用 0 不启用 1 启用
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 修改结果
     * @requestExample({
     *     "levelData":{
     *         "levelId":1,
     *         "cateId":1,
     *         "heightPrice":100,
     *         "middlePrice":50,
     *         "lowPrice":10,
     *         "season":1,
     *         "status":1
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月27日
     */
    public function updateLevel(array $levelData): bool;

    /**
     * 删除二级分类价格档次
     * 删除二级分类价格档次
     *
     * @param int $levelId 价格档次id
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 删除结果
     * @requestExample({
     *     "levelId":1
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月27日
     */
    public function deleteLevel(int $levelId): bool;

    /**
     * 获取二级分类价格档次信息
     * 获取二级分类价格档次信息.
     *
     * @param int $cateId 分类id
     * @param int $season 类型 -1 全部 1 春夏款 2 秋冬款
     *
     * @return array 价格档次信息
     * @requestExample({
     *     "cateId":1,
     *     "season":-1
     * })
     * @returnExample([
     *     {
     *         "levelId":1,
     *         "heightPrice":100,
     *         "middlePrice":50,
     *         "lowPrice":10,
     *         "season":1,
     *         "status":1
     *     }
     * ])
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月27日
     */
    public function getLevel(int $cateId, int $season = -1): array;
}
