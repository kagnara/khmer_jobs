<?php

// config/autoload/global.php:
return array(
	'service_manager' => array(
		'factories' => array(
			'Zend\Db\Adapter\Adapter'
			=> 'Zend\Db\Adapter\AdapterServiceFactory',
		),
		'aliases' => array(
			'db' => 'Zend\Db\Adapter\Adapter',
		),
	),
	'db' => array(
		'driver' => 'Pdo',
		'dsn' => 'mysql:dbname=zf2tutorial;host=localhost',
		'username' => 'root',
		'password' => '',
		'driver_options' => array(
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
		),
	),
	'doctrine' => array(
		'connection' => array(
			'orm_default' => array(
				'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
				'params' => array(
					'host' => 'localhost',
					'port' => '3306',
					'dbname' => 'zf2tutorial',
					'user' => 'root',
					'password' => '',
				)
			)
		)
	),
);



/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

//return array(
    // ...
//);