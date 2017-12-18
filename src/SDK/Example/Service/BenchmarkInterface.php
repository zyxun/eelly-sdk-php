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

namespace Eelly\SDK\Example\Service;

/**
 * Interface BenchmarkInterface.
 */
interface BenchmarkInterface
{
    /**
     * Hello world.
     *
     * @return string
     */
    public function helloWorld(): string;

    /**
     * Sleep.
     *
     * @param int $time sleep seconds
     *
     * @return string string
     */
    public function sleep(int $time): string;

    /**
     * Echo request string.
     *
     * @param string $string  echo string
     * @return string
     */
    public function echo(string $string): string;
}
