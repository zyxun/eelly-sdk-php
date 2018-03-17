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

namespace Eelly\SDK\Data\Service;

interface ShowEntranceInterface
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
    public function addLog(array $logData): void;

    /**
     * 获取店铺展示入口数
     *
     * @param array $storeIds 默认所有店铺
     * @param string $date 默认今天YYYYMMDD
     * @return array
     * @requestExample({
     *     "storeIds":[1,2,3],
     *     "date":"20180317"
     * })
     * @returnExample({
     *     "148086":{
     *         "_id":148086,
     *         "totalView":123
     *     }
     * })
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2018年3月17日
     */
    public function getStoreView(array $storeIds = [], string $date = '');

    /**
     * 统计每日所有店铺展示入口数
     *
     * @param string $date 日期
     * @return array
     * @requestExample({
     *     "date":"20180313"
     * })
     * @returnExample()
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2018年3月13日
     */
    public function statisticsTheViewOfDaily(string $date = '');

    /**
     * 统计店铺本周展示入口数
     *
     * @param array $storeIds 店铺id
     * @return array
     * @requestExample({
     *     "storeIds":[1,2,3]
     * })
     * @returnExample({
     *     "148086":{
     *         "_id": 148086,
     *         "totalView": 123
     *     }
     * })
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2018年3月16日
     */
    public function statisticThisWeek(array $storeIds);

    /**
     * 统计店铺上个自然周展示入口数
     *
     * @param array $storeIds 店铺id
     * @return array
     * @requestExample({
     *     "storeIds":[1,2,3]
     * })
     * @returnExample({
     *     "148086":{
     *         "_id": 148086,
     *         "totalView": 123
     *     }
     * })
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2018年3月16日
     */
    public function statisticLastWeek(array $storeIds);
}