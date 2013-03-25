<?php
namespace User\Controller;
use \Zend\Mvc\Controller\AbstractActionController;
use \User\Model\Userdata;
class UserController extends AbstractActionController {
    protected $userdatatable;
    public function index(){
       
            $this->headScript()->appendFile('http://platform.linkedin.com/in.js');
   
              
    }
    public function insertdbAction(){
               $id=$_POST['id'];
               $first_name=$_POST['first_name'];
               $last_name =$_POST['last_name'];
               $data=array(
                   'id'=>$id,
                   'first_name'=>$first_name,
                   'last_name'=>$last_name,
               );
               $datas = new Userdata();
               $datas->exchangeArray($data);
               $this->getUserdataTable()->addtoDb($datas);
               
               //echo $id.",".$first_name.",".$last_name;
//                $this->getUserdataTable()->addtoDb($data);
//
//                // Redirect to list of albums
//                return $this->redirect()->toRoute('insertdb');
    }
     
    public function getUserdataTable()
    {
        if (!$this->userdatatable) {
            $sm = $this->getServiceLocator();
            $this->userdatatable= $sm->get('User\Model\UserdataTable');
        }
        return $this->userdatatable;
    }
    
}