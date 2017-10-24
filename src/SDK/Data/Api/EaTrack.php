<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Data\Api;

use Eelly\SDK\Data\Service\EaTrackInterface;
use Eelly\SDK\EellyClient;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class EaTrack implements EaTrackInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function logUserFavorites(array $data): array
    {
        return EellyClient::request('data/eaTrack', 'logUserFavorites', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function logUserClick(array $data): array
    {
        return EellyClient::request('data/eaTrack', 'logUserClick', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function logEcommerce(array $data): array
    {
        return EellyClient::request('data/eaTrack', 'logEcommerce', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function logUserPageView(array $data): array
    {
        return EellyClient::request('data/eaTrack', 'logUserPageView', $data);
    }

    /**
     *
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