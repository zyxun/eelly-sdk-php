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

    /**
     * 通过用户获取直播的直播id频道.
     *
     * @param int $userId 用户ID
     * @param array $liveIds 直播ID
     * @return array
     * @requestExample({"userId":148086,"liveIds":[1,2,3]})
     * @returnExample({1,2,3})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年01月24日
     * @Validation(
     *  @OperatorValidator(0,{message:"非法用户ID",operator:["gt",0]})
     *)
     */
    public function getUserSubscribeLiveIds(int $userId, array $liveIds = []): array;

    /**
     * 添加一条订阅记录
     * @param array $data 订阅信息数据
     * @param int $data["liveId"]  直播id
     * @param int $data["userId"]  用户id
     * @return bool
     *
     * @requestExample({"data":{"userId":148086,"liveId":1}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.02.06
     */
    public function addSubscribe(array $data):bool;

}