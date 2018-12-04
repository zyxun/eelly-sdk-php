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

namespace Eelly\SDK\EellyOldCode\Api\Common;

use Eelly\SDK\EellyClient;

/**
 * Class MallSetting.
 *
 *  modules/Common/Service/MallSettingService.php
 *
 * @author zhangyingdi<zhangyingdi@eelly.net>
 */
class MallSetting
{
    /**
     * 获取测试店铺id的数组
     *
     * @return array
     *
     * @author 敖卓超<aozhuochao@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since  2018.12.04
     */
    public function getTestStoreId()
    {
        return EellyClient::request('eellyOldCode/common/mallSetting', __FUNCTION__, true);
    }
}
