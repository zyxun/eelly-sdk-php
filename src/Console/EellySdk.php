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

namespace Eelly\Console;

use Symfony\Component\Console\Application;

class EellySdk
{
    public static function run(): void
    {
        $application = new Application();
        $application->add(new GenerateCodeCommand());
        $application->run();
    }
}
