<?php

namespace ApplicationTest\Controller;

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
        $this->dispatch('/');
        $this->assertResponseStatusCode(200);

//        $this->assertModuleName('Application');
//        $this->assertControllerName('Test\Controller\Index');
//        $this->assertControllerClass('IndexController');
//        $this->assertMatchedRouteName('test');
    }

}
