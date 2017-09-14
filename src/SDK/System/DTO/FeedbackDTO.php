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

namespace Eelly\SDK\System\DTO;

use Eelly\DTO\AbstractDTO;

/**
 * Class UidDTO.
 */
class FeedbackDTO extends AbstractDTO
{
    /**
     * 反馈ID，自增主键.
     *
     * @var int
     */
    public $feedback_id;

    /**
     * 反馈编号.
     *
     * @var string
     */
    public $feedback_sn;

    /**
     * 状态：0 未解决 1 已解决.
     *
     * @var int
     */
    public $status;

    /**
     * 标记：0 未标记 1 已标记.
     *
     * @var int
     */
    public $flag;

    /**
     * 跟进状态：0 未跟进 1 已跟进.
     *
     * @var int
     */
    public $follow_status;

    /**
     * 平台类型：0 PC 1 厂+  2 店+ 3 WAP.
     *
     * @var int
     */
    public $platform_type;

    /**
     * 业务类型.
     *
     * @var int
     */
    public $business_type;

    /**
     * 反馈用户ID.
     *
     * @var int
     */
    public $user_id;

    /**
     * (冗余)反馈用户名称.
     *
     * @var string
     */
    public $username;

    /**
     * 反馈者联系电话.
     *
     * @var string
     */
    public $phone;

    /**
     * APP版本号.
     *
     * @var string
     */
    public $app_version;
    /**
     * 固件版本号.
     *
     * @var string
     */
    public $firmware_version;

    /**
     * 手机型号.
     *
     * @var string
     */
    public $phone_model;

    /**
     * 网络制式.
     *
     * @var string
     */
    public $network_type;

    /**
     * 反馈内容.
     *
     * @var string
     */
    public $content;

    /**
     * 上传图片地址：JSON.
     *
     * @var string
     */
    public $image_url;

    /**
     * 来源页面.
     *
     * @var string
     */
    public $from_page;

    /**
     * 来源IP.
     *
     * @var string
     */
    public $ip;

    /**
     * 找货方便度评分：0 未评分 1 方便 2 不方便
     *
     * @var string
     */
    public $use_score;

    /**
     * 首页满意度评分：0 未评分 1 满意 2 一般 3 不满意.
     *
     * @var int
     */
    public $home_score;

    /**
     * 添加时间.
     *
     * @var int
     */
    public $created_time;

    /**
     * 修改时间.
     *
     * @var unknown
     */
    public $update_time;
}
