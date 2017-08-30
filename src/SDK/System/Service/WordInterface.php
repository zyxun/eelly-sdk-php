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

use Eelly\SDK\System\DTO\WordDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface WordInterface
{
    /**
     * 获取敏感词.
     *
     * @param int $wordId 敏感词id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return WordDTO
     * @requestExample([1])
     * @returnExample({"word": "敏感词示例","fwId": "1","type": "1","adminId": "1","adminName": "admin","createdTime": "1503716527","updateTime": "2017-08-26 03:20:30"})
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since   2017-8-26
     */
    public function getWord(int $WordId): WordDTO;

    /**
     * 添加敏感词.
     *
     * @param array  $data         敏感词内容
     * @param string $data['word'] 敏感词名称
     * @param int    $data['type'] 敏感词类型／1 商品标题 2 店主咨询 4 商品评论 ……
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample([{"word":"敏感词示例","type":"1"}])
     * @returnExample(true)
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-8-26
     */
    public function addWord(array $data): bool;

    /**
     * 修改敏感词.
     *
     * @param int 敏感词id
     * @param array  $data         敏感词内容
     * @param string $data['word'] 敏感词名称
     * @param int    $data['type'] 敏感词类型／1 商品标题 2 店主咨询 4 商品评论 ……
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample([1,{"word": "敏感词示例","type": "1"}])
     * @returnExample(true)
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2016-08-26
     */
    public function updateWord(int $WordId, array $data): bool;

    /**
     * 删除敏感词.
     *
     * @param int 敏感词id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample([1])
     * @returnExample(true)
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-08-26
     */
    public function deleteWord(int $WordId): bool;

    /**
     * 分页获取敏感词.
     *
     * @param array  $condition         敏感词条件
     * @param string $condition['word'] 敏感词名称
     * @param int    $condition['type'] 敏感词类型／1 商品标题 2 店主咨询 4 商品评论 ……
     * @param int    $limit             分页条数
     * @param int    $currentPage       页码
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array 返回分页结果
     * @requestExample(["condition": [{"word": "敏感词示例","type": "1"}],"limit": "10","currentPage": "1"])
     * @returnExample(["items": [{"fw_id": "1", "type": "1","word": "敏感词示例","admin_id": "1","admin_name": "admin","created_time": "1503716527","update_time": "2017-08-26 03:52:15"}],"page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"total_pages": 1,"total_items": 1,"limit": 10}])
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-08-26
     */

    public function listWordPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}

