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

namespace Eelly\SDK\Live\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Live\Service\RobotMessageManageInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class RobotMessageManage implements RobotMessageManageInterface
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
    public function getList(array $condition = [], int $page = 1, int $limit = 10): array
    {
        return EellyClient::request('live/robotMessageManage', 'getList', true, $condition, $page, $limit);
    }

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
    public function getListAsync(array $condition = [], int $page = 1, int $limit = 10)
    {
        return EellyClient::request('live/robotMessageManage', 'getList', false, $condition, $page, $limit);
    }

    /**
     * 获取一条记录
     *
     * @param int $lrmId
     * @return array
     *
     * @author zhangyangxun
     * @since 2019-03-04
     */
    public function getOne(int $lrmId): array
    {
        return EellyClient::request('live/robotMessageManage', 'getOne', true, $lrmId);
    }

    /**
     * 获取一条记录
     *
     * @param int $lrmId
     * @return array
     *
     * @author zhangyangxun
     * @since 2019-03-04
     */
    public function getOneAsync(int $lrmId)
    {
        return EellyClient::request('live/robotMessageManage', 'getOne', false, $lrmId);
    }

    /**
     * 添加一条记录
     *
     * @param array $data
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-03-04
     */
    public function add(array $data): bool
    {
        return EellyClient::request('live/robotMessageManage', 'add', true, $data);
    }

    /**
     * 添加一条记录
     *
     * @param array $data
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-03-04
     */
    public function addAsync(array $data)
    {
        return EellyClient::request('live/robotMessageManage', 'add', false, $data);
    }

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
    public function update(int $lrmId, array $data): bool
    {
        return EellyClient::request('live/robotMessageManage', 'update', true, $lrmId, $data);
    }

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
    public function updateAsync(int $lrmId, array $data)
    {
        return EellyClient::request('live/robotMessageManage', 'update', false, $lrmId, $data);
    }

    /**
     * 删除一条记录
     *
     * @param int $lrmId
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-03-04
     */
    public function delete(int $lrmId): bool
    {
        return EellyClient::request('live/robotMessageManage', 'delete', true, $lrmId);
    }

    /**
     * 删除一条记录
     *
     * @param int $lrmId
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-03-04
     */
    public function deleteAsync(int $lrmId)
    {
        return EellyClient::request('live/robotMessageManage', 'delete', false, $lrmId);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}