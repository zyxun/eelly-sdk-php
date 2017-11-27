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
class KeyWordDTO extends AbstractDTO
{
    /**
     * 敏感词ID，自增主键
     *
     * @var int
     */
    public $keywordId;

    /**
     * 类型：1 商品标题 2 店主咨询 4 商品评论 ……
     *
     * @var int
     */
    public $type;

    /**
     * 敏感词：支持正则表达式
     *
     * @var string
     */
    public $word;

    /**
     * 处理方式：（1：警告  2：屏蔽    3：替换 ）
     *
     * @var int
     */
    public $mode;

    /**
     * 替换词
     *
     * @var string
     */
    public $reword;

    /**
     * 管理员ID
     *
     * @var int
     */
    public $adminId;

    /**
     * (冗余)管理员名称
     *
     * @var string
     */
    public $adminName;

    /**
     * 添加时间
     *
     * @var int
     */
    public $createdTime;

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
     * @return KeyWordDTO
     */
    public function setWord(string $word): KeyWordDTO
    {
        $this->word = $word;

        return $this;
    }
}
