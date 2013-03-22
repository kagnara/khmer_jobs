<?php
namespace User;

class Module
{
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'User\Model\Userdata' =>  function($sm) {
                    $tableGateway = $sm->get('UserdataTable');
                    $table = new UserdataTable($tableGateway);
                    return $table;
                },
                'UserdataTable' => function ($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Userdata());
                    return new TableGateway('userdata', $dbAdapter, null, $resultSetPrototype);
                },
            ),
        );
    }
    
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}