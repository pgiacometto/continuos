<?php
namespace Test;

return array(
    'controllers' => array(
        'invokables' => array(
            'Test\Controller\Index' => Controller\IndexController::class
        ),
    ),
    'router' => array(
        'routes' => array(
            'test' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/test',
                    'defaults' => array(
                        'controller' => 'Test\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),      
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'Test' => __DIR__ . '/../view',
        ),
    ),
);