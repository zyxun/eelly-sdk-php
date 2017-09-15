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

namespace Eelly\SDK\Oauth\Service;

/**
 * 模块服务接口.
 *
 * @author liangxinyi<liangxinyi@eelly.net>
 */
interface ModuleServiceInterface
{
    /**
     * 返回模块服务列表.
     *
     * @return array 返回模块服务列表数组
     * @requestExample()
     * @returnExample([{"service_id":"1","service_name":"User\\Logic\\IndexLogic","module_id":"1","created_time":"1498042155","update_time":"2017-06-21 10:52:15","module_name":"user"}])
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-24
     */
    public function listModuleService(): array;

    /**
     * 返回模块服务列表.
     *
     * @param int $page        当前页
     * @param int $currentPage
     *
     * @return array 分页结果集
     * @requestExample({"limit":10,"currentPage":1})
     * @returnExample({"items":[{"service_id":"1","service_name":"User\\Logic\\IndexLogic","module_id":"1","created_time":"1498042155","update_time":"2017-06-21 10:52:15","module_name":"user"}],"page":{"first":1,"before":1,"current":1,"last":23,"next":2,"total_pages":23,"total_items":23,"limit":1}})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-24
     */
    public function listModuleServicePage(int $page = 10, int $currentPage = 1): array;

    /**
     * 根据id删除模型服务.
     *
     * @param int $serviceId 服务service_id
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return bool 返回bool值
     * @requestExample({"serviceId":1})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-18
     */
    public function deleteModuleService(int $serviceId): bool;
}
