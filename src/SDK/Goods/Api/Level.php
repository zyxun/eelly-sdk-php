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
use Eelly\SDK\Goods\Service\LevelInterface;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Level implements LevelInterface
{

    /**
     * 新增二级分类价格档次
     * 新增二级分类价格档次
     *
     * @param array $levelData 价格档次数据
     * @param int $levelData["cateId"] 分类id
     * @param int $levelData["heightPrice"] 高档起始价格
     * @param int $levelData["middlePrice"] 中档起始价格
     * @param int $levelData["lowPrice"] 抵挡起始价格
     * @param int $levelData["season"] 季节分类 1 春夏款 2 秋冬款
     * @param int $levelData["status"] 是否启用 0 不启用 1 启用
     * @return bool 新增结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
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
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月27日
     */
    public function addLevel(array $levelData): bool
    {
        return EellyClient::request('goods/level', 'addLevel', $levelData);
    }

    /**
     * 修改二级分类价格档次
     * 修改二级分类价格档次
     *
     * @param array $levelData 价格档次数据
     * @param int $levelData["levelId"] 价格档次id
     * @param int $levelData["cateId"] 分类id
     * @param int $levelData["heightPrice"] 高档起始价格
     * @param int $levelData["middlePrice"] 中档起始价格
     * @param int $levelData["lowPrice"] 抵挡起始价格
     * @param int $levelData["season"] 季节分类 1 春夏款 2 秋冬款
     * @param int $levelData["status"] 是否启用 0 不启用 1 启用
     * @return bool 修改结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
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
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月27日
     */
    public function updateLevel(array $levelData): bool
    {
        return EellyClient::request('goods/level', 'updateLevel', $levelData);
    }

    /**
     * 删除二级分类价格档次
     * 删除二级分类价格档次
     *
     * @param int $levelId 价格档次id
     * @return bool 删除结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "levelId":1
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月27日
     */
    public function deleteLevel(int $levelId): bool
    {
        return EellyClient::request('goods/level', 'deleteLevel', $levelId);
    }

    /**
     * 获取二级分类价格档次信息
     * 获取二级分类价格档次信息
     *
     * @param int $cateId 分类id
     * @param int $season 类型 -1 全部 1 春夏款 2 秋冬款
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
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月27日
     */
    public function getLevel(int $cateId, int $season = -1): array
    {
        return EellyClient::request('goods/level', 'getLevel', $cateId, $season);
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