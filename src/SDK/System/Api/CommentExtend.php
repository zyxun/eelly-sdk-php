<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\System\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\CommentExtendInterface;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class CommentExtend implements CommentExtendInterface
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
}