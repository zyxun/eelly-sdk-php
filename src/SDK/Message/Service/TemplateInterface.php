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

namespace Eelly\SDK\Message\Service;

use Eelly\DTO\UserDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface TemplateInterface
{
    /**
     * 添加信息模板.
     *
     * @param int    $type    消息模板类型：1 站内消息 2 邮件 4 手机短信
     * @param string $name    消息模板名称
     * @param string $content 消息模板内容
     *
     * @return int 返回消息id
     * @requestExample([1,"模板名称","模板内容"])
     * @returnExample(1)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-28
     */
    public function addTemplate(int $type, string $name, string $content): int;

    /**
     * 编辑指定id消息模板.
     *
     * @param int    $mtId    消息模板id
     * @param int    $type    消息模板类型：1 站内消息 2 邮件 4 手机短信
     * @param string $name    消息模板名称
     * @param string $content 消息模板内容
     * @param int    $status  状态：0 未启用 1 启用
     *
     * @throws \Eelly\SDK\Message\Exception\CartException
     *
     * @return bool
     * @requestExample([1,1,"模板名称","模板内容"])
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-28
     */
    public function updateTemplate(int $mtId, int $type, string $name, string $content, int $status): bool;

    /**
     * 信息模板分页列表.
     *
     * @param array|null $where       查询条件
     * @param int        $limit       每页条数
     * @param int        $currentPage 当前页
     *
     * @return array
     * @requestExample(['',10,1])
     * @returnExample()
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-28
     */
    public function listTemplatePage(array $where = null, int $limit = 10, int $currentPage = 1): array;

    /**
     * 更新指定消息模板id状态.
     *
     * @param int $mtId   消息模板id
     * @param int $status 状态：0 未启用 1 启用
     *
     * @return bool 返回bool类型
     * @requestExample([1,2])
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-28
     */
    public function updateTemplateStatus(int $mtId, int $status): bool;

    /**
     * 批量更新状态.
     *
     * @param array $mtId   消息模板id数组
     * @param int   $status 状态：0 未启用 1 启用
     *
     * @return bool 返回bool类型
     * @requestExample([[1,2],2])
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-28
     */
    public function updateTemplateStatusBatch(array $mtId, int $status): bool;

    /**
     * 根据模板id获取.
     *
     * @param int   $mtId    消息模板id
     * @param array $content 消息内容,$content的key值必须要该模板{{key}}相同
     *
     * @throws \Eelly\Exception\LogicException
     *
     * @return UserDTO
     * @requestExample([1,{'dddd','sss','ddddu'}])
     * @returnExample({"mt_id":"1","type":"1","name":"\u6d4b\u8bd5\u6a21\u677f\u6d88\u606f","content":"\u4f60\u597ddddd\uff0c\u6d4b\u8bd5sss\uff0c\u6b63\u786e\u4e48ddddu","status":"1","created_time":"0","update_time":"2017-08-02 11:35:55"})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-2
     */
    public function getTemplate(int $mtId, array $content): UserDTO;
}
