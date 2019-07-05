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

namespace Eelly\SDK\EellyOldCode\Api\Common;

use Eelly\SDK\EellyClient;

/**
 * Class Queue.
 */
class Queue
{
    /**
     * 旧商城入队列.
     *
     * @param array  $queueData 队列数组
     * @param string $queueName 队列名
     */
    public function setQueueInfo(array $queueData, string $queueName)
    {
        return EellyClient::request('eellyOldCode/Common/Queue', __FUNCTION__, true, $queueData, $queueName);
    }
}
