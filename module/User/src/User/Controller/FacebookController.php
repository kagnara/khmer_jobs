<?php
namespace User\Controller;
use \Zend\Mvc\Controller\AbstractActionController;
use \Zend\View\Model\ViewModel;

class FacebookController extends AbstractActionController {
    function index(){
        $facebook = new \Facebook(array(
    'appId'  => '155815554576983',
    'secret' => 'dc9af86ca240ac0774ffd358a3616009',
));
       return new ViewModel($facebook);
    }
}

