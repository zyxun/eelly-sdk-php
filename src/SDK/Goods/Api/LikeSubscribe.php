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

namespace Eelly\SDK\Goods\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Goods\Service\LikeSubscribeInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class LikeSubscribe implements LikeSubscribeInterface
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
    public function addSubscribe(int $gliId, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('goods/likeSubscribe', 'addSubscribe', true, $gliId, $uidDTO);
    }

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
    public function addSubscribeAsync(int $gliId, UidDTO $uidDTO = null)
    {
        return EellyClient::request('goods/likeSubscribe', 'addSubscribe', false, $gliId, $uidDTO);
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