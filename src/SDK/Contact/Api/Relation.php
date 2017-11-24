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

namespace Eelly\SDK\Contact\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Contact\Service\RelationInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
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
        return EellyClient::request('contact/relation', __FUNCTION__, true, $contactIds);
    }

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
    public function getRelationSettingAsync(array $contactIds)
    {
        return EellyClient::request('contact/relation', __FUNCTION__, false, $contactIds);
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