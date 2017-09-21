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

namespace Eelly\SDK\Service\Service;

use Eelly\DTO\UidDTO;
use Eelly\SDK\Service\DTO\BrandDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface BrandInterface
{
    /**
     * 获取一条品牌认证数据记录.
     *
     * @param int $storeId 店铺ID
     *
     * @throws \Eelly\SDK\Service\Exception\BrandException
     *
     * @return BrandDTO
     * @requestExample({"storeId":1})
     * @returnExample({"storeId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","brand":"sixdec","trademark":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","certificate":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","status":1})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-19
     */
    public function getBrand(int $storeId): BrandDTO;

    /**
     * 新增品牌认证数据.
     *
     * @param array  $data                添加数据
     * @param int    $data['storeId']     店铺ID
     * @param string $data['name']        真实姓名
     * @param string $data['license']     身份证号码
     * @param string $data['mobile']      手机号
     * @param string $data['brand']       品牌名称
     * @param string $data['trademark']   商标图片地址：JSON格式，最多5张
     * @param string $data['certificate'] 商标证书或使用权证明图片地址：JSON格式，最多5张
     * @param UidDTO $user                登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\BrandException
     *
     * @return bool
     * @requestExample({"data":{"storeId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","brand":"sixdec","trademark":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","certificate":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","status":1}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-19
     */
    public function addBrand(array $data, UidDTO $user = null): bool;

    /**
     * 修改品牌认证数据.
     * 用于用户修改认证信息.
     *
     * @param array  $data                修改数据
     * @param int    $data['storeId']     店铺ID
     * @param string $data['name']        真实姓名
     * @param string $data['license']     身份证号码
     * @param string $data['mobile']      手机号
     * @param string $data['brand']       品牌名称
     * @param string $data['trademark']   商标图片地址：JSON格式，最多5张
     * @param string $data['certificate'] 商标证书或使用权证明图片地址：JSON格式，最多5张
     * @param UidDTO $user                登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\BrandException
     *
     * @return bool
     * @requestExample({"data":{"storeId":1,"name":"\u5b9e\u4f53\u8ba4\u8bc1","license":0,"mobile":1,"brand":7,"trademark":"service_entity","certificate":1,"status":1}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-19
     */
    public function updateBrand(array $data, UidDTO $user = null): bool;

    /**
     * 审核品牌认证数据.
     * 用于管理员审核认证信息.
     *
     * @param int    $storeId 店铺ID
     * @param int    $status  处理状态：0 未处理 1 审核通过 2 审核失败 3 认证过期
     * @param UidDTO $user    登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\BrandException
     *
     * @return bool
     * @requestExample({"storeId":1,"status":1})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-19
     */
    public function checkBrand(int $storeId, int $status, UidDTO $user = null): bool;
}
