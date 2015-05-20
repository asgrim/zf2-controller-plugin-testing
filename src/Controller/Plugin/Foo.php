<?php

namespace Application\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;

class Foo extends AbstractPlugin
{
    public function __invoke()
    {
        return "Woo hello!";
    }
}
