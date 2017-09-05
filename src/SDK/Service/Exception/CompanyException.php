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

namespace Eelly\SDK\Service\Exception;

use Eelly\Exception\LogicException;

class CompanyException extends LogicException
{

    public const PARAMETER_ERROR = '参数有误';

    public const DATA_NOT_EXIT = '记录不存在';

    public const DATA_INSERT_FAIL = '插入失败';

    public const DATA_UPDATE_FAIL = '更新失败';

    public const DATA_DELETE_FAIL = '删除失败';

    public const DATA_ALREADER_EXIT = '该数据已经存在';

    public const NO_PERMISSIONS = '没有该权限操作';

    public const PARAMETER_EMPTY = '参数不能为空';

    public const OVER_BUSINESS_LICENSE = '营业执照图片不能超过5张';

    public const OVER_COMPANY_PHOTO = '企业实拍图片不能超过5张';

//    public function __construct(string $message, int $code, \Exception $previous = null)
//    {
//        parent::__construct($message, $context = null, $code, $previous = null);
//    }
}
