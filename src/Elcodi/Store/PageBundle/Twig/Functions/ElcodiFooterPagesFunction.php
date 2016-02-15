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

namespace Elcodi\Store\PageBundle\Twig\Functions;

use Elcodi\Component\Page\ElcodiPageTypes;
use Elcodi\Component\Page\Repository\PageRepository;

class ElcodiFooterPagesFunction extends AbstractTwigFunctionExtension
{
    /**
     * @var PageRepository
     */
    protected $pageRepository;

    /**
     * @param PageRepository $pageRepository
     */
    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;

        parent::__construct();
    }

    /**
     * @return string
     */
    public function getFunctionName()
    {
        return 'elcodi_footer_pages';
    }

    /**
     * @return \Closure
     */
    public function getFunction()
    {
        return function () {
            return $this->pageRepository
                ->findBy([
                    'enabled' => true,
                    'type'    => ElcodiPageTypes::TYPE_REGULAR,
                ]);
        };
    }
}
