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
use Eelly\SDK\System\Service\ArticleImageInterface;
use Eelly\SDK\System\DTO\ArticleImageDTO;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class ArticleImage implements ArticleImageInterface
{
    /**
     * 获取指定id文章图片.
     *
     * @param int $saiId 文章图片主键id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return ArticleImageDTO
     * @requestExample({"saiId":1})
     * @returnExample({"saiId":1,"articleId":1,"fromImage":"来源图片地址","toImage":"下载到本地图片地址","createdTime":1504321656})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-26
     */
    public function getImage(int $saiId): ArticleImageDTO
    {
        return EellyClient::request('system/articleImage', __FUNCTION__, true, $saiId);
    }

    /**
     * 获取指定id文章图片.
     *
     * @param int $saiId 文章图片主键id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return ArticleImageDTO
     * @requestExample({"saiId":1})
     * @returnExample({"saiId":1,"articleId":1,"fromImage":"来源图片地址","toImage":"下载到本地图片地址","createdTime":1504321656})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-26
     */
    public function getImageAsync(int $saiId)
    {
        return EellyClient::request('system/articleImage', __FUNCTION__, false, $saiId);
    }

    /**
     * 新增文章图片.
     *
     * @param array  $data              新增数据
     * @param int    $data['articleId'] 文章ID
     * @param string $data['fromImage'] 来源图片地址
     * @param UidDTO $user              登录用户对象
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool 新增结果
     * @requestExample({"data":{"articleId":1,"fromImage":"来源图片地址"}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-26
     */
    public function addImage(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('system/articleImage', __FUNCTION__, true, $data, $user);
    }

    /**
     * 新增文章图片.
     *
     * @param array  $data              新增数据
     * @param int    $data['articleId'] 文章ID
     * @param string $data['fromImage'] 来源图片地址
     * @param UidDTO $user              登录用户对象
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool 新增结果
     * @requestExample({"data":{"articleId":1,"fromImage":"来源图片地址"}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-26
     */
    public function addImageAsync(array $data, UidDTO $user = null)
    {
        return EellyClient::request('system/articleImage', __FUNCTION__, false, $data, $user);
    }

    /**
     * 修改文章图片.
     *
     * @param int    $saiId             文章图片主键id
     * @param array  $data              新增数据
     * @param int    $data['articleId'] 文章ID
     * @param string $data['fromImage'] 来源图片地址
     * @param UidDTO $user              登录用户对象
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool 修改结果
     * @requestExample({"saiId":1,"data":{"articleId":1,"fromImage":"来源图片地址"}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-26
     */
    public function updateImage(int $saiId, array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('system/articleImage', __FUNCTION__, true, $saiId, $data, $user);
    }

    /**
     * 修改文章图片.
     *
     * @param int    $saiId             文章图片主键id
     * @param array  $data              新增数据
     * @param int    $data['articleId'] 文章ID
     * @param string $data['fromImage'] 来源图片地址
     * @param UidDTO $user              登录用户对象
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool 修改结果
     * @requestExample({"saiId":1,"data":{"articleId":1,"fromImage":"来源图片地址"}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-26
     */
    public function updateImageAsync(int $saiId, array $data, UidDTO $user = null)
    {
        return EellyClient::request('system/articleImage', __FUNCTION__, false, $saiId, $data, $user);
    }

    /**
     * 删除文章图片.
     *
     * @param int    $saiId     文章图片主键id
     * @param int    $articleId 文章ID
     * @param UidDTO $user      登录用户对象
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"saiId":1,"articleId":1})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-26
     */
    public function deleteImage(int $saiId = null, int $articleId = null, UidDTO $user = null): bool
    {
        return EellyClient::request('system/articleImage', __FUNCTION__, true, $saiId, $articleId, $user);
    }

    /**
     * 删除文章图片.
     *
     * @param int    $saiId     文章图片主键id
     * @param int    $articleId 文章ID
     * @param UidDTO $user      登录用户对象
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"saiId":1,"articleId":1})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-26
     */
    public function deleteImageAsync(int $saiId = null, int $articleId = null, UidDTO $user = null)
    {
        return EellyClient::request('system/articleImage', __FUNCTION__, false, $saiId, $articleId, $user);
    }

    /**
     * 获取文章图片列表.
     *
     * @param int $saiId     文章图片主键id
     * @param int $articleId 文章ID
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array 文章图片列表
     * @requestExample({"saiId":1,"articleId":1})
     * @returnExample({"item":[{"saiId":"1","articleId":"2","fromImage":"2.jpg","toImage":"http:\/\/xxx.aliyuncs.com\/2.jpg","createdTime":"1506328627"},{"saiId":"2","articleId":"2","fromImage":"fsfsdf321.jpg","toImage":"http:\/\/xxx.aliyuncs.com\/fsfsdf321.jpg","createdTime":"1506328627"}]})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-26
     */
    public function listImage(int $saiId = null, int $articleId = null): array
    {
        return EellyClient::request('system/articleImage', __FUNCTION__, true, $saiId, $articleId);
    }

    /**
     * 获取文章图片列表.
     *
     * @param int $saiId     文章图片主键id
     * @param int $articleId 文章ID
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array 文章图片列表
     * @requestExample({"saiId":1,"articleId":1})
     * @returnExample({"item":[{"saiId":"1","articleId":"2","fromImage":"2.jpg","toImage":"http:\/\/xxx.aliyuncs.com\/2.jpg","createdTime":"1506328627"},{"saiId":"2","articleId":"2","fromImage":"fsfsdf321.jpg","toImage":"http:\/\/xxx.aliyuncs.com\/fsfsdf321.jpg","createdTime":"1506328627"}]})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-26
     */
    public function listImageAsync(int $saiId = null, int $articleId = null)
    {
        return EellyClient::request('system/articleImage', __FUNCTION__, false, $saiId, $articleId);
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