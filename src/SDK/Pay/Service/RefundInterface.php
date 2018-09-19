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

use Eelly\SDK\Pay\DTO\RefundDTO;


/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface RefundInterface
{

    /**
     * 退款数据.
     *
     * @param array $data 新增的退款数据
     * @return int
     * @requestExample({"paId":"1","type":1,"itemId":10001,"billNo":"1804234444706cvAds","money":1})
     * @returnExample(1)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年04月23日
     */
    public function addRefund(array $data): int;

    /**
     * 去退款.
     *
     * @param array $data 退款数据
     * @return bool
     * @requestExample({"userId":148086,"money":1,"itemId":10001,"type":1})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年04月23日
     */
    public function goRefundPay(array $data): bool;

    /**
     * 非微信的退款，需要财务协作
     *
     * @param array $data 请求所需的数据
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.19
     */
    public function refundNotWechat(array $data):bool;

}
