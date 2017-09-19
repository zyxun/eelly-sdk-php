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
     * 返回指定id模块服务列表.
     *
     * @param int $moduleId      模块ID
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     * @return array 返回模块服务列表数组
     * @requestExample({"moduleId":1})
     * @returnExample([{"serviceId":"96","serviceName":"Activity\\Logic\\StoreLogic","moduleId":"12","moduleName":"activity"}])
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-24
     */
    public function listModuleService(int $moduleId): array;

    /**
     * 返回指定id模块服务分页列表.
     *
     * @param int $moduleId      模块ID
     * @param int $currentPage        当前页
     * @param int $limit              每页条数
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     * @return array 分页结果集
     * @requestExample({"moduleId":1,"currentPage":1,"limit":1})
     * @returnExample({"items":[{"serviceId":"96","serviceName":"Activity\\Logic\\StoreLogic","moduleId":"12","moduleName":"activity"}],"page":{"totalPages":13,"totalItems":13,"limit":1}})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-24
     */
    public function listModuleServicePage(int $moduleId,int $currentPage = 1,int $limit = 10): array;

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
