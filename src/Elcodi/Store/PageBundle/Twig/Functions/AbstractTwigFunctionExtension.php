<?php

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
