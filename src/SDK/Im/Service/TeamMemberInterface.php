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


/**
 * Interface TeamMemberInterface.
 *
 * @author zhangyangxun
 */
interface TeamMemberInterface
{

    /**
     * 分页取群成员
     *
     * @param int    $tid
     * @param int    $page
     * @param int    $limit
     * @param string $fieldScope
     * @return array
     * @throws \Throwable
     * @author zhangyangxun
     * @since 2019/5/23
     */
    public function getTeamMembersPage(int $tid, int $page = 1, int $limit = 20, string $fieldScope = 'base'): array;
}
