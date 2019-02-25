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


/**
 * 店铺用户访问总统计
 *
 * @author zhangyingdi<zhangyingdi@eelly.net>
 */
interface StoreVisitStatSumaryInterface
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
    public function getStoreVisitStatInfo(int $storeId):array;
}
