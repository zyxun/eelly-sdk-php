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

namespace Eelly\SDK\EellyOldCode\Api\Store\Eellyschool;

use Eelly\SDK\EellyClient;

/**
 * Class Eellyschool.
 *
 * @author zhangyangxun
 */
class Eellyschool
{
    /**
     * 开店学堂详情页
     *
     * @param $condition
     * @return mixed
     *
     * @author 王冬雪<wangdongxue@eelly.net>
     * @since 2016年3月16日
     */
    public function getDetailList($condition)
    {
        return EellyClient::request('eellyOldCode/Store/Eellyschool/Eellyschool', __FUNCTION__, true, $condition);
    }

    /**
     * 开店学堂列表.
     *
     * @param       $limit
     * @param array $condition
     * @return mixed
     *
     * @author 王冬雪<wangdongxue@eelly.net>
     * @since  2016年3月16日
     */
    public function getSchoolTutorial($limit, array $condition)
    {
        return EellyClient::request('eellyOldCode/Store/Eellyschool/Eellyschool', __FUNCTION__, true, $limit, $condition);
    }

    /**
     * 教你开店 分类获取.
     *
     * @param $condition
     * @return array
     *
     * @author 王冬雪<wangdongxue@eelly.net>
     * @since 2016年4月17日
     */
    public function getCategory($condition)
    {
        return EellyClient::request('eellyOldCode/Store/Eellyschool/Eellyschool', __FUNCTION__, true, $condition);
    }
}
