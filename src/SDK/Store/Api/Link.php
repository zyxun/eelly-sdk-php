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

namespace Eelly\SDK\Store\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Store\Service\LinkInterface;
use Eelly\DTO\UidDTO;
use Eelly\SDK\Store\DTO\LinkDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Link implements LinkInterface
{
    /**
     * 新增友链.
     *
     * @param array  $linkData            友链数据
     * @param int    $linkData['storeId'] 店铺id
     * @param string $linkData['title']   友链名称
     * @param string $linkData['url']     友链地址
     * @param string $linkData['logo']    友链logo
     * @param int    $linkData['sort']    友链排序
     * @param UidDTO $user                登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreLinkException
     *
     * @return bool 新增结果
     * @requestExample({"store_id":"1","title":"友链标题","url":"友链地址","logo":"友链图标","status":"1","sort":"0"})
     * @returnExample(true)
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-08-29
     */
    public function addLink(array $linkData, UidDTO $user = null): bool
    {
        return EellyClient::request('store/link', __FUNCTION__, true, $linkData, $user);
    }

    /**
     * 新增友链.
     *
     * @param array  $linkData            友链数据
     * @param int    $linkData['storeId'] 店铺id
     * @param string $linkData['title']   友链名称
     * @param string $linkData['url']     友链地址
     * @param string $linkData['logo']    友链logo
     * @param int    $linkData['sort']    友链排序
     * @param UidDTO $user                登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreLinkException
     *
     * @return bool 新增结果
     * @requestExample({"store_id":"1","title":"友链标题","url":"友链地址","logo":"友链图标","status":"1","sort":"0"})
     * @returnExample(true)
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-08-29
     */
    public function addLinkAsync(array $linkData, UidDTO $user = null)
    {
        return EellyClient::request('store/link', __FUNCTION__, false, $linkData, $user);
    }

    /**
     * 获取单条友链.
     *
     * @param int    $linkId 友链id
     * @param UidDTO $user   登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreLinkException
     *
     * @return LinkDTO
     * @requestExample(1)
     * @returnExample({"store_id":"1","title":"友链标题","url":"友链地址","logo":"友链图标","status":"1","sort":"0"})
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-08-29
     * @Validation(
     *   @OperatorValidator(0,{message:"非法的id",operator:["gt",0]})
     * )
     */
    public function getLink(int $linkId, UidDTO $user = null): LinkDTO
    {
        return EellyClient::request('store/link', __FUNCTION__, true, $linkId, $user);
    }

    /**
     * 获取单条友链.
     *
     * @param int    $linkId 友链id
     * @param UidDTO $user   登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreLinkException
     *
     * @return LinkDTO
     * @requestExample(1)
     * @returnExample({"store_id":"1","title":"友链标题","url":"友链地址","logo":"友链图标","status":"1","sort":"0"})
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-08-29
     * @Validation(
     *   @OperatorValidator(0,{message:"非法的id",operator:["gt",0]})
     * )
     */
    public function getLinkAsync(int $linkId, UidDTO $user = null)
    {
        return EellyClient::request('store/link', __FUNCTION__, false, $linkId, $user);
    }

    /**
     * 删除单条友链.
     *
     * @param int    $linkId 友链id
     * @param UidDTO $user   登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreLinkException
     *
     * @return bool 删除结果
     * @requestExample(1)
     * @returnExample(true)
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-08-29
     * @Validation(
     *   @OperatorValidator(0,{message:"非法的id",operator:["gt",0]})
     * )
     */
    public function deleteLink(int $linkId, UidDTO $user = null): bool
    {
        return EellyClient::request('store/link', __FUNCTION__, true, $linkId, $user);
    }

    /**
     * 删除单条友链.
     *
     * @param int    $linkId 友链id
     * @param UidDTO $user   登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreLinkException
     *
     * @return bool 删除结果
     * @requestExample(1)
     * @returnExample(true)
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-08-29
     * @Validation(
     *   @OperatorValidator(0,{message:"非法的id",operator:["gt",0]})
     * )
     */
    public function deleteLinkAsync(int $linkId, UidDTO $user = null)
    {
        return EellyClient::request('store/link', __FUNCTION__, false, $linkId, $user);
    }

    /**
     * 更新友链.
     *
     * @param int    $linkId              友链id
     * @param array  $linkData            友链数据
     * @param int    $linkData['storeId'] 店铺id
     * @param string $linkData['title']   友链名称
     * @param string $linkData['url']     友链地址
     * @param string $linkData['logo']    友链logo
     * @param int    $linkData['sort']    友链排序
     * @param UidDTO $user                登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreLinkException
     *
     * @return bool 更新结果
     * @requestExample({"store_id":"1","title":"友链标题","url":"友链地址","logo":"友链图标","status":"1","sort":"0"})
     * @returnExample(true)
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-08-29
     * @Validation(
     *   @OperatorValidator(0,{message:"非法的id",operator:["gt",0]})
     * )
     */
    public function updateLink(int $linkId, array $linkData, UidDTO $user = null): bool
    {
        return EellyClient::request('store/link', __FUNCTION__, true, $linkId, $linkData, $user);
    }

    /**
     * 更新友链.
     *
     * @param int    $linkId              友链id
     * @param array  $linkData            友链数据
     * @param int    $linkData['storeId'] 店铺id
     * @param string $linkData['title']   友链名称
     * @param string $linkData['url']     友链地址
     * @param string $linkData['logo']    友链logo
     * @param int    $linkData['sort']    友链排序
     * @param UidDTO $user                登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreLinkException
     *
     * @return bool 更新结果
     * @requestExample({"store_id":"1","title":"友链标题","url":"友链地址","logo":"友链图标","status":"1","sort":"0"})
     * @returnExample(true)
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-08-29
     * @Validation(
     *   @OperatorValidator(0,{message:"非法的id",operator:["gt",0]})
     * )
     */
    public function updateLinkAsync(int $linkId, array $linkData, UidDTO $user = null)
    {
        return EellyClient::request('store/link', __FUNCTION__, false, $linkId, $linkData, $user);
    }

    /**
     * 获取友链分页列表.
     *
     * @param int    $storeId     店铺id
     * @param int    $status      友链状态
     * @param int    $currentPage 页码
     * @param int    $limit       分页条数
     * @param UidDTO $user        登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreLinkException
     *
     * @return array 分页结果
     * @requestExample([1,1,1,10])
     * @returnExample({"data": {"items": [{"title": "友链标题","url": "友链地址","logo": "友链图标","sort": "0","status": "1","sliId": "2","storeId": "1","createdTime": "1504172537","updateTime": "2017-08-31 09:42:17"}],"page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"limit": 10,"totalPages": 1,"totalItems": 1}},"returnType": "array"})
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-08-29
     * @Validation(
     *   @OperatorValidator(0,{message:"非法的店铺id",operator:["gt",0]}),
     *   @InclusionIn(1,{message : "非法的状态码",domain:[0, 1]}),
     *   @OperatorValidator(1,{message:"非法的状态码",operator:["gt",0]}),
     *   @OperatorValidator(2,{message:"非法的页码",operator:["gt",0]}),
     *   @OperatorValidator(3,{message:"非法的条数",operator:["gt",0]})
     * )
     */
    public function listLinkPage(int $storeId, int $status, int $currentPage = 1, int $limit = 10, UidDTO $user = null): array
    {
        return EellyClient::request('store/link', __FUNCTION__, true, $storeId, $status, $currentPage, $limit, $user);
    }

    /**
     * 获取友链分页列表.
     *
     * @param int    $storeId     店铺id
     * @param int    $status      友链状态
     * @param int    $currentPage 页码
     * @param int    $limit       分页条数
     * @param UidDTO $user        登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreLinkException
     *
     * @return array 分页结果
     * @requestExample([1,1,1,10])
     * @returnExample({"data": {"items": [{"title": "友链标题","url": "友链地址","logo": "友链图标","sort": "0","status": "1","sliId": "2","storeId": "1","createdTime": "1504172537","updateTime": "2017-08-31 09:42:17"}],"page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"limit": 10,"totalPages": 1,"totalItems": 1}},"returnType": "array"})
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-08-29
     * @Validation(
     *   @OperatorValidator(0,{message:"非法的店铺id",operator:["gt",0]}),
     *   @InclusionIn(1,{message : "非法的状态码",domain:[0, 1]}),
     *   @OperatorValidator(1,{message:"非法的状态码",operator:["gt",0]}),
     *   @OperatorValidator(2,{message:"非法的页码",operator:["gt",0]}),
     *   @OperatorValidator(3,{message:"非法的条数",operator:["gt",0]})
     * )
     */
    public function listLinkPageAsync(int $storeId, int $status, int $currentPage = 1, int $limit = 10, UidDTO $user = null)
    {
        return EellyClient::request('store/link', __FUNCTION__, false, $storeId, $status, $currentPage, $limit, $user);
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