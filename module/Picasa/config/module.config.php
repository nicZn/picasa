<?php
return array(
    'router' => array(
        'routes' => array(
            'login' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/picasa/login',
                    'defaults' => array(
                        'controller' => 'Picasa\Controller\Login',
                        'action' => 'login',
                    ),
                ),
            ),

            'picasaCopy' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/picasa-copy[/:action]',
                    'defaults' => array(
                        'controller' => 'Picasa\Controller\PicasaCopy',
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ),

    'controllers' => array(
        'invokables' => array(
            'Picasa\Controller\Login' => 'Picasa\Controller\LoginController',
            'Picasa\Controller\PicasaCopy' => 'Picasa\Controller\PicasaCopyController',
        ),
    ),

    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
//            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
//            'error/404'               => __DIR__ . '/../view/error/404.phtml',
//            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);