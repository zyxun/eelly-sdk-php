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
     * > 返回字段说明
     *
     * key | type | 说明
     * --- | --- | ---
     * gcategoryList             | list    | 店铺分类列表
     * gcategoryList[].cateId    | int     | 分类id
     * gcategoryList[].cateName  | string  | 分类名
     * page                      | map     | 分页数据
     * page.totalItems           | int     | 总量
     * page.totalPages           | int     | 总页数
     * page.items[].goodsId      | int     | 商品id
     * page.items[].goodsName    | int     | 商品名
     * page.items[].defaultImage | int     | 商品图片
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
	 * @requestExample({"cateId":0,"publishType":2})
	 * 
	 * @returnExample(
     * {
     * "page": {
     *   "items": [
     *   {
     *     "goodsId": "5579064",
     *     "goodsName": "测试上款",
     *     "price": "0.01",
     *     "recommended": "1",
     *     "upperPrice": "0.01",
     *     "cateName": "外套",
     *     "styleName": "",
     *     "defaultImage": "https://eellytest.eelly.com/store148086/goods/20181025/9530670640451.jpg?t=1540460761",
     *     "goodsNumber": "10111",
     *     "unit": "1",
     *     "waitShowTime": "0",
     *     "ifMobile": "2",
     *     "closed": "0",
     *     "permission": "",
     *     "sales": "0",
     *     "pv": 0,
     *     "lastShowTime": "1540431961",
     *     "ifShow": "1",
     *     "specCount": "1",
     *     "colorCount": "1",
     *     "sizeCount": "1",
     *     "stock": "100000",
     *     "ifOptimize": "0",
     *     "allPrice": "1=>0.01",
     *     "addTime": "1540431961"
     *   },
     *   {
     *     "goodsId": "5579003",
     *     "goodsName": "【莫琼小店】 2018新款 外套  包邮",
     *     "price": "10.00",
     *     "recommended": "1",
     *     "upperPrice": "30.00",
     *     "cateName": "外套",
     *     "styleName": "",
     *     "defaultImage": "https://eellytest.eelly.com/store148086/goods/20180912/small_3789286576351.jpg?t=1536817684",
     *     "goodsNumber": "",
     *     "unit": "1",
     *     "waitShowTime": "0",
     *     "ifMobile": "2",
     *     "closed": "0",
     *     "permission": "",
     *     "sales": "0",
     *     "pv": 0,
     *     "lastShowTime": "1537398242",
     *     "ifShow": "1",
     *     "specCount": "3",
     *     "colorCount": "1",
     *     "sizeCount": "1",
     *     "stock": "30000",
     *     "ifOptimize": "0",
     *     "allPrice": "3=>10.00,2=>20.00,1=>30.00",
     *     "addTime": "1536788888"
     *   }
     *      ],
     *      "first": 1,
     *      "before": 1,
     *      "current": 1,
     *      "last": 869,
     *      "next": 2,
     *      "totalPages": 869,
     *      "totalItems": 1738,
     *      "limit": 2
     *    },
     *    "gcategoryList": [
     *      {
     *        "cateId": "254171",
     *        "storeId": "148086",
     *        "cateName": "女装",
     *        "parentId": "0",
     *        "sortOrder": "1",
     *        "isShow": "0",
     *        "isOpend": "0"
     *      },
     *      {
     *        "cateId": "255368",
     *        "storeId": "148086",
     *        "cateName": "连衣裙",
     *        "parentId": "254171",
     *        "sortOrder": "2",
     *        "isShow": "1",
     *        "isOpend": "0"
     *      }
     *    ]
     *  }
	 * )
	 *
     * @return array
     */
    public function sellerPageForChat(int $cateId = 0, int $publishType = 0, string $keywords = null, string $orderBy = 'goods_id desc', int $page = 1, int $limit = 100, UidDTO $uidDTO = null): array;
}
