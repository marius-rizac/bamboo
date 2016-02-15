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

abstract class AbstractTwigFunctionExtension extends \Twig_SimpleFunction
{
    public function __construct()
    {
        parent::__construct(
            $this->getFunctionName(),
            $this->getFunction(),
            $this->getOptions()
        );
    }

    /**
     * @return string
     */
    abstract public function getFunctionName();

    /**
     * @return Callable
     */
    abstract public function getFunction();

    /**
     * @return array
     */
    public function getOptions()
    {
        return [];
    }
}
