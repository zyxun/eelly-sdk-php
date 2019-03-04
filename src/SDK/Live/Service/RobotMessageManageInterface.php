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

namespace Eelly\SDK\Live\Service;

/**
 * Interface LiveRobotMessageInterface.
 */
interface RobotMessageManageInterface
{
    /**
     * 获取列表
     *
     * @param array $condition
     * @param int   $page
     * @param int   $limit
     * @return array
     *
     * @author zhangyangxun
     * @since 2019-03-04
     */
    public function getList(array $condition = [], int $page = 1, int $limit = 10):array ;

    /**
     * 获取一条记录
     *
     * @param int $lrmId
     * @return array
     *
     * @author zhangyangxun
     * @since 2019-03-04
     */
    public function getOne(int $lrmId):array ;

    /**
     * 添加一条记录
     *
     * @param array $data
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-03-04
     */
    public function add(array $data):bool ;

    /**
     * 更新一条记录
     *
     * @param int   $lrmId
     * @param array $data
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-03-04
     */
    public function update(int $lrmId, array $data):bool ;

    /**
     * 删除一条记录
     *
     * @param int $lrmId
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-03-04
     */
    public function delete(int $lrmId): bool ;
}