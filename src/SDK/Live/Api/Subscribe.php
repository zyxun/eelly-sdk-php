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
use Eelly\SDK\Live\Service\SubscribeInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Subscribe implements SubscribeInterface
{
    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSubscribePage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('live/subscribe', 'listSubscribePage', true, $condition, $currentPage, $limit);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSubscribePageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('live/subscribe', 'listSubscribePage', false, $condition, $currentPage, $limit);
    }

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
    public function getSubscribeList(array $condition = []): array
    {
        return EellyClient::request('live/subscribe', 'getSubscribeList', true, $condition);
    }

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
    public function getSubscribeListAsync(array $condition = [])
    {
        return EellyClient::request('live/subscribe', 'getSubscribeList', false, $condition);
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