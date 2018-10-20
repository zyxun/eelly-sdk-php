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
use Eelly\SDK\User\Service\SecurityInterface;
use Eelly\DTO\UidDTO;
use Eelly\SDK\User\DTO\SecurityDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Security implements SecurityInterface
{
    /**
     * 安全等级111666666.
     * ### 返回数据说明.
     *
     * 字段|类型|说明
     * -----------|-------|--------------
     * isPhone    |int    |是否绑定了手机，1绑定
     * isEmail    |int    |是否绑定邮箱，1绑定
     * isSecret   |int    |是否设置密保，1设置
     * isRealName |int    |是否实名认证，1实名认证
     * isIdentity |int    |是否用户身份，1是
     * isBrush    |int    |是否刷单用户，1是
     *
     *
     * @param int         $storeId 店铺ID,纯用户则为空0
     * @param UidDTO|null $user    登录用户
     *
     * @return array
     * @requestExample({"storeId":0})
     * @returnExample({"isPhone":1,"isEmail":1,"isSecret":1,"isRealName":0,"isIdentity":1,"isBrush":0})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年12月16日
     */
    public function getSecurityLevel(int $storeId = 0, UidDTO $user = null): array
    {
        return EellyClient::request('user/security', 'getSecurityLevel', true, $storeId, $user);
    }

    /**
     * 安全等级111666666.
     * ### 返回数据说明.
     *
     * 字段|类型|说明
     * -----------|-------|--------------
     * isPhone    |int    |是否绑定了手机，1绑定
     * isEmail    |int    |是否绑定邮箱，1绑定
     * isSecret   |int    |是否设置密保，1设置
     * isRealName |int    |是否实名认证，1实名认证
     * isIdentity |int    |是否用户身份，1是
     * isBrush    |int    |是否刷单用户，1是
     *
     *
     * @param int         $storeId 店铺ID,纯用户则为空0
     * @param UidDTO|null $user    登录用户
     *
     * @return array
     * @requestExample({"storeId":0})
     * @returnExample({"isPhone":1,"isEmail":1,"isSecret":1,"isRealName":0,"isIdentity":1,"isBrush":0})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年12月16日
     */
    public function getSecurityLevelAsync(int $storeId = 0, UidDTO $user = null)
    {
        return EellyClient::request('user/security', 'getSecurityLevel', false, $storeId, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSecurity(int $usId): SecurityDTO
    {
        return EellyClient::request('user/security', 'getSecurity', true, $usId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSecurityAsync(int $usId)
    {
        return EellyClient::request('user/security', 'getSecurity', false, $usId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSecurity(array $data): bool
    {
        return EellyClient::request('user/security', 'addSecurity', true, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSecurityAsync(array $data)
    {
        return EellyClient::request('user/security', 'addSecurity', false, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSecurity(int $SecurityId, array $data): bool
    {
        return EellyClient::request('user/security', 'updateSecurity', true, $SecurityId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSecurityAsync(int $SecurityId, array $data)
    {
        return EellyClient::request('user/security', 'updateSecurity', false, $SecurityId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSecurity(int $SecurityId): bool
    {
        return EellyClient::request('user/security', 'deleteSecurity', true, $SecurityId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSecurityAsync(int $SecurityId)
    {
        return EellyClient::request('user/security', 'deleteSecurity', false, $SecurityId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSecurityPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('user/security', 'listSecurityPage', true, $condition, $currentPage, $limit);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSecurityPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('user/security', 'listSecurityPage', false, $condition, $currentPage, $limit);
    }

    /**
     * 获取用户密保问题
     *
     * @param int $userId
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-10-20
     */
    public function getUserSecurity(int $userId): array
    {
        return EellyClient::request('user/security', 'getUserSecurity', true, $userId);
    }

    /**
     * 获取用户密保问题
     *
     * @param int $userId
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-10-20
     */
    public function getUserSecurityAsync(int $userId)
    {
        return EellyClient::request('user/security', 'getUserSecurity', false, $userId);
    }

    /**
     * 验证用户密保问题答案
     *
     * @param int $userId
     * @param int $questionId
     * @param string $answer
     * @return bool
     *
     * @author zhangyangxun
     * @since 2018-10-20
     */
    public function checkUserAnswer(int $userId, int $questionId, string $answer): bool
    {
        return EellyClient::request('user/security', 'checkUserAnswer', true, $userId, $questionId, $answer);
    }

    /**
     * 验证用户密保问题答案
     *
     * @param int $userId
     * @param int $questionId
     * @param string $answer
     * @return bool
     *
     * @author zhangyangxun
     * @since 2018-10-20
     */
    public function checkUserAnswerAsync(int $userId, int $questionId, string $answer)
    {
        return EellyClient::request('user/security', 'checkUserAnswer', false, $userId, $questionId, $answer);
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