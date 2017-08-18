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
 * @author liangxinyi<liangxinyi@eelly.net>
 */
interface ModuleInterface
{
    /**
     * 返回模块列表.
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return array 返回模块列表
     * @requestExample()
     * @returnExample([{"module_id": "1","module_name": "user","status": "1","domain": "","created_time": "1498042082","update_time": "2017-06-21 10:51:02"}])
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-24
     */
    public function listModule(): array;

    /**
     * 返回分页模块列表.
     *
     * @param int $limit       分页页数
     * @param int $currentPage 当前页
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return array
     * @requestExample()
     * @returnExample({"items":[{"module_id":"1","module_name":"user","status":"1","domain":"","created_time":"1498042082","update_time":"2017-06-21 10:51:02"}],
     "page":{"first":1,"before":1,"current":1,"last":2,"next":2,"total_pages":2,"total_items":2,"limit":1}})
     * @since 2017-7-24
     */
    public function listModulePage(int $limit = 10, int $currentPage = 1): array;

    /**
     * 返回模块服务列表.
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
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
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return array
     * @returnExample({"items":[{"service_id":"1","service_name":"User\\Logic\\IndexLogic","module_id":"1","created_time":"1498042155","update_time":"2017-06-21 10:52:15","module_name":"user"}],
     "page":{"first":1,"before":1,"current":1,"last":23,"next":2,"total_pages":23,"total_items":23,"limit":1}})
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
     * @return bool
     * @requestExample(1)
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-18
     */
    public function deleteModuleService(int $serviceId): bool;

    /**
     * 更新指定id模块状态.
     *
     * @param int $moduleId 模块id
     * @param int $status   是否启用/0:未启用,1:启用,2:关闭
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return bool 返回bool值
     * @requestExample([1,2])
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-26
     */
    public function updateModuleStatus(int $moduleId, int $status): bool;

    /**
     * 批量更新模块状态.
     *
     * @param array $moduleIds 模块id数组
     * @param int   $status    是否启用/0:未启用,1:启用,2:关闭
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return bool 返回bool值
     * @requestExample([{1,2,3},2])
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-26
     */
    public function updateModuleStatusBatch(array $moduleIds, int $status): bool;
}
