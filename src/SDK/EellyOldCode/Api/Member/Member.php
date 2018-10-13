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

namespace Eelly\SDK\EellyOldCode\Api\Member;

use Eelly\SDK\EellyClient;

/**
 * Class Member.
 *
 *  modules/Member/Service/MemberService.php
 *
 * @author zhangyangxun
 */
class Member
{
    /**
     * 获取用户绑定的手机.
     *
     * @param array $userIds
     *
     * @return mixed
     */
    public function getUserBoundMobile(array $userIds)
    {
        return EellyClient::request('eellyOldCode/member/member', __FUNCTION__, true, $userIds);
    }

    /**
     * 根据用户Id获取用户信息.
     *
     * @param number $userId 用户Id
     *
     * @return array
     *
     * @author  何砚文<heyanwen@eelly.net>
     * @author  zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.08.23
     */
    public function getInfoById($userId)
    {
        return EellyClient::request('eellyOldCode/member/member', __FUNCTION__, true, $userId);
    }

    /**
     * 发送验证码
     *
     * @param string $mobile 手机号码|邮箱
     * @param string $type   验证码类型
     *                       手机注册：register
     *                       手机找回密码：findPassword
     *                       手机绑定：boundMobile
     *                       手机修改密码：modifyPassword
     *                       电子邮件修改密码：emailModifyPassword
     *                       手机登陆店+: loginDianjia
     *                       注册语音验证码： registerSendVoice
     *                       快捷登录语音验证码 loginDianjiaSendVoice
     *                       重置支付密码         resetPayPassword
     *                       绑定银行卡        addBankCard
     *
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-10-13
     */
    public function createCaptcha(string $mobile, string $type)
    {
        return EellyClient::request('eellyOldCode/member/member', __FUNCTION__, true, $mobile, $type);
    }
}
