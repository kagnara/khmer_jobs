<?php
namespace User\Model;
use Zend\Db\TableGateway\TableGateway;

class UserdataTable{
    protected $tableGateway;
    public function __construct(TableGateway $tableGateway) {
        $this->tableGateway=$tableGateway;
    }
    
    public function addtoDb(Userdata $userdata){
      $data = array(
            'id' => $userdata->id,
            'first_name'  => $userdata->first_name,
            'last_name' => $userdata->last_name,
            'pos_title' => $userdata->pos_title,
            'pos_company'=> $userdata->pos_company,
            'pos_date' => $userdata->pos_date,
            'pos_summary' => $userdata->pos_summary,
            'edu_schoolName' => $userdata->edu_schoolName,
            'edu_fieldOfStudy' => $userdata->edu_fieldOfStudy,
            'edu_date' => $userdata->edu_date,
            'edu_degree' => $userdata->edu_degree,
            'edu_activities' => $userdata->edu_activities,
            'edu_note' => $userdata->edu_note,
            'interest' => $userdata->interest,
            'dateOfBirth' => $userdata->dateOfBirth,
            'pic_url' => $userdata->pic_url,
        );
      
        $id = $userdata->id;
        //echo $userdata->id;
        if ($this->getid($id)) {
             $this->tableGateway->update($data, array('id'=>$id));
        }else if(!$this->getid($id)){
            $this->tableGateway->insert($data);
        }
           
    }
     public function getid($id)
    {
        
        $rowset = $this->tableGateway->select(array('id' => $id));
        $row = $rowset->current();
        return $row;
    }
    public function showall($id)
    {
        $resultSet = $this->tableGateway->select(array('id' => $id));
        return $resultSet;
    }
    public function fetchAll()
    {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }
    
}