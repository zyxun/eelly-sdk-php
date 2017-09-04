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

use Eelly\SDK\System\DTO\ValueDTO;

/**
 * @author zhangyingdi<zhangyingdi@gmail.com>
 */
interface ValueInterface
{
    /**
     * 根据传过来的参数值主键id，返回对应的参数值信息
     * 
     * @param  int $pvId  参数值主键id
     * @return array
     * 
     * @requestExample({"pvId":1})
     * @returnExample({"pvId":1,"pkId":1, "paramValue":"测试编码","paramDesc":"这个编码是测试数据","status":1,"remark":"测试数据","createdTime":1503560249})
     * @throws \Eelly\SDK\System\Exception\SystemException
     * 
     * @author zhangyingdi<zhangyingdi@gmail.com>
     * @since  2017-8-30
     */
    public function getValue(int $pvId): ValueDTO;

    /**
     * 新增系统字典参数对应的值的数据
     *
     * @param array   $data                  字典参数数据
     * @param string  $data['pkId']          参数编码主键id
     * @param int     $data['paramValue']    参数值
     * @param string  $data['paramDesc']     参数值描述
     * @param int     $data['status']        参数状态：(0 无效 1 有效)
     * @param string  $data['remark']        字典值描述的解释
     * @param int     $data['createdTime']   创建时间
     *
     * @throws \Eelly\SDK\System\Exception\ValueException
     *
     * @return bool
     * @requestExample({"data":{"pkId":10, "paramValue":1,"paramDesc":"测试值1","status":1, "remark":"测试值", "createdTime":1504000293}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     * @since  2017-8-30
     */
    public function addValue(array $data): bool;

    /**
     * 更新系统字典参数值的数据
     * 
     * @param int     $valueId               字典参数值的主键id
     * @param array   $data                  字典参数值的数据
     * @param string  $data['pkId']          参数编码主键id
     * @param int     $data['paramValue']    参数值
     * @param string  $data['paramDesc']     参数值描述
     * @param int     $data['status']        参数状态：(0 无效 1 有效)
     * @param string  $data['remark']        字典值描述的解释
     *
     * @throws \Eelly\SDK\System\Exception\ValueException
     *
     * @return bool
     * @requestExample({"valueId":1,"data":{"pkId":10, "paramValue":1,"paramDesc":"测试值1","status":1, "remark":"测试值22"}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     * @since  2017-8-30
     */
    public function updateValue(int $pvId, array $data): bool;

    /**
     * 分页获取参数值列表
     *
     * @param array  $condition           查询条件
     * @param int    $condition['pkId']   参数名id
     * @param int    $condition['status'] 参数值状态：(0 无效 1 有效)
     * @param int    $currentPage         页码
     * @param int    $limit               分页条数
     *
     * @throws \Eelly\SDK\System\Exception\ValueException
     *
     * @return array 返回分页结果
     * @requestExample(["condition": [{"pkId": 1,"status":1}],"limit": "10","currentPage": "1"])
     * @returnExample(["items": [{"pvId":1,"pkId":1, "paramValue":"测试编码","paramDesc":"这个编码是测试数据","status":1,"remark":"测试数据","createdTime":1503560249}],"page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"total_pages": 1,"total_items": 1,"limit": 10}])
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     * @since  2017-8-30
     */
    public function listValuePage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
