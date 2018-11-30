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

namespace Eelly\SDK\Im\Service;

use Eelly\DTO\UidDTO;

/**
 * Interface AccountsInterface.
 *
 * @author hehui<hehui@eelly.com>
 */
interface AccountsInterface
{
    /**
     * 获取单个用户信息.
     *
     * @param int         $uid    用户id
     * @param int         $type   用户类型 1 店 2 厂
     * @param UidDTO|null $uidDTO
     *
     * @return array
     */
    public function getOne(int $uid, int $type, UidDTO $uidDTO = null): array;

    /**
     * 获取多个用户.
     *
     * @param array       $users
     * @param UidDTO|null $uidDTO
     *
     * @return array
     */
    public function getList(array $users, UidDTO $uidDTO = null): array;
}
