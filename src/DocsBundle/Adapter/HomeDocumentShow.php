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

namespace Eelly\DocsBundle\Adapter;

/**
 * Class HomeDocumentShow.
 */
class HomeDocumentShow extends AbstractDocumentShow implements DocumentShowInterface
{
    public function renderBody(): void
    {
        $this->view->markup = function ($markdown) {
            return $this->parserMarkdown($markdown);
        };
        $this->view->render('apidoc', 'home');
    }
}
