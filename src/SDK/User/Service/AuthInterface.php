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
     * @param string      $data['mobile']          手机号码type为0需要传这个值,
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
     * @requestExample({"data":{"type":1,"name":"小王","license":444444,"idType":0,"expiryDate":1509592537,
     *     "bankId":222,"gbCode":222,"bankSubbranch":"支行名称","bankAccount":"银行账号","cartPic":"/SKKSKS/SSJJS/KSKKS.png","cartReversedPic":"/SKKSKS/SSJJS/KSKKS.png","remark":"备注"}})
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
     * @param array       $condition            条件数组
     * @param int         $condition['type']    认证类型：0 个人实名认证 1 企业实名认证,
     * @param string      $condition['name']    真实姓名/企业名称,
     * @param string      $condition['license'] 身份证号码/营业执照号
     * @param UidDTO|null $user                 登录用户
     *
     * @throws \Eelly\SDK\User\Exception\AuthException
     *
     * @return array
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
     * @param int    $data['type']             认证类型：0 个人实名认证 1 企业实名认证,
     * @param string $data['name']             真实姓名/企业名称,
     * @param string $data['license']          身份证号码/营业执照号,
     * @param int    $data['idType']           证件有效期：0 有期限 1 长期,
     * @param int    $data['expiryDate']       证件到期时间,
     * @param int    $data['bankId']           开户银行ID：el_config->bank->bank_id,
     * @param int    $data['gbCode']           开户银行所在地：：el_config->region_gb->gb_code,
     * @param string $data['bankSubbranch']    支行名称,
     * @param string $data['bankAccount']      银行账号,
     * @param string $data['cartPic']          身份证正面照片/营业执照图片路径,
     * @param string $data['cartReversed_pic'] 身份证反面照片,
     * @param int    $data['remark']           备注,
     * @param UidDTO $user
     *
     * @throws AuthException
     *
     * @return bool
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
     * @param int    $data['type']            认证类型：0 个人实名认证 1 企业实名认证,
     * @param string $data['name']            真实姓名/企业名称,
     * @param string $data['license']         身份证号码/营业执照号,
     * @param int    $data['idType']          证件有效期：0 有期限 1 长期,
     * @param int    $data['expiryDate']      证件到期时间,
     * @param int    $data['bankId']          开户银行ID：el_config->bank->bank_id,
     * @param int    $data['gbCode']          开户银行所在地：：el_config->region_gb->gb_code,
     * @param string $data['bankSubbranch']   支行名称,
     * @param string $data['bankAccount']     银行账号,
     * @param string $data['cartPic']         身份证正面照片/营业执照图片路径,
     * @param string $data['cartReversedPic'] 身份证反面照片,
     * @param string $data['remark']          备注
     * @param UidDTO $user                    登录用户
     *
     * @throws AuthException
     *
     * @return bool
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017/9/12
     */
    public function updateAuth(array $data, UidDTO $user = null): bool;


    /**
     * 检查用户是否实名认证
     *
     * @param integer $userId 用户id
     * @return boolean
     * 
     * @requestExample({"userId":148086})
     * @returnExample(true)
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.8.29
     */
    public function checkAuthUser(int $userId): bool;

    /**
     * 获取用户/店铺认证信息.
     *
     * @param array       $condition            条件数组
     * @param int         $condition['type']    认证类型：0 个人实名认证 1 企业实名认证,
     * @param string      $condition['name']    真实姓名/企业名称,
     * @param string      $condition['license'] 身份证号码/营业执照号
     * @param integer     $userId               登录用户id
     * @return array
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.8.29
     */
    public function getAuthNotDTO(array $condition = [], int $userId): array;

    /**
     * 获取实名认证类型
     * 
     * > 返回数据类型说明
     * 
     * key | type | value
     * --- | ---- | ----
     * type | int | 认证类型 -1:没有认证 0:个人认证 1:企业认证
     * status | int | 认证状态
     *
     * > status 状态说明
     * 
     * value | desc
     * --- | -----  
     * -1 | 没有认证
     * 0 | 个人认证未审核
     * 1 | 个人认证审核通过
     * 2 | 个人认证审核中
     * 3 | 个人认证金额验证多次错误
     * 4 | 个人认证审核未通过
     * 5 | 企业认证未审核
     * 6 | 企业认证审核中
     * 7 | 企业认证金额验证多次错误
     * 8 | 企业认证审核通过
     * 9 | 企业认证审核未通过
     * 
     * @param UidDTO $user 当前登陆的用户
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.10
     */
    public function getAuthType(UidDTO $user = null): array;

    /**
     * 获取实名认证 企业和个人 eelly_old_code
     * 
     * > 返回数据说明 个人
     * key | type | value
     * --- | ---- | -----
     * user_id   | int    | 用户id
     * add_time  | int    | 申请时间
     * audite_fail  | string | 认证失败原因
     * verfity_time | int    | 审核时间
     * audit_name   | int    | 审核人
     * real_name    | string | 真实姓名
     * id_card      | string | 身份证号码
     * id_extended  | int    | 身份证是否长期有效 0:有期限 1:长期
     * cart_validity | int   | 身份证到期时间
     * cart_pic     | string | 身份证正面照片
     * cart_reversed_pic  | string | 身份证背面照片
     * bank_dic  | int | 开户银行
     * bank_region_id | int | 开户银行所在地
     * bank_account | string | 银行账号
     * 
     * > 返回数据 企业
     * key | type | value
     * --- | ---- | -----
     * ent_name         | string | 企业名称
     * name_audite_fail | stirng | 审核失败原因
     * ent_license      | string | 营业执照正面照
     * ent_bank         | int    | 开户银行
     * add_time         | int    | 申请时间
     * ent_account      | string | 银行账号
     *
     * @param integer $userId 用户id
     * @param integer $type 类型 -1:系统调用返回信息(推荐),0:获取个人认证信息，1:企业认证信息
     * @return array
     * @requestExample({"userId":"148086","type":"-1"})
     * @returnExample({"user_id":"148086","add_time":"1467150996","audite_fail":"无法核对身份","verfity_time":"1467150996","audit_name":"955330","real_name":"莫琼","id_card":"741258963214","is_extended":"1","cart_validity":"0","cart_pic":"http://img.eelly.com/G01/M00/00/75/o4YBAFRqpISIJVtWAAWTTU6zwW0AAAttAEa9J0ABZNl726.jpg","cart_reversed_pic":"http://img.eelly.com/G01/M00/00/75/o4YBAFRqpISIJVtWAAWTTU6zwW0AAAttAEa9J0ABZNl726.jpg","bank_dic":"41","bank_region_id":"120184","bank_account":"78451236987456987"})
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.10
     */
    public function getAuthBoth(int $userId, int $type = -1): array;

}
