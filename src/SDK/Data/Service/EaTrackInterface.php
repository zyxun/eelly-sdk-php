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

namespace Eelly\SDK\Data\Service;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface EaTrackInterface
{
    /**
     * 记录用户收藏信息.
     *
     * @param array  $data                     数据
     * @param string $data['visitorId']        访客id
     * @param int    $data['userId']           用户id
     * @param int    $data['storeId']          店铺id
     * @param int    $data['goodsId']          商品id
     * @param int    $data['siteId']           站点 1:pc 2:搜索(归类到1) 3:wap 4:app
     * @param string $data['ip']               请求的ip
     * @param string $data['url']              当前请求的url
     * @param int    $data['fromAdTrackParam'] 广告来源跟踪(cookie值)
     *
     * @throws \Eelly\SDK\Service\Exception\BrandException
     *
     * @return array
     * @requestExample({"data":{"visitorId":访客id,"userId":1,"storeId":2,"goodsId":1,"siteId":1,"ip":请求的ip,"url":当前请求的url,"fromAdTrackParam":0}})
     * @returnExample()
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-10-18
     */
    public function logUserFavorites(array $data): array;

    /**
     * 记录用户点击信息.
     *
     * @param array  $data                     数据
     * @param string $data['visitorId']        访客id
     * @param int    $data['userId']           用户id
     * @param int    $data['storeId']          店铺id
     * @param int    $data['goodsId']          商品id
     * @param int    $data['siteId']           站点 1:pc 2:搜索(归类到1) 3:wap 4:app
     * @param string $data['ip']               请求的ip
     * @param string $data['url']              当前请求的url
     * @param int    $data['fromAdTrackParam'] 广告来源跟踪(cookie值)
     *
     * @throws \Eelly\SDK\Service\Exception\BrandException
     *
     * @return array
     * @requestExample({"data":{"visitorId":访客id,"userId":1,"storeId":2,"goodsId":1,"siteId":1,"ip":请求的ip,"url":当前请求的url,"fromAdTrackParam":0}})
     * @returnExample()
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-10-18
     */
    public function logUserClick(array $data): array;

    /**
     * 记录商业转化.
     *
     * @param array  $data                     数据
     * @param string $data['visitorId']        访客id
     * @param int    $data['userId']           用户id
     * @param int    $data['storeId']          店铺id
     * @param int    $data['goodsId']          商品id
     * @param int    $data['siteId']           站点 1:pc 2:搜索(归类到1) 3:wap 4:app
     * @param string $data['ip']               请求的ip
     * @param string $data['url']              当前请求的url
     * @param int    $data['fromAdTrackParam'] 广告来源跟踪(cookie值)
     *
     * @throws \Eelly\SDK\Service\Exception\BrandException
     *
     * @return array
     * @requestExample({"data":{"visitorId":访客id,"userId":1,"storeId":2,"goodsId":1,"siteId":1,"ip":请求的ip,"url":当前请求的url,"fromAdTrackParam":0}})
     * @returnExample()
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-10-18
     */
    public function logEcommerce(array $data): array;

    /**
     * 记录用户访问和普通页面访问.
     *
     * @param array  $data                     数据
     * @param string $data['visitorId']        访客id
     * @param int    $data['userId']           用户id
     * @param int    $data['storeId']          店铺id
     * @param int    $data['goodsId']          商品id
     * @param int    $data['siteId']           站点 1:pc 2:搜索(归类到1) 3:wap 4:app
     * @param string $data['ip']               请求的ip
     * @param string $data['url']              当前请求的url
     * @param int    $data['fromAdTrackParam'] 广告来源跟踪(cookie值)
     *
     * @throws \Eelly\SDK\Service\Exception\BrandException
     *
     * @return array
     * @requestExample({"data":{"visitorId":访客id,"userId":1,"storeId":2,"goodsId":1,"siteId":1,"ip":请求的ip,"url":当前请求的url,"fromAdTrackParam":0}})
     * @returnExample()
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-10-18
     */
    public function logUserPageView(array $data): array;

    /**
     * 追踪事件.
     *
     * @param array  $data                     数据
     * @param string $data['visitorId']        访客id
     * @param int    $data['userId']           用户id
     * @param int    $data['storeId']          店铺id
     * @param int    $data['goodsId']          商品id
     * @param int    $data['siteId']           站点 1:pc 2:搜索(归类到1) 3:wap 4:app
     * @param string $data['ip']               请求的ip
     * @param string $data['url']              当前请求的url
     * @param int    $data['fromAdTrackParam'] 广告来源跟踪(cookie值)
     *
     * @throws \Eelly\SDK\Service\Exception\BrandException
     *
     * @return array
     * @requestExample({"data":{"visitorId":访客id,"userId":1,"storeId":2,"goodsId":1,"siteId":1,"ip":请求的ip,"url":当前请求的url,"fromAdTrackParam":0}})
     * @returnExample()
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-10-18
     */
    public function trackMarsEvent(array $data): array;
}
