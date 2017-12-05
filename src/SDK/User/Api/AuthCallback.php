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
use Eelly\SDK\User\Service\AuthCallbackInterface;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class AuthCallback implements AuthCallbackInterface
{

    /**
     * 校验用户实名认证/企业工商认证返回结果表.
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * --------|-------|--------------
     * status  |int    |1校验成功，0校验失败
     * message |string |提示信息，身份证号与姓名不匹配
     *
     * @param array $data  校验数据
     * @param int $data["authType"]  认证类型：1 实名认证 2 企业工商认证
     * @param int $data["resultName"]  1:真实姓名/2:企业名称
     * @param int $data["resultNum"]  1:身份证号/2:工商注册号
     * @return bool
     * @requestExample({"authType":1,"resultName":"老王","resultNum":"440112000121645"})
     * @returnExample({"status":0,"message":"身份证号与姓名不匹配"})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年11月03日
     */
    public function checkAuthName(array $data): array
    {
        return EellyClient::request('user/authcallback', 'checkAuthName', $data);
    }

    /**
     * 新增用户实名认证/企业工商认证返回结果.
     *
     * @param array $data  校验数据
     * @param int $data["authType"]  认证类型：1 实名认证 2 企业工商认证
     * @param int $data["resultName"]  1:真实姓名/2:企业名称
     * @param int $data["resultNum"]  1:身份证号/2:工商注册号
     * @return bool
     * @requestExample({"authType":1,"resultName":"老王","resultNum":"440112000121645"})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年11月03日
     */
    public function addAuthCallback(array $data): bool
    {
        return EellyClient::request('user/authcallback', 'addAuthCallback', $data);
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