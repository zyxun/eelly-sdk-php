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

namespace Eelly\SDK\Contact\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Contact\Service\TagInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Tag
{
    /**
     * 获取标签信息.
     *
     * @param UidDTO|null $user 用户登录信息
     *
     * @return array
     * @requestExample()
     * @returnExample({"ctId": 2,"userId": 148086,"name": "1"})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月12日
     */
    public function getTag(UidDTO $user = null): array
    {
        return EellyClient::request('contact/tag', __FUNCTION__, true, $user);
    }

    /**
     * 获取标签信息.
     *
     * @param UidDTO|null $user 用户登录信息
     *
     * @return array
     * @requestExample()
     * @returnExample({"ctId": 2,"userId": 148086,"name": "1"})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月12日
     */
    public function getTagAsync(UidDTO $user = null)
    {
        return EellyClient::request('contact/tag', __FUNCTION__, false, $user);
    }

    /**
     * 新增标签(APP专用).
     *
     * @param array       $data 标签数据
     * @param int         $data ['ctId'] 标签数据
     * @param int         $data ['userId'] 用户数据
     * @param string      $data ['name'] 标签名称
     * @param array       $data ['contactIds'] 联系人ID数组
     * @param UidDTO|null $user 用户登录信息
     *
     * @return bool
     * @requestExample({"data":{"ctId":1,"userId":148086,"name":"eelly","contactIds":{1,2,3,4}}})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月09日
     */
    public function addTag(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('contact/tag', __FUNCTION__, true, $data, $user);
    }

    /**
     * 新增标签(APP专用).
     *
     * @param array       $data 标签数据
     * @param int         $data ['ctId'] 标签数据
     * @param int         $data ['userId'] 用户数据
     * @param string      $data ['name'] 标签名称
     * @param array       $data ['contactIds'] 联系人ID数组
     * @param UidDTO|null $user 用户登录信息
     *
     * @return bool
     * @requestExample({"data":{"ctId":1,"userId":148086,"name":"eelly","contactIds":{1,2,3,4}}})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月09日
     */
    public function addTagAsync(array $data, UidDTO $user = null)
    {
        return EellyClient::request('contact/tag', __FUNCTION__, false, $data, $user);
    }

    /**
     * 删除标签.
     *
     * @param int         $ctId 标签ID
     * @param UidDTO|null $user 用户登录信息
     *
     * @throws \Eelly\SDK\Contact\Exception\ContactException
     *
     * @return bool
     * @requestExample({'ctId':1})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月09日
     * @Validation(
     * @OperatorValidator(0,{message : "标签ID",operator:["gt",0]})
     * )
     */
    public function deleteTag(int $ctId, UidDTO $user = null): bool
    {
        return EellyClient::request('contact/tag', __FUNCTION__, true, $ctId, $user);
    }

    /**
     * 删除标签.
     *
     * @param int         $ctId 标签ID
     * @param UidDTO|null $user 用户登录信息
     *
     * @throws \Eelly\SDK\Contact\Exception\ContactException
     *
     * @return bool
     * @requestExample({'ctId':1})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月09日
     * @Validation(
     * @OperatorValidator(0,{message : "标签ID",operator:["gt",0]})
     * )
     */
    public function deleteTagAsync(int $ctId, UidDTO $user = null)
    {
        return EellyClient::request('contact/tag', __FUNCTION__, false, $ctId, $user);
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