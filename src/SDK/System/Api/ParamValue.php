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

namespace Eelly\SDK\System\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\System\DTO\ParamValueDTO;
use Eelly\SDK\System\Service\ParamValueInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class ParamValue implements ParamValueInterface
{
    /**
     * 根据传过来的参数值主键id，返回对应的参数值信息.
     *
     * @param int $spvId 参数值主键id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array
     *
     * @requestExample({"spvId":1})
     * @returnExample({"spvId":1,"paramId":1, "paramValue":"测试编码","paramDesc":"这个编码是测试数据","status":1,"remark":"测试数据","createdTime":1503560249})
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-25
     */
    public function getParamValue(int $spvId): ParamValueDTO
    {
        return EellyClient::request('system/paramvalue', 'getParamValue', $spvId);
    }

    /**
     * 新增系统字典参数对应的值的数据.
     *
     * @param array  $data                字典参数数据
     * @param int    $data['paramId']     参数编码主键id
     * @param int    $data['paramValue']  参数值
     * @param string $data['paramDesc']   参数值描述
     * @param int    $data['status']      参数状态：(0 无效 1 有效)
     * @param string $data['remark']      字典值描述的解释
     * @param int    $data['createdTime'] 创建时间
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"data":{"paramId":10, "paramValue":1,"paramDesc":"测试值1","status":1, "remark":"测试值", "createdTime":1504000293}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-25
     */
    public function addParamValue(array $data): bool
    {
        return EellyClient::request('system/paramvalue', 'addParamValue', $data);
    }

    /**
     * 更新系统字典参数值的数据.
     *
     * @param int    $spvId              字典参数值的主键id
     * @param array  $data               字典参数值的数据
     * @param int    $data['paramId']    参数编码主键id
     * @param int    $data['paramValue'] 参数值
     * @param string $data['paramDesc']  参数值描述
     * @param int    $data['status']     参数状态：(0 无效 1 有效)
     * @param string $data['remark']     字典值描述的解释
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"spvId":1,"data":{"paramId":10, "paramValue":1,"paramDesc":"测试值1","status":1, "remark":"测试值22"}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-25
     */
    public function updateParamValue(int $spvId, array $data): bool
    {
        return EellyClient::request('system/paramvalue', 'updateParamValue', $spvId, $data);
    }

    /**
     * 分页获取参数值列表.
     *
     * @param array $condition            查询条件
     * @param int   $condition['paramId'] 参数名id
     * @param int   $condition['status']  参数值状态：(0 无效 1 有效)
     * @param int   $currentPage          页码
     * @param int   $limit                分页条数
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * -----------------------|-------|--------------
     * items                  |array  |
     * items["spvId"]         |int    | 字典参数值的主键id
     * items["paramId"]       |int    | 参数编码主键id
     * items["paramValue"]    |string | 参数值
     * items["paramDesc"]     |string | 参数值描述
     * items["status"]        |int    | 参数状态：(0 无效 1 有效)
     * items["remark"]        |string | 字典值描述的解释
     * items["createdTime"]   |int    | 创建时间
     * page                   |array  |
     * page[first]            |int    | 第一页
     * page[before]           |int    | 上一页
     * page[current]          |int    | 当前页
     * page[last]             |int    | 最后一页
     * page[next]             |int    | 下一页
     * page[total_pages]      |int    | 总页数
     * page[total_items]      |int    | 总数
     * page[limit]            |int    | 每页显示的数量
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array 返回分页结果
     * @requestExample(["condition": [{"paramId": 1,"status":1}],"limit": "10","currentPage": "1"])
     * @returnExample(["items": [{"spvId":1,"paramId":1, "paramValue":"测试编码","paramDesc":"这个编码是测试数据","status":1,"remark":"测试数据",
     *     "createdTime":1503560249}],"page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"total_pages": 1,"total_items": 1,"limit": 10}])
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-25
     */
    public function listParamValuePage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('system/paramvalue', 'listParamValuePage', $condition, $currentPage, $limit);
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
