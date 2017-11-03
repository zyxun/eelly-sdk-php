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

namespace Eelly\SDK\Goods\Service;

use Eelly\DTO\UidDTO;

/**
 * 商品图片.
 *
 * @author wangjiang<wangjiang@eelly.net>
 */
interface ImageInterface
{
    /**
     * 新增商品图片
     * 新增商品图片信息.
     *
     * @param int               $goodsId                    商品id
     * @param array             $imageData                  图片数据
     * @param string            $imageData["0"]["imageUrl"] 图片url
     * @param int               $imageData["0"]["sort"]     排序
     * @param \Eelly\DTO\UidDTO $user                       登录用户信息
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "goodsId":1,
     *     "imageData":[
     *         {
     *             "imageUrl":"http://image.eelly.dev/aaa.jpg",
     *             "sort":2
     *         }
     *     ]
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月12日
     */
    public function addImage(int $goodsId, array $imageData, UidDTO $user = null): bool;

    /**
     * 修改商品图片
     * 修改商品图片信息.
     *
     * @param int               $goodsId               商品id
     * @param array             $imageData             图片数据
     * @param int               $imageData["imageId"]  图片id
     * @param string            $imageData["imageUrl"] 图片url
     * @param int               $imageData["sort"]     图片排序
     * @param \Eelly\DTO\UidDTO $user                  登录用户信息
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 修改结果
     * @requestExample({
     *     "goodsId":1,
     *     "imageData":{
     *         "imageId":1,
     *         "imageUrl":"http://image.eelly.dev/aaa.jpg",
     *         "sort":2
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月12日
     */
    public function updateImage(int $goodsId, array $imageData, UidDTO $user = null): bool;

    /**
     * 删除商品图片
     * 删除商品图片信息.
     *
     * @param int               $goodsId 商品id
     * @param int               $imageId 图片id
     * @param \Eelly\DTO\UidDTO $user    登录用户信息
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return bool 删除结果
     * @requestExample({
     *     "goodsId":1,
     *     "imageId":2
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月12日
     */
    public function deleteImage(int $goodsId, int $imageId, UidDTO $user = null): bool;

    /**
     * 获取商品图片信息
     * 获取商品图片信息.
     *
     * @param int $goodsId 商品id
     * @param int $type    图片类型 -1 全部 1封面图 2普通图
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     *
     * @return array 图片信息
     * @requestExample({
     *     "goodsId":1,
     *     "imageId":2
     * })
     * @returnExample([
     *     {
     *         "goodsName":"商品名称",
     *         "imageId":1,
     *         "imageUrl":"http://image.eelly.dev/aaa.jpg",
     *         "sort":1,
     *         "createdTime":"1970-01-01 01:01:01"
     *     }
     * ])
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月12日
     */
    public function getImage(int $goodsId, int $type = -1): array;
}
