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

/**
 * 店铺打印设置
 */
interface PrintSettingInterface
{
    /**
     * 添加一条店铺打印设置 | 更新店铺打印设置
     *
     * > data 数据说明
     * 
     * key | type | value
     * --- | ---- | -----
     * type | int | 设置的类型 1 电子面单打印设置 2 配货单打印设置 3 发货单打印设置
     * goodsName | int | 是否打印商品名：0 否 1 是
     * goodsNumber | int | 是否打印商品号：0 否 1 是
     * goodsSpec | int | 是否打印商品规格：0 否 1 是
     * goodsPrice | int | 是否打印商品价格：0 否 1 是
     * goodsImage | int | 是否打印商品图片：0 否 1 是
     * quantity | int | 是否打印购买商品数量：0 否 1 是
     * paperStyle | string | 纸张样式：如 100*180、A4等
     * fontSize | int | 打印字号大小：0 未设置，默认6号字
     * 
     * @param array $data 添加的数据
     * @param UserDTO|null $user 当前登陆的用户
     * @return bool
     * 
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.12.27
     */
    public function addPrintSetting(array $data, UidDTO $user = null):bool;

    /**
     * 获取店铺打印设置
     * 
     * > 返回数据说明
     * 
     * key | type | value
     * --- | ---- | -----
     * spsId | int | 店铺打印设置的主键
     * storeId | int | 店铺id
     * type | int | 设置的类型 1 电子面单打印设置 2 配货单打印设置 3 发货单打印设置
     * goodsName | int | 是否打印商品名：0 否 1 是
     * goodsNumber | int | 是否打印商品号：0 否 1 是
     * goodsSpec | int | 是否打印商品规格：0 否 1 是
     * goodsPrice | int | 是否打印商品价格：0 否 1 是
     * goodsImage | int | 是否打印商品图片：0 否 1 是
     * quantity | int | 是否打印购买商品数量：0 否 1 是
     * paperStyle | string | 纸张样式：如 100*180、A4等
     * fontSize | int | 打印字号大小：0 未设置，默认6号字
     * createdTime | int | 设置的时间
     * updateTime | datetime | 更新的时间
     *
     * @param integer $storeId 店铺id
     * @param integer $type 类型 1 电子面单打印设置 2 配货单打印设置 3 发货单打印设置
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.12.28
     */
    public function get(int $storeId, int $type):array;

    /**
     * 根据查询条件，返回一条对应的记录
     *
     * @param string $condition 查询条件
     * @param array $bind  绑定参数
     * @return array
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.12.27
     */
    public function getPrintSetting(string $condition, array $bind = []):array;
}
