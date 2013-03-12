<?php
namespace User\Controller;
use \Zend\Mvc\Controller\AbstractActionController;
use \Zend\View\Model\ViewModel;

class UserController extends AbstractActionController {
    function index(){
        $this->headScript()->appendFile('http://platform.linkedin.com/in.js');
        return new viewModel();
    }
}
?>
