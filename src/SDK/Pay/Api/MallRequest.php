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

namespace Eelly\SDK\Pay\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\MallRequestInterface;
use Eelly\SDK\Pay\DTO\MallRequestDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class MallRequest implements MallRequestInterface
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
    public function getRequest(string $billNo): MallRequestDTO
    {
        return EellyClient::request('pay/mallRequest', 'getRequest', true, $billNo);
    }

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
    public function getRequestAsync(string $billNo)
    {
        return EellyClient::request('pay/mallRequest', 'getRequest', false, $billNo);
    }

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
    public function addRequest(array $data): bool
    {
        return EellyClient::request('pay/mallRequest', 'addRequest', true, $data);
    }

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
    public function addRequestAsync(array $data)
    {
        return EellyClient::request('pay/mallRequest', 'addRequest', false, $data);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}