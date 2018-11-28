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

namespace Eelly\SDK\Cart\Exception;

use Eelly\Exception\LogicException;

/**
 * @author hehui<hehui@eelly.net>
 */
class CartException extends LogicException
{

    public const DATA_MAX_COUNT = '已达到最大数量';


    public const DATA_GOODS_NOT_EXIT = '商品不存在或者已经删除';

    public const GOODS_INVALID = '商品失效';

    public const CART_DATA_NOT_EXIT = '购物车数据不存在';

    public const STORE_NOT_EXIT = '店铺不存在';

    public const SELF_NO_ADD_SELF_GOODS = '不能购买自己店铺的商品';

    public const GOODS_SPEC_NOT_TEXT = '商品规格不存在';
}
