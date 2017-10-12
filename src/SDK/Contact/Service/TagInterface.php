<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Contact\Service;

use Eelly\DTO\UidDTO;
use Eelly\SDK\Contact\DTO\TagDTO;


/**
 * 联系人标签.
 *
 * @author  肖俊明<xiaojunming@eelly.net>
 * @since 2017年10月09日
 */
interface TagInterface
{
    /**
     * 获取标签信息.
     *
     * @param UidDTO|null $user  用户登录信息
     * @return array
     * @requestExample()
     * @returnExample({"ctId": 2,"userId": 148086,"name": "1"})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年10月12日
     */
    public function getTag(UidDTO $user = null): array;

    /**
     * 新增标签(APP专用).
     *
     * @param array $data 标签数据
     * @param int $data ['ctId'] 标签数据
     * @param int $data ['userId'] 用户数据
     * @param string $data ['name'] 标签名称
     * @param array $data ['contactIds'] 联系人ID数组
     * @param UidDTO|null $user 用户登录信息
     * @return bool
     * @requestExample({"data":{"ctId":1,"userId":148086,"name":"eelly","contactIds":{1,2,3,4}}})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年10月09日
     */
    public function addTag(array $data, UidDTO $user = null): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function updateTag(int $tagId, array $data): bool;

    /**
     * 删除标签.
     *
     * @param int $ctId 标签ID
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
    public function deleteTag(int $ctId, UidDTO $user = null): bool;



}