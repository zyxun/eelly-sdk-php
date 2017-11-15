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

namespace Eelly\SDK\Pay\Service;

use Eelly\SDK\Pay\DTO\RequestDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface RequestInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRequest(string $requestId): RequestDTO;

    /**
     * 添加 发起第三方支付数据记录.
     *
     * @param array $data
     *
     * @throws LogicException
     *
     * @return bool
     * @requestExample({"data":{"billNo":"001","channel":1,"money":100,"content":"第三方支付请求前测试写入","remark":""}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017年11月9日
     */
    public function addRequest(array $data): bool;
}
