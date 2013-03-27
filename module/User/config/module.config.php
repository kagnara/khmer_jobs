<?php
return array(
    
    'navigation' => array(
       'supervisor' => array(
           'admin' => array(
               'label' => "admin",
               'route' => '/userdata',
//               'pages' => array(
//                   'vieweachproject' => array(
//                       'label' => 'vieweachproject',
//                       'route' => 'student-project',
//                   ), 
//                   'comment' => array(
//                       'label' => 'comment',
//                       'route' => 'commentsupervisor',
//                   ),
//                   'calendarsStudent' => array(
//                       'label' => 'calendarsStudent',
//                       'route' => 'calendarsStudent',
//                   ),
               ),
           ),
        
           'profile' => array(
               'label' => 'Profile',
               'route' => 'zfcuser',
               'pages' => array(
                   'create' => array(
                       'label' => 'Profile',
                       'route' => 'zfcuser/user/index',
                   ),
                   'changeemail' => array(
                       'label' => 'Profile',
                       'route' => 'zfcuser/changeemail',
                   ),
                   'changepassword' => array(
                       'label' => 'Profile',
                       'route' => 'zfcuser/changepassword',
                   ),
               ),
           ),
       ),
    
    
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
            'insertdb' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/showdb',
                    'constraints' => array(
                        'action' => 'index',
                       
                    ),
                    'defaults' => array(
                        'controller' => 'User\Controller\User',
                        'action'     => 'showdb',
                    ),
                ),
            ),
            'showdetail' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/showdetail[/][:id]',
                    'constraints' => array(
                        'action' => 'index',
                       
                    ),
                    'defaults' => array(
                        'controller' => 'User\Controller\User',
                        'action'     => 'showdetail',
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