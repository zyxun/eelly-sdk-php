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

namespace Eelly\SDK\System\DTO;
use Eelly\DTO\AbstractDTO;

/**
 * Class UidDTO.
 */
class WordDTO extends AbstractDTO
{
    /**
     * 敏感词.
     *
     * @var string
     */
    public $word;

    /**
     * @return string
     */
    public function getWord(): string
    {
        return $this->word;
    }

    /**
     * @param string $word
     *
     * @return WordDTO
     */
    public function setWord(string $word): WordDTO
    {
        $this->word = $word;

        return $this;
    }
}
