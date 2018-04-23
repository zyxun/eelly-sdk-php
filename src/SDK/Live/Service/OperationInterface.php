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
 * 直播控制台.
 */
interface OperationInterface
{
    /**
     * 启动直播.
     *
     * @param int $liveId
     * @param bool $isOpenLive
     *
     * @return array
     */
    public function startingLive(int $liveId, bool $isOpenLive = false): array;

    /**
     *  事件消息通知.
     *
     * @see https://cloud.tencent.com/document/product/267/5957
     *
     * @param string $jsonString
     *
     * @return bool
     */
    public function eventNotify(string $jsonString): bool;
}
