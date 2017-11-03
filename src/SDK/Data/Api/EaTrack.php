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

namespace Eelly\SDK\Data\Api;

use Eelly\SDK\Data\Service\EaTrackInterface;
use Eelly\SDK\EellyClient;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class EaTrack implements EaTrackInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function logUserFavorites(array $data): array
    {
        return EellyClient::request('data/eaTrack', 'logUserFavorites', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function logUserClick(array $data): array
    {
        return EellyClient::request('data/eaTrack', 'logUserClick', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function logEcommerce(array $data): array
    {
        return EellyClient::request('data/eaTrack', 'logEcommerce', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function logUserPageView(array $data): array
    {
        return EellyClient::request('data/eaTrack', 'logUserPageView', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function trackMarsEvent(array $data): array
    {
        return EellyClient::request('data/eaTrack', 'trackMarsEvent', $data);
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
