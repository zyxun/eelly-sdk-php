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
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Qrcode implements QrcodeInterface
{
    /**
     * 通过二维码编号,返回已经绑定状态的店铺id.
     *
     * @param string $qrcode 二维码编号
     *
     * @author wechan
     *
     * @since 2018年09月10日
     */
    public function getStoreIdByQrCode(string $qrcode): int
    {
        return EellyClient::request('store/qrcode', 'getStoreIdByQrCode', true, $qrcode);
    }

    /**
     * 通过二维码编号,返回已经绑定状态的店铺id.
     *
     * @param string $qrcode 二维码编号
     *
     * @author wechan
     *
     * @since 2018年09月10日
     */
    public function getStoreIdByQrCodeAsync(string $qrcode)
    {
        return EellyClient::request('store/qrcode', 'getStoreIdByQrCode', false, $qrcode);
    }

    /**
     * 添加店铺二维码
     *
     * @param int   $storeId 店铺ID
     * @param array $data    二维码数据
     *
     * @return bool
     *
     * @requestExample({"storeId": 8888, "data": {"qrcodeId": 10000, "status": 1}})
     * @returnExample(true)
     *
     * @author zhangyangxun
     *
     * @since 2018年09月11日
     */
    public function saveStoreQrCode(int $storeId, array $data): bool
    {
        return EellyClient::request('store/qrcode', 'saveStoreQrCode', true, $storeId, $data);
    }

    /**
     * 添加店铺二维码
     *
     * @param int   $storeId 店铺ID
     * @param array $data    二维码数据
     *
     * @return bool
     *
     * @requestExample({"storeId": 8888, "data": {"qrcodeId": 10000, "status": 1}})
     * @returnExample(true)
     *
     * @author zhangyangxun
     *
     * @since 2018年09月11日
     */
    public function saveStoreQrCodeAsync(int $storeId, array $data)
    {
        return EellyClient::request('store/qrcode', 'saveStoreQrCode', false, $storeId, $data);
    }

    /**
     * 删除店铺二维码
     *
     * @param int $storeId 店铺ID
     *
     * @return bool
     *
     * @requestExample({"storeId": 8888})
     * @returnExample(true)
     *
     * @author zhangyangxun
     *
     * @since 2018年09月11日
     */
    public function dropStoreQrcode(int $storeId): bool
    {
        return EellyClient::request('store/qrcode', 'dropStoreQrcode', true, $storeId);
    }

    /**
     * 删除店铺二维码
     *
     * @param int $storeId 店铺ID
     *
     * @return bool
     *
     * @requestExample({"storeId": 8888})
     * @returnExample(true)
     *
     * @author zhangyangxun
     *
     * @since 2018年09月11日
     */
    public function dropStoreQrcodeAsync(int $storeId)
    {
        return EellyClient::request('store/qrcode', 'dropStoreQrcode', false, $storeId);
    }

    /**
     * 分页获取店铺二维码列表.
     *
     * @param array $condition
     * @param int   $currentPage
     * @param int   $limit
     *
     * @return array
     *
     * @author zhangyangxun
     *
     * @since 2018-09-11
     */
    public function listStoreQrcodePage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('store/qrcode', 'listStoreQrcodePage', true, $condition, $currentPage, $limit);
    }

    /**
     * 分页获取店铺二维码列表.
     *
     * @param array $condition
     * @param int   $currentPage
     * @param int   $limit
     *
     * @return array
     *
     * @author zhangyangxun
     *
     * @since 2018-09-11
     */
    public function listStoreQrcodePageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('store/qrcode', 'listStoreQrcodePage', false, $condition, $currentPage, $limit);
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
