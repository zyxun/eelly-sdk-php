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

namespace Eelly\SDK\EellyOldCode\Api\Menu;

use Eelly\SDK\EellyClient;

/**
 * 菜单接口服务
 *
 * @author  zhangzeqiang <zhangzeqiang@eelly.net>
 *
 * @since     2016年4月19日
 *
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
