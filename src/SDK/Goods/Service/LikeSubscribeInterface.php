<?php
declare(strict_types=1);
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Goods\Service;


use Eelly\DTO\UidDTO;

interface LikeSubscribeInterface
{

    /**
     * 添加一元商品订阅.
     *
     * @param int         $gliId  商品点赞ID
     * @param UidDTO|null $uidDTO 登录用户
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年08月27日
     * @Validation(
     *      @OperatorValidator(0,{message : "商品点赞ID不能为空",operator:["gt",0]})
     * )
     */
    public function addSubscribe(int $gliId, UidDTO $uidDTO = null): bool;
}