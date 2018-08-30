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

namespace Eelly\SDK\Message\Api;

use Eelly\SDK\Message\Service\TemplateWeixinInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class TemplateWeixin implements TemplateWeixinInterface
{

    /**
     * 传过来的条件返回一条对应的信息记录
     *
     * @param string $conditions  搜索条件
     * @param array $bind  绑定参数
     * @return array
     *
     * @requestExample({
     *     "conditions":"type=:type:",
     *     "bind":{"type":1}
     * })
     * @returnExample({"mtId":"1","type":"1","name":"\u62fc\u56e2\u6210\u529f\u901a\u77e5","title":"0","titleBig":"0","content":"\u60a8\u7684\u597d\u53cb\u5df2\u5e2e\u60a8\u70b9\u8d5e\u5566\uff0c\u6210\u529f\u7701\u4e86XX\u5143\u54e6~?\u670d\u88c5\u6279\u53d1\u8d27\u6e90\uff0c\u4f4e\u81f39.9\u5143\uff0c\u5feb\u6765\u770b\u770b\uff01","status":"1","createdTime":"0"})
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.08.27
     */
    public function getTemplateWeixin(string $conditions, array $bind):array
    {
        return EellyClient::request('message/templateWeixin', __FUNCTION__, true, $conditions, $bind);
    }

    /**
     * 传过来的条件返回一条对应的信息记录
     *
     * @param string $conditions  搜索条件
     * @param array $bind  绑定参数
     * @return array
     *
     * @requestExample({
     *     "conditions":"type=:type:",
     *     "bind":{"type":1}
     * })
     * @returnExample({"mtId":"1","type":"1","name":"\u62fc\u56e2\u6210\u529f\u901a\u77e5","title":"0","titleBig":"0","content":"\u60a8\u7684\u597d\u53cb\u5df2\u5e2e\u60a8\u70b9\u8d5e\u5566\uff0c\u6210\u529f\u7701\u4e86XX\u5143\u54e6~?\u670d\u88c5\u6279\u53d1\u8d27\u6e90\uff0c\u4f4e\u81f39.9\u5143\uff0c\u5feb\u6765\u770b\u770b\uff01","status":"1","createdTime":"0"})
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.08.27
     */
    public function getTemplateWeixinAsync(string $conditions, array $bind):array
    {
        return EellyClient::request('message/templateWeixin', __FUNCTION__, false, $conditions, $bind);
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