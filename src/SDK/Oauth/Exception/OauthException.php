<?php
/**
 * Created by PhpStorm.
 * @author liangxinyi<liangxinyi@eelly.net>
 * Date: 2017/7/15
 * Time: 11:54
 */
declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Oauth\Exception;


use Eelly\Exception\LogicException;

class OauthException extends LogicException {

     const PARAMETER_ERROR = [
         'STATUS_CODE'=>701,
         'ERR_CODE'=>701001,
         'FRIEND_MSG'=>'您输入的信息有误，请重新输入',
         'ERR_MSG'=>'参数错误'
     ];

     const DATA_NOT_EXIT = [
         'STATUS_CODE'=>702,
         'ERR_CODE'=>702001,
         'FRIEND_MSG'=>'小衣无能为力，找不到该数据',
         'ERR_MSG'=>'数据不存在'
     ];

     const DATA_INSERT_FAIL = [
         'STATUS_CODE'=>703,
         'ERR_CODE'=>703001,
         'FRIEND_MSG'=>'服务器开小差了，请稍后再试',
         'ERR_MSG'=>'插入数据失败'
     ];

    const DATA_UPDATE_FAIL = [
        'STATUS_CODE'=>704,
        'ERR_CODE'=>704001,
        'FRIEND_MSG'=>'服务器开小差了，请稍后再试',
        'ERR_MSG'=>'更新数据失败'
    ];

    const DATA_DELETE_FAIL = [
        'STATUS_CODE'=>705,

        'ERR_CODE'=>705001,
        'FRIEND_MSG'=>'服务器开小差了，请稍后再试',
        'ERR_MSG'=>'删除数据失败'
    ];

    const DATA_ALREADER_EXIT = [
        'STATUS_CODE'=>706,
        'ERR_CODE'=>706001,
        'FRIEND_MSG'=>'您好，你提交的数据已经存在',
        'ERR_MSG'=>'数据已经存在'
    ];

    /**
     * 逻辑开发错误代码提示数据
     */
     const LOGIC_ERROR = [
         701001=>'参数错误',
         702001=>'数据不存在',
         703001=>'插入数据失败',
         704001=>'更新数据失败',
         705001=>'删除数据失败',
         706001=>'数据已经存在'
     ];


//
    public function __construct(string $message, int $code, int $errCode, \Exception $previous = null)
    {
        $message = $message."[$errCode]";
        parent::__construct($message, $context = null, $code, $previous = null);
    }




}