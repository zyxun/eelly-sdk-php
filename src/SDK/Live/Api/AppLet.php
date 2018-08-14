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
use Eelly\SDK\Live\Service\AppLetInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class AppLet implements AppLetInterface
{
    /**
     * 获取正在直播+预播的直播数量.
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------|-------|--------------
     * dateTime |string |当天时间
     * count    |string |当天数量
     *
     * @param int $startTime 开始时间
     * @param int $endTime   结束数据
     * @param int $showFlag  过滤掉那些数据
     *
     * @return array
     *
     * @requestExample({"startTime":1527565339,"endTime":1573441871,"showFlag":8})
     *
     * @returnExample([
     *   {
     *       "dateTime": "2018-05-29",
     *       "count": "1"
     *   },
     *   {
     *       "dateTime": "2019-03-08",
     *       "count": "1"
     *   }
     *])
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月29日
     * @Validation(
     *     @OperatorValidator(0, {message:"开始时间不能为空!",operator:[gt,0]}),
     *     @OperatorValidator(1, {message:"结束时间不能为空!",operator:[gt,0]})
     * )
     */
    public function getLiveCountArea(int $startTime, int $endTime, int $showFlag = 0): array
    {
        return EellyClient::request('live/appLet', 'getLiveCountArea', true, $startTime, $endTime, $showFlag);
    }

    /**
     * 获取正在直播+预播的直播数量.
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------|-------|--------------
     * dateTime |string |当天时间
     * count    |string |当天数量
     *
     * @param int $startTime 开始时间
     * @param int $endTime   结束数据
     * @param int $showFlag  过滤掉那些数据
     *
     * @return array
     *
     * @requestExample({"startTime":1527565339,"endTime":1573441871,"showFlag":8})
     *
     * @returnExample([
     *   {
     *       "dateTime": "2018-05-29",
     *       "count": "1"
     *   },
     *   {
     *       "dateTime": "2019-03-08",
     *       "count": "1"
     *   }
     *])
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月29日
     * @Validation(
     *     @OperatorValidator(0, {message:"开始时间不能为空!",operator:[gt,0]}),
     *     @OperatorValidator(1, {message:"结束时间不能为空!",operator:[gt,0]})
     * )
     */
    public function getLiveCountAreaAsync(int $startTime, int $endTime, int $showFlag = 0)
    {
        return EellyClient::request('live/appLet', 'getLiveCountArea', false, $startTime, $endTime, $showFlag);
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