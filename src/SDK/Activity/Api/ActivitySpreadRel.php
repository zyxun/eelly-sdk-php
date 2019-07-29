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

namespace Eelly\SDK\Activity\Api;

use Eelly\SDK\EellyClient;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class ActivitySpreadRel
{
    /**
     * 添加推广关系
     *
     * @param int $userId 用户id
     * @param int $spreadId 直接上级用户ID
     * @return bool
     *
     * @author wechan
     * @since 2019年07月25日
     * @internal
     */
    public function addSpreadRel(int $userId, int $spreadId):bool
    {
        return EellyClient::requestJson('activity/activitySpreadRel', __FUNCTION__, [
            'userId' => $userId,
            'spreadId' => $spreadId,
        ]);
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