<?php
namespace User\Controller;
use \Zend\Mvc\Controller\AbstractActionController;
use \User\Model\Userdata;
use \Zend\View\Model\ViewModel;
class UserController extends AbstractActionController {
    protected $userdatatable;
    public function index(){
       
            $this->headScript()->appendFile('http://platform.linkedin.com/in.js');
   
              
    }
    
    public function showdbAction(){
               $pic = $_POST['pic'];
               $id = $_POST['id'];
               $first_name= $_POST['first_name'];
               $last_name =$_POST['last_name'];
               $pos_title =$_POST['pos_title'];
               $pos_company = $_POST['pos_company'];
               $pos_date=$_POST['pos_date'];
               $pos_summary= $_POST['pos_summary'];
               $edu_schoolName = $_POST['edu_schoolName'];
               $edu_fieldOfStudy = $_POST['edu_fieldOfStudy'];
               $edu_date = $_POST['edu_date'];
               $edu_degree = $_POST['edu_degree'];
               $edu_activities = $_POST['edu_activities'];
               $edu_note = $_POST['edu_note'];
               $interest = $_POST['interest'];
               $dateOfBirth = $_POST['dateOfBirth'];
               $data=array(
                   'id'=> $id,
                   'first_name'=>$first_name,
                   'last_name'=>$last_name,
                   'pos_title' => $pos_title,
                   'pos_company' => $pos_company,
                   'pos_date' => $pos_date,
                   'pos_summary' => $pos_summary,
                   'edu_schoolName' => $edu_schoolName,
                   'edu_fieldOfStudy' => $edu_fieldOfStudy,
                   'edu_date' => $edu_date,
                   'edu_degree' => $edu_degree,
                   'edu_activities' => $edu_activities,
                   'edu_note' => $edu_note,
                   'interest' => $interest,
                   'dateOfBirth' => $dateOfBirth,
                   'pic_url' => $pic,
               );
              
               $datas = new Userdata();
               $datas->exchangeArray($data);
               $this->getUserdataTable()->addtoDb($datas);
        return new ViewModel(array(
            'userdatas' => $this->getUserdataTable()->fetchAll(),
        ));
    }
    
    public function showdetailAction(){
        $id = $this->params()->fromRoute('id', 0);
        return new ViewModel(array('userdatas' => $this->getUserdataTable()->showall($id)));
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