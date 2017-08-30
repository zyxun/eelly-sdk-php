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

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface SellerInterface
{
    /**
     * 新增店铺卖家认证数据.
     *
     * @param array  $data             认证数据
     * @param int    $data['store_id']
     * @param string $data['name']
     * @param string $data['license']
     * @param string $data['mobile']
     * @param UidDTO $user             登录用户对象
     *
     * @throws Eelly\SDK\Service\Exception\SellerException 701001 参数错误
     * @throws Eelly\SDK\Service\Exception\SellerException 700001 用户未登录
     * @throws Eelly\SDK\Service\Exception\SellerException 703001 插入数据失败
     *
     * @return array
     * @requestExample({"data":{"store_id":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735"}})
     * @returnExample(true)
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     *
     * @since 2017-8-02
     */
    public function addSeller(array $data, UidDTO $user = null): bool;

    /**
     * 修改店铺卖家认证数据.
     * 用于用户修改认证信息.
     *
     * @param array  $data                 认证数据
     * @param int    $data['store_id']
     * @param string $data['name']
     * @param string $data['license']
     * @param string $data['mobile']
     * @param string $data['status']
     * @param int    $data['created_time']
     * @param UidDTO $user                 登录用户对象
     *
     * @throws Eelly\SDK\Service\Exception\SellerException 701001 参数错误
     * @throws Eelly\SDK\Service\Exception\SellerException 700001 用户未登录
     * @throws Eelly\SDK\Service\Exception\SellerException 704001 更新数据失败
     *
     * @return array
     * @requestExample({"store_id":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","status":1})
     * @returnExample(true)
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     *
     * @since 2017-8-02
     */
    public function updateSeller(array $data, UidDTO $user = null): bool;

    /**
     * 审核店铺卖家认证.
     * 用于管理员审核认证信息.
     *
     * @param int    $storeId 店铺ID
     * @param UidDTO $user    登录用户对象
     *
     * @throws Eelly\SDK\Service\Exception\SellerException 701001 参数错误
     * @throws Eelly\SDK\Service\Exception\SellerException 700001 用户未登录
     * @throws Eelly\SDK\Service\Exception\SellerException 700002 无权限操作
     * @throws Eelly\SDK\Service\Exception\SellerException 702001 数据不存在
     * @throws Eelly\SDK\Service\Exception\SellerException 704001 更新数据失败
     *
     * @return array
     * @requestExample({"storeId":1})
     * @returnExample(true)
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     *
     * @since 2017-8-02
     */
    public function checkSeller(int $storeId, UidDTO $user = null): bool;

    /**
     * 获取一条店铺卖家认证记录.
     *
     * @param int $storeId 店铺ID
     *
     * @throws Eelly\SDK\Service\Exception\SellerException 701001 参数错误
     * @throws Eelly\SDK\Service\Exception\SellerException 702001 数据不存在
     *
     * @return array
     * @requestExample({"storeId":1})
     * @returnExample({"store_id":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","status":1,"created_time":1458093605})
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     *
     * @since 2017-8-02
     */
    public function getSeller(int $storeId): array;
}
