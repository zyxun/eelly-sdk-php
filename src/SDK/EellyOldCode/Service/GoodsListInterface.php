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

interface GoodsListInterface
{
    /**
     * 获取卖家的商品列表.
     *
     * @param int    $cateId   分类id
     * @param string $keywords 搜索关键词
     * @param int    $page     第几页
     * @param int    $limit    分页大小
     *
     * @return array
     */
    public function sellerPageForChat(int $cateId, string $keywords, int $page = 1, int $limit = 100): array;
}
