<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Member\Service\Index\DTO;

use GuzzleHttp\Psr7\UploadedFile;

/**
 * 封装给客户端使用的上传文件DTO.
 *
 * @author hehui<hehui@eelly.net>
 */
class UploadFileDTO extends UploadedFile
{
    public function __construct($streamOrFile)
    {
        parent::__construct($streamOrFile, 0, UPLOAD_ERR_OK);
    }
}
