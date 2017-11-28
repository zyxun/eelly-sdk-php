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
use Eelly\SDK\Service\Service\SellerInterface;
use Eelly\SDK\Service\DTO\SellerDTO;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Seller implements SellerInterface
{
    /**
     * 获取一条店铺卖家认证记录.
     *
     * @param int $storeId 店铺ID
     *
     * @throws \Eelly\SDK\Service\Exception\SellerException
     *
     * @return SellerDTO
     * @requestExample({"storeId":1})
     * @returnExample({"storeId":1,"sbId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","status":1,"created_time":1458093605})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-18
     */
    public function getSeller(int $storeId): SellerDTO
    {
        return EellyClient::request('service/seller', __FUNCTION__, true, $storeId);
    }

    /**
     * 获取一条店铺卖家认证记录.
     *
     * @param int $storeId 店铺ID
     *
     * @throws \Eelly\SDK\Service\Exception\SellerException
     *
     * @return SellerDTO
     * @requestExample({"storeId":1})
     * @returnExample({"storeId":1,"sbId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","status":1,"created_time":1458093605})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-18
     */
    public function getSellerAsync(int $storeId)
    {
        return EellyClient::request('service/seller', __FUNCTION__, false, $storeId);
    }

    /**
     * 新增店铺卖家认证数据.
     *
     * @param array  $data            添加数据
     * @param int    $data['storeId'] 店铺ID
     * @param int    $data['sbId']    服务购买记录ID
     * @param string $data['name']    真实姓名
     * @param string $data['license'] 身份证号码
     * @param string $data['mobile']  手机号
     * @param UidDTO $user            登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\SellerException
     *
     * @return bool
     * @requestExample({"data":{"storeId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735"}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-18
     */
    public function addSeller(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/seller', __FUNCTION__, true, $data, $user);
    }

    /**
     * 新增店铺卖家认证数据.
     *
     * @param array  $data            添加数据
     * @param int    $data['storeId'] 店铺ID
     * @param int    $data['sbId']    服务购买记录ID
     * @param string $data['name']    真实姓名
     * @param string $data['license'] 身份证号码
     * @param string $data['mobile']  手机号
     * @param UidDTO $user            登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\SellerException
     *
     * @return bool
     * @requestExample({"data":{"storeId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735"}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-18
     */
    public function addSellerAsync(array $data, UidDTO $user = null)
    {
        return EellyClient::request('service/seller', __FUNCTION__, false, $data, $user);
    }

    /**
     * 修改店铺卖家认证数据.
     * 用于用户修改认证信息.
     *
     * @param array  $data            修改数据
     * @param int    $data['storeId'] 店铺ID
     * @param int    $data['sbId']    服务购买记录ID
     * @param string $data['name']    真实姓名
     * @param string $data['license'] 身份证号码
     * @param string $data['mobile']  手机号
     * @param UidDTO $user            登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\SellerException
     *
     * @return bool
     * @requestExample({"storeId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735"})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-18
     */
    public function updateSeller(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/seller', __FUNCTION__, true, $data, $user);
    }

    /**
     * 修改店铺卖家认证数据.
     * 用于用户修改认证信息.
     *
     * @param array  $data            修改数据
     * @param int    $data['storeId'] 店铺ID
     * @param int    $data['sbId']    服务购买记录ID
     * @param string $data['name']    真实姓名
     * @param string $data['license'] 身份证号码
     * @param string $data['mobile']  手机号
     * @param UidDTO $user            登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\SellerException
     *
     * @return bool
     * @requestExample({"storeId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735"})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-18
     */
    public function updateSellerAsync(array $data, UidDTO $user = null)
    {
        return EellyClient::request('service/seller', __FUNCTION__, false, $data, $user);
    }

    /**
     * 审核店铺卖家认证.
     * 用于管理员审核认证信息.
     *
     * @param int    $storeId 店铺ID
     * @param int    $status  处理状态：0 未处理 1 审核通过 2 审核失败 3 认证过期
     * @param UidDTO $user    登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\SellerException
     *
     * @return bool
     * @requestExample({"storeId":1,"status":1})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-18
     */
    public function checkSeller(int $storeId, int $status, UidDTO $user = null): bool
    {
        return EellyClient::request('service/seller', __FUNCTION__, true, $storeId, $status, $user);
    }

    /**
     * 审核店铺卖家认证.
     * 用于管理员审核认证信息.
     *
     * @param int    $storeId 店铺ID
     * @param int    $status  处理状态：0 未处理 1 审核通过 2 审核失败 3 认证过期
     * @param UidDTO $user    登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\SellerException
     *
     * @return bool
     * @requestExample({"storeId":1,"status":1})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-18
     */
    public function checkSellerAsync(int $storeId, int $status, UidDTO $user = null)
    {
        return EellyClient::request('service/seller', __FUNCTION__, false, $storeId, $status, $user);
    }

    /**
     * 获取卖家认证简介信息.
     *
     * @param int $storeId  店铺id
     *
     * @return array
     * @requestExample({"storeId":1}})
     * @returnExample({"authName":"卖家身份真实性认证","authRank":"初级认证","auditTime":0,"expireTime":0})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月28日
     * @validation(
     *     @digit(0, {message:"非法的店铺id类型"})
     * )
     */
    public function getSellerBase(int $storeId): array
    {
        return EellyClient::request('service/seller', __FUNCTION__, true, $storeId);
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