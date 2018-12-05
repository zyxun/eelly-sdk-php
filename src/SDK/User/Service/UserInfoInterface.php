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

namespace Eelly\SDK\User\Service;
use Eelly\DTO\UidDTO;

/**
 * Interface UserInfoInterface.
 *
 * @author hehui<runphp@dingtalk.com>
 */
interface UserInfoInterface
{
    /**
     * 获取一条用户信息.
     *
     * @param int $userId 用户id
     *
     * @return array
     *
     *@author hehui<runphp@dingtalk.com>
     */
    public function getOne(int $userId): array;

    /**
     * 获取多条用户信息.
     *
     * @param array $userIds 用户id列表
     *
     * @return array
     *
     * @author hehui<runphp@dingtalk.com>
     */
    public function getList(array $userIds): array;

    /**
     * 根据条件批量获取用户信息
     *
     * @param array  $condition
     * @param string $fieldScope
     * @param UidDTO $uidDTO
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-12-04
     */
    public function getListByCondition(array $condition, string $fieldScope, UidDTO $uidDTO = null): array ;
}
