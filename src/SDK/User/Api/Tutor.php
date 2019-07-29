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

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Tutor
{
    /**
     * 获取单个微信号.
     *
     * @param int $tutorId  微信号id
     *
     * @return array
     *
     * @author zhangyangxun
     * @since 2019-01-08
     *
     * @internal
     */
    public function getTutor(int $tutorId): array
    {
        return EellyClient::request('user/tutor', 'getTutor', true, $tutorId);
    }

    /**
     * 获取单个微信号.
     *
     * @param int $tutorId  微信号id
     *
     * @return array
     *
     * @author zhangyangxun
     * @since 2019-01-08
     *
     * @internal
     */
    public function getTutorAsync(int $tutorId)
    {
        return EellyClient::request('user/tutor', 'getTutor', false, $tutorId);
    }

    /**
     * 添加一个微信号
     *
     * @param array  $data
     *
     * @return bool
     * @requestExample({"data":{"account": "eelly123", "status": 0}})
     * @returnExample(true)
     *
     * @author zhangyangxun
     * @since   2019-01-08
     *
     */
    public function addTutor(array $data): bool
    {
        return EellyClient::request('user/tutor', 'addTutor', true, $data);
    }

    /**
     * 添加一个微信号
     *
     * @param array  $data
     *
     * @return bool
     * @requestExample({"data":{"account": "eelly123", "status": 0}})
     * @returnExample(true)
     *
     * @author zhangyangxun
     * @since   2019-01-08
     *
     */
    public function addTutorAsync(array $data)
    {
        return EellyClient::request('user/tutor', 'addTutor', false, $data);
    }

    /**
     * 修改微信号
     *
     * @param int $tutorId 微信号id
     * @param array $data 微信号内容
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"tutorId":1,"data":{"account": "eelly1234","status": 1}})
     * @returnExample(true)
     *
     * @author zhangyangxun
     * @since   2019-01-08
     *
     */
    public function updateTutor(int $tutorId, array $data): bool
    {
        return EellyClient::request('user/tutor', 'updateTutor', true, $tutorId, $data);
    }

    /**
     * 修改微信号
     *
     * @param int $tutorId 微信号id
     * @param array $data 微信号内容
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"tutorId":1,"data":{"account": "eelly1234","status": 1}})
     * @returnExample(true)
     *
     * @author zhangyangxun
     * @since   2019-01-08
     *
     */
    public function updateTutorAsync(int $tutorId, array $data)
    {
        return EellyClient::request('user/tutor', 'updateTutor', false, $tutorId, $data);
    }

    /**
     * 分页获取版本信息.
     *
     * @param array  $condition
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array 返回分页结果
     *
     * @author zhangyangxun
     * @since  2019-01-08
     *
     */
    public function getTutorList(array $condition = []): array
    {
        return EellyClient::request('user/tutor', 'getTutorList', true, $condition);
    }

    /**
     * 分页获取版本信息.
     *
     * @param array  $condition
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array 返回分页结果
     *
     * @author zhangyangxun
     * @since  2019-01-08
     *
     */
    public function getTutorListAsync(array $condition = [])
    {
        return EellyClient::request('user/tutor', 'getTutorList', false, $condition);
    }

    /**
     * 删除微信号
     *
     * @param int $tutorId
     * @return bool
     *
     * @author zhangyangxun
     * @since  2019-01-08
     *
     */
    public function deleteTutor(int $tutorId): bool
    {
        return EellyClient::request('user/tutor', 'deleteTutor', true, $tutorId);
    }

    /**
     * 删除微信号
     *
     * @param int $tutorId
     * @return bool
     *
     * @author zhangyangxun
     * @since  2019-01-08
     *
     */
    public function deleteTutorAsync(int $tutorId)
    {
        return EellyClient::request('user/tutor', 'deleteTutor', false, $tutorId);
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