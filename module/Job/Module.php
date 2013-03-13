<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Job;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Job\Model\Job;
use Job\Model\JobTable;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $e->getApplication()->getServiceManager()->get('translator');
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
// Add these import statements:
    // getAutoloaderConfig() and getConfig() methods here

    // Add this method:
    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'Job\Model\JobTable' =>  function($sm) {
                    $tableGateway = $sm->get('JobTableGateway');
                    $table = new AlbumTable($tableGateway);
                    return $table;
                },
                'JobTableGateway' => function ($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Job());
                    return new TableGateway('job', $dbAdapter, null, $resultSetPrototype);
                },
            ),
        );
    }
}