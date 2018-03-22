<?php
declare(strict_types=1);
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Pay\Service;

use Eelly\SDK\Pay\DTO\MallRequestDTO;

/**
 * 商城请求支付数据
 * @author eellytools<localhost.shell@gmail.com>
 */
interface MallRequestInterface
{
    /**
     * 获取 一条数据.
     *
     * @param string $billNo 衣联交易号
     *
     * @throws LogicException
     *
     * @return MallRequestDTO
     * @requestExample({"billNo":"5ab0a2a5286f4rxk"})
     * @returnExample()
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since  2018年03月20日
     */
    public function getRequest(string $billNo): MallRequestDTO;
    /**
     * 添加 商城发起第三方支付数据记录.
     *
     * @param array $data 需要保存的请求日志
     * @return bool
     * @requestExample({"data":{"outTradeNo": "5ab0a2a5286f4rxk","totalFee": 0.02,"subject": "BillNo:5ab0a2a5286f4rxk","body": "衣联网商品交易","partner":"2088121477217572","channel": 1,"content":"","remark":""}})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年03月20日
     */
    public function addRequest(array $data): bool;

}