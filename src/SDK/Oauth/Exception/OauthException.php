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
    public const PARAMETER_ERROR = [
         'STATUS_CODE'=> 701,
         'ERR_CODE'   => 701001,
         'FRIEND_MSG' => '您输入的信息有误，请重新输入',
         'ERR_MSG'    => '参数错误',
     ];

    public const DATA_NOT_EXIT = [
         'STATUS_CODE'=> 702,
         'ERR_CODE'   => 702001,
         'FRIEND_MSG' => '小衣无能为力，找不到该数据',
         'ERR_MSG'    => '数据不存在',
     ];

    public const DATA_INSERT_FAIL = [
         'STATUS_CODE'=> 703,
         'ERR_CODE'   => 703001,
         'FRIEND_MSG' => '服务器开小差了，请稍后再试',
         'ERR_MSG'    => '插入数据失败',
     ];

    public const DATA_UPDATE_FAIL = [
        'STATUS_CODE'=> 704,
        'ERR_CODE'   => 704001,
        'FRIEND_MSG' => '服务器开小差了，请稍后再试',
        'ERR_MSG'    => '更新数据失败',
    ];

    public const DATA_DELETE_FAIL = [
        'STATUS_CODE'=> 705,

        'ERR_CODE'  => 705001,
        'FRIEND_MSG'=> '服务器开小差了，请稍后再试',
        'ERR_MSG'   => '删除数据失败',
    ];

    public const DATA_ALREADER_EXIT = [
        'STATUS_CODE'=> 706,
        'ERR_CODE'   => 706001,
        'FRIEND_MSG' => '您好，你提交的数据已经存在',
        'ERR_MSG'    => '数据已经存在',
    ];

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

    public function __construct(string $message, int $code, int $errCode, \Exception $previous = null)
    {
        $message = $message."[$errCode]";
        parent::__construct($message, $context = null, $code, $previous = null);
    }
}
