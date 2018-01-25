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
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
interface SubscribeInterface
{
    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSubscribePage(array $condition = [], int $currentPage = 1, int $limit = 10): array;

    /**
     * 根据传过来的查询条件，返回对应的数据
     *
     * @param array $condition 查询的where条件
     * @return array
     *
     * @requestExample({"condition":{"liveId":1}})
     * @returnExample([{"lsId": 1, "liveId": 1, "userId": 148086, "createdTime": 0}])
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.01.25
     */
    public function getSubscribeList(array $condition = []): array;
}