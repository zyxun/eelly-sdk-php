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

namespace Eelly\SDK\Store\Api;

use Eelly\SDK\Store\Service\ComplainInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Complain implements ComplainInterface
{
    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Store\Service\ComplainInterface::addStoreComplain()
     */
    public function addStoreComplain(array $complainData, UidDTO $user = null): bool
    {
        return EellyClient::request('store/complain', __FUNCTION__, $complainData, $user);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Store\Service\ComplainInterface::deleteStoreComplain()
     */
    public function deleteStoreComplain(int $complainId, UidDTO $user = null): bool
    {
        return EellyClient::request('store/complain', __FUNCTION__, $complainId, $user);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Store\Service\ComplainInterface::listStoreComplainPage()
     */
    public function listStoreComplainPage(int $storeId, int $dimension, int $page = 1, UidDTO $user = null): array
    {
        return EellyClient::request('store/complain', __FUNCTION__, $storeId, $dimension, $page, $user);
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
