<?php
namespace User\Controller;
use \Zend\Mvc\Controller\AbstractActionController;
use \Zend\View\Model\ViewModel;
use \User\Form\UserdataForm;
use \User\Model\Userdata;
class UserController extends AbstractActionController {
    public function index(){
       
            $this->headScript()->appendFile('http://platform.linkedin.com/in.js');
            
//   
//        $form = new UserdataForm();
//        $form->get('submit')->setValue('Add');
//        $request = $this->getRequest();
//        if($request->isPost()){
//            $Userdata = new Userdata();
//            $Userdata->exchangeArray($form->getData());
//            $this->getUserdataTable()->addtoDb($Userdata);
//        }
    }
    public function InsertdbAction(){
       $this->id=$_POST['id'];
       $this->first_name = $_POST['first_name'];
       $this->last_name = $_POST['last_name'];
            $Userdata = array(
                'id'=>$this->id,
                'first_name'=>$this->first_name,
                'last_name'=>$this->last_name,
                );
            $this->UserdataTable()->addtoDb($Userdata);
            return $this->redirect()->toRoute('/insertdb');
    }
}
?>