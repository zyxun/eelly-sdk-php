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

namespace Eelly\SDK\Example\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Example\Service\BenchmarkInterface;

class Benchmark
{
    /**
     * @var bool
     */
    private $sync;

    public function __construct(bool $sync = true)
    {
        $this->sync = $sync;
    }

    /**
     * Hello world.
     *
     * @return string
     */
    public function helloWorld()
    {
        return EellyClient::request('example/benchmark', __FUNCTION__, $this->sync);
    }

    /**
     * sleep.
     *
     * @return string
     */
    public function sleep(int $time)
    {
        return EellyClient::request('example/benchmark', __FUNCTION__, $this->sync, $time);
    }
}
