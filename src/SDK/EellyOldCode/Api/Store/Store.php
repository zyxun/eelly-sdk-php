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

namespace Eelly\SDK\EellyOldCode\Api\Store;

use Eelly\SDK\EellyClient;

/**
 * Class Goods.
 *
 * var/eelly-old-code/modules/Goods/Service/GoodsService.php
 *
 * @author hehui<hehui@eelly.net>
 */
class Store
{

    /**
     * 获取店铺基本信息
     *
     * ###使用示例
     *
     * ####一般使用方式
     * <code>
     * StoreService::getInstance()->getInfoByStoreIds([148086,158252]);
     * </code>
     *
     * @param array $storeIds 店铺ID
     *
     * @service
     * > 数据说明
     *   key | value
     *   --------------------|--------------------
     *   status              |    状态码:200 | 701
     *   info                |    提示信息
     *                       |    200: 成功
     *                       |    701: 参数错误
     *   retval              |    $retval
     *
     * > $retval 数组说明
     *   key | value
     *   --------------------|--------------------
     *   store_id            |    string 店铺ID
     *   store_name          |    string 店铺名
     *   state               |    string 店铺状态
     *   store_logo          |    string 店铺LOGO
     *   is_promise          |    string 店铺类型
     *   credit_mark         |    string 店铺已经通过的所有认证类型与服务
     *   street_addr         |    string 街道地址
     *   credit_value        |    string 店铺信誉值
     *   praise_rate         |    string 卖家好评率
     *   goods_count         |    string 商品总数
     *   praise_rate_com_org |    double 与同行平均比较值
     *   real_shot           |    string 是否实拍
     *   return_goods_status |    string 是否包退换
     *   credit_info         |    $credit_info 店铺等级数组
     *   auth_all            |    $auth_all 店铺已经通过的所有认证类型与服务值数组
     *   is_mix              |    integer 是否混批
     *   mix_num             |    integer 混批数量
     *   mix_money           |    float   混批金额
     *
     * > $credit_info 数组说明
     *   key | value
     *   --------------------|--------------------
     *   0                   |    integer 店铺等级
     *   1                   |    integer 该等级起始值
     *   2                   |    integer 该等级终止值
     *   3                   |    string  该等级图片名称
     *
     * > $auth_all 数组说明
     *   key | value
     *   --------------------|--------------------
     *   is_entity           |    string  实体认证
     *   is_enterprise       |    string  企业认证
     *   is_time_shipping    |    string  准时发货
     *   is_integrity        |    string  诚信保障
     *   is_behalfof         |    string  一件代发
     *
     * @return array
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.8.16
     */
    public function getInfoByStoreIds(array $storeIds)
    {
        return EellyClient::request('eellyOldCode/store/store', __FUNCTION__, true, $storeIds);
    }
}
