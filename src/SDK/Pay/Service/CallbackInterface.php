<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Pay\Service;

use Eelly\DTO\CallbackDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface CallbackInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCallback(int $callbackId): CallbackDTO;

    /**
     * 添加 第三方支付回调记录
     * @param array $data
     *
     * @throws LogicException
     *
     * @return bool
     * @requestExample({"data":{"billNo":"001","channel":1,"money":100,"content":"测试写入","remark":""}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月9日
     */
    public function addCallback(array $data): bool;

}