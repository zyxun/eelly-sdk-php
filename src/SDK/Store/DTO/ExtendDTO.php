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

namespace Eelly\SDK\Store\DTO;

use Eelly\DTO\AbstractDTO;

/**
 * ExtendDTO.
 *
 * @author zhangzeqiang<zhangzeqiang@eelly.net>
 */
class ExtendDTO extends AbstractDTO
{

    /**
     * 店铺ID.
     *
     * @var int
     */
    public $storeId;

    /**
     * 信誉值
     *
     * @var int
     */
    public $creditValue;

    /**
     * 额外信用值
     *
     * @var int
     */
    public $addedCredit;

    /**
     * 是否混批：0 否 1 是.
     *
     * @var int
     */
    public $isMix;

    /**
     * 混批数量.
     *
     * @var int
     */
    public $mixNum;

    /**
     * 混批金额，金额单位统一为分.
     *
     * @var int
     */
    public $mixMoney;

    /**
     * 限制营销活动过期时间.
     *
     * @var int
     */
    public $limitActivityExpireTime;

    /**
     * 商铺违规被屏蔽过期时间.
     *
     * @var int
     */
    public $hideStoreExpireTime;

    /**
     * 款式保护密码,为使用店铺统一密码
     *
     * @var string
     */
    public $protectPwd;

    /**
     * 上传图片是否添加水印：0 否 1 是.
     *
     * @var int
     */
    public $isWatermark;

    /**
     * 水印设置.
     *
     * @var string
     */
    public $watermarkSet;

    /**
     * 店铺简介.
     *
     * @var string
     */
    public $introduction;

    /**
     * 店招地址URL.
     *
     * @var string
     */
    public $shopfront;

    /**
     * 添加时间.
     *
     * @var int
     */
    public $createdTime;

    /**
     * 修改时间.
     *
     * @var unknown
     */
    public $updateTime;

}