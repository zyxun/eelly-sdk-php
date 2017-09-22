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

namespace Eelly\SDK\System\Service;

use Eelly\SDK\SYSTEM\DTO\GbDTO;

/**
 * 区域国标编码.
 * 
 * @author zhangyingdi<zhangyingdi@gmail.com>
 */
interface GbInterface
{
    /**
     * 根据传过来的主键id，返回对应的网格化区域信息.
     *
     * @param int $gbCode 区域国标编码
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array
     * @requestExample({"gbCode":1})
     * @returnExample({"gbCode":110000,"areaName":"北京", "shortName":"北京","parentCode":"上级编码","telCode":00852,"zipCode":100000,"regionCode":""})
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-9-5
     */
    public function getGb(int $gbCode): GbDTO;

    /**
     * 新增网格化区域信息记录.
     *
     * @param array  $data               网格化区域信息数据
     * @param int    $data['gbCode']     区域国标编码
     * @param string $data['areaName']   区域名称
     * @param string $data['shortName']  区域简称
     * @param int    $data['parentCode'] 上级编码
     * @param string $data['telCode']    电话区号
     * @param int    $data['zipCode']    邮政编码
     * @param int    $data['regionCode'] 区域所属片区
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"gbCode":110000,"areaName":"北京", "shortName":"北京","parentCode":"上级编码","telCode":00852,"zipCode":100000,"regionCode":""})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-9-5
     */
    public function addGb(array $data): bool;

    /**
     * 更新网格化区域信息记录.
     *
     * @param int    $gbCode             区域国标编码
     * @param array  $data               网格化区域信息数据
     * @param string $data['areaName']   区域名称
     * @param string $data['shortName']  区域简称
     * @param int    $data['parentCode'] 上级编码
     * @param string $data['telCode']    电话区号
     * @param int    $data['zipCode']    邮政编码
     * @param int    $data['regionCode'] 区域所属片区
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"gbCode":110000,"data":{"gbCode":110000,"areaName":"北京", "shortName":"北京","parentCode":"上级编码","telCode":00852,"zipCode":100000,"regionCode":""}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-9-5
     */
    public function updateGb(int $gbCode, array $data): bool;

    /**
     * 分页获取网格化区域信息列表.
     *
     * @param array $condition               查询条件
     * @param int   $condition['parentCode'] 上级编码
     * @param int   $condition['telCode']    电话区号
     * @param int   $condition['zipCode']    邮政编码
     * @param int   $currentPage             页码
     * @param int   $limit                   分页条数
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array 返回分页结果
     * @requestExample(["condition": [{"parentCode": 1,"telCode":"00852","zipCode":100000}],"currentPage": "1","limit": "20"])
     * @returnExample(["items": [{"gbCode":110000,"areaName":"北京", "shortName":"北京","parentCode":"上级编码","telCode":00852,"zipCode":100000,"regionCode":""}],"page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"total_pages": 1,"total_items": 1,"limit": 10}])
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-9-5
     */
    public function listGbPage(array $condition = [], int $currentPage = 1, int $limit = 20): array;
}
