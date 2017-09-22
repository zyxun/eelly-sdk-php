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
use Eelly\SDK\Service\DTO\ListsDTO;

/**
 * 增值服务清单.
 * 
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ListsInterface
{
    /**
     * 获取指定ID的单条增值服务清单.
     *
     * @param int $slId 服务清单ID
     *
     * @throws \Eelly\SDK\Service\Exception\ListsException
     *
     * @return ListsDTO
     * @requestExample({"slId":1})
     * @returnExample({"slId":1,"serviceId":1,"money":10,"number":0,"timeLimit":2,"discount":1,"status":1,"isBestow":1,"extField":""})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-22
     */
    public function getLists(int $slId): ListsDTO;

    /**
     * 新增增值服务清单.
     *
     * @param array  $data              新增数据
     * @param int    $data['serviceId'] 服务ID
     * @param int    $data['money']     收费金额，单位为分
     * @param int    $data['number']    数量设置：对应计数模式的数量，0为无限制
     * @param int    $data['timeLimit'] 服务期限：表示N个月，大于0，合同是服务打包购买，服务期限以合同版本主表为准
     * @param float  $data['discount']  折扣：0<=X<=1，0和1都表示无折扣
     * @param int    $data['status']    服务项状态：1 启用 2 停用 4 删除
     * @param int    $data['isBestow']  赠送状态：1 启用 2 停用
     * @param string $data['extField']  服务扩展字段：JSON格式，用于存放特殊数据
     * @param UidDTO $user              登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\ListsException
     *
     * @return bool 新增结果
     *
     * @requestExample({"data":{"serviceId":1,"money":10,"number":0,"timeLimit":2,"discount":1,"status":1,"isBestow":1,"extField":""}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-22
     */
    public function addLists(array $data, UidDTO $user = null): bool;

    /**
     * 修改增值服务清单.
     *
     * @param int    $slId              服务清单ID
     * @param array  $data              修改数据
     * @param int    $data['serviceId'] 服务ID
     * @param int    $data['money']     收费金额，单位为分
     * @param int    $data['number']    数量设置：对应计数模式的数量，0为无限制
     * @param int    $data['timeLimit'] 服务期限：表示N个月，大于0，合同是服务打包购买，服务期限以合同版本主表为准
     * @param float  $data['discount']  折扣：0<=X<=1，0和1都表示无折扣
     * @param int    $data['status']    服务项状态：1 启用 2 停用 4 删除
     * @param int    $data['isBestow']  赠送状态：1 启用 2 停用
     * @param string $data['extField']  服务扩展字段：JSON格式，用于存放特殊数据
     * @param UidDTO $user              登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\ListsException
     *
     * @return bool 修改结果
     *
     * @requestExample({"slId":1,"data":{"serviceId":1,"money":10,"number":0,"timeLimit":2,"discount":1,"status":1,"isBestow":1,"extField":""}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-22
     */
    public function updateLists(int $slId, array $data, UidDTO $user = null): bool;

    /**
     * 删除增值服务清单.
     *
     * @param int    $slId 服务清单ID
     * @param UidDTO $user 登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\ListsException
     *
     * @return bool 删除结果
     *
     * @requestExample({"slId":1})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-22
     */
    public function deleteLists(int $slId, UidDTO $user = null): bool;

    /**
     * 获取增值服务清单列表.
     *
     * @param array $condition              查询条件
     * @param int   $condition['slId']      服务清单ID
     * @param int   $condition['serviceId'] 服务ID
     * @param int   $condition['number']    数量设置：对应计数模式的数量，0为无限制
     * @param int   $condition['timeLimit'] 服务期限：表示N个月，大于0，合同是服务打包购买，服务期限以合同版本主表为准
     * @param int   $condition['discount']  折扣：0<=X<=1，0和1都表示无折扣
     * @param int   $condition['status']    服务状态：1 启用 2 停用 4 删除
     * @param int   $condition['isBestow']  赠送状态：1 启用 2 停用
     * @param int   $currentPage            当前页
     * @param int   $limit                  每页页数
     *
     * @throws \Eelly\SDK\Service\Exception\ListsException
     *
     * @return array
     *
     * @requestExample({"condition":{"slId":1,"serviceId":1,"number":1,"timeLimit":1,"discount":1,"status":1,"isBestow":1},"currentPage":1,"limit":10})
     * @returnExample({"items":[{"slId":"1","serviceId":"1","money":211,"number":"11","timeLimit":"23","discount":8,"status":"1","isBestow":"1","extField":"\"12343\"","createdTime":"1505993147"}],"page":{"first":1,"before":1,"current":1,"last":1,"next":1,"totalPages":1,"totalItems":1,"limit":10}})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-22
     */
    public function listListsPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
