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
    
}