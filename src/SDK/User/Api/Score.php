<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\User\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\User\Service\ScoreInterface;
use Eelly\SDK\User\DTO\ScoreDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Score implements ScoreInterface
{

    /**
     * 获取用户积分.
     *
     * @param int $userId 用户id
     *                    ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------|-------|--------------
     * userId      |int    |    用户id
     * totalScore  |int    |    总积分
     * usedScore   |int    |    使用积分
     * createdTime |int    |
     * updateTime  |string |
     *
     * @return ScoreDTO
     * @requestExample({"scoreID":1})
     * @returnExample({"userId":148086,"totalScore":100,"usedScore":20,"createdTime":1506584839,"updateTime":"2017-09-28 15:57:19"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/28
     */
    public function getScore(int $userId): ScoreDTO
    {
        return EellyClient::request('user/score', 'getScore',true, $userId);
    }

    /**
     * 添加用户积分.
     *
     * @param array $data
     * @param int   $data["userId"]     用户id
     * @param int   $data["totalScore"] 总积分
     * @param int   $data["usedScore"]  使用积分
     *
     * @throws ScoreException
     *
     * @return bool
     * @requestExample({"data":{"userId":148086,"totalScore":100,"usedScore":20}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/28
     */
    public function addScore(array $data): bool
    {
        return EellyClient::request('user/score', 'addScore',true, $data);
    }

    /**
     * 更新用户积分.
     *
     * @param int   $userId
     * @param array $data
     * @param int   $data["totalScore"]
     * @param int   $data["usedScore"]
     *
     * @throws ScoreException
     *
     * @return bool
     * @requestExample({"userId":148086,"data":{"totalScore":100,"usedScore":20}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/28
     */
    public function updateScore(int $userId, array $data): bool
    {
        return EellyClient::request('user/score', 'updateScore',true, $userId, $data);
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