<?php

namespace ApplicationTest\Controller;

use Application\Controller\MyController;
use Application\Controller\Plugin\Foo;

class MyControllerTest extends \PHPUnit_Framework_TestCase
{
    public function testIndexActionReturnsFoo()
    {
        $fooMock = $this->getMockBuilder(Foo::class)
            ->setMethods(['__invoke'])
            ->getMock();

        $fooMock->expects($this->once())->method('__invoke')->will($this->returnValue('Hello world!'));

        $controller = new MyController();
        $controller->getPluginManager()->setService('foo', $fooMock);

        $returnValue = $controller->indexAction();

        $this->assertSame(['foo' => 'Hello world!'], $returnValue);
    }
}