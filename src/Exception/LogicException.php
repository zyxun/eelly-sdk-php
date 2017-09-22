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

namespace Eelly\Exception;

/**
 * 逻辑异常.
 *
 * @author hehui<hehui@eelly.net>
 */
class LogicException extends \LogicException
{

    public const PARAMETER_ERROR    = '参数有误';

    public const PARAMETER_EMPTY    = '参数不能为空';

    public const DATA_NOT_EXIT      = '记录不存在';

    public const DATA_ALREADER_EXIT = '该数据已经存在';

    public const DATA_INSERT_FAIL   = '插入失败';

    public const DATA_UPDATE_FAIL   = '更新失败';

    public const DATA_DELETE_FAIL   = '删除失败';

    public const NO_PERMISSIONS     = '没有该权限操作';

    public const NO_LOGIN           = '用户未登录';


    /**
     * 逻辑开发错误代码提示数据.
     */
    public const LOGIC_ERROR = [
         700001=> '用户未登录',
         700002=> '无权限操作',
         701001=> '参数错误',
         701002=> '参数不完整',
         702001=> '数据不存在',
         703001=> '插入数据失败',
         704001=> '更新数据失败',
         705001=> '删除数据失败',
         706001=> '数据已经存在',
     ];

    /**
     * @var array
     */
    private $context;

    /**
     * @param $message [optional]
     * @param $context [optional]
     * @param $code [optional]
     * @param $previous [optional]
     */
    public function __construct($message = null, array $context = null, $code = null, $previous = null)
    {
        parent::__construct($message, (int) $code, $previous);
        // default context
        if (null === $context) {
            $context = [
                'code' => $this->getCode(),
                'line' => $this->getLine(),
                'file' => $this->getFile(),
            ];
        }
        $this->context = $context;
    }

    /**
     * 获取上下文信息.
     *
     * @return array
     */
    public function getContext()
    {
        return $this->context;
    }
}
