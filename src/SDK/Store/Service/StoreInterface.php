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

namespace Eelly\SDK\Store\Service;

use Eelly\DTO\UserDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface StoreInterface
{
    /**
     * 新增店铺
     * 用户新增店铺并添加店铺标签.
     *
     * @param array   $storeData              店铺数据
     * @param string  $storeData['storeName'] 店铺名称
     * @param string  $storeData['consignee'] 联系人姓名
     * @param string  $storeData['gbCode']    地区编码
     * @param string  $storeData['zipcode']   邮政编码
     * @param string  $storeData['address']   详细地址
     * @param string  $storeData['mobile']    手机号
     * @param int     $storeData['gcId']      主营类型Id
     * @param array   $storeData['gpvIds']    销售风格Id
     * @param int     $storeData['glId']      销售档次id
     * @param UserDTO $user                   登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     * @requestExample({"storeData":{"storeName":"店铺名称", "consignee":"联系人姓名","gdCode":"123","zipcode":"123","address":"详细地址","mobile":"123456789","gcId":1,"gpvIds":[1,2,3],"glId":1}})
     *
     * @return bool 新增结果
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017-08-08
     */
    public function addStore(array $storeData, UserDTO $user = null): bool;
}
