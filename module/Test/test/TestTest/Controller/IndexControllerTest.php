<?php

namespace TestTest\Controller;

use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class IndexControllerTest extends AbstractHttpControllerTestCase
{

    public function setUp()
    {
        $this->setApplicationConfig(
               
                include 'config/application.config.php'
        );
        parent::setUp();
    }

    public function testIndexActionCanBeAccessed()
    {
        $this->dispatch('/test');
        $this->assertResponseStatusCode(200);

        $this->assertModuleName('Test');
        $this->assertControllerName('Test\Controller\Index');
        $this->assertControllerClass('IndexController');
        $this->assertMatchedRouteName('test');
    }

}
