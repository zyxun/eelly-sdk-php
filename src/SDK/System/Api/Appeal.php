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

use Eelly\SDK\Store\Service\AppealInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Appeal implements AppealInterface
{
    /**
     *
     * {@inheritDoc}
     * @see \Eelly\SDK\Store\Service\AppealInterface::addStoreAppeal()
     */
    public function addStoreAppeal(int $complainId, string $content, string $evidence, UidDTO $user = null): bool
    {
        return EellyClient::request('appeal/addStoreAppeal', __FUNCTION__, $complainId, $content, $evidence, $user);
    }

    /**
     *
     * {@inheritDoc}
     * @see \Eelly\SDK\Store\Service\AppealInterface::deleteStoreAppeal()
     */
    public function deleteStoreAppeal(int $appealId, UidDTO $user = null): bool
    {
        return EellyClient::request('appeal/deleteStoreAppeal', __FUNCTION__, $appealId, $user);
    }

    /**
     *
     * {@inheritDoc}
     * @see \Eelly\SDK\Store\Service\AppealInterface::listStoreAppealPage()
     */
    public function listStoreAppealPage(int $storeId, int $dimension, int $status = -1, int $page = 1, UidDTO $user = null): array
    {
        return EellyClient::request('appeal/listStoreAppealPage', __FUNCTION__, $storeId, $dimension, $status, $page, $user);
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