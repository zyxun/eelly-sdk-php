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

namespace Eelly\SDK\User\Service;

use Eelly\DTO\UidDTO;
use Eelly\SDK\User\DTO\SecurityDTO;

/**
 * 用户密保信息.
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface SecurityInterface
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
    public function getSecurityLevel(int $storeId = 0, UidDTO $user = null): array;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSecurity(int $usId): SecurityDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSecurity(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSecurity(int $SecurityId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSecurity(int $SecurityId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSecurityPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;

    /**
     * 获取用户密保问题.
     *
     * @param int $userId
     *
     * @return array
     *
     * @author zhangyangxun
     *
     * @since 2018-10-20
     */
    public function getUserSecurity(int $userId): array;

    /**
     * 验证用户密保问题答案.
     *
     * @param int    $userId
     * @param int    $questionId
     * @param string $answer
     *
     * @return bool
     *
     * @author zhangyangxun
     *
     * @since 2018-10-20
     */
    public function checkUserAnswer(int $userId, int $questionId, string $answer): bool;
}
