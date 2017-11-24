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
use Eelly\SDK\User\DTO\AuthDTO;

/**
 * 实名认证
 *
 * @author zhangzeqiang<zhangzeqiang@eelly.net>
 */
interface AuthInterface
{
    /**
     * 添加个人实名认证|企业实名认证信息.
     *
     * @param array       $data                    实名认证数据
     * @param int         $data['type']            认证类型：0 个人实名认证 1 企业实名认证,
     * @param string      $data['name']            真实姓名/企业名称,
     * @param string      $data['license']         身份证号码/营业执照号,
     * @param int         $data['idType']          证件有效期：0 有期限 1 长期,
     * @param int         $data['expiryDate']      证件到期时间,
     * @param int         $data['bankId']          开户银行ID：el_config->bank->bank_id,
     * @param int         $data['gbCode']          开户银行所在地：：el_config->region_gb->gb_code,
     * @param string      $data['bankSubbranch']   支行名称,
     * @param string      $data['bankAccount']     银行账号,
     * @param string      $data['cartPic']         身份证正面照片/营业执照图片路径,
     * @param string      $data['cartReversedPic'] 身份证反面照片,
     * @param int         $data['remark']          备注,
     * @param UidDTO|null $user                    登录用户
     *
     * @throws \Eelly\SDK\User\Exception\AuthException
     *
     * @return bool
     * @requestExample({'type':1,'name':'小王','license':444444,'idType':0,'expiryDate':1509592537,
     *     'bankId':222,'gbCode':11,'bankSubbranch':'支行名称','bankAccount':'银行账号','cartPic':'/SKKSKS/SSJJS/KSKKS.png','cartReversedPic':'/SKKSKS/SSJJS/KSKKS.png','remark':'备注'})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月26日
     */
    public function addUserAuth(array $data, UidDTO $user = null): bool;

    /**
     * 获取企业认证或者个人实名认证的结果.
     *
     * @param int         $type 认证类型：0 个人实名认证 1 企业实名认证
     * @param UidDTO|null $user 登录用户
     *
     * @return array
     * @requestExample({'type':0})
     * @returnExample({"userId":148086,"type":1,"name":"张小龙","license":"我是一个3","idType":0,"expiryDate":12222223,"bankId":2,"gbCode":33,"bankSubbranch":"1","bankAccount":"44322","cartPic":"jsjjss.png","cartReversedPic":"","auditTime":0,"status":0,"remark":"","createdTime":1509009346,"updateTime":null,"mobile":"13430248648"})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年11月02日
     * @Validation(
     * @InclusionIn(0,{message:"非法的认证类型",domain:[0,1]})
     * )
     */
    public function getUserAuth(int $type, UidDTO $user = null): AuthDTO;

    /**
     * 获取用户/店铺认证信息.
     *
     * @param array  $condition            条件数组
     * @param int    $condition['type']    认证类型：0 个人实名认证 1 企业实名认证,
     * @param string $condition['name']    真实姓名/企业名称,
     * @param string $condition['license'] 身份证号码/营业执照号
     * @param UidDTO|null $user 登录用户
     *
     * @throws \Eelly\SDK\User\Exception\AuthException
     *
     * @return array
     * @requestExample({1, "condition":{"type":1}})
     * @returnExample()
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/12
     */
    public function getAuth(array $condition = [], UidDTO $user = null): array;

    /**
     * 添加个人实名认证|企业实名认证信息.
     *
     * @param array  $data
     * @param int    $data['type']              认证类型：0 个人实名认证 1 企业实名认证,
     * @param string $data['name']              真实姓名/企业名称,
     * @param string $data['license']           身份证号码/营业执照号,
     * @param int    $data['idType']           证件有效期：0 有期限 1 长期,
     * @param int    $data['expiryDate']       证件到期时间,
     * @param int    $data['bankId']           开户银行ID：el_config->bank->bank_id,
     * @param int    $data['gbCode']           开户银行所在地：：el_config->region_gb->gb_code,
     * @param string $data['bankSubbranch']    支行名称,
     * @param string $data['bankAccount']      银行账号,
     * @param string $data['cartPic']          身份证正面照片/营业执照图片路径,
     * @param string $data['cartReversed_pic'] 身份证反面照片,
     * @param int    $data['remark']            备注,
     * @param UidDTO $user
     *
     * @throws AuthException
     *
     * @return bool
     * @requestExample()
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/12
     */
    public function addAuth(array $data, UidDTO $user = null): bool;

    /**
     * 更新个人实名认证|企业实名认证.
     *
     * @param array  $data
     * @param int    $data['type']              认证类型：0 个人实名认证 1 企业实名认证,
     * @param string $data['name']              真实姓名/企业名称,
     * @param string $data['license']           身份证号码/营业执照号,
     * @param int    $data['idType']           证件有效期：0 有期限 1 长期,
     * @param int    $data['expiryDate']       证件到期时间,
     * @param int    $data['bankId']           开户银行ID：el_config->bank->bank_id,
     * @param int    $data['gbCode']           开户银行所在地：：el_config->region_gb->gb_code,
     * @param string $data['bankSubbranch']    支行名称,
     * @param string $data['bankAccount']      银行账号,
     * @param string $data['cartPic']          身份证正面照片/营业执照图片路径,
     * @param string $data['cartReversedPic'] 身份证反面照片,
     * @param string $data['remark']            备注
     * @param UidDTO $user                      登录用户
     *
     * @throws AuthException
     *
     * @return bool
     * @requestExample()
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/12
     */
    public function updateAuth(array $data, UidDTO $user = null): bool;
}
