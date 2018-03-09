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

namespace Eelly\SDK\Data\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Data\Service\ShowEntranceInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class ShowEntrance implements ShowEntranceInterface
{
    /**
     * 添加展示入口记录
     *
     * @param array $logData 日志数据
     * @requestExample([
     *     {
     *         "storeId":1,
     *         "type":2,
     *         "client":3,
     *         "view":4,
     *         "viewTime":1234567890
     *     }
     * ])
     * @returnExample()
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2018年3月8日
     */
    public function addLog(array $logData): void
    {
        EellyClient::request('data/showEntrance', 'addLog', true, $logData);
    }

    /**
     * 添加展示入口记录
     *
     * @param array $logData 日志数据
     * @requestExample([
     *     {
     *         "storeId":1,
     *         "type":2,
     *         "client":3,
     *         "view":4,
     *         "viewTime":1234567890
     *     }
     * ])
     * @returnExample()
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2018年3月8日
     */
    public function addLogAsync(array $logData)
    {
        return EellyClient::request('data/showEntrance', 'addLog', false, $logData);
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