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

namespace Eelly\SDK\Service\Service;

use Eelly\DTO\UidDTO;
use Eelly\SDK\Service\DTO\EntityCustomDTO;

/**
 * 实体认证自定义商圈市场楼层.
 * 
 * @author eellytools<localhost.shell@gmail.com>
 */
interface EntityCustomInterface
{
    /**
     * 获取指定id的单条店铺实体认证自定义商圈市场楼层信息.
     *
     * @param int    $secId 自定义商圈市场楼层信息id
     *
     * @throws \Eelly\SDK\Service\Exception\EntityCustomException
     *
     * @return EntityCustomDTO
     * @requestExample({"secId":1})
     * @returnExample({"secId":1,"customMarket":"\u767d\u767d\u5417\u6279\u53d1\u5e02\u573a","customFloor":"18\u697c","status":1})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-15
     */
    public function getEntityCustom(int $secId): EntityCustomDTO;

    /**
     * 新增店铺实体认证自定义商圈市场楼层信息.
     *
     * @param array  $data                 新增数据
     * @param string $data['customMarket'] 自定义商圈市场
     * @param string $data['customFloor']  自定义楼层
     * @param UidDTO $user                 登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\EntityCustomException
     *
     * @return bool
     * @requestExample({"data":{"customMarket":"\u767d\u767d\u5417\u6279\u53d1\u5e02\u573a","customFloor":"18\u697c"}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-15
     */
    public function addEntityCustom(array $data, UidDTO $user = null): bool;

    /**
     * 修改店铺实体认证自定义商圈市场楼层信息.
     * 修改自定义信息，包括处理状态
     *
     * @param int    $secId                自定义商圈市场楼层信息ID
     * @param array  $data                 修改数据
     * @param string $data['customMarket'] 自定义商圈市场
     * @param string $data['customFloor']  自定义楼层
     * @param int    $data['status']       处理状态：0 未处理 1 已处理
     * @param UidDTO $user                 登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\EntityCustomException
     *
     * @return bool
     * @requestExample({"secId":1,"data":{"customMarket":"\u767d\u767d\u5417\u6279\u53d1\u5e02\u573a","customFloor":"18\u697c","status":1}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-15
     */
    public function updateEntityCustom(int $secId, array $data, UidDTO $user = null): bool;

    /**
     * 分页获取店铺实体认证自定义商圈市场楼层信息列表
     *
     * @param array  $condition                 查询条件
     * @param string $condition['customMarket'] 自定义商圈市场
     * @param string $condition['customFloor']  自定义楼层
     * @param int    $condition['status']       处理状态：0 未处理 1 已处理
     * @param int    $currentPage               当前页码
     * @param int    $limit                     每页条数
     *
     * @throws \Eelly\SDK\Service\Exception\EntityCustomException
     *
     * @return array
     * @requestExample({"condition":{"customMarket":"自定义商圈市场","customFloor":"自定义楼层","status":0}})
     * @returnExample({"items":[{"secId":"1","customMarket":"fsdfdsf","customFloor":"123","status":"1","createdTime":"1505462704"}],"page":{"totalPages":1,"totalItems":1,"limit":10}})
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-27
     * @Validation(
     *   @OperatorValidator(1,{message:"非法的页码",operator:["gt",0]}),
     *   @OperatorValidator(2,{message:"非法的条数",operator:["gt",0]})
     * )
     */
    public function listEntityCustomPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;

}
