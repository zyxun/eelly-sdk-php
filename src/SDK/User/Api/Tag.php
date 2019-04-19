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

namespace Eelly\SDK\User\Api;

use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\User\DTO\TagDTO;
use Eelly\SDK\User\Service\TagInterface;

/**
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Tag
{
    /**
     * 获取用户标签.
     *
     * @param int $utId 用户标签ID
     *                  ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------|-------|--------------
     * utId        |int    |
     * userId      |int    |
     * type        |int    |
     * itemId      |int    |
     * createdTime |int    |
     * updateTime  |string |
     *
     * @return TagDTO
     * @requestExample({"utId":1})
     * @returnExample({"utId":1,"userId":148086,"type":1,"itemId":1,"createdTime":1506584839,"updateTime":"2017-09-29 10:04:33"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/29
     */
    public function getTag(int $utId): TagDTO
    {
        return EellyClient::request('user/tag', __FUNCTION__, true, $utId);
    }

    /**
     * 获取用户标签.
     *
     * @param int $utId 用户标签ID
     *                  ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------|-------|--------------
     * utId        |int    |
     * userId      |int    |
     * type        |int    |
     * itemId      |int    |
     * createdTime |int    |
     * updateTime  |string |
     *
     * @return TagDTO
     * @requestExample({"utId":1})
     * @returnExample({"utId":1,"userId":148086,"type":1,"itemId":1,"createdTime":1506584839,"updateTime":"2017-09-29 10:04:33"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/29
     */
    public function getTagAsync(int $utId)
    {
        return EellyClient::request('user/tag', __FUNCTION__, false, $utId);
    }

    /**
     * 添加用户标识.
     *
     * @param array $data
     * @param int   $data["userId"] 用户ID
     * @param int   $data["type"]   标签类型
     * @param int   $data["itemId"] 关联ID
     *
     * @return bool
     * @requestExample({"data":{"userId":148086,"type":1,"itemId":1}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/29
     */
    public function addTag(array $data): bool
    {
        return EellyClient::request('user/tag', __FUNCTION__, true, $data);
    }

    /**
     * 添加用户标识.
     *
     * @param array $data
     * @param int   $data["userId"] 用户ID
     * @param int   $data["type"]   标签类型
     * @param int   $data["itemId"] 关联ID
     *
     * @return bool
     * @requestExample({"data":{"userId":148086,"type":1,"itemId":1}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/29
     */
    public function addTagAsync(array $data)
    {
        return EellyClient::request('user/tag', __FUNCTION__, false, $data);
    }

    /**
     * 更新用户标识.
     *
     * @param int   $utId           用户标签ID
     * @param array $data
     * @param int   $data["userId"] 用户ID
     * @param int   $data["type"]   标签类型
     * @param int   $data["itemId"] 关联ID
     *
     * @throws TagException
     *
     * @return bool
     * @requestExample({"utId":1,"data":{"userId":148086,"type":1,"itemId":1}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/29
     */
    public function updateTag(int $utId, array $data): bool
    {
        return EellyClient::request('user/tag', __FUNCTION__, true, $utId, $data);
    }

    /**
     * 更新用户标识.
     *
     * @param int   $utId           用户标签ID
     * @param array $data
     * @param int   $data["userId"] 用户ID
     * @param int   $data["type"]   标签类型
     * @param int   $data["itemId"] 关联ID
     *
     * @throws TagException
     *
     * @return bool
     * @requestExample({"utId":1,"data":{"userId":148086,"type":1,"itemId":1}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/29
     */
    public function updateTagAsync(int $utId, array $data)
    {
        return EellyClient::request('user/tag', __FUNCTION__, false, $utId, $data);
    }

    /**
     * 删除用户标签.
     *
     * @param int $utId 用户标签ID
     *
     * @throws TagException
     *
     * @return bool
     * @requestExample({"utId":1})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/29
     */
    public function deleteTag(int $utId): bool
    {
        return EellyClient::request('user/tag', __FUNCTION__, true, $utId);
    }

    /**
     * 删除用户标签.
     *
     * @param int $utId 用户标签ID
     *
     * @throws TagException
     *
     * @return bool
     * @requestExample({"utId":1})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/29
     */
    public function deleteTagAsync(int $utId)
    {
        return EellyClient::request('user/tag', __FUNCTION__, false, $utId);
    }

    /**
     * 用户标签列表.
     *
     * @param array $condition
     * @param int   $condition["type"]   标签类型
     * @param int   $condition["itemId"] 关联ID
     * @param int   $currentPage
     * @param int   $limit
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------|-------|--------------
     * utId        |int    |
     * userId      |int    |
     * type        |int    |
     * itemId      |int    |
     * createdTime |int    |
     * updateTime  |string |
     *
     * @throws TagException
     *
     * @return array
     * @requestExample({"condition":{"type":1, "itemId":1},"currentPage":1,"limit":10})
     * @returnExample([{"utId":1,"userId":148086,"type":1,"itemId":1,"createdTime":1506584839,"updateTime":"2017-09-29 10:04:33"}])
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/29
     */
    public function listTagPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('user/tag', __FUNCTION__, true, $condition, $currentPage, $limit);
    }

    /**
     * 用户标签列表.
     *
     * @param array $condition
     * @param int   $condition["type"]   标签类型
     * @param int   $condition["itemId"] 关联ID
     * @param int   $currentPage
     * @param int   $limit
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------|-------|--------------
     * utId        |int    |
     * userId      |int    |
     * type        |int    |
     * itemId      |int    |
     * createdTime |int    |
     * updateTime  |string |
     *
     * @throws TagException
     *
     * @return array
     * @requestExample({"condition":{"type":1, "itemId":1},"currentPage":1,"limit":10})
     * @returnExample([{"utId":1,"userId":148086,"type":1,"itemId":1,"createdTime":1506584839,"updateTime":"2017-09-29 10:04:33"}])
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/29
     */
    public function listTagPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('user/tag', __FUNCTION__, false, $condition, $currentPage, $limit);
    }

    /**
     * 获取进货设置基础.
     *
     * @requestExample()
     * @returnExample({
     *     "type":{"valueId": 1,"value": "二批/三批商"},
     *     "cate":{"cateId": 348,"catName": "特色服装"},
     *     "price":{"valueId": 5,"value": "低档"},
     *     "district":{"districtId": 0,"districtName": "全部商圈"}
     *  })
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年11月08日
     */
    public function getTagPreference(): array
    {
        return EellyClient::request('user/tag', __FUNCTION__, true);
    }

    /**
     * 获取进货设置基础.
     *
     * @requestExample()
     * @returnExample({
     *     "type":{"valueId": 1,"value": "二批/三批商"},
     *     "cate":{"cateId": 348,"catName": "特色服装"},
     *     "price":{"valueId": 5,"value": "低档"},
     *     "district":{"districtId": 0,"districtName": "全部商圈"}
     *  })
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年11月08日
     */
    public function getTagPreferenceAsync()
    {
        return EellyClient::request('user/tag', __FUNCTION__, false);
    }

    /**
     * 获取用户选择的偏好.
     *
     * @param UidDTO|null $user 登录用户
     *
     * @return array
     * @requestExample()
     * @returnExample({
     *     "typeIds":{1,2,3},
     *     "cateIds": {2,3},
     *     "levelIds": {3,5,6},
     *     "recIds": {8,3,4}
     *     })
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年11月08日
     */
    public function getUserTagPreferenceSetting(UidDTO $user = null): array
    {
        return EellyClient::request('user/tag', __FUNCTION__, true, $user);
    }

    /**
     * 获取用户选择的偏好.
     *
     * @param UidDTO|null $user 登录用户
     *
     * @return array
     * @requestExample()
     * @returnExample({
     *     "typeIds":{1,2,3},
     *     "cateIds": {2,3},
     *     "levelIds": {3,5,6},
     *     "recIds": {8,3,4}
     *     })
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年11月08日
     */
    public function getUserTagPreferenceSettingAsync(UidDTO $user = null)
    {
        return EellyClient::request('user/tag', __FUNCTION__, false, $user);
    }

    /**
     * 添加偏好设置的标签.
     *
     * @param array       $data             标签数据
     * @param array       $data['typeIds']  身份标签
     * @param array       $data['cateIds']  主营类目
     * @param array       $data['levelIds'] 价格档次
     * @param array       $data['recIds']   货源市场
     * @param UidDTO|null $user             登录数据
     *
     * @return bool
     * @requestExample({"data":{"typeIds":{1,3,4}},"cateIds":{3,4,5},"levelIds":{9,4,5},"recIds":{9,7,4}})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年11月09日
     */
    public function addTagPreference(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('user/tag', __FUNCTION__, true, $data, $user);
    }

    /**
     * 添加偏好设置的标签.
     *
     * @param array       $data             标签数据
     * @param array       $data['typeIds']  身份标签
     * @param array       $data['cateIds']  主营类目
     * @param array       $data['levelIds'] 价格档次
     * @param array       $data['recIds']   货源市场
     * @param UidDTO|null $user             登录数据
     *
     * @return bool
     * @requestExample({"data":{"typeIds":{1,3,4}},"cateIds":{3,4,5},"levelIds":{9,4,5},"recIds":{9,7,4}})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年11月09日
     */
    public function addTagPreferenceAsync(array $data, UidDTO $user = null)
    {
        return EellyClient::request('user/tag', __FUNCTION__, false, $data, $user);
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
