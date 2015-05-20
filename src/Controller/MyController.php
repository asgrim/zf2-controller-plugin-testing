<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class MyController extends AbstractActionController
{
    public function indexAction()
    {
        $foo = $this->foo(); // is a controller plugin that returns something
        
        return ['foo' => $foo];
    }
}
