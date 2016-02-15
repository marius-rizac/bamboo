<?php

/*
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014-2016 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 * @author Elcodi Team <tech@elcodi.com>
 */

namespace Elcodi\Store\PageBundle\Twig;

use Twig_Extension;
use Twig_SimpleFunction;

use Elcodi\Component\Page\Repository\PageRepository;
use Elcodi\Store\PageBundle\Twig\Functions\ElcodiBlogPagesFunction;
use Elcodi\Store\PageBundle\Twig\Functions\ElcodiFooterPagesFunction;

/**
 * Class PageExtension
 */
class PageExtension extends Twig_Extension
{
    /**
     * @var PageRepository
     *
     * Page Repository
     */
    private $pageRepository;

    /**
     * Construct
     *
     * @param PageRepository $pageRepository Page Repository
     */
    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    /**
     * Return all functions
     *
     * @return Twig_SimpleFunction[] Functions
     */
    public function getFunctions()
    {
        return [
            new ElcodiFooterPagesFunction($this->pageRepository),
            new ElcodiBlogPagesFunction($this->pageRepository),
        ];
    }

    /**
     * return extension name
     *
     * @return string extension name
     */
    public function getName()
    {
        return 'store_page_extension';
    }
}
