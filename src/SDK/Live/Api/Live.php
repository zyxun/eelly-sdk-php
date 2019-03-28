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
    public function getProgressList(array $condition, int $currentPage = 1, int $limit = 10, string $order = 'progress', string $field = 'getInfo'): array
    {
        return EellyClient::request('live/live', 'getProgressList', true, $condition, $currentPage, $limit, $order, $field);
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
    public function getProgressListAsync(array $condition, int $currentPage = 1, int $limit = 10, string $order = 'progress', string $field = 'getInfo')
    {
        return EellyClient::request('live/live', 'getProgressList', false, $condition, $currentPage, $limit, $order, $field);
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
     * ### 返回数据说明.
     * ## 正在直播: https://api.eelly.test/live/live/getLiveProgressList
     * ## 直播预告: https://api.eelly.test/live/live/getPendingList
     * ## 直播记录: https://api.eelly.test/live/live/getRecordingList
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
     * ### 返回数据说明.
     * ## 正在直播: https://api.eelly.test/live/live/getLiveProgressList
     * ## 直播预告: https://api.eelly.test/live/live/getPendingList
     * ## 直播记录: https://api.eelly.test/live/live/getRecordingList
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
     * @returnExample({"items":[{"liveId":"301","userId":"2140195","storeId":"2140195","title":"local010_的直播","image":"","scheduleTime":"1529424000","startTime":"0","endTime":"1529424000","validDate":"0","sort":"255","status":"0","createdTime":"1520232571","isPay":"0","showFlag":"15","liveType":2,"lpId":"5","pullUrl":["xxxxx"],"view":0,"goodsCount":0,"addressName":"广州","userName":"local010_","portraitUrl":"xxxxxxxxxxx","isHaveCoupon":false,"isSubscribe":false,"vipValid":0,"storeVipType":0}],"page":{"totalPages":1,"totalItems":10,"current":1,"limit":10},"tabs":[{"name":"全部直播","tab":"1","lableType":"1","liveStatus":"1"},{"name":"直播预告","tab":"2","lableType":"1","liveStatus":"0"},{"name":"直播记录","tab":"3","lableType":"1","liveStatus":"2"},{"name":"虎门商圈","tab":"4","lableType":"3","liveStatus":"1"},{"name":"VIP商家","tab":"5","lableType":"2","liveStatus":"1"},{"name":"其他饰品","tab":"6","lableType":"1","liveStatus":"1"}]})
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
     * @returnExample({"items":[{"liveId":"301","userId":"2140195","storeId":"2140195","title":"local010_的直播","image":"","scheduleTime":"1529424000","startTime":"0","endTime":"1529424000","validDate":"0","sort":"255","status":"0","createdTime":"1520232571","isPay":"0","showFlag":"15","liveType":2,"lpId":"5","pullUrl":["xxxxx"],"view":0,"goodsCount":0,"addressName":"广州","userName":"local010_","portraitUrl":"xxxxxxxxxxx","isHaveCoupon":false,"isSubscribe":false,"vipValid":0,"storeVipType":0}],"page":{"totalPages":1,"totalItems":10,"current":1,"limit":10},"tabs":[{"name":"全部直播","tab":"1","lableType":"1","liveStatus":"1"},{"name":"直播预告","tab":"2","lableType":"1","liveStatus":"0"},{"name":"直播记录","tab":"3","lableType":"1","liveStatus":"2"},{"name":"虎门商圈","tab":"4","lableType":"3","liveStatus":"1"},{"name":"VIP商家","tab":"5","lableType":"2","liveStatus":"1"},{"name":"其他饰品","tab":"6","lableType":"1","liveStatus":"1"}]})
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
     * @returnExample({"items":[{"liveId":"307","userId":"2140195","storeId":"2140195","title":"local010_的直播","image":"","scheduleTime":"1529424000","startTime":"0","endTime":"1529424000","validDate":"0","sort":"255","status":"0","createdTime":"1520232571","isPay":"0","showFlag":"15","liveType":2,"lpId":"5","view":0,"goodsCount":0,"addressName":"广州","userName":"local010_","portraitUrl":"xx","isHaveCoupon":false,"isSubscribe":false,"vipValid":0,"storeVipType":0}],"page":{"totalPages":1,"totalItems":10,"current":1,"limit":10},"tabs":[{"name":"全部直播","tab":"1","lableType":"1","liveStatus":"1"},{"name":"直播预告","tab":"2","lableType":"1","liveStatus":"0"},{"name":"直播记录","tab":"3","lableType":"1","liveStatus":"2"},{"name":"虎门商圈","tab":"4","lableType":"3","liveStatus":"1"},{"name":"VIP商家","tab":"5","lableType":"2","liveStatus":"1"},{"name":"其他饰品","tab":"6","lableType":"1","liveStatus":"1"}]})
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
     * @returnExample({"items":[{"liveId":"307","userId":"2140195","storeId":"2140195","title":"local010_的直播","image":"","scheduleTime":"1529424000","startTime":"0","endTime":"1529424000","validDate":"0","sort":"255","status":"0","createdTime":"1520232571","isPay":"0","showFlag":"15","liveType":2,"lpId":"5","view":0,"goodsCount":0,"addressName":"广州","userName":"local010_","portraitUrl":"xx","isHaveCoupon":false,"isSubscribe":false,"vipValid":0,"storeVipType":0}],"page":{"totalPages":1,"totalItems":10,"current":1,"limit":10},"tabs":[{"name":"全部直播","tab":"1","lableType":"1","liveStatus":"1"},{"name":"直播预告","tab":"2","lableType":"1","liveStatus":"0"},{"name":"直播记录","tab":"3","lableType":"1","liveStatus":"2"},{"name":"虎门商圈","tab":"4","lableType":"3","liveStatus":"1"},{"name":"VIP商家","tab":"5","lableType":"2","liveStatus":"1"},{"name":"其他饰品","tab":"6","lableType":"1","liveStatus":"1"}]})
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
     * @returnExample({"items":[{"liveId":"307","userId":"2140195","storeId":"2140195","title":"local010_的直播","image":"","scheduleTime":"1529424000","startTime":"0","endTime":"1529424000","validDate":"0","sort":"255","status":"0","createdTime":"1520232571","isPay":"0","showFlag":"15","liveType":2,"lpId":"5","view":0,"goodsCount":0,"addressName":"广州","userName":"local010_","portraitUrl":"xx","isHaveCoupon":false,"isSubscribe":false,"vipValid":0,"storeVipType":0}],"page":{"totalPages":1,"totalItems":10,"current":1,"limit":10},"tabs":[{"name":"全部直播","tab":"1","lableType":"1","liveStatus":"1"},{"name":"直播预告","tab":"2","lableType":"1","liveStatus":"0"},{"name":"直播记录","tab":"3","lableType":"1","liveStatus":"2"},{"name":"虎门商圈","tab":"4","lableType":"3","liveStatus":"1"},{"name":"VIP商家","tab":"5","lableType":"2","liveStatus":"1"},{"name":"其他饰品","tab":"6","lableType":"1","liveStatus":"1"}]})
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
     * @returnExample({"items":[{"liveId":"307","userId":"2140195","storeId":"2140195","title":"local010_的直播","image":"","scheduleTime":"1529424000","startTime":"0","endTime":"1529424000","validDate":"0","sort":"255","status":"0","createdTime":"1520232571","isPay":"0","showFlag":"15","liveType":2,"lpId":"5","view":0,"goodsCount":0,"addressName":"广州","userName":"local010_","portraitUrl":"xx","isHaveCoupon":false,"isSubscribe":false,"vipValid":0,"storeVipType":0}],"page":{"totalPages":1,"totalItems":10,"current":1,"limit":10},"tabs":[{"name":"全部直播","tab":"1","lableType":"1","liveStatus":"1"},{"name":"直播预告","tab":"2","lableType":"1","liveStatus":"0"},{"name":"直播记录","tab":"3","lableType":"1","liveStatus":"2"},{"name":"虎门商圈","tab":"4","lableType":"3","liveStatus":"1"},{"name":"VIP商家","tab":"5","lableType":"2","liveStatus":"1"},{"name":"其他饰品","tab":"6","lableType":"1","liveStatus":"1"}]})
     */
    public function getRecordingListAsync(array $data)
    {
        return EellyClient::request('live/live', 'getRecordingList', false, $data);
    }

    /**
     * 获取直播标签(给安卓用)
     * 
     * @param int $platform 平台类型 APP WAP PC APPLET
     * 
     * @author wechan
     * @since 2019年1月9日
     * 
     * @returnExample([{"name":"全部直播","tab":"1","lableType":"1","liveStatus":"1"},{"name":"直播预告","tab":"2","lableType":"1","liveStatus":"0"},{"name":"直播记录","tab":"3","lableType":"1","liveStatus":"2"},{"name":"虎门商圈","tab":"4","lableType":"3","liveStatus":"1"},{"name":"VIP商家","tab":"5","lableType":"2","liveStatus":"1"},{"name":"其他饰品","tab":"6","lableType":"1","liveStatus":"1"}])
     */
    public function getAppLiveTabs(string $platform = 'APP'): array
    {
        return EellyClient::request('live/live', 'getAppLiveTabs', true, $platform);
    }

    /**
     * 获取直播标签(给安卓用)
     * 
     * @param int $platform 平台类型 APP WAP PC APPLET
     * 
     * @author wechan
     * @since 2019年1月9日
     * 
     * @returnExample([{"name":"全部直播","tab":"1","lableType":"1","liveStatus":"1"},{"name":"直播预告","tab":"2","lableType":"1","liveStatus":"0"},{"name":"直播记录","tab":"3","lableType":"1","liveStatus":"2"},{"name":"虎门商圈","tab":"4","lableType":"3","liveStatus":"1"},{"name":"VIP商家","tab":"5","lableType":"2","liveStatus":"1"},{"name":"其他饰品","tab":"6","lableType":"1","liveStatus":"1"}])
     */
    public function getAppLiveTabsAsync(string $platform = 'APP')
    {
        return EellyClient::request('live/live', 'getAppLiveTabs', false, $platform);
    }

    /**
     * 获取正在直播的卡片
     * 
     * @param string $platform  平台类型 APP WAP PC APPLET
     * 
     * ### 返回数据说明.
     * 字段|类型|说明
     * --------|-------|--------------
     * list | array | 数组
     * list[0][storeId] | int | 店铺id
     * list[0][defaultAnnouncement] | array | 直播间介绍
     * list[0][liveId] | int | 直播间Id
     * list[0][roomId] | string | 聊天室id
     * list[0][pullUrl] | array | 拉流地址
     * list[0][coverImage] | string | 直播封面图
     * count | int | 正在直播数量
     * 
     * @returnExample({"list":[{"storeId":"158252","defaultAnnouncement":"xxxxx","liveId":"462","appLiveRoomAddr":"xxxxxx","liveRoomAddr":"xxxxxx"}],"count":1})
     * 
     * @author wechan
     * @since 2019年01月10日
     */
    public function getLiveCard($platform = 'APP'): array
    {
        return EellyClient::request('live/live', 'getLiveCard', true, $platform);
    }

    /**
     * 获取正在直播的卡片
     * 
     * @param string $platform  平台类型 APP WAP PC APPLET
     * 
     * ### 返回数据说明.
     * 字段|类型|说明
     * --------|-------|--------------
     * list | array | 数组
     * list[0][storeId] | int | 店铺id
     * list[0][defaultAnnouncement] | array | 直播间介绍
     * list[0][liveId] | int | 直播间Id
     * list[0][roomId] | string | 聊天室id
     * list[0][pullUrl] | array | 拉流地址
     * list[0][coverImage] | string | 直播封面图
     * count | int | 正在直播数量
     * 
     * @returnExample({"list":[{"storeId":"158252","defaultAnnouncement":"xxxxx","liveId":"462","appLiveRoomAddr":"xxxxxx","liveRoomAddr":"xxxxxx"}],"count":1})
     * 
     * @author wechan
     * @since 2019年01月10日
     */
    public function getLiveCardAsync($platform = 'APP')
    {
        return EellyClient::request('live/live', 'getLiveCard', false, $platform);
    }

    /**
     * 获取即将可以续播的列表
     * 
     * > 返回数据说明
     * 
     * key | type | desc
     * --- | ---- | ----
     * lpId | int | 续播id
     * startTime | int | 续播开始时间
     * endTime | int | 续播结束时间
     * status | int | 状态：默认1
     * liveType | int | 直播类型：1.白天场 2.白天连播场 3.晚上场 4.晚上连播场 5.全天连播场
     * timeInterval | string | 时间区间
     * coundDown | int | 距离直播结束时间还剩下多长时间
     *
     * @param integer $liveId 当前直播的id
     * @return array
     * 
     * @returnExample({"planList":[{"lpId":"7","startTime":"64800","endTime":"75600","status":"1","liveType":"3", "typeContent":"白天场","timeInterval":"18点-01点"}],"countDown":7672})
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.5
     */
    public function getLivePlan(int $liveId): array
    {
        return EellyClient::request('live/live', 'getLivePlan', true, $liveId);
    }

    /**
     * 获取即将可以续播的列表
     * 
     * > 返回数据说明
     * 
     * key | type | desc
     * --- | ---- | ----
     * lpId | int | 续播id
     * startTime | int | 续播开始时间
     * endTime | int | 续播结束时间
     * status | int | 状态：默认1
     * liveType | int | 直播类型：1.白天场 2.白天连播场 3.晚上场 4.晚上连播场 5.全天连播场
     * timeInterval | string | 时间区间
     * coundDown | int | 距离直播结束时间还剩下多长时间
     *
     * @param integer $liveId 当前直播的id
     * @return array
     * 
     * @returnExample({"planList":[{"lpId":"7","startTime":"64800","endTime":"75600","status":"1","liveType":"3", "typeContent":"白天场","timeInterval":"18点-01点"}],"countDown":7672})
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.5
     */
    public function getLivePlanAsync(int $liveId)
    {
        return EellyClient::request('live/live', 'getLivePlan', false, $liveId);
    }

    /**
     * 续播操作
     *
     * @param integer $liveId 直播id
     * @param integer $lpId 续播id
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.5
     */
    public function continueLiveBroadcase(int $liveId, int $lpId): bool
    {
        return EellyClient::request('live/live', 'continueLiveBroadcase', true, $liveId, $lpId);
    }

    /**
     * 续播操作
     *
     * @param integer $liveId 直播id
     * @param integer $lpId 续播id
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.5
     */
    public function continueLiveBroadcaseAsync(int $liveId, int $lpId)
    {
        return EellyClient::request('live/live', 'continueLiveBroadcase', false, $liveId, $lpId);
    }

    /**
     * 检查是否续播成功
     *
     * @param integer $liveId 直播id 
     * @return array
     * 
     * @returnExample({
     *  "data" : {"isSuccess":"false", "expireIn":"1234"}
     * })
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.6
     */
    public function checkContinueIsSuccess(int $liveId): array
    {
        return EellyClient::request('live/live', 'checkContinueIsSuccess', true, $liveId);
    }

    /**
     * 检查是否续播成功
     *
     * @param integer $liveId 直播id 
     * @return array
     * 
     * @returnExample({
     *  "data" : {"isSuccess":"false", "expireIn":"1234"}
     * })
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.6
     */
    public function checkContinueIsSuccessAsync(int $liveId)
    {
        return EellyClient::request('live/live', 'checkContinueIsSuccess', false, $liveId);
    }

    /**
     * 判断是否使用缓存的直播间数据
     *
     * @param integer $liveId 直播间id
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.7
     */
    public function checkUseCacheLiveRoomInfo(int $liveId): bool
    {
        return EellyClient::request('live/live', 'checkUseCacheLiveRoomInfo', true, $liveId);
    }

    /**
     * 判断是否使用缓存的直播间数据
     *
     * @param integer $liveId 直播间id
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.7
     */
    public function checkUseCacheLiveRoomInfoAsync(int $liveId)
    {
        return EellyClient::request('live/live', 'checkUseCacheLiveRoomInfo', false, $liveId);
    }
  
    /**
     * 直播中的积分排行榜
     *
     * @return array
     *
     * @returnExample([{"ranking":1,"storeName":"\u7a88\u7a95\u8863\u8272","score":"320"},{"ranking":2,"storeName":"test\u5e97\u94fa\u6d4b\u8bd5","score":"124"}])
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2019.03.28
     */
    public function listLiveScore():array
    {
        return EellyClient::request('live/live', __FUNCTION__, true);
    }

    /**
     * @inheritdoc
     */
    public function listLiveScoreAsync():array
    {
        return EellyClient::request('live/live', __FUNCTION__, false);
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