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

use Eelly\DTO\AuthDTO;
use Eelly\DTO\UidDTO;

/**
 * 实名认证
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface AuthInterface
{
    /**
     * 获取用户/店铺认证信息.
     *
     * @param   array       $condition                  条件数组
     * @param   int         $condition['type']           认证类型：0 个人实名认证 1 企业实名认证,
     * @param   string      $condition['name']           真实姓名/企业名称,
     * @param   string      $condition['license']        身份证号码/营业执照号
     *
     * @throws AuthException
     *
     * @return array
     * @requestExample({1, "condition":{"type":1}}})
     * @returnExample()
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017/9/12
     */
    public function getAuth(array $condition = [], UidDTO $user = null): array;

    /**
     * 添加个人实名认证|企业实名认证信息.
     *
     * @param   array       $data
     * @param   int         $data['type']           认证类型：0 个人实名认证 1 企业实名认证,
     * @param   string      $data['name']           真实姓名/企业名称,
     * @param   string      $data['license']        身份证号码/营业执照号,
     * @param   int         $data['id_type']        证件有效期：0 有期限 1 长期,
     * @param   int         $data['expiry_date']    证件到期时间,
     * @param   int         $data['bank_id']        开户银行ID：el_config->bank->bank_id,
     * @param   int         $data['gb_code']        开户银行所在地：：el_config->region_gb->gb_code,
     * @param   string      $data['bank_subbranch'] 支行名称,
     * @param   string      $data['bank_account']   银行账号,
     * @param   string      $data['cart_pic']       身份证正面照片/营业执照图片路径,
     * @param   string      $data['cart_reversed_pic']  身份证反面照片,
     * @param   int         $data['remark']          备注,
     * @param   UidDTO      $user
     *
     * @throws
     *
     * @return bool
     * @requestExample()
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017/9/12
     */
    public function addAuth(array $data, UidDTO $user = null): bool;

    /**
     * 更新个人实名认证|企业实名认证.
     *
     * @param   array     $data
     * @param   int       $data['type']           认证类型：0 个人实名认证 1 企业实名认证,
     * @param   string    $data['name']           真实姓名/企业名称,
     * @param   string    $data['license']        身份证号码/营业执照号,
     * @param   int       $data['id_type']        证件有效期：0 有期限 1 长期,
     * @param   int       $data['expiry_date']    证件到期时间,
     * @param   int       $data['bank_id']        开户银行ID：el_config->bank->bank_id,
     * @param   int       $data['gb_code']        开户银行所在地：：el_config->region_gb->gb_code,
     * @param   string    $data['bank_subbranch'] 支行名称,
     * @param   string    $data['bank_account']   银行账号,
     * @param   string    $data['cart_pic']       身份证正面照片/营业执照图片路径,
     * @param   string    $data['cart_reversed_pic']  身份证反面照片,
     * @param   string    $data['remark']            备注
     * @param   UidDTO    $user
     *
     * @throws AuthException
     *
     * @return bool
     * @requestExample()
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017/9/12
     */
    public function updateAuth(array $data, UidDTO $user = null): bool;

}
