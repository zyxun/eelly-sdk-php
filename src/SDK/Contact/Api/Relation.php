<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Contact\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Contact\Service\RelationInterface;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Relation implements RelationInterface
{

    /**
     * 获取资料设置信息.
     *
     * @param array $contactIds 客户主键id
     *
     * @return array
     * @requestExample({'contactIds':{1,2,3}})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月10日
     *  @Validation(
     *   @OperatorValidator(0,{message : "客户主键id",operator:["gt",0]})
     *  )
     */
    public function getRelationSetting(array $contactIds): array
    {
        return EellyClient::request('contact/relation', 'getRelationSetting', true, $contactIds);
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