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
use Eelly\SDK\Service\DTO\SellerDTO;

/**
 * 卖家认证.
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface SellerInterface
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
    public function getSeller(int $storeId): SellerDTO;

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
    public function addSeller(array $data, UidDTO $user = null): bool;

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
    public function updateSeller(array $data, UidDTO $user = null): bool;

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
    public function checkSeller(int $storeId, int $status, UidDTO $user = null): bool;
}
