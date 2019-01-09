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

namespace Eelly\SDK\Live\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Live\Service\LiveInterface;
use Eelly\SDK\Live\DTO\LiveDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Live implements LiveInterface
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
    public function getLive(int $liveId): LiveDTO
    {
        return EellyClient::request('live/live', 'getLive', true, $liveId);
    }

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
    public function getLiveAsync(int $liveId)
    {
        return EellyClient::request('live/live', 'getLive', false, $liveId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listLivePage(array $condition = [], int $currentPage = 1, int $limit = 10, string $order = 'base'): array
    {
        return EellyClient::request('live/live', 'listLivePage', true, $condition, $currentPage, $limit, $order);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listLivePageAsync(array $condition = [], int $currentPage = 1, int $limit = 10, string $order = 'base')
    {
        return EellyClient::request('live/live', 'listLivePage', false, $condition, $currentPage, $limit, $order);
    }

    /**
     * 通过直播ID获取直播数据和直播下面的商品，不做分页区分.
     *
     * @param int $liveId 直播ID
     * @return array
     * @requestExample({"liveId":1})
     * @returnExample({"live":{"storeId":"148086","title":"标1题123","image":"G01\/M00\/00\/06\/oYYBAFkboJWIXrI7AAAe9WlrlpgAAACVwDvSAIAAB8N049.jpg","scheduleTime":"1516793554","startTime":"0","endTime":"0","status":"0"},"goodsList":[{"liveId":"1","goodsId":"1"},{"liveId":"1","goodsId":"3"},{"liveId":"1","goodsId":"345"},{"liveId":"1","goodsId":"678"},{"liveId":"1","goodsId":"890"}]})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年01月25日
     */
    public function getLiveGoodsInfo(int $liveId): array
    {
        return EellyClient::request('live/live', 'getLiveGoodsInfo', true, $liveId);
    }

    /**
     * 通过直播ID获取直播数据和直播下面的商品，不做分页区分.
     *
     * @param int $liveId 直播ID
     * @return array
     * @requestExample({"liveId":1})
     * @returnExample({"live":{"storeId":"148086","title":"标1题123","image":"G01\/M00\/00\/06\/oYYBAFkboJWIXrI7AAAe9WlrlpgAAACVwDvSAIAAB8N049.jpg","scheduleTime":"1516793554","startTime":"0","endTime":"0","status":"0"},"goodsList":[{"liveId":"1","goodsId":"1"},{"liveId":"1","goodsId":"3"},{"liveId":"1","goodsId":"345"},{"liveId":"1","goodsId":"678"},{"liveId":"1","goodsId":"890"}]})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年01月25日
     */
    public function getLiveGoodsInfoAsync(int $liveId)
    {
        return EellyClient::request('live/live', 'getLiveGoodsInfo', false, $liveId);
    }

    /**
     * 获取一个直播的统计数据.
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ----------|-------|--------------
     * liveId    |string |直播ID
     * view      |string |总人数
     * praise    |string |点赞数
     * follow    |string |关注数
     * orders    |string |订单数
     * startTime |string |直播开始时间
     * endTime   |string |直播结束时间
     *
     * @param int $liveId 直播ID
     * @return array
     * @requestExample({"liveId":1})
     * @returnExample({"liveId":"1","view":"133","praise":"1","follow":"1","orders":"122","startTime":"0","endTime":"0"})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年01月29日
     * @Validation(
     *  @OperatorValidator(0,{message:"直播ID",operator:["gt",0]})
     *)
     */
    public function getLiveStatsInfo(int $liveId): array
    {
        return EellyClient::request('live/live', 'getLiveStatsInfo', true, $liveId);
    }

    /**
     * 获取一个直播的统计数据.
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ----------|-------|--------------
     * liveId    |string |直播ID
     * view      |string |总人数
     * praise    |string |点赞数
     * follow    |string |关注数
     * orders    |string |订单数
     * startTime |string |直播开始时间
     * endTime   |string |直播结束时间
     *
     * @param int $liveId 直播ID
     * @return array
     * @requestExample({"liveId":1})
     * @returnExample({"liveId":"1","view":"133","praise":"1","follow":"1","orders":"122","startTime":"0","endTime":"0"})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年01月29日
     * @Validation(
     *  @OperatorValidator(0,{message:"直播ID",operator:["gt",0]})
     *)
     */
    public function getLiveStatsInfoAsync(int $liveId)
    {
        return EellyClient::request('live/live', 'getLiveStatsInfo', false, $liveId);
    }

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
    public function getStatistics(array $condition = [], string $field = 'getStat'): array
    {
        return EellyClient::request('live/live', 'getStatistics', true, $condition, $field);
    }

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
    public function getStatisticsAsync(array $condition = [], string $field = 'getStat')
    {
        return EellyClient::request('live/live', 'getStatistics', false, $condition, $field);
    }

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
    public function getSellerLiveList(array $condition, int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('live/live', 'getSellerLiveList', true, $condition, $currentPage, $limit);
    }

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
    public function getSellerLiveListAsync(array $condition, int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('live/live', 'getSellerLiveList', false, $condition, $currentPage, $limit);
    }

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
     * @param int   $order                     排序
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
    public function getProgressList(array $condition, int $currentPage = 1, int $limit = 10, string $order = 'progress'): array
    {
        return EellyClient::request('live/live', 'getProgressList', true, $condition, $currentPage, $limit, $order);
    }

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
     * @param int   $order                     排序
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
    public function getProgressListAsync(array $condition, int $currentPage = 1, int $limit = 10, string $order = 'progress')
    {
        return EellyClient::request('live/live', 'getProgressList', false, $condition, $currentPage, $limit, $order);
    }

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
    public function getLiveList(array $condition, int $currentPage = 1, int $limit = 10, string $order = 'base'): array
    {
        return EellyClient::request('live/live', 'getLiveList', true, $condition, $currentPage, $limit, $order);
    }

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
    public function getLiveListAsync(array $condition, int $currentPage = 1, int $limit = 10, string $order = 'base')
    {
        return EellyClient::request('live/live', 'getLiveList', false, $condition, $currentPage, $limit, $order);
    }

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
    public function getLiveListByCondition(array $condition, string $field = 'base', string $order = 'base')
    {
        return EellyClient::request('live/live', 'getLiveListByCondition', true, $condition, $field, $order);
    }

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
    public function getLiveListByConditionAsync(array $condition, string $field = 'base', string $order = 'base')
    {
        return EellyClient::request('live/live', 'getLiveListByCondition', false, $condition, $field, $order);
    }

    /**
     * 批量更新排序.
     *
     * @param array  $sort 传递参数
     *
     * @return bool
     *
     * @requestExample({"sort":["1":4,"2":8]})
     *
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年01月23日
     * @Validation(
     *  @PresenceOf(0,{message : "数据不能为空"})
     *)
     */
    public function updateSort(array $sort): bool
    {
        return EellyClient::request('live/live', 'updateSort', true, $sort);
    }

    /**
     * 批量更新排序.
     *
     * @param array  $sort 传递参数
     *
     * @return bool
     *
     * @requestExample({"sort":["1":4,"2":8]})
     *
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年01月23日
     * @Validation(
     *  @PresenceOf(0,{message : "数据不能为空"})
     *)
     */
    public function updateSortAsync(array $sort)
    {
        return EellyClient::request('live/live', 'updateSort', false, $sort);
    }

    /**
     * 支付成功后插入空直播信息.
     *
     * @param array $data            请求参数
     * @param int   $data['count']   场数
     * @param int   $data['userId']  用户ID
     * @param int   $data['storeId'] 店铺ID
     * @param int   $data['isPay']   是否收费
     * @param int   $data['liveType'] 直播类型(1.白天场 2.白天连播场 3.晚上场 4.晚上连播场)
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
    public function addReadyLive(array $data): bool
    {
        return EellyClient::request('live/live', 'addReadyLive', true, $data);
    }

    /**
     * 支付成功后插入空直播信息.
     *
     * @param array $data            请求参数
     * @param int   $data['count']   场数
     * @param int   $data['userId']  用户ID
     * @param int   $data['storeId'] 店铺ID
     * @param int   $data['isPay']   是否收费
     * @param int   $data['liveType'] 直播类型(1.白天场 2.白天连播场 3.晚上场 4.晚上连播场)
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
    public function addReadyLiveAsync(array $data)
    {
        return EellyClient::request('live/live', 'addReadyLive', false, $data);
    }

    /**
     * 获取店铺的直播.
     *
     * @param int $storeId
     *
     * @return array
     *
     * @author hehui<hehui@eelly.net>
     */
    public function getStoreLive(int $storeId): array
    {
        return EellyClient::request('live/live', 'getStoreLive', true, $storeId);
    }

    /**
     * 获取店铺的直播.
     *
     * @param int $storeId
     *
     * @return array
     *
     * @author hehui<hehui@eelly.net>
     */
    public function getStoreLiveAsync(int $storeId)
    {
        return EellyClient::request('live/live', 'getStoreLive', false, $storeId);
    }

    /**
     * 获取店铺已开启过的直播数
     *
     * @param array $storeIds 店铺id
     * @return array
     * @requestExample({
     *     "storeIds":[148086]
     * })
     * @returnExample({
     *     "148086":{
     *         "store_id":148086,
     *         "rowcount":1
     *     }
     * })
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2018年2月1日
     */
    public function getOpenLiveNumber(array $storeIds): array
    {
        return EellyClient::request('live/live', 'getOpenLiveNumber', true, $storeIds);
    }

    /**
     * 获取店铺已开启过的直播数
     *
     * @param array $storeIds 店铺id
     * @return array
     * @requestExample({
     *     "storeIds":[148086]
     * })
     * @returnExample({
     *     "148086":{
     *         "store_id":148086,
     *         "rowcount":1
     *     }
     * })
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2018年2月1日
     */
    public function getOpenLiveNumberAsync(array $storeIds)
    {
        return EellyClient::request('live/live', 'getOpenLiveNumber', false, $storeIds);
    }

    /**
     * 根据直播id获取对应的直播url
     *
     * @param string $liveId 直播id
     * @return array
     *
     * @requestExample({
     *     "liveId":39
     * })
     * @returnExample({"RTMP":"rtmp:\/\/3344.liveplay.myqcloud.com\/live\/3344_dev_39","FLV":"http:\/\/3344.liveplay.myqcloud.com\/live\/3344_dev_39.flv","HLS":"http:\/\/3344.liveplay.myqcloud.com\/live\/3344_dev_39.m3u8"})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018年3月3日
     */
    public function getLivePlayUrl(string $liveId): array
    {
        return EellyClient::request('live/live', 'getLivePlayUrl', true, $liveId);
    }

    /**
     * 根据直播id获取对应的直播url
     *
     * @param string $liveId 直播id
     * @return array
     *
     * @requestExample({
     *     "liveId":39
     * })
     * @returnExample({"RTMP":"rtmp:\/\/3344.liveplay.myqcloud.com\/live\/3344_dev_39","FLV":"http:\/\/3344.liveplay.myqcloud.com\/live\/3344_dev_39.flv","HLS":"http:\/\/3344.liveplay.myqcloud.com\/live\/3344_dev_39.m3u8"})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018年3月3日
     */
    public function getLivePlayUrlAsync(string $liveId)
    {
        return EellyClient::request('live/live', 'getLivePlayUrl', false, $liveId);
    }

    /**
     * 获取店铺已直播过的liveId
     *
     * @param array $storeIds 店铺id
     * @param number $startTime 开始时间
     * @param number $endTime 截止时间
     * @return array
     * @requestExample({
     *     "storeIds":[1,2,3],
     *     "startTime":1234567890,
     *     "endTime":1234567890
     * })
     * @returnExample({
     *     "148086":{
     *         "storeId":148086,
     *         "liveIds":[1,2,3]
     *     }
     * })
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2018年3月17日
     */
    public function getAlreadyLiveIdByStoreIds(array $storeIds, int $startTime = 0, int $endTime = 0): array
    {
        return EellyClient::request('live/live', 'getAlreadyLiveIdByStoreIds', true, $storeIds, $startTime, $endTime);
    }

    /**
     * 获取店铺已直播过的liveId
     *
     * @param array $storeIds 店铺id
     * @param number $startTime 开始时间
     * @param number $endTime 截止时间
     * @return array
     * @requestExample({
     *     "storeIds":[1,2,3],
     *     "startTime":1234567890,
     *     "endTime":1234567890
     * })
     * @returnExample({
     *     "148086":{
     *         "storeId":148086,
     *         "liveIds":[1,2,3]
     *     }
     * })
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2018年3月17日
     */
    public function getAlreadyLiveIdByStoreIdsAsync(array $storeIds, int $startTime = 0, int $endTime = 0)
    {
        return EellyClient::request('live/live', 'getAlreadyLiveIdByStoreIds', false, $storeIds, $startTime, $endTime);
    }

    /**
     * 更新直播展示限制标志
     * 
     * @param int $liveId 直播id
     * @param array $flag 限制标识 1 APP限制 2 PC限制 4 WAP限制 8 小程序限制
     * @param int $type 0.屏蔽 1.展示
     * 
     * @requestExample({"liveId":"209","flag":[1,2,4],"type":1})
     * @returnExample(true)
     * 
     * @author wechan
     * @since 2018年4月27日
     * 
     */
    public function updateShowFlag(int $liveId, array $flag, int $type): bool
    {
        return EellyClient::request('live/live', 'updateShowFlag', true, $liveId, $flag, $type);
    }

    /**
     * 更新直播展示限制标志
     * 
     * @param int $liveId 直播id
     * @param array $flag 限制标识 1 APP限制 2 PC限制 4 WAP限制 8 小程序限制
     * @param int $type 0.屏蔽 1.展示
     * 
     * @requestExample({"liveId":"209","flag":[1,2,4],"type":1})
     * @returnExample(true)
     * 
     * @author wechan
     * @since 2018年4月27日
     * 
     */
    public function updateShowFlagAsync(int $liveId, array $flag, int $type)
    {
        return EellyClient::request('live/live', 'updateShowFlag', false, $liveId, $flag, $type);
    }

    /**
     * 获取正在直播的店铺id
     * 
     * @requestExample()
     * @returnExample(["148086","1760467","1761477"])
     * 
     * @author wechan
     * @since 2018年07月07日
     */
    public function getOnLiveStoreId(): array
    {
        return EellyClient::request('live/live', 'getOnLiveStoreId', true);
    }

    /**
     * 获取正在直播的店铺id
     * 
     * @requestExample()
     * @returnExample(["148086","1760467","1761477"])
     * 
     * @author wechan
     * @since 2018年07月07日
     */
    public function getOnLiveStoreIdAsync()
    {
        return EellyClient::request('live/live', 'getOnLiveStoreId', false);
    }

    /**
     * 取消直播预约
     *
     * @param int $liveId
     * @return bool
     *
     * @requestExample({"liveId":209})
     * @returnExample(true)
     *
     * @author 张扬熏<542207975@qq.com>
     * @since 2018/06/29
     */
    public function cancelLive(int $liveId): bool
    {
        return EellyClient::request('live/live', 'cancelLive', true, $liveId);
    }

    /**
     * 取消直播预约
     *
     * @param int $liveId
     * @return bool
     *
     * @requestExample({"liveId":209})
     * @returnExample(true)
     *
     * @author 张扬熏<542207975@qq.com>
     * @since 2018/06/29
     */
    public function cancelLiveAsync(int $liveId)
    {
        return EellyClient::request('live/live', 'cancelLive', false, $liveId);
    }

    /**
     * 随机取直播数据
     *
     * @param array $condition 查询条件，可选
     * @param int   $num       查询数量，默认1
     * @return array
     *
     * @requestExample({ "condition":{"storeIds":[148086,148087], "inStatus":[1, 12, 13], "lastSchedule":"1516353883"}, "num": 1 })
     * @returnExample({ {"liveId":1, "title":"11", "image":"1111", "view":168} })
     *
     * @author zhangyangxun
     * @since 2018-08-10
     */
    public function getRandomLive(array $condition = [], int $num = 1): array
    {
        return EellyClient::request('live/live', 'getRandomLive', true, $condition, $num);
    }

    /**
     * 随机取直播数据
     *
     * @param array $condition 查询条件，可选
     * @param int   $num       查询数量，默认1
     * @return array
     *
     * @requestExample({ "condition":{"storeIds":[148086,148087], "inStatus":[1, 12, 13], "lastSchedule":"1516353883"}, "num": 1 })
     * @returnExample({ {"liveId":1, "title":"11", "image":"1111", "view":168} })
     *
     * @author zhangyangxun
     * @since 2018-08-10
     */
    public function getRandomLiveAsync(array $condition = [], int $num = 1)
    {
        return EellyClient::request('live/live', 'getRandomLive', false, $condition, $num);
    }

    /**
     * 获取指定天数后过期的直播数据
     *
     * @param int $day
     * @return array
     *
     * @requestExample({"day": 7})
     * @returnExample([{ "storeId": 1760467, 'liveCount': 8, "validDate": 1514735999}])
     *
     * @author zhangyangxun
     * @since 2018-08-14
     */
    public function getExpiredStat(int $day): array
    {
        return EellyClient::request('live/live', 'getExpiredStat', true, $day);
    }

    /**
     * 获取指定天数后过期的直播数据
     *
     * @param int $day
     * @return array
     *
     * @requestExample({"day": 7})
     * @returnExample([{ "storeId": 1760467, 'liveCount': 8, "validDate": 1514735999}])
     *
     * @author zhangyangxun
     * @since 2018-08-14
     */
    public function getExpiredStatAsync(int $day)
    {
        return EellyClient::request('live/live', 'getExpiredStat', false, $day);
    }

    /**
     * 关于直播操作
     *
     * @param integer $userId 用户ID
     * @param integer $storeId 店铺id
     * @param int $type 消息类型 1正在去拿货2刚刚下了单3关注了直播商家4分享了该直播5主播变更讲解商品
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     */
    public function aboutOrderAndCartHandle(int $userId, int $storeId, int $type): bool
    {
        return EellyClient::request('live/live', 'aboutOrderAndCartHandle', true, $userId, $storeId, $type);
    }

    /**
     * 关于直播操作
     *
     * @param integer $userId 用户ID
     * @param integer $storeId 店铺id
     * @param int $type 消息类型 1正在去拿货2刚刚下了单3关注了直播商家4分享了该直播5主播变更讲解商品
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     */
    public function aboutOrderAndCartHandleAsync(int $userId, int $storeId, int $type)
    {
        return EellyClient::request('live/live', 'aboutOrderAndCartHandle', false, $userId, $storeId, $type);
    }

    /**
     * 发送点赞信息.
     * 
     * @param type $userId 用户id
     * @param int $liveId 直播id
     * @param int $praise 点击次数
     * 
     * @author wechan
     * @since 2018年12月20日
     */
    public function sendPraise(int $userId, int $liveId, int $praise)
    {
        return EellyClient::request('live/live', 'sendPraise', true, $userId, $liveId, $praise);
    }

    /**
     * 发送点赞信息.
     * 
     * @param type $userId 用户id
     * @param int $liveId 直播id
     * @param int $praise 点击次数
     * 
     * @author wechan
     * @since 2018年12月20日
     */
    public function sendPraiseAsync(int $userId, int $liveId, int $praise)
    {
        return EellyClient::request('live/live', 'sendPraise', false, $userId, $liveId, $praise);
    }

    /**
     * 获取正在直播中的直播间数量
     *
     * @return string
     * @returnExample("10")
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.12.04
     */
    public function getLivingRoomNum(): string
    {
        return EellyClient::request('live/live', 'getLivingRoomNum', true);
    }

    /**
     * 获取正在直播中的直播间数量
     *
     * @return string
     * @returnExample("10")
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.12.04
     */
    public function getLivingRoomNumAsync()
    {
        return EellyClient::request('live/live', 'getLivingRoomNum', false);
    }

    /**
     * 根据直播id，获取对应的推流地址
     *
     * @param int $liveId 直播id
     * @return array
     *
     * @requestExample({"liveId": 586})
     * @returnExample({"firstUrl":"rtmp:\/\/push.eelly.com\/live\/","endUrl":"3344_develop_586?bizid=3344&txSecret=cdc8accbf1b8cfc076ac87cf68130704&txTime=5C18BE50"})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.12.17
     */
    public function getLivePushUrl(int $liveId): array
    {
        return EellyClient::request('live/live', 'getLivePushUrl', true, $liveId);
    }

    /**
     * 根据直播id，获取对应的推流地址
     *
     * @param int $liveId 直播id
     * @return array
     *
     * @requestExample({"liveId": 586})
     * @returnExample({"firstUrl":"rtmp:\/\/push.eelly.com\/live\/","endUrl":"3344_develop_586?bizid=3344&txSecret=cdc8accbf1b8cfc076ac87cf68130704&txTime=5C18BE50"})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.12.17
     */
    public function getLivePushUrlAsync(int $liveId)
    {
        return EellyClient::request('live/live', 'getLivePushUrl', false, $liveId);
    }

    /**
     * 获取直播标签
     * 
     * @param int $page 分页
     * @param int $limit 分页页数
     * @param int $tab 标签id 不传默认为1
     * @param int $platform 平台类型 APP WAP PC APPLET
     * 
     * @author wechan
     * @since 2019年1月4日
     * 
     */
    public function getLiveTabsList(int $page = 1, int $limit = 10, int $tab = 1, string $platform = 'APP'): array
    {
        return EellyClient::request('live/live', 'getLiveTabsList', true, $page, $limit, $tab, $platform);
    }

    /**
     * 获取直播标签
     * 
     * @param int $page 分页
     * @param int $limit 分页页数
     * @param int $tab 标签id 不传默认为1
     * @param int $platform 平台类型 APP WAP PC APPLET
     * 
     * @author wechan
     * @since 2019年1月4日
     * 
     */
    public function getLiveTabsListAsync(int $page = 1, int $limit = 10, int $tab = 1, string $platform = 'APP')
    {
        return EellyClient::request('live/live', 'getLiveTabsList', false, $page, $limit, $tab, $platform);
    }

    /**
     * 店+直播中心=》正在直播.
     *
     * @param array  $data      请求参数
     * @param int    $data[page]      第几页
     * @param int    $data[limit]     每页条数
     * @param string $data[platform]  平台类型 APP WAP PC APPLET
     * 
     * ### 返回数据说明.
     * 字段|类型|说明
     * items|array  |列表数据
     * page  |array  |页数信息
     * tabs  |array  |标签信息
     * tabs[name] | string | 标签名称()
     * tabs[tab] | int | 标签id
     * tabs[lableType] | int | 标签类型：1 店铺主营 2 店铺VIP等级 3 店铺所在商圈
     * tabs[liveStatus] | int | '直播状态：0 预告 1 直播中 2 直播记录'
     * tabs[count] | int | 数量
     * 
     * @return array
     * @returnExample({"items":[{"liveId":"462","userId":"158252","storeId":"158252","title":"111111","image":"https:\/\/eellytest.eelly.com\/user158252\/other\/20181108\/1475507561451.jpg?t=1541657056&x-oss-process=image\/resize,w_200","scheduleTime":"1541638800","startTime":"1541661259","endTime":"1541703600","validDate":"0","sort":"255","status":"1","createdTime":"1541233143","isPay":"0","showFlag":"15","liveType":5,"lpId":"19","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_462","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_462.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_462.m3u8"},"view":0,"goodsCount":"15","goodsList":[{"goodsId":"5579067","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181029\/8417194870451.jpg?t=1540784917"},{"goodsId":"5579076","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181103\/8342606321451.jpg?t=1541236062"},{"goodsId":"5579083","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181103\/9175212421451.jpg?t=1541242126"}],"addressName":"广州. 广大布匹商贸城","userName":"窈窕衣色测试店","portraitUrl":"https:\/\/eellytest.eelly.com\/store158252\/logo.jpg?t=1541240097","isHaveCoupon":false,"isStoreVip":true}],"page":{"totalPages":1,"totalItems":1,"current":1,"limit":10},"tabs":[{"name":"全部直播","tab":"1","lableType":"1","liveStatus":"1"},{"name":"直播预告","tab":"2","lableType":"1","liveStatus":"0"},{"name":"直播记录","tab":"3","lableType":"1","liveStatus":"2"},{"name":"虎门商圈","tab":"4","lableType":"3","liveStatus":"1"},{"name":"VIP商家","tab":"5","lableType":"2","liveStatus":"1"},{"name":"其他饰品","tab":"6","lableType":"1","liveStatus":"1"}]})
     *
     * @author  wechan
     * @since   2019年01月07日
     */
    public function getLiveProgressList(array $data): array
    {
        return EellyClient::request('live/live', 'getLiveProgressList', true, $data);
    }

    /**
     * 店+直播中心=》正在直播.
     *
     * @param array  $data      请求参数
     * @param int    $data[page]      第几页
     * @param int    $data[limit]     每页条数
     * @param string $data[platform]  平台类型 APP WAP PC APPLET
     * 
     * ### 返回数据说明.
     * 字段|类型|说明
     * items|array  |列表数据
     * page  |array  |页数信息
     * tabs  |array  |标签信息
     * tabs[name] | string | 标签名称()
     * tabs[tab] | int | 标签id
     * tabs[lableType] | int | 标签类型：1 店铺主营 2 店铺VIP等级 3 店铺所在商圈
     * tabs[liveStatus] | int | '直播状态：0 预告 1 直播中 2 直播记录'
     * tabs[count] | int | 数量
     * 
     * @return array
     * @returnExample({"items":[{"liveId":"462","userId":"158252","storeId":"158252","title":"111111","image":"https:\/\/eellytest.eelly.com\/user158252\/other\/20181108\/1475507561451.jpg?t=1541657056&x-oss-process=image\/resize,w_200","scheduleTime":"1541638800","startTime":"1541661259","endTime":"1541703600","validDate":"0","sort":"255","status":"1","createdTime":"1541233143","isPay":"0","showFlag":"15","liveType":5,"lpId":"19","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_462","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_462.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_462.m3u8"},"view":0,"goodsCount":"15","goodsList":[{"goodsId":"5579067","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181029\/8417194870451.jpg?t=1540784917"},{"goodsId":"5579076","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181103\/8342606321451.jpg?t=1541236062"},{"goodsId":"5579083","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181103\/9175212421451.jpg?t=1541242126"}],"addressName":"广州. 广大布匹商贸城","userName":"窈窕衣色测试店","portraitUrl":"https:\/\/eellytest.eelly.com\/store158252\/logo.jpg?t=1541240097","isHaveCoupon":false,"isStoreVip":true}],"page":{"totalPages":1,"totalItems":1,"current":1,"limit":10},"tabs":[{"name":"全部直播","tab":"1","lableType":"1","liveStatus":"1"},{"name":"直播预告","tab":"2","lableType":"1","liveStatus":"0"},{"name":"直播记录","tab":"3","lableType":"1","liveStatus":"2"},{"name":"虎门商圈","tab":"4","lableType":"3","liveStatus":"1"},{"name":"VIP商家","tab":"5","lableType":"2","liveStatus":"1"},{"name":"其他饰品","tab":"6","lableType":"1","liveStatus":"1"}]})
     *
     * @author  wechan
     * @since   2019年01月07日
     */
    public function getLiveProgressListAsync(array $data)
    {
        return EellyClient::request('live/live', 'getLiveProgressList', false, $data);
    }

    /**
     * 店+直播中心=》直播预告
     * 
     * @param array  $data      请求参数
     * @param int    $data[page]      第几页
     * @param int    $data[limit]     每页条数
     * @param string $data[platform]  平台类型 APP WAP PC APPLET
     * 
     * ### 返回数据说明.
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
     * items["addressName"]  |string |店铺地址
     * items["userName"]     |string |店铺名称
     * items["portraitUrl"]  |string |店铺logo
     * items["isSubscribe"]  |bool   |是否订阅，订阅为true，未订阅false
     * items["isSubscribe"]  |bool   |是否订阅，订阅为true，未订阅false
     * items["isStoreVip"]   |bool   |是否是店铺vip
     * items["isHaveCoupon"] |bool   |是否有优惠券
     * page                  |array  |页数信息
     * page["totalPages"]    |int    |总页数
     * page["totalItems"]    |int    |总条数
     * page["current"]       |int    |当前页
     * page["limit"]         |int    |每页条数
     * tabs  |array  |标签信息
     * tabs[name] | string | 标签名称
     * tabs[tab] | int | 标签id
     * tabs[lableType] | int | 标签类型：1 店铺主营 2 店铺VIP等级 3 店铺所在商圈
     * tabs[live_status] | int | '直播状态：0 预告 1 直播中 2 直播记录'
     *
     *
     * @return array
     * @returnExample({"items":[{"liveId":"301","userId":"2140195","storeId":"2140195","title":"local010_的直播","image":"","scheduleTime":"1529424000","startTime":"0","endTime":"1529424000","validDate":"0","sort":"255","status":"0","createdTime":"1520232571","isPay":"0","showFlag":"15","liveType":2,"lpId":"5","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_301","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_301.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_301.m3u8"},"view":0,"goodsCount":0,"goodsList":[],"addressName":"广州. 白马服装批发市场 2层 2层 hgfdd","userName":"local010_","portraitUrl":"https:\/\/img.eelly.test\/data\/system\/default_store_logo_png.png","isHaveCoupon":false,"isSubscribe":false,"vipValid":0,"storeVipType":0},{"liveId":"302","userId":"2140195","storeId":"2140195","title":"local010_的直播","image":"","scheduleTime":"1529424000","startTime":"0","endTime":"1529424000","validDate":"0","sort":"255","status":"0","createdTime":"1520232571","isPay":"0","showFlag":"15","liveType":2,"lpId":"5","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_302","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_302.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_302.m3u8"},"view":0,"goodsCount":0,"goodsList":[],"addressName":"广州. 白马服装批发市场 2层 2层 hgfdd","userName":"local010_","portraitUrl":"https:\/\/img.eelly.test\/data\/system\/default_store_logo_png.png","isHaveCoupon":false,"isSubscribe":false,"vipValid":0,"storeVipType":0},{"liveId":"303","userId":"2140195","storeId":"2140195","title":"local010_的直播","image":"","scheduleTime":"1529424000","startTime":"0","endTime":"1529424000","validDate":"0","sort":"255","status":"0","createdTime":"1520232571","isPay":"0","showFlag":"15","liveType":2,"lpId":"5","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_303","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_303.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_303.m3u8"},"view":0,"goodsCount":0,"goodsList":[],"addressName":"广州. 白马服装批发市场 2层 2层 hgfdd","userName":"local010_","portraitUrl":"https:\/\/img.eelly.test\/data\/system\/default_store_logo_png.png","isHaveCoupon":false,"isSubscribe":false,"vipValid":0,"storeVipType":0},{"liveId":"304","userId":"2140195","storeId":"2140195","title":"local010_的直播","image":"","scheduleTime":"1529424000","startTime":"0","endTime":"1529424000","validDate":"0","sort":"255","status":"0","createdTime":"1520232571","isPay":"0","showFlag":"15","liveType":2,"lpId":"5","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_304","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_304.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_304.m3u8"},"view":0,"goodsCount":0,"goodsList":[],"addressName":"广州. 白马服装批发市场 2层 2层 hgfdd","userName":"local010_","portraitUrl":"https:\/\/img.eelly.test\/data\/system\/default_store_logo_png.png","isHaveCoupon":false,"isSubscribe":false,"vipValid":0,"storeVipType":0},{"liveId":"305","userId":"2140195","storeId":"2140195","title":"local010_的直播","image":"","scheduleTime":"1529424000","startTime":"0","endTime":"1529424000","validDate":"0","sort":"255","status":"0","createdTime":"1520232571","isPay":"0","showFlag":"15","liveType":2,"lpId":"5","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_305","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_305.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_305.m3u8"},"view":0,"goodsCount":0,"goodsList":[],"addressName":"广州. 白马服装批发市场 2层 2层 hgfdd","userName":"local010_","portraitUrl":"https:\/\/img.eelly.test\/data\/system\/default_store_logo_png.png","isHaveCoupon":false,"isSubscribe":false,"vipValid":0,"storeVipType":0},{"liveId":"306","userId":"2140195","storeId":"2140195","title":"local010_的直播","image":"","scheduleTime":"1529424000","startTime":"0","endTime":"1529424000","validDate":"0","sort":"255","status":"0","createdTime":"1520232571","isPay":"0","showFlag":"15","liveType":2,"lpId":"5","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_306","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_306.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_306.m3u8"},"view":0,"goodsCount":0,"goodsList":[],"addressName":"广州. 白马服装批发市场 2层 2层 hgfdd","userName":"local010_","portraitUrl":"https:\/\/img.eelly.test\/data\/system\/default_store_logo_png.png","isHaveCoupon":false,"isSubscribe":false,"vipValid":0,"storeVipType":0},{"liveId":"307","userId":"2140195","storeId":"2140195","title":"local010_的直播","image":"","scheduleTime":"1529424000","startTime":"0","endTime":"1529424000","validDate":"0","sort":"255","status":"0","createdTime":"1520232571","isPay":"0","showFlag":"15","liveType":2,"lpId":"5","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_307","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_307.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_307.m3u8"},"view":0,"goodsCount":0,"goodsList":[],"addressName":"广州. 白马服装批发市场 2层 2层 hgfdd","userName":"local010_","portraitUrl":"https:\/\/img.eelly.test\/data\/system\/default_store_logo_png.png","isHaveCoupon":false,"isSubscribe":false,"vipValid":0,"storeVipType":0},{"liveId":"220","userId":"135446","storeId":"135446","title":"杭州米素服饰公司的精..","image":"https:\/\/img.eelly.test\/G01\/M00\/00\/06\/oYYBAFs110uIUjImAAB-BGzT5KgAAACagJCVnAAAH4c739.jpg?x-oss-process=image\/resize,w_200","scheduleTime":"1530266400","startTime":"0","endTime":"1530277200","validDate":"0","sort":"255","status":"0","createdTime":"1523525144","isPay":"1","showFlag":"15","liveType":3,"lpId":"7","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_220","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_220.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_220.m3u8"},"view":0,"goodsCount":"4","goodsList":[],"addressName":"杭州. 九天国际服装城","userName":"vbc2005","portraitUrl":"https:\/\/img.eelly.test\/data\/system\/default_store_logo_png.png","isHaveCoupon":false,"isSubscribe":false,"vipValid":0,"storeVipType":0},{"liveId":"252","userId":"1761477","storeId":"1761477","title":"广东省广州市萌STY..","image":"https:\/\/img.eelly.test\/G01\/M00\/00\/06\/oYYBAFsP3gaIZfdDAACut0ObixcAAACagHi8IkAAK7P684.jpg?x-oss-process=image\/resize,w_200","scheduleTime":"1530579600","startTime":"0","endTime":"1530590400","validDate":"0","sort":"255","status":"0","createdTime":"1527736402","isPay":"0","showFlag":"31","liveType":1,"lpId":"2","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_252","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_252.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_252.m3u8"},"view":0,"goodsCount":"4","goodsList":[],"addressName":"广州. 龙洞批发市场 1 10026","userName":"衣服批发店铺（test）","portraitUrl":"G01\/M00\/00\/05\/oYYBAFglpPCIA6eWAAfksnF4XPgAAACJAOk84sAB-TK104.jpg","isHaveCoupon":false,"isSubscribe":false,"vipValid":1,"storeVipType":0},{"liveId":"461","userId":"158252","storeId":"158252","title":"的精彩直播","image":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181106\/6872162741451.jpg?t=1541472613&x-oss-process=image\/resize,w_200","scheduleTime":"1541466000","startTime":"1541508594","endTime":"1541530800","validDate":"0","sort":"255","status":"0","createdTime":"1541232901","isPay":"0","showFlag":"15","liveType":5,"lpId":"19","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_461","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_461.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_461.m3u8"},"view":0,"goodsCount":"20","goodsList":[{"goodsId":"5579066","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181027\/6870911360451.jpg?t=1540631191"},{"goodsId":"5579075","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181103\/1068765321451.jpg?t=1541235679"},{"goodsId":"5579082","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181103\/9846298321451.jpg?t=1541238926"}],"addressName":"广州. 广大布匹商贸城","userName":"窈窕衣色测试店","portraitUrl":"https:\/\/eellytest.eelly.com\/store158252\/logo.jpg?t=1541240097","isHaveCoupon":false,"isSubscribe":false,"vipValid":0,"storeVipType":0}],"page":{"totalPages":1,"totalItems":10,"current":1,"limit":10},"tabs":[{"name":"全部直播","tab":"1","lableType":"1","liveStatus":"1"},{"name":"直播预告","tab":"2","lableType":"1","liveStatus":"0"},{"name":"直播记录","tab":"3","lableType":"1","liveStatus":"2"},{"name":"虎门商圈","tab":"4","lableType":"3","liveStatus":"1"},{"name":"VIP商家","tab":"5","lableType":"2","liveStatus":"1"},{"name":"其他饰品","tab":"6","lableType":"1","liveStatus":"1"}]})
     *
     * @author  wechan
     * @since   2019年01月07日
     */
    public function getPendingList(array $data): array
    {
        return EellyClient::request('live/live', 'getPendingList', true, $data);
    }

    /**
     * 店+直播中心=》直播预告
     * 
     * @param array  $data      请求参数
     * @param int    $data[page]      第几页
     * @param int    $data[limit]     每页条数
     * @param string $data[platform]  平台类型 APP WAP PC APPLET
     * 
     * ### 返回数据说明.
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
     * items["addressName"]  |string |店铺地址
     * items["userName"]     |string |店铺名称
     * items["portraitUrl"]  |string |店铺logo
     * items["isSubscribe"]  |bool   |是否订阅，订阅为true，未订阅false
     * items["isSubscribe"]  |bool   |是否订阅，订阅为true，未订阅false
     * items["isStoreVip"]   |bool   |是否是店铺vip
     * items["isHaveCoupon"] |bool   |是否有优惠券
     * page                  |array  |页数信息
     * page["totalPages"]    |int    |总页数
     * page["totalItems"]    |int    |总条数
     * page["current"]       |int    |当前页
     * page["limit"]         |int    |每页条数
     * tabs  |array  |标签信息
     * tabs[name] | string | 标签名称
     * tabs[tab] | int | 标签id
     * tabs[lableType] | int | 标签类型：1 店铺主营 2 店铺VIP等级 3 店铺所在商圈
     * tabs[live_status] | int | '直播状态：0 预告 1 直播中 2 直播记录'
     *
     *
     * @return array
     * @returnExample({"items":[{"liveId":"301","userId":"2140195","storeId":"2140195","title":"local010_的直播","image":"","scheduleTime":"1529424000","startTime":"0","endTime":"1529424000","validDate":"0","sort":"255","status":"0","createdTime":"1520232571","isPay":"0","showFlag":"15","liveType":2,"lpId":"5","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_301","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_301.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_301.m3u8"},"view":0,"goodsCount":0,"goodsList":[],"addressName":"广州. 白马服装批发市场 2层 2层 hgfdd","userName":"local010_","portraitUrl":"https:\/\/img.eelly.test\/data\/system\/default_store_logo_png.png","isHaveCoupon":false,"isSubscribe":false,"vipValid":0,"storeVipType":0},{"liveId":"302","userId":"2140195","storeId":"2140195","title":"local010_的直播","image":"","scheduleTime":"1529424000","startTime":"0","endTime":"1529424000","validDate":"0","sort":"255","status":"0","createdTime":"1520232571","isPay":"0","showFlag":"15","liveType":2,"lpId":"5","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_302","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_302.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_302.m3u8"},"view":0,"goodsCount":0,"goodsList":[],"addressName":"广州. 白马服装批发市场 2层 2层 hgfdd","userName":"local010_","portraitUrl":"https:\/\/img.eelly.test\/data\/system\/default_store_logo_png.png","isHaveCoupon":false,"isSubscribe":false,"vipValid":0,"storeVipType":0},{"liveId":"303","userId":"2140195","storeId":"2140195","title":"local010_的直播","image":"","scheduleTime":"1529424000","startTime":"0","endTime":"1529424000","validDate":"0","sort":"255","status":"0","createdTime":"1520232571","isPay":"0","showFlag":"15","liveType":2,"lpId":"5","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_303","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_303.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_303.m3u8"},"view":0,"goodsCount":0,"goodsList":[],"addressName":"广州. 白马服装批发市场 2层 2层 hgfdd","userName":"local010_","portraitUrl":"https:\/\/img.eelly.test\/data\/system\/default_store_logo_png.png","isHaveCoupon":false,"isSubscribe":false,"vipValid":0,"storeVipType":0},{"liveId":"304","userId":"2140195","storeId":"2140195","title":"local010_的直播","image":"","scheduleTime":"1529424000","startTime":"0","endTime":"1529424000","validDate":"0","sort":"255","status":"0","createdTime":"1520232571","isPay":"0","showFlag":"15","liveType":2,"lpId":"5","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_304","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_304.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_304.m3u8"},"view":0,"goodsCount":0,"goodsList":[],"addressName":"广州. 白马服装批发市场 2层 2层 hgfdd","userName":"local010_","portraitUrl":"https:\/\/img.eelly.test\/data\/system\/default_store_logo_png.png","isHaveCoupon":false,"isSubscribe":false,"vipValid":0,"storeVipType":0},{"liveId":"305","userId":"2140195","storeId":"2140195","title":"local010_的直播","image":"","scheduleTime":"1529424000","startTime":"0","endTime":"1529424000","validDate":"0","sort":"255","status":"0","createdTime":"1520232571","isPay":"0","showFlag":"15","liveType":2,"lpId":"5","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_305","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_305.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_305.m3u8"},"view":0,"goodsCount":0,"goodsList":[],"addressName":"广州. 白马服装批发市场 2层 2层 hgfdd","userName":"local010_","portraitUrl":"https:\/\/img.eelly.test\/data\/system\/default_store_logo_png.png","isHaveCoupon":false,"isSubscribe":false,"vipValid":0,"storeVipType":0},{"liveId":"306","userId":"2140195","storeId":"2140195","title":"local010_的直播","image":"","scheduleTime":"1529424000","startTime":"0","endTime":"1529424000","validDate":"0","sort":"255","status":"0","createdTime":"1520232571","isPay":"0","showFlag":"15","liveType":2,"lpId":"5","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_306","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_306.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_306.m3u8"},"view":0,"goodsCount":0,"goodsList":[],"addressName":"广州. 白马服装批发市场 2层 2层 hgfdd","userName":"local010_","portraitUrl":"https:\/\/img.eelly.test\/data\/system\/default_store_logo_png.png","isHaveCoupon":false,"isSubscribe":false,"vipValid":0,"storeVipType":0},{"liveId":"307","userId":"2140195","storeId":"2140195","title":"local010_的直播","image":"","scheduleTime":"1529424000","startTime":"0","endTime":"1529424000","validDate":"0","sort":"255","status":"0","createdTime":"1520232571","isPay":"0","showFlag":"15","liveType":2,"lpId":"5","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_307","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_307.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_307.m3u8"},"view":0,"goodsCount":0,"goodsList":[],"addressName":"广州. 白马服装批发市场 2层 2层 hgfdd","userName":"local010_","portraitUrl":"https:\/\/img.eelly.test\/data\/system\/default_store_logo_png.png","isHaveCoupon":false,"isSubscribe":false,"vipValid":0,"storeVipType":0},{"liveId":"220","userId":"135446","storeId":"135446","title":"杭州米素服饰公司的精..","image":"https:\/\/img.eelly.test\/G01\/M00\/00\/06\/oYYBAFs110uIUjImAAB-BGzT5KgAAACagJCVnAAAH4c739.jpg?x-oss-process=image\/resize,w_200","scheduleTime":"1530266400","startTime":"0","endTime":"1530277200","validDate":"0","sort":"255","status":"0","createdTime":"1523525144","isPay":"1","showFlag":"15","liveType":3,"lpId":"7","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_220","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_220.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_220.m3u8"},"view":0,"goodsCount":"4","goodsList":[],"addressName":"杭州. 九天国际服装城","userName":"vbc2005","portraitUrl":"https:\/\/img.eelly.test\/data\/system\/default_store_logo_png.png","isHaveCoupon":false,"isSubscribe":false,"vipValid":0,"storeVipType":0},{"liveId":"252","userId":"1761477","storeId":"1761477","title":"广东省广州市萌STY..","image":"https:\/\/img.eelly.test\/G01\/M00\/00\/06\/oYYBAFsP3gaIZfdDAACut0ObixcAAACagHi8IkAAK7P684.jpg?x-oss-process=image\/resize,w_200","scheduleTime":"1530579600","startTime":"0","endTime":"1530590400","validDate":"0","sort":"255","status":"0","createdTime":"1527736402","isPay":"0","showFlag":"31","liveType":1,"lpId":"2","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_252","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_252.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_252.m3u8"},"view":0,"goodsCount":"4","goodsList":[],"addressName":"广州. 龙洞批发市场 1 10026","userName":"衣服批发店铺（test）","portraitUrl":"G01\/M00\/00\/05\/oYYBAFglpPCIA6eWAAfksnF4XPgAAACJAOk84sAB-TK104.jpg","isHaveCoupon":false,"isSubscribe":false,"vipValid":1,"storeVipType":0},{"liveId":"461","userId":"158252","storeId":"158252","title":"的精彩直播","image":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181106\/6872162741451.jpg?t=1541472613&x-oss-process=image\/resize,w_200","scheduleTime":"1541466000","startTime":"1541508594","endTime":"1541530800","validDate":"0","sort":"255","status":"0","createdTime":"1541232901","isPay":"0","showFlag":"15","liveType":5,"lpId":"19","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_461","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_461.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_461.m3u8"},"view":0,"goodsCount":"20","goodsList":[{"goodsId":"5579066","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181027\/6870911360451.jpg?t=1540631191"},{"goodsId":"5579075","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181103\/1068765321451.jpg?t=1541235679"},{"goodsId":"5579082","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181103\/9846298321451.jpg?t=1541238926"}],"addressName":"广州. 广大布匹商贸城","userName":"窈窕衣色测试店","portraitUrl":"https:\/\/eellytest.eelly.com\/store158252\/logo.jpg?t=1541240097","isHaveCoupon":false,"isSubscribe":false,"vipValid":0,"storeVipType":0}],"page":{"totalPages":1,"totalItems":10,"current":1,"limit":10},"tabs":[{"name":"全部直播","tab":"1","lableType":"1","liveStatus":"1"},{"name":"直播预告","tab":"2","lableType":"1","liveStatus":"0"},{"name":"直播记录","tab":"3","lableType":"1","liveStatus":"2"},{"name":"虎门商圈","tab":"4","lableType":"3","liveStatus":"1"},{"name":"VIP商家","tab":"5","lableType":"2","liveStatus":"1"},{"name":"其他饰品","tab":"6","lableType":"1","liveStatus":"1"}]})
     *
     * @author  wechan
     * @since   2019年01月07日
     */
    public function getPendingListAsync(array $data)
    {
        return EellyClient::request('live/live', 'getPendingList', false, $data);
    }

    /**
     * 店+直播中心=》直播记录.
     *
     * @param array  $data      请求参数
     * @param int    $data[page]      第几页
     * @param int    $data[limit]     每页条数
     * @param string $data[platform]  平台类型 APP WAP PC APPLET
     * 
     * 字段|类型|说明
     * items|array  |列表数据
     * page  |array  |页数信息
     * tabs  |array  |标签信息
     * tabs[name] | string | 标签名称
     * tabs[tab] | int | 标签id
     * tabs[lableType] | int | 标签类型：1 店铺主营 2 店铺VIP等级 3 店铺所在商圈
     * tabs[live_status] | int | '直播状态：0 预告 1 直播中 2 直播记录'
     *
     * @return array
     *
     * @author wechan
     * @since 2019年01月07日
     * 
     * @returnExample({"items":[{"liveId":"440","userId":"1760244","storeId":"1760244","title":"女装大大的精彩直播","image":"https:\/\/eellytest.eelly.com\/store1760244\/goods\/20181102\/9989555211451.jpg?t=1541125560&x-oss-process=image\/resize,w_200","scheduleTime":"1541379600","startTime":"0","endTime":"1541444400","validDate":"1546271999","sort":"255","status":"2","createdTime":"1540260666","isPay":"0","showFlag":"15","liveType":5,"lpId":"19","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_440","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_440.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_440.m3u8"},"view":0,"goodsCount":"36","goodsList":[{"goodsId":"5578939","defaultImage":""},{"goodsId":"5578946","defaultImage":""}],"addressName":"广州. 白马服装批发市场 -1层 110哈哈","userName":"女装大大","portraitUrl":"G01\/M00\/00\/05\/oYYBAFdgx3uICdFtAAAcfw1jZdYAAAB4QH2-3QAAB1-940.jpg","praise":"0"},{"liveId":"465","userId":"158252","storeId":"158252","title":"的精彩直播","image":"https:\/\/eellytest.eelly.com\/user158252\/other\/20181026\/2918147350451.jpg?t=1541386534&x-oss-process=image\/resize,w_200","scheduleTime":"1541379600","startTime":"1541424869","endTime":"1541444400","validDate":"1549036800","sort":"255","status":"2","createdTime":"1541234349","isPay":"0","showFlag":"15","liveType":5,"lpId":"19","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_465","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_465.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_465.m3u8"},"view":0,"goodsCount":"10","goodsList":[{"goodsId":"5579076","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181103\/8342606321451.jpg?t=1541236062"},{"goodsId":"5579080","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181103\/3485078321451.jpg?t=1541238706"},{"goodsId":"5579081","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181103\/6051778321451.jpg?t=1541238771"}],"addressName":"广州. 广大布匹商贸城","userName":"窈窕衣色测试店","portraitUrl":"https:\/\/eellytest.eelly.com\/store158252\/logo.jpg?t=1541240097","praise":"109"},{"liveId":"463","userId":"158252","storeId":"158252","title":"哈哈哈哈哈哈哈哈哈","image":"https:\/\/eellytest.eelly.com\/user158252\/other\/20181026\/2918147350451.jpg?t=1541233922&x-oss-process=image\/resize,w_200","scheduleTime":"1541206800","startTime":"1541243167","endTime":"1541271600","validDate":"1549036800","sort":"255","status":"2","createdTime":"1541233652","isPay":"0","showFlag":"15","liveType":5,"lpId":"19","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_463","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_463.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_463.m3u8"},"view":0,"goodsCount":"15","goodsList":[{"goodsId":"5579028","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181013\/7274830149351.png?t=1539410385"},{"goodsId":"5579029","defaultImage":"https:\/\/eellytest.eelly.com\/store1762613\/goods\/20181013\/7528672149351.jpg?t=1539415284"},{"goodsId":"5579052","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181019\/3867565399351.jpg?t=1539935658"}],"addressName":"广州. 广大布匹商贸城","userName":"窈窕衣色测试店","portraitUrl":"https:\/\/eellytest.eelly.com\/store158252\/logo.jpg?t=1541240097","praise":"12"},{"liveId":"439","userId":"1760244","storeId":"1760244","title":"女装大大的精彩直播","image":"https:\/\/eellytest.eelly.com\/store1760244\/goods\/20181102\/1686925211451.jpg?t=1541125297&x-oss-process=image\/resize,w_200","scheduleTime":"1541120400","startTime":"1541137346","endTime":"1541185200","validDate":"1546271999","sort":"255","status":"2","createdTime":"1540260666","isPay":"0","showFlag":"15","liveType":5,"lpId":"19","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_439","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_439.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_439.m3u8"},"view":0,"goodsCount":"40","goodsList":[],"addressName":"广州. 白马服装批发市场 -1层 110哈哈","userName":"女装大大","portraitUrl":"G01\/M00\/00\/05\/oYYBAFdgx3uICdFtAAAcfw1jZdYAAAB4QH2-3QAAB1-940.jpg","praise":"0"},{"liveId":"282","userId":"158252","storeId":"158252","title":"窈窕衣色的精彩直播","image":"https:\/\/eellytest.eelly.com\/user158252\/other\/20181019\/2233829099351.jpg?t=1539917700&x-oss-process=image\/resize,w_200","scheduleTime":"1540947600","startTime":"0","endTime":"1541012400","validDate":"0","sort":"255","status":"2","createdTime":"1529492770","isPay":"0","showFlag":"15","liveType":5,"lpId":"19","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_282","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_282.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_282.m3u8"},"view":0,"goodsCount":"4","goodsList":[{"goodsId":"5579029","defaultImage":"https:\/\/eellytest.eelly.com\/store1762613\/goods\/20181013\/7528672149351.jpg?t=1539415284"},{"goodsId":"5579065","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181027\/2016490360451.jpg?t=1540630946"},{"goodsId":"5579066","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181027\/6870911360451.jpg?t=1540631191"}],"addressName":"广州. 广大布匹商贸城","userName":"窈窕衣色测试店","portraitUrl":"https:\/\/eellytest.eelly.com\/store158252\/logo.jpg?t=1541240097","praise":0},{"liveId":"281","userId":"158252","storeId":"158252","title":"窈窕衣色的哈哈哈，，","image":"https:\/\/eellytest.eelly.com\/user158252\/other\/20181019\/7725587299351.jpg?t=1539927855&x-oss-process=image\/resize,w_200","scheduleTime":"1540774800","startTime":"1540799800","endTime":"1540839600","validDate":"0","sort":"255","status":"2","createdTime":"1529492770","isPay":"0","showFlag":"15","liveType":5,"lpId":"19","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_281","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_281.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_281.m3u8"},"view":0,"goodsCount":"4","goodsList":[{"goodsId":"5579029","defaultImage":"https:\/\/eellytest.eelly.com\/store1762613\/goods\/20181013\/7528672149351.jpg?t=1539415284"},{"goodsId":"5579065","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181027\/2016490360451.jpg?t=1540630946"},{"goodsId":"5579066","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181027\/6870911360451.jpg?t=1540631191"}],"addressName":"广州. 广大布匹商贸城","userName":"窈窕衣色测试店","portraitUrl":"https:\/\/eellytest.eelly.com\/store158252\/logo.jpg?t=1541240097","praise":"0"},{"liveId":"284","userId":"158252","storeId":"158252","title":"窈窕衣色的精彩直播11","image":"https:\/\/eellytest.eelly.com\/user158252\/other\/20181019\/3317387299351.jpg?t=1540283912&x-oss-process=image\/resize,w_200","scheduleTime":"1540602000","startTime":"1540632065","endTime":"1540634400","validDate":"0","sort":"255","status":"2","createdTime":"1529492792","isPay":"0","showFlag":"15","liveType":5,"lpId":"15","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_284","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_284.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_284.m3u8"},"view":0,"goodsCount":"7","goodsList":[{"goodsId":"5579045","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181019\/6577055199351.jpg?t=1539915508"},{"goodsId":"5579046","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181019\/1389495199351.jpg?t=1539915950"},{"goodsId":"5579047","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181019\/1267236199351.jpg?t=1539916327"}],"addressName":"广州. 广大布匹商贸城","userName":"窈窕衣色测试店","portraitUrl":"https:\/\/eellytest.eelly.com\/store158252\/logo.jpg?t=1541240097","praise":"0"},{"liveId":"434","userId":"158252","storeId":"158252","title":"窈窕衣色店的精彩直播","image":"https:\/\/eellytest.eelly.com\/user158252\/other\/20181026\/2918147350451.jpg?t=1540537418&x-oss-process=image\/resize,w_200","scheduleTime":"1540515600","startTime":"1540537723","endTime":"1540580400","validDate":"1541001599","sort":"255","status":"2","createdTime":"1539597361","isPay":"0","showFlag":"15","liveType":5,"lpId":"19","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_434","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_434.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_434.m3u8"},"view":0,"goodsCount":"74","goodsList":[{"goodsId":"5579052","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181019\/3867565399351.jpg?t=1539935658"},{"goodsId":"5579053","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181019\/9590386399351.jpg?t=1539936831"},{"goodsId":"5579054","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181019\/2393073499351.jpg?t=1539943704"}],"addressName":"广州. 广大布匹商贸城","userName":"窈窕衣色测试店","portraitUrl":"https:\/\/eellytest.eelly.com\/store158252\/logo.jpg?t=1541240097","praise":"0"},{"liveId":"278","userId":"158252","storeId":"158252","title":"窈窕衣色的精彩直播","image":"https:\/\/eellytest.eelly.com\/user158252\/other\/20181019\/2233829099351.jpg?t=1539909661&x-oss-process=image\/resize,w_200","scheduleTime":"1540396800","startTime":"0","endTime":"1540414800","validDate":"0","sort":"255","status":"2","createdTime":"1529488381","isPay":"0","showFlag":"15","liveType":1,"lpId":"1","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_278","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_278.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_278.m3u8"},"view":0,"goodsCount":"10","goodsList":[{"goodsId":"4172228","defaultImage":""},{"goodsId":"5578907","defaultImage":""},{"goodsId":"5578923","defaultImage":""}],"addressName":"广州. 广大布匹商贸城","userName":"窈窕衣色测试店","portraitUrl":"https:\/\/eellytest.eelly.com\/store158252\/logo.jpg?t=1541240097","praise":"0"},{"liveId":"433","userId":"158252","storeId":"158252","title":"窈窕衣色店的精彩直播","image":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181023\/6261849520451.jpg?t=1540259482&x-oss-process=image\/resize,w_200","scheduleTime":"1540256400","startTime":"1540284916","endTime":"1540321200","validDate":"1541001599","sort":"255","status":"2","createdTime":"1539597361","isPay":"0","showFlag":"15","liveType":5,"lpId":"19","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_433","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_433.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_433.m3u8"},"view":0,"goodsCount":"68","goodsList":[{"goodsId":"5579031","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181013\/7034030249351.jpg?t=1539420305"},{"goodsId":"5579048","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181019\/2836417199351.jpg?t=1539917146"},{"goodsId":"5579049","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181019\/8955937199351.jpg?t=1539917395"}],"addressName":"广州. 广大布匹商贸城","userName":"窈窕衣色测试店","portraitUrl":"https:\/\/eellytest.eelly.com\/store158252\/logo.jpg?t=1541240097","praise":"0"}],"page":{"totalPages":4,"totalItems":35,"current":1,"limit":10},"tabs":[{"name":"全部直播","tab":"1","lableType":"1","liveStatus":"1"},{"name":"直播预告","tab":"2","lableType":"1","liveStatus":"0"},{"name":"直播记录","tab":"3","lableType":"1","liveStatus":"2"},{"name":"虎门商圈","tab":"4","lableType":"3","liveStatus":"1"},{"name":"VIP商家","tab":"5","lableType":"2","liveStatus":"1"},{"name":"其他饰品","tab":"6","lableType":"1","liveStatus":"1"}]})
     */
    public function getRecordingList(array $data): array
    {
        return EellyClient::request('live/live', 'getRecordingList', true, $data);
    }

    /**
     * 店+直播中心=》直播记录.
     *
     * @param array  $data      请求参数
     * @param int    $data[page]      第几页
     * @param int    $data[limit]     每页条数
     * @param string $data[platform]  平台类型 APP WAP PC APPLET
     * 
     * 字段|类型|说明
     * items|array  |列表数据
     * page  |array  |页数信息
     * tabs  |array  |标签信息
     * tabs[name] | string | 标签名称
     * tabs[tab] | int | 标签id
     * tabs[lableType] | int | 标签类型：1 店铺主营 2 店铺VIP等级 3 店铺所在商圈
     * tabs[live_status] | int | '直播状态：0 预告 1 直播中 2 直播记录'
     *
     * @return array
     *
     * @author wechan
     * @since 2019年01月07日
     * 
     * @returnExample({"items":[{"liveId":"440","userId":"1760244","storeId":"1760244","title":"女装大大的精彩直播","image":"https:\/\/eellytest.eelly.com\/store1760244\/goods\/20181102\/9989555211451.jpg?t=1541125560&x-oss-process=image\/resize,w_200","scheduleTime":"1541379600","startTime":"0","endTime":"1541444400","validDate":"1546271999","sort":"255","status":"2","createdTime":"1540260666","isPay":"0","showFlag":"15","liveType":5,"lpId":"19","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_440","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_440.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_440.m3u8"},"view":0,"goodsCount":"36","goodsList":[{"goodsId":"5578939","defaultImage":""},{"goodsId":"5578946","defaultImage":""}],"addressName":"广州. 白马服装批发市场 -1层 110哈哈","userName":"女装大大","portraitUrl":"G01\/M00\/00\/05\/oYYBAFdgx3uICdFtAAAcfw1jZdYAAAB4QH2-3QAAB1-940.jpg","praise":"0"},{"liveId":"465","userId":"158252","storeId":"158252","title":"的精彩直播","image":"https:\/\/eellytest.eelly.com\/user158252\/other\/20181026\/2918147350451.jpg?t=1541386534&x-oss-process=image\/resize,w_200","scheduleTime":"1541379600","startTime":"1541424869","endTime":"1541444400","validDate":"1549036800","sort":"255","status":"2","createdTime":"1541234349","isPay":"0","showFlag":"15","liveType":5,"lpId":"19","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_465","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_465.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_465.m3u8"},"view":0,"goodsCount":"10","goodsList":[{"goodsId":"5579076","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181103\/8342606321451.jpg?t=1541236062"},{"goodsId":"5579080","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181103\/3485078321451.jpg?t=1541238706"},{"goodsId":"5579081","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181103\/6051778321451.jpg?t=1541238771"}],"addressName":"广州. 广大布匹商贸城","userName":"窈窕衣色测试店","portraitUrl":"https:\/\/eellytest.eelly.com\/store158252\/logo.jpg?t=1541240097","praise":"109"},{"liveId":"463","userId":"158252","storeId":"158252","title":"哈哈哈哈哈哈哈哈哈","image":"https:\/\/eellytest.eelly.com\/user158252\/other\/20181026\/2918147350451.jpg?t=1541233922&x-oss-process=image\/resize,w_200","scheduleTime":"1541206800","startTime":"1541243167","endTime":"1541271600","validDate":"1549036800","sort":"255","status":"2","createdTime":"1541233652","isPay":"0","showFlag":"15","liveType":5,"lpId":"19","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_463","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_463.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_463.m3u8"},"view":0,"goodsCount":"15","goodsList":[{"goodsId":"5579028","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181013\/7274830149351.png?t=1539410385"},{"goodsId":"5579029","defaultImage":"https:\/\/eellytest.eelly.com\/store1762613\/goods\/20181013\/7528672149351.jpg?t=1539415284"},{"goodsId":"5579052","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181019\/3867565399351.jpg?t=1539935658"}],"addressName":"广州. 广大布匹商贸城","userName":"窈窕衣色测试店","portraitUrl":"https:\/\/eellytest.eelly.com\/store158252\/logo.jpg?t=1541240097","praise":"12"},{"liveId":"439","userId":"1760244","storeId":"1760244","title":"女装大大的精彩直播","image":"https:\/\/eellytest.eelly.com\/store1760244\/goods\/20181102\/1686925211451.jpg?t=1541125297&x-oss-process=image\/resize,w_200","scheduleTime":"1541120400","startTime":"1541137346","endTime":"1541185200","validDate":"1546271999","sort":"255","status":"2","createdTime":"1540260666","isPay":"0","showFlag":"15","liveType":5,"lpId":"19","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_439","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_439.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_439.m3u8"},"view":0,"goodsCount":"40","goodsList":[],"addressName":"广州. 白马服装批发市场 -1层 110哈哈","userName":"女装大大","portraitUrl":"G01\/M00\/00\/05\/oYYBAFdgx3uICdFtAAAcfw1jZdYAAAB4QH2-3QAAB1-940.jpg","praise":"0"},{"liveId":"282","userId":"158252","storeId":"158252","title":"窈窕衣色的精彩直播","image":"https:\/\/eellytest.eelly.com\/user158252\/other\/20181019\/2233829099351.jpg?t=1539917700&x-oss-process=image\/resize,w_200","scheduleTime":"1540947600","startTime":"0","endTime":"1541012400","validDate":"0","sort":"255","status":"2","createdTime":"1529492770","isPay":"0","showFlag":"15","liveType":5,"lpId":"19","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_282","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_282.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_282.m3u8"},"view":0,"goodsCount":"4","goodsList":[{"goodsId":"5579029","defaultImage":"https:\/\/eellytest.eelly.com\/store1762613\/goods\/20181013\/7528672149351.jpg?t=1539415284"},{"goodsId":"5579065","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181027\/2016490360451.jpg?t=1540630946"},{"goodsId":"5579066","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181027\/6870911360451.jpg?t=1540631191"}],"addressName":"广州. 广大布匹商贸城","userName":"窈窕衣色测试店","portraitUrl":"https:\/\/eellytest.eelly.com\/store158252\/logo.jpg?t=1541240097","praise":0},{"liveId":"281","userId":"158252","storeId":"158252","title":"窈窕衣色的哈哈哈，，","image":"https:\/\/eellytest.eelly.com\/user158252\/other\/20181019\/7725587299351.jpg?t=1539927855&x-oss-process=image\/resize,w_200","scheduleTime":"1540774800","startTime":"1540799800","endTime":"1540839600","validDate":"0","sort":"255","status":"2","createdTime":"1529492770","isPay":"0","showFlag":"15","liveType":5,"lpId":"19","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_281","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_281.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_281.m3u8"},"view":0,"goodsCount":"4","goodsList":[{"goodsId":"5579029","defaultImage":"https:\/\/eellytest.eelly.com\/store1762613\/goods\/20181013\/7528672149351.jpg?t=1539415284"},{"goodsId":"5579065","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181027\/2016490360451.jpg?t=1540630946"},{"goodsId":"5579066","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181027\/6870911360451.jpg?t=1540631191"}],"addressName":"广州. 广大布匹商贸城","userName":"窈窕衣色测试店","portraitUrl":"https:\/\/eellytest.eelly.com\/store158252\/logo.jpg?t=1541240097","praise":"0"},{"liveId":"284","userId":"158252","storeId":"158252","title":"窈窕衣色的精彩直播11","image":"https:\/\/eellytest.eelly.com\/user158252\/other\/20181019\/3317387299351.jpg?t=1540283912&x-oss-process=image\/resize,w_200","scheduleTime":"1540602000","startTime":"1540632065","endTime":"1540634400","validDate":"0","sort":"255","status":"2","createdTime":"1529492792","isPay":"0","showFlag":"15","liveType":5,"lpId":"15","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_284","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_284.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_284.m3u8"},"view":0,"goodsCount":"7","goodsList":[{"goodsId":"5579045","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181019\/6577055199351.jpg?t=1539915508"},{"goodsId":"5579046","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181019\/1389495199351.jpg?t=1539915950"},{"goodsId":"5579047","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181019\/1267236199351.jpg?t=1539916327"}],"addressName":"广州. 广大布匹商贸城","userName":"窈窕衣色测试店","portraitUrl":"https:\/\/eellytest.eelly.com\/store158252\/logo.jpg?t=1541240097","praise":"0"},{"liveId":"434","userId":"158252","storeId":"158252","title":"窈窕衣色店的精彩直播","image":"https:\/\/eellytest.eelly.com\/user158252\/other\/20181026\/2918147350451.jpg?t=1540537418&x-oss-process=image\/resize,w_200","scheduleTime":"1540515600","startTime":"1540537723","endTime":"1540580400","validDate":"1541001599","sort":"255","status":"2","createdTime":"1539597361","isPay":"0","showFlag":"15","liveType":5,"lpId":"19","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_434","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_434.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_434.m3u8"},"view":0,"goodsCount":"74","goodsList":[{"goodsId":"5579052","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181019\/3867565399351.jpg?t=1539935658"},{"goodsId":"5579053","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181019\/9590386399351.jpg?t=1539936831"},{"goodsId":"5579054","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181019\/2393073499351.jpg?t=1539943704"}],"addressName":"广州. 广大布匹商贸城","userName":"窈窕衣色测试店","portraitUrl":"https:\/\/eellytest.eelly.com\/store158252\/logo.jpg?t=1541240097","praise":"0"},{"liveId":"278","userId":"158252","storeId":"158252","title":"窈窕衣色的精彩直播","image":"https:\/\/eellytest.eelly.com\/user158252\/other\/20181019\/2233829099351.jpg?t=1539909661&x-oss-process=image\/resize,w_200","scheduleTime":"1540396800","startTime":"0","endTime":"1540414800","validDate":"0","sort":"255","status":"2","createdTime":"1529488381","isPay":"0","showFlag":"15","liveType":1,"lpId":"1","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_278","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_278.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_278.m3u8"},"view":0,"goodsCount":"10","goodsList":[{"goodsId":"4172228","defaultImage":""},{"goodsId":"5578907","defaultImage":""},{"goodsId":"5578923","defaultImage":""}],"addressName":"广州. 广大布匹商贸城","userName":"窈窕衣色测试店","portraitUrl":"https:\/\/eellytest.eelly.com\/store158252\/logo.jpg?t=1541240097","praise":"0"},{"liveId":"433","userId":"158252","storeId":"158252","title":"窈窕衣色店的精彩直播","image":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181023\/6261849520451.jpg?t=1540259482&x-oss-process=image\/resize,w_200","scheduleTime":"1540256400","startTime":"1540284916","endTime":"1540321200","validDate":"1541001599","sort":"255","status":"2","createdTime":"1539597361","isPay":"0","showFlag":"15","liveType":5,"lpId":"19","pullUrl":{"RTMP":"rtmp:\/\/play.eelly.com\/live\/3344_dev_433","FLV":"https:\/\/play.eelly.com\/live\/3344_dev_433.flv","HLS":"https:\/\/play.eelly.com\/live\/3344_dev_433.m3u8"},"view":0,"goodsCount":"68","goodsList":[{"goodsId":"5579031","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181013\/7034030249351.jpg?t=1539420305"},{"goodsId":"5579048","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181019\/2836417199351.jpg?t=1539917146"},{"goodsId":"5579049","defaultImage":"https:\/\/eellytest.eelly.com\/store158252\/goods\/20181019\/8955937199351.jpg?t=1539917395"}],"addressName":"广州. 广大布匹商贸城","userName":"窈窕衣色测试店","portraitUrl":"https:\/\/eellytest.eelly.com\/store158252\/logo.jpg?t=1541240097","praise":"0"}],"page":{"totalPages":4,"totalItems":35,"current":1,"limit":10},"tabs":[{"name":"全部直播","tab":"1","lableType":"1","liveStatus":"1"},{"name":"直播预告","tab":"2","lableType":"1","liveStatus":"0"},{"name":"直播记录","tab":"3","lableType":"1","liveStatus":"2"},{"name":"虎门商圈","tab":"4","lableType":"3","liveStatus":"1"},{"name":"VIP商家","tab":"5","lableType":"2","liveStatus":"1"},{"name":"其他饰品","tab":"6","lableType":"1","liveStatus":"1"}]})
     */
    public function getRecordingListAsync(array $data)
    {
        return EellyClient::request('live/live', 'getRecordingList', false, $data);
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