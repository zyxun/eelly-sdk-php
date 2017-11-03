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
class ApplyException extends LogicException
{
    /**
     *错误信息.
     */
    public const PARAMETER_ERROR = '参数有误';
    /**
     *无权限.
     */
    public const REQUEST_FORBIDDEN = '未登录';

    /**
     *无权限.
     */
    public const REQUEST_FORBIDDEN_ERROR = '无权操作';

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
}
