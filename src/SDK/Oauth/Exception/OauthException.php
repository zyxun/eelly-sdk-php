<?php
/**
 * Created by PhpStorm.
 *
 * @author liangxinyi<liangxinyi@eelly.net>
 * Date: 2017/7/15
 * Time: 11:54
 */
declare(strict_types=1);

/*
 * This file is part of eelly package.
 *
 * (c) eelly.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eelly\SDK\Oauth\Exception;

use Eelly\Exception\LogicException;

class OauthException extends LogicException
{
    public const PARAMETER_ERROR = '参数错误';

    public const DATA_NOT_EXIT = '数据不存在';

    public const DATA_INSERT_FAIL = '插入数据失败';

    public const DATA_UPDATE_FAIL = '更新数据失败';

    public const DATA_DELETE_FAIL = '删除数据失败';

    public const DATA_ALREADER_EXIT = '数据已经存在';

    public const NOT_ALLOE_PARAMETER = '存在不被允许参数';

    /**
     * 逻辑开发错误代码提示数据.
     */
    public const LOGIC_ERROR = [
         701001=> '参数错误',
         702001=> '数据不存在',
         703001=> '插入数据失败',
         704001=> '更新数据失败',
         705001=> '删除数据失败',
         706001=> '数据已经存在',
     ];

    //    public function __construct(string $message, int $code, int $errCode, \Exception $previous = null)
//    {
//        $message = $message."[$errCode]";
//        parent::__construct($message, $context = null, $code, $previous = null);
//    }
}
