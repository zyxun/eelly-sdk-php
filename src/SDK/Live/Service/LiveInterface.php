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

use Eelly\SDK\Live\DTO\LiveDTO;

/**
 * @author shadonTools<localhost.shell@gmail.com>
 */
interface LiveInterface
{
    /**
     * 根据传过来的直播信息主键id，返回对应的直播信息.
     *
     * @param int $liveId 直播信息主键id
     *
     * @throws \Eelly\SDK\Live\Exception\LiveException
     *
     * @return LiveDTO
     *
     * @requestExample({"liveId":1})
     * @returnExample({"liveId":1,"userId":148086, "storeId":148086,"title":"test","image":"bank_logo_shbank.gif","region":1,"pushUrl":"ddd",
     *     "share":1,"scheduleTime":1503560249,"startTime":1503560249,"endTime":1503560249,"status":1,"sort":1,"createdTime":1503560249})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2018.01.24
     */
    public function getLive(int $liveId): LiveDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addLive(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateLive(int $liveId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteLive(int $liveId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listLivePage(array $condition = [], int $currentPage = 1, int $limit = 10): array;

    /**
     * 获取各个状态的统计数据.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------|-------|--------------
     * total    |int    |总数量
     * pending  |int    |预告中数量
     * occurred |int    |未开播数量
     * progress |int    |直播中数量
     * finished |int    |已结束数量
     *
     *
     * @param array  $condition 条件
     * @param string $field     查询的key值
     *
     * @return array
     * @requestExample({"field":"getStat"})
     * @returnExample({"total":2,"pending":0,"occurred":1,"progress":1,"finished":0})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年01月23日
     */
    public function getStatistics(array $condition = [], string $field = 'getStat'): array;

    /**
     * 厂+直播管理列表.
     * ### 返回数据说明.
     *
     * 字段|类型|说明
     * ----------------------|-------|--------------
     * items                 |array  |列表数据
     * items["liveId"]       |int    |直播信息ID
     * items["userId"]       |int    |用户ID
     * items["storeId"]      |int    |店铺ID
     * items["title"]        |string |直播标题
     * items["image"]        |string 直播封面
     * items["scheduleTime"] |int    |预计视频开始时间
     * items["startTime"]    |int    |视频开始时间
     * items["endTime"]      |int    |视频结束时间
     * items["sort"]         |int    |排序
     * items["status"]       |int    |状态：0.直播未开始,1.直播中-进行中,12.直播中-暂停,13.直播中-异常暂停,2.正常结束,3.强制中止
     * items["createdTime"]  |int    |添加时间
     * items["goodsCount"]   |int    |直播商品数量
     * page                  |array  |页数信息
     * page["totalPages"]    |int    |总页数
     * page["totalItems"]    |int    |总条数
     * page["current"]       |int    |当前页
     * page["limit"]         |int    |每页条数
     *
     * @param array $condition   查询条件
     * @param int   $currentPage 第几页
     * @param int   $limit       每页条数
     *
     * @return array
     * @requestExample({"condition":["storeIds":[148086,148087],"inStatus":[0, 1, 12, 13]],"currentPage":1,"limit":10,"order":"base"})
     * @returnExample({"items":[{"liveId":1,"userId":2,"storeId":148086,"title":"11","image":"1111","scheduleTime":1516353883,"startTime":0,"endTime":0,"sort":4,"status":0,"createdTime":1516204800,"goodsCount":2}],"page":{"totalPages":1,"totalItems":2,"current":1,"limit":10}})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年01月23日
     * @Validation(
     *  @PresenceOf(0,{message : "数据不能为空"}),
     *  @OperatorValidator(1,{message:"非法第几页",operator:["gt",0]}),
     *  @OperatorValidator(2,{message:"非法每页条数",operator:["gt",0]})
     *)
     */
    public function getSellerLiveList(array $condition, int $currentPage = 1, int $limit = 10): array;

    /**
     * 厂+直播管理列表.
     * ### 返回数据说明.
     *
     * 字段|类型|说明
     * ----------------------|-------|--------------
     * items                 |array  |列表数据
     * items["liveId"]       |int    |直播信息ID
     * items["userId"]       |int    |用户ID
     * items["storeId"]      |int    |店铺ID
     * items["title"]        |string |直播标题
     * items["image"]        |string 直播封面
     * items["scheduleTime"] |int    |预计视频开始时间
     * items["startTime"]    |int    |视频开始时间
     * items["endTime"]      |int    |视频结束时间
     * items["sort"]         |int    |排序
     * items["status"]       |int    |状态：0.直播未开始,1.直播中-进行中,12.直播中-暂停,13.直播中-异常暂停,2.正常结束,3.强制中止
     * items["createdTime"]  |int    |添加时间
     * items["goodsCount"]   |int    |直播商品数量
     * items["goodsList"]    |array  |直播商品列表
     * page                  |array  |页数信息
     * page["totalPages"]    |int    |总页数
     * page["totalItems"]    |int    |总条数
     * page["current"]       |int    |当前页
     * page["limit"]         |int    |每页条数
     *
     * @param array $condition                 查询条件
     * @param array $condition['storeIds']     店铺ID一维数据
     * @param array $condition['inStatus']     查询状态
     * @param int   $condition['lastSchedule'] 最后的播放日期,第一页不用传递，或者0
     * @param int   $currentPage               第几页
     * @param int   $limit                     每页条数
     *
     * @return array
     * @requestExample({"condition":["storeIds":[148086,148087],"inStatus":[1, 12, 13],"lastSchedule":"1516353883"],"currentPage":1,"limit":10,"order":"base"})
     * @returnExample({"items":[{"liveId":1,"userId":2,"storeId":148086,"title":"11","image":"1111","scheduleTime":1516353883,"startTime":0,"endTime":0,"sort":4,"status":0,"createdTime":1516204800,"goodsCount":2,"goodsList":[1,2,3]}],"page":{"totalPages":1,"totalItems":2,"current":1,"limit":10}})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年01月23日
     * @Validation(
     *  @PresenceOf(0,{message : "数据不能为空"}),
     *  @OperatorValidator(1,{message:"非法第几页",operator:["gt",0]}),
     *  @OperatorValidator(2,{message:"非法每页条数",operator:["gt",0]})
     *)
     */
    public function getProgressList(array $condition, int $currentPage = 1, int $limit = 10, string $order = 'progress'): array;

    /**
     * 直播管理列表.
     *
     * @param array  $condition                 查询条件
     * @param array  $condition['storeIds']     店铺ID一维数据
     * @param array  $condition['inStatus']     查询状态
     * @param int    $condition['scheduleDate'] 开播日期
     * @param int    $currentPage               第几页
     * @param int    $limit                     每页条数
     * @param string $order                     排序
     *
     * @return array
     * @requestExample({"condition":["storeIds":[148086,148087],"inStatus":[0,1],"scheduleDate":"1516291200"],"currentPage":1,"limit":10,"order":"base"})
     * @returnExample({"items":[{"liveId":1,"userId":2,"buyerId":148086,"storeId":148086,"title":"11","image":"1111","scheduleTime":1516353883,"sort":255,"status":0,"createdTime":1516204800,"userCount":2}],"page":{"totalPages":1,"totalItems":2,"current":1,"limit":10}})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年01月22日
     * @Validation(
     *  @PresenceOf(0,{message : "数据不能为空"}),
     *  @OperatorValidator(1,{message:"非法第几页",operator:["gt",0]}),
     *  @OperatorValidator(2,{message:"非法每页条数",operator:["gt",0]})
     *)
     */
    public function getLiveList(array $condition, int $currentPage = 1, int $limit = 10, string $order = 'base'): array;

    /**
     * 根据传过来的条件返回对应的数据.
     *
     * @param array  $condition 传递参数
     * @param string $field     字段
     * @param string $order     排序
     *
     * @return array
     *
     * @requestExample({
     *         "condition":["gteScheduleTime":1516353823, "ltScheduleTime":1516353883],
     *         "field":"base",
     *         "order":"base"
     * })
     *
     * @returnExample({
     *   [{"liveId":"1","userId":"0","storeId":"148086","title":"11","image":"1111","region":"11","pushUrl":"111","share":"11","scheduleTime":"1516353883","startTime":"1421510400","endTime":"1516031999","sort":"1","status":"2","createdTime":"1516204800"}]
     * })
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.01.22
     */
    public function getLiveListByCondition(array $condition, string $field = 'base', string $order = 'base');

    /*
    * 批量更新排序.
    *
    * @param array $sort [1=>4,2=>8]
    * @return bool
    * @requestExample({"sort":["1":4,"2":8]})
    * @returnExample(true)
    * @author 肖俊明<xiaojunming@eelly.net>
    * @since 2018年01月23日
    * @Validation(
    *  @PresenceOf(0,{message : "数据不能为空"})
    *)
    */
    public function updateSort(array $sort): bool;

    /**
     * 支付成功后插入空直播信息.
     *
     * @param array $data            请求参数
     * @param int   $data['count']   场数
     * @param int   $data['userId']  用户ID
     * @param int   $data['storeId'] 店铺ID
     *
     * @requestExample({
        "data": {
            "count": 1,
            "userId": 148086,
            "storeId": 148086
        }
     })
     * @returnExample(true)
     *
     * @return bool
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2018年01月23日
     */
    public function addReadyLive(array $data): bool;

    /**
     * 获取店铺的直播.
     *
     * @param int $storeId
     *
     * @return array
     *
     * @author hehui<hehui@eelly.net>
     */
    public function getStoreLive(int $storeId): array;
}
