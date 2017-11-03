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

namespace Eelly\SDK\System\Service;

use Eelly\DTO\UserDTO;
use Eelly\SDK\System\DTO\FeedbackDTO;
use Eelly\SDK\System\Exception\SystemException;

/**
 * 用户意见反馈记录.
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface FeedbackInterface
{
    /**
     * 根据反馈id获取反馈记录.
     *
     * @param int $FeedbackId
     *
     * @throws SystemException
     *
     * @return FeedbackDTO
     * @requestExample(1)
     * @returnExample({"feedback_id":null,"feedback_sn":null,"status":"0","flag":"0","follow_status":null,"platform_type":null,"business_type":null,"user_id":null,"username":"haha","phone":"","app_version":null,"firmware_version":null,"phone_model":null,"network_type":null,"content":"hahah","image_url":null,"from_page":null,"ip":"","use_score":null,"home_score":null,"created_time":null,"update_time":null,"feedbackId":"1","feedbackSn":"170001","followStatus":"0","platformType":"1","businessType":"0","userId":"1","appVersion":"","firmwareVersion":"","phoneModel":"","networkType":"","imageUrl":["www.baidu.com","www.youku.com","www.sina.com"],"fromPage":"","useScore":"0","homeScore":"0","createdTime":"0","updateTime":"2017-09-02 06:01:03"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since 2017-9-2
     */
    public function getFeedback(int $FeedbackId): FeedbackDTO;

    /**
     * 添加反馈记录.
     *
     * @param array  $data                     反馈数据
     * @param int    $data['status']           状态
     * @param int    $data['flag']             标记
     * @param int    $data['follow_status']    跟进状态
     * @param int    $data['platform_type']    平台类型：0 PC 1 厂+  2 店+ 3 WAP
     * @param int    $data['business_type']    业务类型
     * @param int    $data['user_id']          反馈用户ID
     * @param string $data['username']         (冗余)反馈用户名称
     * @param string $data['phone']            反馈者联系电话
     * @param string $data['app_version']      APP版本号
     * @param string $data['firmware_version'] 固件版本号
     * @param string $data['phone_model']      手机型号
     * @param string $data['network_type']     网络制式
     * @param string $data['content']          反馈内容
     * @param string $data['image_url']        上传图片地址：JSON
     * @param string $data['from_page']        来源页面
     * @param string $data['ip']               来源IP
     * @param int    $data['use_score']        找货方便度评分
     * @param int    $data['home_score']       首页满意度评分
     *
     * @throws SystemException
     *
     * @return bool
     * @requestExample([{"status":0,"flag":0,"follow_status":0,"platform_type":"0","business_type":"1","user_id":"1","username":"amy","phone":"13788002233","app_version":"1.0","firmware_version":"1.0","phone_model":"iphone","network_type":"4G","content":"好啦好啦","image_url":'',"from_page":"","ip":"","use_score":"","home_score":""}])
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since 2017-9-2
     */
    public function addFeedback(array $data): bool;

    //
    //    /**
    //     * @author eellytools<localhost.shell@gmail.com>
    //     */
    //    public function updateFeedback(int $FeedbackId, array $data): bool;
    //

    /**
     * 删除反馈记录.
     *
     * @param int $FeedbackId 反馈记录id
     *
     * @throws SystemException
     *
     * @return bool
     * @requestExample(1)
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since 2017-9-2
     *
     * @Validation(
     *      @Digit(0, {message: "反馈id类型错误"})
     * )
     */
    public function deleteFeedback(int $FeedbackId): bool;

    /**
     * 反馈列表.
     *
     * @param array $condition
     * @param int   $condition['flag'] 标志
     * @param int   $currentPage
     * @param int   $limit
     *
     * @throws SystemException
     *
     * @return array
     * @requestExample([{'flag':0, 'status':0, 'paltform_type':1}], 1 , 1)
     * @returnExample({"items":[{"feedbackId":"1","feedbackSn":"170001","status":"0","flag":"1","followStatus":"0","platformType":"1","businessType":"0","userId":"1","username":"haha","phone":"","appVersion":"","firmwareVersion":"","phoneModel":"","networkType":"","content":"hahah","imageUrl":"[\"www.baidu.com\",\"www.youku.com\",\"www.sina.com\"]","fromPage":"","ip":"","useScore":"0","homeScore":"0","createdTime":"0","updateTime":"2017-09-04 08:32:58","flId":"1","type":"1","adminId":"1","adminName":"\u7ba1\u7406\u8005","remark":"\u597d\u7684 "}],"page":{"first":1,"before":1,"current":1,"last":1,"next":1,"totalPages":1,"totalItems":1,"limit":1}})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since 2017-9-2
     *
     * @badSql
     */
    public function listFeedbackPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;

    /**
     * 修改反馈的状态.
     *
     * @param int     $feedbackId   反馈id
     * @param string  $operateStyle 操作类型:flag, status
     * @param int     $status       操作值
     * @param UserDTO $user         用户信息
     *
     * @throws SystemException
     *
     * @return bool
     * @requestExample({1, 'flag', 1})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/5
     */
    public function changeStatus(int $feedbackId, string $operateStyle, int $status, UserDTO $user): bool;

    /**
     * 回复用户反馈.
     *
     * @param int     $FeedbackId          反馈id
     * @param array   $operateData
     * @param int     $operateData['type'] 操作类型 3,5
     * @param string  $operateData['val']  内容
     * @param UserDTO $user                用户信息
     *
     * @throws SystemException
     *
     * @return bool
     * @requestExample({1, [{type:3, val: '已修复'}]})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since 2017-9-2
     */
    public function ReplyFeedback(int $FeedbackId, array $operateData, UserDTO $user): bool;
}
