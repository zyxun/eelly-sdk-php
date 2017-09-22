<?php

declare(strict_types=1);

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Eelly\SDK\Activity\DTO;

use Eelly\DTO\AbstractDTO;

/**
 * Description of newPHPClass
 *
 * @author wechan
 */
class ActivityDTO extends AbstractDTO 
{
    /**
     * 活动id
     * @var int
     */
    public $activityId;
    
    /**
     * 店铺id
     * @var int
     */
    public $storeId;
    
    /**
     *  活动标题
     *  @var string
     */
    public $title;
    
    /**
     *  活动图片
     *  @var string
     */
    public $image;
    
    /**
     *  活动内容
     *  @var string
     */
    public $content;
    
    /**
     *  报名开始时间
     *  @var int
     */
    public $applyStartTime;
    
    /**
     *  报名结束时间
     *  @var int
     */
    public $applyEndTime;
    
    /**
     *  活动开始时间
     *  @var int
     */
    public $activityStartTime;
    
    /**
     *  活动结束时间
     *  @var int
     */
    public $activityEndTime;
    
    /**
     *  活动每天开始时间
     *  @var int
     */
    public $dayStartTime;
    
    /**
     *  活动每天结束时间
     *  @var int
     */
    public $dayEndTime;
    
    /**
     *  活动状态
     *  @var int
     */
    public $status;
    
    /**
     *  活动优先级排序
     *  @var int
     */
    public $sort;
    
    /**
     *  活动影响范围
     *  @var int
     */
    public $range;
        
    /**
     *  管理员ID
     *  @var int
     */
    public $adminId;
    
    /**
     *  管理员名称
     *  @var string
     */
    public $adminName;
    
    /**
     *  活动备注
     *  @var string
     */
    public $remark;
    
    /**
     *  添加时间
     *  @var int
     */
    public $createdTime;
}
