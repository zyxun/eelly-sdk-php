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

use \SDK\Live\DTO\LiveDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
interface LiveInterface
{
    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getLive(int $liveId): LiveDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addLive(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateLive(int $liveId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteLive(int $liveId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listLivePage(array $condition = [], int $currentPage = 1, int $limit = 10): array;

    /**
     * 直播管理列表.
     *
     * @param array $condition 查询条件
     * @param array $condition['storeIds'] 店铺ID一维数据
     * @param array $condition['inStatus'] 查询状态
     * @param int $condition['scheduleDate'] 开播日期
     * @param int $currentPage 第几页
     * @param int $limit 每页条数
     * @param string $order 排序
     * @return array
     * @requestExample({"data":["storeIds":[148086,148087],"inStatus":[0,1],"scheduleDate":"1516291200"],"currentPage":1,"limit":10,"order":"base"})
     * @returnExample({"items":[{"liveId":1,"userId":2,"buyerId":148086,"storeId":148086,"title":"11","image":"1111","scheduleTime":1516353883,"sort":255,"status":0,"createdTime":1516204800,"userCount":2}],"page":{"totalPages":1,"totalItems":2,"current":1,"limit":10}})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年01月22日
     * @Validation(
     *  @PresenceOf(0,{message : "数据不能为空"}),
     *  @OperatorValidator(1,{message:"非法第几页",operator:["gt",0]}),
     *  @OperatorValidator(2,{message:"非法每页条数",operator:["gt",0]})
     *)
     */
    public function getLiveList(array $condition, int $currentPage = 1, int $limit = 10, string $order = 'base'): array;
}