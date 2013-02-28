<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Album\Controller\Album',
                        'action'     => 'index',
                    ),
                ),
            ),
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'album' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/album',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Album\Controller',
                        'controller'    => 'Album',
                        'action'        => 'index',
                    ),
                ),
				
                'may_terminate' => true,
                'child_routes' => array(
					'edit' => array(
						'type'    => 'segment',
						'options' => array(
							'route'    => '/edit[/:action][/:id]',
							'constraints' => array(
							'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
								'id'     => '[0-9]+',
							),
						'defaults' => array(
							'controller' => 'Album\Controller\Album',
							'action'     => 'edit',
						),
					 ),
				),
					
					'add' => array(
						'type'    => 'segment',
						'options' => array(
							'route'    => '/add[/:action][/:id]',
							'constraints' => array(
							'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
								'id'     => '[0-9]+',
							),
						'defaults' => array(
							'controller' => 'Album\Controller\Album',
							'action'     => 'add',
						),
					 ),
				),
					
					'delete' => array(
						'type'    => 'segment',
						'options' => array(
							'route'    => '/delete[/:action][/:id]',
							'constraints' => array(
							'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
								'id'     => '[0-9]+',
							),
						'defaults' => array(
							'controller' => 'Album\Controller\Album',
							'action'     => 'delete',
						),
					 ),
				),
					
					
			),	
           ),
          ),
        ),
    'service_manager' => array(
        'factories' => array(
            'translator' => 'Zend\I18n\Translator\TranslatorServiceFactory',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Album\Controller\Album' => 'Album\Controller\AlbumController'
        ),
    ),
	
	
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'album/index/index' => __DIR__ . '/../view/album/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
