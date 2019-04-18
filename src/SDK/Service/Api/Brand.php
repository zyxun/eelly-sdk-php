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

namespace Eelly\SDK\Service\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Service\Service\BrandInterface;
use Eelly\SDK\Service\DTO\BrandDTO;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Brand
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
     * @returnExample({"storeId":1,"sbId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","brand":"sixdec","trademark":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","certificate":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","status":1})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-19
     */
    public function getBrand(int $storeId): BrandDTO
    {
        return EellyClient::request('service/brand', __FUNCTION__, true, $storeId);
    }

    /**
     * 获取一条品牌认证数据记录.
     *
     * @param int $storeId 店铺ID
     *
     * @throws \Eelly\SDK\Service\Exception\BrandException
     *
     * @return BrandDTO
     * @requestExample({"storeId":1})
     * @returnExample({"storeId":1,"sbId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","brand":"sixdec","trademark":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","certificate":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","status":1})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-19
     */
    public function getBrandAsync(int $storeId)
    {
        return EellyClient::request('service/brand', __FUNCTION__, false, $storeId);
    }

    /**
     * 新增品牌认证数据.
     *
     * @param array  $data                添加数据
     * @param int    $data['storeId']     店铺ID
     * @param int    $data['sbId']        服务购买记录ID
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
    public function addBrand(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/brand', __FUNCTION__, true, $data, $user);
    }

    /**
     * 新增品牌认证数据.
     *
     * @param array  $data                添加数据
     * @param int    $data['storeId']     店铺ID
     * @param int    $data['sbId']        服务购买记录ID
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
    public function addBrandAsync(array $data, UidDTO $user = null)
    {
        return EellyClient::request('service/brand', __FUNCTION__, false, $data, $user);
    }

    /**
     * 修改品牌认证数据.
     * 用于用户修改认证信息.
     *
     * @param array  $data                修改数据
     * @param int    $data['storeId']     店铺ID
     * @param int    $data['sbId']        服务购买记录ID
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
    public function updateBrand(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/brand', __FUNCTION__, true, $data, $user);
    }

    /**
     * 修改品牌认证数据.
     * 用于用户修改认证信息.
     *
     * @param array  $data                修改数据
     * @param int    $data['storeId']     店铺ID
     * @param int    $data['sbId']        服务购买记录ID
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
    public function updateBrandAsync(array $data, UidDTO $user = null)
    {
        return EellyClient::request('service/brand', __FUNCTION__, false, $data, $user);
    }

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
    public function checkBrand(int $storeId, int $status, UidDTO $user = null): bool
    {
        return EellyClient::request('service/brand', __FUNCTION__, true, $storeId, $status, $user);
    }

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
    public function checkBrandAsync(int $storeId, int $status, UidDTO $user = null)
    {
        return EellyClient::request('service/brand', __FUNCTION__, false, $storeId, $status, $user);
    }

    /**
     * 获取品牌认证简介信息.
     *
     * @param int $storeId  店铺id
     *
     * @return array
     * @requestExample({"storeId":1})
     * @returnExample({"authName":"品牌真实性认证","authRank":"高级认证","auditTime":0,"expireTime":0})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月28日
     * @validation(
     *     @digit(0, {message:"非法的店铺id类型"})
     * )
     */
    public function getBrandBase(int $storeId): array
    {
        return EellyClient::request('service/brand', __FUNCTION__, true, $storeId);
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