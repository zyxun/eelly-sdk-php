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
 * 增值服务.
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ServiceInterface
{
    /**
     * 获取一条增值服务.
     *
     * @param int $serviceId 服务ID
     *
     * @throws \Eelly\SDK\Service\Exception\ServiceException
     *
     * @return ServiceDTO
     * @requestExample({"serviceId":1})
     * @returnExample({"serviceId":1,"name":"\u5b9e\u4f53\u8ba4\u8bc1","value":1,"type":2,"model":1,"table":"service_entity","status":1})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-21
     */
    public function getService(int $serviceId): ServiceDTO;

    /**
     * 新增增值服务.
     *
     * @param array  $data           服务数据
     * @param string $data['name']   服务名称
     * @param int    $data['value']  认证标志值
     * @param int    $data['type']   服务对象：1 店+(下游买家) 2 厂+(上游卖家)
     * @param int    $data['model']  计数模式：1 合同期内 2 每月 4 每日，全部模式：1+2+4=7
     * @param string $data['table']  服务对应的主体表
     * @param int    $data['status'] 服务状态：1 启用 2 停用 4 删除
     * @param UidDTO $user           登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\ServiceException
     *
     * @return bool 新增结果
     *
     * @requestExample({"data":{"name":"\u5b9e\u4f53\u8ba4\u8bc1","value":1,"type":2,"model":1,"table":"service_entity","status":1}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-21
     */
    public function addService(array $data, UidDTO $user = null): bool;

    /**
     * 修改增值服务.
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
     * @throws \Eelly\SDK\Service\Exception\ServiceException
     *
     * @return bool 修改结果
     *
     * @requestExample({"serviceId":1,"data":{"name":"\u5b9e\u4f53\u8ba4\u8bc1","value":1,"type":2,"model":1,"table":"service_entity","status":1}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-21
     */
    public function updateService(int $serviceId, array $data, UidDTO $user = null): bool;

    /**
     * 删除增值服务.
     *
     * @param int    $serviceId 服务ID
     * @param UidDTO $user      登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\ServiceException
     *
     * @return bool 删除结果
     *
     * @requestExample({"serviceId":1})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-21
     */
    public function deleteService(int $serviceId, UidDTO $user = null): bool;

    /**
     * 获取买家和卖家增值服务列表.
     *
     * @param array  $condition              查询条件
     * @param int    $condition['serviceId'] 服务ID
     * @param string $condition['name']      服务名称
     * @param int    $condition['value']     认证标志值
     * @param int    $condition['type']      服务对象：1 店+(下游买家) 2 厂+(上游卖家)
     * @param int    $condition['model']     计数模式：1 合同期内 2 每月 4 每日，全部模式：1+2+4=7
     * @param int    $condition['status']    服务状态：1 启用 2 停用 4 删除
     * @param int    $currentPage            当前页
     * @param int    $limit                  每页页数
     *
     * @throws \Eelly\SDK\Service\Exception\ServiceException
     *
     * @return array
     *
     * @requestExample({"condition":{"serviceId":1,"name":"\u5b9e\u4f53\u8ba4\u8bc1","value":0,"type":1,"model":7,"table":"service_entity","status":1},"limit":10,"currentPage":1})
     * @returnExample({"items":[{"serviceId":"4","name":"\u4e91\u5e97\u94fa","value":"0","type":"1","model":"1","table":"","status":"4","createdTime":"1458093605"},{"serviceId":"5","name":"\u4e91\u8d27\u6e90","value":"0","type":"1","model":"1","table":"","status":"4","createdTime":"1458093605"}],"page":{"first":1,"before":1,"current":1,"last":1,"next":1,"totalPages":1,"totalItems":2,"limit":10}})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-21
     */
    public function listServicePage(array $condition = [], int $currentPage = 1, int $limit = 10): array;

    /**
     * 获取买家增值服务列表.
     *
     * @param array  $condition              查询条件
     * @param int    $condition['serviceId'] 服务ID
     * @param string $condition['name']      服务名称
     * @param int    $condition['value']     认证标志值
     * @param int    $condition['type']      服务对象：1 店+(下游买家) 2 厂+(上游卖家)
     * @param int    $condition['model']     计数模式：1 合同期内 2 每月 4 每日，全部模式：1+2+4=7
     * @param int    $condition['status']    服务状态：1 启用 2 停用 4 删除
     * @param int    $currentPage            当前页
     * @param int    $limit                  每页页数
     *
     * @throws \Eelly\SDK\Service\Exception\ServiceException
     *
     * @return array
     *
     * @requestExample({"condition":{"serviceId":1,"name":"\u5b9e\u4f53\u8ba4\u8bc1","value":0,"type":1,"model":7,"table":"service_entity","status":1},"limit":10,"currentPage":1})
     * @returnExample({"items":[{"serviceId":"4","name":"\u4e91\u5e97\u94fa","value":"0","type":"1","model":"1","table":"","status":"4","createdTime":"1458093605"},{"serviceId":"5","name":"\u4e91\u8d27\u6e90","value":"0","type":"1","model":"1","table":"","status":"4","createdTime":"1458093605"}],"page":{"first":1,"before":1,"current":1,"last":1,"next":1,"totalPages":1,"totalItems":2,"limit":10}})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-21
     */
    public function listBuyerServicePage(array $condition = [], int $currentPage = 1, int $limit = 10): array;

    /**
     * 获取卖家增值服务列表.
     *
     * @param array  $condition              查询条件
     * @param int    $condition['serviceId'] 服务ID
     * @param string $condition['name']      服务名称
     * @param int    $condition['value']     认证标志值
     * @param int    $condition['type']      服务对象：1 店+(下游买家) 2 厂+(上游卖家)
     * @param int    $condition['model']     计数模式：1 合同期内 2 每月 4 每日，全部模式：1+2+4=7
     * @param int    $condition['status']    服务状态：1 启用 2 停用 4 删除
     * @param int    $currentPage            当前页
     * @param int    $limit                  每页页数
     *
     * @throws \Eelly\SDK\Service\Exception\ServiceException
     *
     * @return array
     *
     * @requestExample({"condition":{"serviceId":1,"name":"\u5b9e\u4f53\u8ba4\u8bc1","value":0,"type":1,"model":7,"table":"service_entity","status":1},"limit":10,"currentPage":1})
     * @returnExample({"items":[{"serviceId":"4","name":"\u4e91\u5e97\u94fa","value":"0","type":"1","model":"1","table":"","status":"4","createdTime":"1458093605"},{"serviceId":"5","name":"\u4e91\u8d27\u6e90","value":"0","type":"1","model":"1","table":"","status":"4","createdTime":"1458093605"}],"page":{"first":1,"before":1,"current":1,"last":1,"next":1,"totalPages":1,"totalItems":2,"limit":10}})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-21
     */
    public function listSellerServicePage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
    
    /**
     * 增值服务支付
     * 
     * @param string $billNo 衣联交易号
     * 
     * @author wechan
     * @since 2018年10月23日
     */
    public function setServicePay(string $billNo): bool;
}
