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
     * 手机登录=》可以快速登录|快速注册.
     *
     * @param string      $token     手机号token
     * @param string      $checkCode 手机验证码
     * @param string|null $password  密码
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
