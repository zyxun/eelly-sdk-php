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

namespace Eelly\SDK\EellyOldCode\Service;

use Eelly\DTO\UidDTO;

interface GoodsListInterface
{
    /**
     * 获取卖家的商品列表.
     *
     * > 排序字段说明
     *
     * 字段 | 说明
     * ---- | ------
     * `goods_id`       | 商品id(等于商品发布时间)
     * `price`          | 价格
     *  `last_show_time`  | 上次上架时间
     * `wait_show_time`   |  距待上架时间
     * `sales`       |    商品销量(有水)
     * `stock`       |   库存
     * `sale_total`  |    真实商品销售数量
     * `pv`          |    商品pv
     *
     *
     * @param int    $cateId   分类id
     * @param int    $publishType 发布类型 0:全部 1:完整版上款商品 2:快速上款商品
     * @param string $keywords 搜索关键词
     * @param string $orderBy  排序方式('goods_id desc'或'goods_id asc')字段参考`排序字段说明`
     * @param int    $page     第几页
     * @param int    $limit    分页大小
     *
     * @param UidDTO $uidDTO   uid dto
     *
     * @return array
     */
    public function sellerPageForChat(int $cateId = 0, int $publishType = 0, string $keywords = null, string $orderBy = 'goods_id desc', int $page = 1, int $limit = 100, UidDTO $uidDTO = null): array;
}
