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

namespace Eelly\SDK\Pay\Exception;

use Eelly\Exception\LogicException;

/**
 * 发起交易报错类.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 *
 * @since  2017年09月21日
 */
class TradeException extends LogicException
{

    /**
     *数据未找到.
     */
    public const DATA_NOT_FOUND = '数据未找到';

    /**
     * 类不存在.
     */
    public const CLASS_NOT_FOUND = '类不存在';

    /**
     * 方法不存在.
     */
    public const METHOD_NOT_FOUND = '方法不存在';

    /**
     * 微信回调出错.
     */
    public const CALL_PARAMETER_ERROR = '微信回调出错';
    /**
     * 支付宝回调出错.
     */
    public const CALL_ALIPY_PARAMETER_ERROR = '支付宝回调出错';
}
