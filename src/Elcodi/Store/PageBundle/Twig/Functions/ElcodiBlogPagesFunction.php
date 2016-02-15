<?php

namespace Elcodi\Store\PageBundle\Twig\Functions;

use Elcodi\Component\Page\ElcodiPageTypes;
use Elcodi\Component\Page\Repository\PageRepository;

class ElcodiBlogPagesFunction extends AbstractTwigFunctionExtension
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
        return 'elcodi_blog_pages';
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
