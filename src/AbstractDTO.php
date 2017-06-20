<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK;

/**
 * @author hehui<hehui@eelly.net>
 */
class AbstractDTO implements \JsonSerializable
{
    final public function __construct()
    {
    }

    /**
     * 数组转对象
     *
     * @param array $array
     */
    public static function hydractor(array $array)
    {
        $class = static::class;
        $object = new $class();
        foreach ($array as $key => $value) {
            $object->$key = $value;
        }

        return $object;
    }

    /**
     * {@inheritdoc}
     *
     * @see JsonSerializable::jsonSerialize()
     */
    public function jsonSerialize()
    {
        return $this;
    }
}
