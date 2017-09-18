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
 * 模块接口
 * @author liangxinyi<liangxinyi@eelly.net>
 */
interface ModuleInterface
{
    /**
     * 返回模块列表.
     *
     * @param string $moduleName 模块名(namespace)
     * @param bool   $show 是否只显示启动状态的模块，默认true
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     * @return array 返回模块列表
     * @requestExample()
     * @returnExample([{"moduleId": "1","moduleName": "user","status": "1","domain": "","createdTime": "1498042082","updateTime": "2017-06-21 10:51:02"}])
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-24
     */
    public function listModule(string $moduleName = null,bool $show = true): array;

    /**
     * 返回分页模块列表.
     *
     * @param int $limit       分页页数
     * @param int $currentPage 当前页
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     * @return array 分页结果集
     * @requestExample({"currentPage":1,"limit":10})
     * @returnExample({"items":[{"moduleId":"1","moduleName":"user","status":"1","domain":"","createdTime":"1498042082","updateTime":"2017-06-21 10:51:02"}],"page":{"first":1,"before":1,"current":1,"last":2,"next":2,"totalPages":2,"totalItems":2,"limit":1}})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-7-24
     */
    public function listModulePage(int $currentPage = 1,int $limit = 10): array;

    /**
     * 更新指定id模块状态.
     *
     * @param int $moduleId 模块id
     * @param int $status   是否启用/0:未启用,1:启用,2:关闭
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return bool 返回bool值
     * @requestExample({"moduleId":1,"status":2})
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
     * @requestExample({"moduleIds":[1,2,3],"status":2})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-26
     */
    public function updateModuleStatusBatch(array $moduleIds, int $status): bool;
}
