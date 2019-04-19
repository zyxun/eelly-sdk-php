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

use Eelly\SDK\Data\Service\StoreVisitStatSumaryInterface;
use Eelly\SDK\EellyClient;

/**
 * 店铺用户访问总统计
 *
 * @author zhangyingdi<zhangyingdi@eelly.net>
 */
class StoreVisitStatSummary
{
    /**
     * 根据店铺id，获取对应的统计记录
     *
     * @param int $storeId 店铺id
     * @return array
     *
     * @requestExample({"storeId":148086})
     * @returnExample({"storeId":"148086","uv":"26","pv":"113","updateDate":"20190221","createdTime":"1550737126"})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2019.02.22
     */
    public function getStoreVisitStatInfo(int $storeId):array
    {
        return EellyClient::request('data/storeVisitStatSummary', __FUNCTION__, true, $storeId);
    }

    /**
     * @inheritdoc
     */
    public function getStoreVisitStatInfoAsync($storeId):array
    {
        return EellyClient::request('data/storeVisitStatSummary', __FUNCTION__, false, $storeId);
    }

    /**
     * 根据店铺id和日期获取统计数据 （旧代码业务迁移）
     *
     * @param array $storeIds  店铺id
     * @param int $sDate Ymd格式开始日期 20180101
     * @param int $eDate Ymd格式结束日期 20190202
     * @return array
     *
     * @requestExample({"storeIds":[148087,148086], "sDate":20180101, "eDate":20190201})
     * @returnExample({"148087":{"uv":0,"pv":0},"148086":{"uv":10,"pv":79}})
     *
     * @author zengzhihao<zengzhihao@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2019.02.25
     */
    public function getStoreFlowTotal(array $storeIds, int $sDate, int $eDate):array
    {
        return EellyClient::request('data/storeVisitStatSummary', __FUNCTION__, true, $storeIds, $sDate, $eDate);
    }

    /**
     * @inheritdoc
     */
    public function getStoreFlowTotalAsync(array $storeIds, int $sDate, int $eDate):array
    {
        return EellyClient::request('data/storeVisitStatSummary', __FUNCTION__, false, $storeIds, $sDate, $eDate);
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