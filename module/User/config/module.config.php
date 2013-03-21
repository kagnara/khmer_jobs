<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'User\Controller\User' => 'User\Controller\UserController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'user' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/userdata',
                    'constraints' => array(
                        'action' => 'index',
                       
                    ),
                    'defaults' => array(
                        'controller' => 'User\Controller\User',
                        'action'     => 'index',
                    ),
                ),
            ),
            'facebook' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/fblogin',
                    'constraints' => array(
                        'action' => 'index',
                       
                    ),
                    'defaults' => array(
                        'controller' => 'User\Controller\Facebook',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'User\Controller\User' => 'User\Controller\UserController',
            'User\Controller\Facebook' => 'User\Controller\FacebookController'
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'album' => __DIR__ . '/../view',
        ),
    ),
);