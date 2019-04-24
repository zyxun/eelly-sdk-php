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

namespace Eelly\SDK\Im\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Im\Service\SettingInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Setting implements SettingInterface
{
    /**
     * 获取IM配置信息
     * 
     * @returnExample({"storeOrderNum_30":{"isId":"1","type":"11","code":"store_order_num_30","item":"\u8fd130\u5929\u652f\u4ed8\u8ba2\u5355\u6570\u2265","value":"1","status":"1","createdTime":"0","updateTime":"2019-04-22 11:37:19"},"storeOrderMoney_30":{"isId":"2","type":"11","code":"store_order_money_30","item":"\u8fd130\u5929\u6210\u4ea4\u603b\u91d1\u989d\u2265","value":"1","status":"1","createdTime":"0","updateTime":"2019-04-22 11:56:21"},"storeVip":{"isId":"3","type":"12","code":"store_vip","item":"\u76f4\u64ad\/VIP\u5546\u5bb6","value":"10","status":"1","createdTime":"0","updateTime":"2019-04-22 11:31:03"},"storeNormal":{"isId":"4","type":"12","code":"store_normal","item":"\u666e\u901a\u5546\u5bb6","value":"2","status":"1","createdTime":"0","updateTime":"2019-04-22 11:31:04"},"userOrderMoney_365":{"isId":"5","type":"21","code":"user_order_money_365","item":"\u8fd11\u5e74\u7d2f\u8ba1\u4ea4\u6613\u989d\u2265","value":"30","status":"0","createdTime":"0","updateTime":"2019-04-17 09:46:56"},"userFromNum":{"isId":"6","type":"21","code":"user_from_num","item":"\u7d2f\u8ba1\u62c9\u65b0\u4eba\u6570\u2265","value":"10","status":"0","createdTime":"0","updateTime":"2019-04-17 09:50:12"},"userIsBuyer":{"isId":"7","type":"22","code":"user_is_buyer","item":"\u7eaf\u4e70\u5bb6","value":"5","status":"0","createdTime":"0","updateTime":"2019-04-17 09:51:11"}})
     * 
     * @author wechan
     * @since 2019年04月23日
     */
    public function getSettingData(): array
    {
        return EellyClient::request('im/setting', 'getSettingData', true);
    }

    /**
     * 获取IM配置信息
     * 
     * @returnExample({"storeOrderNum_30":{"isId":"1","type":"11","code":"store_order_num_30","item":"\u8fd130\u5929\u652f\u4ed8\u8ba2\u5355\u6570\u2265","value":"1","status":"1","createdTime":"0","updateTime":"2019-04-22 11:37:19"},"storeOrderMoney_30":{"isId":"2","type":"11","code":"store_order_money_30","item":"\u8fd130\u5929\u6210\u4ea4\u603b\u91d1\u989d\u2265","value":"1","status":"1","createdTime":"0","updateTime":"2019-04-22 11:56:21"},"storeVip":{"isId":"3","type":"12","code":"store_vip","item":"\u76f4\u64ad\/VIP\u5546\u5bb6","value":"10","status":"1","createdTime":"0","updateTime":"2019-04-22 11:31:03"},"storeNormal":{"isId":"4","type":"12","code":"store_normal","item":"\u666e\u901a\u5546\u5bb6","value":"2","status":"1","createdTime":"0","updateTime":"2019-04-22 11:31:04"},"userOrderMoney_365":{"isId":"5","type":"21","code":"user_order_money_365","item":"\u8fd11\u5e74\u7d2f\u8ba1\u4ea4\u6613\u989d\u2265","value":"30","status":"0","createdTime":"0","updateTime":"2019-04-17 09:46:56"},"userFromNum":{"isId":"6","type":"21","code":"user_from_num","item":"\u7d2f\u8ba1\u62c9\u65b0\u4eba\u6570\u2265","value":"10","status":"0","createdTime":"0","updateTime":"2019-04-17 09:50:12"},"userIsBuyer":{"isId":"7","type":"22","code":"user_is_buyer","item":"\u7eaf\u4e70\u5bb6","value":"5","status":"0","createdTime":"0","updateTime":"2019-04-17 09:51:11"}})
     * 
     * @author wechan
     * @since 2019年04月23日
     */
    public function getSettingDataAsync()
    {
        return EellyClient::request('im/setting', 'getSettingData', false);
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