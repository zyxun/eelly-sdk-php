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


/**
 * 联系人标签关系.
 *
 * @author  肖俊明<xiaojunming@eelly.net>
 * @since 2017年10月12日
 */
interface TagRelInterface
{
    /**
     * 根据客户id批量获取标签名称.
     *
     * @param array $contactIds 联系人ID，自增主键
     * @throws \Eelly\Exception\LogicException
     * @return array
     * @requestExample({contactIds:{148086,1,2}})
     * @returnExample({"contactId": 1,"name": "呵呵李伟权"})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年10月12日
     * @Validation(
     *   @OperatorValidator(0,{message : "联系人标签关系ID"})
     *  )
     */
    public function getTagNameByContactIds(array $contactIds):array;
}