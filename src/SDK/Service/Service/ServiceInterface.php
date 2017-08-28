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
use Eelly\SDK\Service\DTO\ServiceDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ServiceInterface
{
    /**
     * 获取一条增值服务.
     *
     * @param int $serviceId 服务ID
     *
     * @throws Eelly\SDK\Service\Exception\ServiceException 701001 参数错误
     * @throws Eelly\SDK\Service\Exception\ServiceException 702001 数据不存在
     *
     * @return array
     * @requestExample({"serviceId":1})
     * @returnExample({"service_id":1,"name":"\u5b9e\u4f53\u8ba4\u8bc1","value":1,"type":2,"model":1,"table":"service_entity","status":1,"created_time":1502337190})
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     *
     * @since 2017-8-02
     */
    public function getService(int $serviceId): ServiceDTO;

    /**
     * 新增增值服务.
     *
     * @param array  $data                 服务数据
     * @param string $data['name']         服务名称
     * @param int    $data['value']        认证标志值
     * @param int    $data['type']         服务对象：1 店+(下游买家) 2 厂+(上游卖家)
     * @param int    $data['model']        计数模式：1 合同期内 2 每月 4 每日，全部模式：1+2+4=7
     * @param string $data['table']        服务对应的主体表
     * @param int    $data['status']       服务状态：1 启用 2 停用 4 删除
     * @param int    $data['created_time'] 创建时间
     * @param UidDTO $user                 登录用户对象
     *
     * @throws Eelly\SDK\Service\Exception\ServiceException 700001 用户未登录
     * @throws Eelly\SDK\Service\Exception\ServiceException 701001 参数错误
     *
     * @return bool
     *
     * @requestExample({"data":{"name":"\u5b9e\u4f53\u8ba4\u8bc1","value":1,"type":2,"model":1,"table":"service_entity","status":1,"created_time":1502337190}})
     * @returnExample(true)
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     *
     * @since 2017-8-02
     */
    public function addService(array $data, UidDTO $user = null): bool;

    /**
     * 修改增值服务.
     * 用于增值服务信息.
     *
     * @param int    $serviceId      服务ID
     * @param array  $data           认证数据
     * @param string $data['name']   服务名称
     * @param int    $data['value']  认证标志值
     * @param int    $data['type']   服务对象：1 店+(下游买家) 2 厂+(上游卖家)
     * @param int    $data['model']  计数模式：1 合同期内 2 每月 4 每日，全部模式：1+2+4=7
     * @param string $data['table']  服务对应的主体表
     * @param int    $data['status'] 服务状态：1 启用 2 停用 4 删除
     * @param UidDTO $user           登录用户对象
     *
     * @throws Eelly\SDK\Service\Exception\ServiceException 700001 用户未登录
     * @throws Eelly\SDK\Service\Exception\ServiceException 701001 参数错误
     *
     * @return bool
     *
     * @requestExample({"serviceId":1,"data":{"name":"\u5b9e\u4f53\u8ba4\u8bc1","value":1,"type":2,"model":1,"table":"service_entity","status":1,"created_time":1502337190}})
     * @returnExample(true)
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     *
     * @since 2017-8-02
     */
    public function updateService(int $serviceId, array $data, UidDTO $user = null): bool;

    /**
     * 获取买家和卖家增值服务列表.
     *
     * @param array  $condition               查询条件
     * @param int    $condition['service_id'] 服务ID
     * @param string $condition['name']       服务名称
     * @param int    $condition['value']      认证标志值
     * @param int    $condition['type']       服务对象：1 店+(下游买家) 2 厂+(上游卖家)
     * @param int    $condition['model']      计数模式：1 合同期内 2 每月 4 每日，全部模式：1+2+4=7
     * @param string $condition['table']      服务对应的主体表
     * @param int    $condition['status']     服务状态：1 启用 2 停用 4 删除
     * @param int    $limit                   每页页数
     * @param int    $currentPage             当前页
     *
     * @throws Eelly\SDK\Service\Exception\ServiceException 701001 参数错误
     *
     * @return array
     *
     * @requestExample({"condition":{"service_id":1,"name":"\u5b9e\u4f53\u8ba4\u8bc1","value":0,"type":1,"model":7,"table":"service_entity","status":1},"limit":10,"currentPage":1})
     * @returnExample()
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     *
     * @since 2017-8-02
     */
    public function listServicePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;

    /**
     * 获取买家增值服务列表.
     *
     * @param array  $condition               查询条件
     * @param int    $condition['service_id'] 服务ID
     * @param string $condition['name']       服务名称
     * @param int    $condition['value']      认证标志值
     * @param int    $condition['type']       服务对象：1 店+(下游买家) 2 厂+(上游卖家)
     * @param int    $condition['model']      计数模式：1 合同期内 2 每月 4 每日，全部模式：1+2+4=7
     * @param string $condition['table']      服务对应的主体表
     * @param int    $condition['status']     服务状态：1 启用 2 停用 4 删除
     * @param int    $limit                   每页页数
     * @param int    $currentPage             当前页
     *
     * @throws Eelly\SDK\Service\Exception\ServiceException 701001 参数错误
     *
     * @return array
     *
     * @requestExample({"condition":{"service_id":1,"name":"\u5b9e\u4f53\u8ba4\u8bc1","value":0,"type":1,"model":7,"table":"service_entity","status":1},"limit":10,"currentPage":1})
     * @returnExample()
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     *
     * @since 2017-8-02
     */
    public function listBuyerServicePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;

    /**
     * 获取卖家增值服务列表.
     *
     * @param array  $condition               查询条件
     * @param int    $condition['service_id'] 服务ID
     * @param string $condition['name']       服务名称
     * @param int    $condition['value']      认证标志值
     * @param int    $condition['type']       服务对象：1 店+(下游买家) 2 厂+(上游卖家)
     * @param int    $condition['model']      计数模式：1 合同期内 2 每月 4 每日，全部模式：1+2+4=7
     * @param string $condition['table']      服务对应的主体表
     * @param int    $condition['status']     服务状态：1 启用 2 停用 4 删除
     * @param int    $limit                   每页页数
     * @param int    $currentPage             当前页
     *
     * @throws Eelly\SDK\Service\Exception\ServiceException 701001 参数错误
     *
     * @return array
     *
     * @requestExample({"condition":{"service_id":1,"name":"\u5b9e\u4f53\u8ba4\u8bc1","value":0,"type":1,"model":7,"table":"service_entity","status":1},"limit":10,"currentPage":1})
     * @returnExample()
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     *
     * @since 2017-8-02
     */
    public function listSellerServicePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
