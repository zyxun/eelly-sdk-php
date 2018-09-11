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

namespace Eelly\SDK\Store\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Store\Service\QrcodeInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Qrcode implements QrcodeInterface
{
    /**
     * 通过二维码编号,返回已经绑定状态的店铺id
     * 
     * @param string $qrcode 二维码编号
     * 
     * @author wechan
     * @since 2018年09月10日
     * 
     */
    public function getStoreIdByQrCode(string $qrcode): int
    {
        return EellyClient::request('store/qrcode', 'getStoreIdByQrCode', true, $qrcode);
    }

    /**
     * 通过二维码编号,返回已经绑定状态的店铺id
     * 
     * @param string $qrcode 二维码编号
     * 
     * @author wechan
     * @since 2018年09月10日
     * 
     */
    public function getStoreIdByQrCodeAsync(string $qrcode)
    {
        return EellyClient::request('store/qrcode', 'getStoreIdByQrCode', false, $qrcode);
    }

    /**
     * 添加店铺二维码
     *
     * @param int   $storeId 店铺ID
     * @param array $qrcode  二维码数据
     * @return bool
     *
     * @requestExample({"storeId": 8888, "qrcode": {"qrcodeId": 10000, "status": 1}})
     * @returnExample(true)
     *
     * @author zhangyangxun
     * @since 2018年09月11日
     */
    public function saveStoreQrCode(int $storeId, array $qrcode): bool
    {
        return EellyClient::request('store/qrcode', 'saveStoreQrCode', true, $storeId, $qrcode);
    }

    /**
     * 添加店铺二维码
     *
     * @param int   $storeId 店铺ID
     * @param array $qrcode  二维码数据
     * @return bool
     *
     * @requestExample({"storeId": 8888, "qrcode": {"qrcodeId": 10000, "status": 1}})
     * @returnExample(true)
     *
     * @author zhangyangxun
     * @since 2018年09月11日
     */
    public function saveStoreQrCodeAsync(int $storeId, array $qrcode)
    {
        return EellyClient::request('store/qrcode', 'saveStoreQrCode', false, $storeId, $qrcode);
    }

    /**
     * 删除店铺二维码
     *
     * @param int   $storeId 店铺ID
     * @return bool
     *
     * @requestExample({"storeId": 8888})
     * @returnExample(true)
     *
     * @author zhangyangxun
     * @since 2018年09月11日
     */
    public function dropStoreQrcode(int $storeId): bool
    {
        return EellyClient::request('store/qrcode', 'dropStoreQrcode', true, $storeId);
    }

    /**
     * 删除店铺二维码
     *
     * @param int   $storeId 店铺ID
     * @return bool
     *
     * @requestExample({"storeId": 8888})
     * @returnExample(true)
     *
     * @author zhangyangxun
     * @since 2018年09月11日
     */
    public function dropStoreQrcodeAsync(int $storeId)
    {
        return EellyClient::request('store/qrcode', 'dropStoreQrcode', false, $storeId);
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