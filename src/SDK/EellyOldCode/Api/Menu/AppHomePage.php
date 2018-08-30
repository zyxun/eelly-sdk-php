<?php
declare(strict_types=1);
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\EellyOldCode\Api\Menu;

use Eelly\SDK\EellyClient;

/**
 * 菜单接口服务
 *
 * @author  zhangzeqiang <zhangzeqiang@eelly.net>
 * @since     2016年4月19日
 * @version 1.0
 */
class AppHomePage
{
    /**
     * 小程序零售化.
     *
     * @param int $pageType 1:轮播，2:分类， 3特色推荐 , 8广告图
     * @param int $type
     *
     * @return array
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月07日
     */
    public function getInfoByPageTypeAndType($pageType, $type): array
    {
        return EellyClient::request('eellyOldCode/menu/appHomePage', __FUNCTION__, true, $pageType, $type);
    }
}