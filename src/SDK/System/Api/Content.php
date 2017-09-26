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

namespace Eelly\SDK\System\Api;

use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\System\DTO\ContentDTO;
use Eelly\SDK\System\Service\ContentInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Content implements ContentInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getContent(int $articleId): ContentDTO
    {
        return EellyClient::request('system/content', 'getContent', $articleId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addContent(int $articleId, string $content, UidDTO $user = null): bool
    {
        return EellyClient::request('system/content', 'addContent', $articleId, $content, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateContent(int $articleId, string $content, UidDTO $user = null): bool
    {
        return EellyClient::request('system/content', 'updateContent', $articleId, $content, $user);
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
