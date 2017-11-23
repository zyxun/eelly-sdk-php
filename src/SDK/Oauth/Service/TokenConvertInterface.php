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

namespace Eelly\SDK\Oauth\Service;

/**
 * 第三方登录.
 *
 * @author  肖俊明<xiaojunming@eelly.net>
 *
 * @since 2017年10月24日
 */
interface TokenConvertInterface
{
    /**
     * qq 第三方认证.
     *
     * @param string $accessToken 第三方认证token
     * @param int $type 认证登录类型：1为pc，2为wap，3 为app
     *
     * @return string
     * @requestExample({'accessToken':'ssssysyswowo','type':1})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月23日
     * @Validation(
     *   @PresenceOf(0,{message:"第三方认证token不能为空"}),
     *   @InclusionIn(0,{message:"类型非法",'domain':[1, 2, 3]}),
     *   )
     */
    public function qqLogin(string $accessToken, int $type): array;


    /**
     * 微信 第三方认证.
     *
     * @param string $accessToken 第三方认证token
     * @param string $openId      用户唯一标识
     *
     * @return string
     * @requestExample({'accessToken':'ssssysyswowo','type':1})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月23日
     * @Validation(
     *   @PresenceOf(0,{message:"第三方认证token不能为空"}),
     *   @InclusionIn(0,{message:"非法openId"}),
     *   )
     */
    public function wechatLogin(string $accessToken, string $openId): array;


    /**
     * 找回密码.
     *
     * @param string $accessToken 找回密码token
     * @param int $checkCode 手机验证码
     * @param string $password
     *
     * @return string
     * @requestExample({'accessToken':'eyJ0eXAiOiJKV1QiLCJhbGciOi','type':1,'password':123456})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月28日
     * @Validation(
     *  @PresenceOf(0,{message : "手机号token"}),
     *  @PresenceOf(1,{message : "手机验证码"}),
     *  @PresenceOf(2,{message : "非法重置密码"})
     * )
     */
    public function findPassword(string $accessToken, string $checkCode, string $password): array;


    /**
     * 手机登录=》可以快速登录|快速注册.
     *
     * @param string $token 手机号token
     * @param string $checkCode 手机验证码
     * @param string|null $password 密码
     *
     * @return int
     * @requestExample({'token':'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjkzODM3ZTRkMDQwOWE2NzJlYTcyNjAxYTVjMzY5ZDY5NGY0MTYxMjQ2ZTRkYzgyY2I4Y2FkMzkzYjg1OTEyNTQzODE4Zjg4M2NhOGU2YTQ4In0.eyJhdWQiOiJteWF3ZXNvbWVhcHAiLCJqdGkiOiI5MzgzN2U0ZDA0MDlhNjcyZWE3MjYwMWE1YzM2OWQ2OTRmNDE2MTI0NmU0ZGM4MmNiOGNhZDM5M2I4NTkxMjU0MzgxOGY4ODNjYThlNmE0OCIsImlhdCI6MTUwODgyMzExMSwibmJmIjoxNTA4ODIzMTExLCJleHAiOjE1MDg4MjY3MTEsInN1YiI6IiIsInNjb3BlcyI6W119.ZI9_5O6KObxU9a8-sssgiFiiHeXCOglvGGOdLjfhwbdZqSf6Sj9VM8rlK-VvCcKGt22K9DluOj1RxmaK8xkaSIY0P2WvrWdmy_h6a5ngUgCcum3KYzIFSuq96OaBUFAZ2gCsBts7fioq_GnzkJuYw3kKUSIRCcL2poZFYPsxhes','checkCode':123456})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月24日
     * @Validation(
     *  @OperatorValidator(0,{message : "手机号token"}),
     *  @OperatorValidator(1,{message : "手机验证码"})
     * )
     */
    public function mobileLogin(string $token, string $checkCode, string $password = null);
}
