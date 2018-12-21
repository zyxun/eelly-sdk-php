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

interface WaybillSettingInterface
{
    /**
     * 添加店铺打印设置
     * 
     * > data 数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * showGoodsName | int | 是否展示商品名 0:否 1:是
     * showGoodsNumber | int | 是否展示商品号 0:否 1:是
     * showSpec | int | 是否展示商品规格 0:否 1:是
     * showQuantity | int | 是否展示数量 0:否 1:是
     * paperSetting | string | 纸张设置 例如 100*180
     * fontSetting | int | 字体大小设置
     *
     * @param array $data 添加的数据
     * @param UidDTO|null $user 当前登录的用户
     * @return boolean
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.12.21
     */
    public function add(array $data, UidDTO $user = null): boolean;

    /**
     * 更新店铺打印设置
     * 
     * > data 数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * showGoodsName | int | 是否展示商品名 0:否 1:是
     * showGoodsNumber | int | 是否展示商品号 0:否 1:是
     * showSpec | int | 是否展示商品规格 0:否 1:是
     * showQuantity | int | 是否展示数量 0:否 1:是
     * paperSetting | string | 纸张设置 例如 100*180
     * fontSetting | int | 字体大小设置
     *
     * @param array $data 更新的数据
     * @param UidDTO $user 当前登录的用户
     * @return boolean
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.12.21
     */
    public function update(array $data, UidDTO $user = null): bool;

    /**
     * 获取店铺打印设置
     * 
     * > 返回数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * storeId | int | 店铺id
     * showGoodsName | int | 是否展示商品名 0:否 1:是
     * showGoodsNumber | int | 是否展示商品号 0:否 1:是
     * showSpec | int | 是否展示商品规格 0:否 1:是
     * showQuantity | int | 是否展示数量 0:否 1:是
     * paperSetting | string | 纸张设置 例如 100*180
     * fontSetting | int | 字体大小设置
     * createdTime | int | 创建时间戳
     * updateTime | datetime | 更新时间
     *
     * @param integer $storeId 店铺id
     * @return array
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.12.21
     */
    public function getWaybillSetting(int $storeId): array;
}
