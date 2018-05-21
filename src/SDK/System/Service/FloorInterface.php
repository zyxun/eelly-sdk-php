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

namespace Eelly\SDK\System\Service;

use Eelly\SDK\System\DTO\FloorDTO;

/**
 * 楼层信息.
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface FloorInterface
{
    /**
     * 获取楼层信息.
     *
     * @param int $floorId
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------|-------|--------------
     * floorId     |string |    楼层id
     * marketId    |string |    所属市场ID
     * floorName   |string |    楼层名称
     * floorStores |string |    楼层店铺数
     * floorServer |string |    楼层服务
     * category    |string |    楼层主营
     * sort        |string |    排序
     * remark      |string |    备注
     * createdTime |string |    添加时间
     * updateTime  |string |    修改时间
     *
     * @throws FloorException
     *
     * @return FloorDTO
     * @requestExample({"floorId": 1})
     * @returnExample({"floorId":"6397","marketId":"177","floorName":"1层","floorStores":"0","floorServer":"","category":"","sort":"65535","remark":"","createdTime":"0","updateTime":"2017-11-27 11:32:04"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017年11月27日
     *
     * @validation(
     *     @digit(0, {message:"非法的楼层id类型"})
     * )
     */
    public function getFloor(int $floorId): FloorDTO;
}
