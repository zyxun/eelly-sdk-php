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

namespace Eelly\SDK\User\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\User\DTO\ScoreDTO;
use Eelly\SDK\User\Service\ScoreInterface;

/**
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Score
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
        return EellyClient::request('user/score', __FUNCTION__, true, $userId);
    }

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
    public function getScoreAsync(int $userId)
    {
        return EellyClient::request('user/score', __FUNCTION__, false, $userId);
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
        return EellyClient::request('user/score', __FUNCTION__, true, $data);
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
    public function addScoreAsync(array $data)
    {
        return EellyClient::request('user/score', __FUNCTION__, false, $data);
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
        return EellyClient::request('user/score', __FUNCTION__, true, $userId, $data);
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
    public function updateScoreAsync(int $userId, array $data)
    {
        return EellyClient::request('user/score', __FUNCTION__, false, $userId, $data);
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
