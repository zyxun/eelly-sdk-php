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
     * Hello world.
     *
     * @return string
     */
    public function helloWorld(): string
    {
        return EellyClient::request('example/benchmark', __FUNCTION__, true);
    }

    /**
     * sleep.
     *
     * @return string
     */
    public function sleep(int $time): string
    {
        return EellyClient::request('example/benchmark', __FUNCTION__, true, $time);
    }

    /**
     * @param int $time
     *
     * @return mixed
     */
    public function sleepAsync(int $time)
    {
        return EellyClient::request('example/benchmark', 'sleep', false, $time);
    }

    /**
     * @param string $string
     *
     * @return string
     */
    public function echo(string $string): string
    {
        return EellyClient::request('example/benchmark', __FUNCTION__, true, $string);
    }
}
