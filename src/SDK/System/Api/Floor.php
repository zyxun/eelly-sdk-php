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

namespace Eelly\SDK\System\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\System\DTO\FloorDTO;
use Eelly\SDK\System\Service\FloorInterface;

/**
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Floor
{
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

    /**
     * 获取楼层信息.
     *
     * @param int $floorId
     *
     * @throws FloorException
     *
     * @return FloorDTO
     * @requestExample({"floorId": 1})
     * @returnExample({"floorId":"6397","marketId":"177","floorName":"1层","floorStores":"0","floorServer":"","category":"","sort":"65535","remark":"","createdTime":"0","updateTime":"2017-11-27 11:32:04"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017年11月27日
     *
     * @validation(
     *     @digit(0, {message:"非法的楼层id类型"})
     * )
     */
    public function getFloor(int $floorId): FloorDTO
    {
        return EellyClient::request('system/floor', __FUNCTION__, true, $floorId);
    }
}
