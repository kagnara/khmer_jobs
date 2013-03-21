<?php
namespace User\Controller;
use \Zend\Mvc\Controller\AbstractActionController;
use \Zend\View\Model\ViewModel;
use \User\Form\UserdataForm;
use \User\Model\Userdata;
class UserController extends AbstractActionController {
    function index(){
       
            $this->headScript()->appendFile('http://platform.linkedin.com/in.js');
            
   
        $form = new UserdataForm();
        $form->get('submit')->setValue('Add');
        $request = $this->getRequest();
        if($request->isPost()){
            $Userdata = new Userdata();
            $Userdata->exchangeArray($form->getData());
            $this->getUserdataTable()->addtoDb($Userdata);
        }
        return array('form'=>$form);
    }
}
?>
