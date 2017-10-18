<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Data\Service;


/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface EaTrackInterface
{

    /**
     * 记录用户收藏信息
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
     *
     * @throws \Eelly\SDK\Service\Exception\BrandException
     *
     * @return array
     * @requestExample({"data":{"storeId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","brand":"sixdec","trademark":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","certificate":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","status":1}})
     * @returnExample()
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-10-16
     */
    public function logUserFavorites(array $data): array;

    /**
     * 记录用户点击信息
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
     *
     * @throws \Eelly\SDK\Service\Exception\BrandException
     *
     * @return array
     * @requestExample({"data":{"storeId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","brand":"sixdec","trademark":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","certificate":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","status":1}})
     * @returnExample()
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-10-16
     */
    public function logUserClick(array $data): array;

    /**
     * 记录商业转化
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
     *
     * @throws \Eelly\SDK\Service\Exception\BrandException
     *
     * @return array
     * @requestExample({"data":{"storeId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","brand":"sixdec","trademark":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","certificate":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","status":1}})
     * @returnExample()
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-10-16
     */
    public function logEcommerce(array $data): array;

    /**
     * 记录普通页面访问
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
     *
     * @throws \Eelly\SDK\Service\Exception\BrandException
     *
     * @return array
     * @requestExample({"data":{"storeId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","brand":"sixdec","trademark":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","certificate":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","status":1}})
     * @returnExample()
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-10-16
     */
    public function logPageView(array $data): array;

    /**
     * 追踪事件
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
     *
     * @throws \Eelly\SDK\Service\Exception\BrandException
     *
     * @return array
     * @requestExample({"data":{"storeId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","brand":"sixdec","trademark":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","certificate":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","status":1}})
     * @returnExample()
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-10-16
     */
    public function trackMarsEvent(array $data): array;

}