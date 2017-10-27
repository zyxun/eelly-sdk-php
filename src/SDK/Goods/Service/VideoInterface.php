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
 * 商品视频.
 *
 * @author wangjiang<wangjiang@eelly.net>
 */
interface VideoInterface
{
    /**
     * 新增商品视频
     * 新增商品视频信息
     *
     * @param int $goodsId 商品id
     * @param array $videoData 视频数据
     * @param string $videoData["0"]["videoUrl"] 视频url
     * @param int $videoData["0"]["videoTime"] 视频时长
     * @param string $videoData["0"]["imageUrl"] 视频封面图片url
     * @param int $videoData["0"]["sort"] 排序
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 新增结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "goodsId":1,
     *     "videoData":[
     *         {
     *             "videoUrl":"http://video.eelly.dev/abc.mp4",
     *             "videoTime":120,
     *             "imageUrl":"http://image.eelly.dev/aaa.jpg",
     *             "sort":1
     *         }
     *     ]
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年10月13日
     */
    public function addVideo(int $goodsId, array $videoData, UidDTO $user = null): bool;

    /**
     * 修改商品视频
     * 修改商品视频信息
     *
     * @param int $goodsId 商品id
     * @param array $videoData 视频数据
     * @param int $videoData["videoId"] 视频id
     * @param string $videoData["videoUrl"] 视频url
     * @param int $videoData["videoTime"] 视频时长
     * @param string $videoData["imageUrl"] 视频封面图片url
     * @param int $videoData["sort"] 排序
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 修改结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "goodsId":1,
     *     "videoData":{
     *         "videoId":1,
     *         "videoUrl":"http://video.eelly.dev/abc.mp4",
     *         "videoTime":120,
     *         "imageUrl":"http://image.eelly.dev/aaa.jpg",
     *         "sort":1
     *      }
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年10月13日
     */
    public function updateVideo(int $goodsId, array $videoData, UidDTO $user = null): bool;

    /**
     * 删除商品视频
     * 删除商品视频信息
     *
     * @param int $goodsId 商品id
     * @param int $videoId 视频id
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 删除结果
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "goodsId":1,
     *     "videoId":2
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年10月13日
     */
    public function deleteVideo(int $goodsId, int $videoId, UidDTO $user = null): bool;

    /**
     * 获取商品视频
     * 获取商品视频信息
     *
     * @param int $goodsId 商品id
     * @return array 商品视频信息
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * @requestExample({
     *     "goodsId":1
     * })
     * @returnExample([
     *     {
     *         "goodsName":"商品名称",
     *         "videoId":1,
     *         "videoUrl":"http://video.eelly.dev/abc.mp4",
     *         "videoTime":120,
     *         "imageUrl":"http://image.eelly.dev/aaa.jpg",
     *         "sort":123,
     *         "createdTime":"1970-01-01 01:01:01"
     *     }
     * ])
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年10月13日
     */
    public function getVideo(int $goodsId): array;
}
