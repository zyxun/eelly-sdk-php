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

/**
 * 用户实名认证/企业工商认证返回结果.
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface AuthCallbackInterface
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
    public function checkAuthName(array $data): array;

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
    public function addAuthCallback(array $data): bool;
}
