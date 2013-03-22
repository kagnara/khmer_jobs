<?php
namespace User\Model;
use Zend\Db\TableGateway\TableGateway;
class AlbumTable{
    protected $tableGateway;
    public function __construct(TableGateway $tableGateway) {
        $tableGateway = $this->tableGateway;
    }

    public function addtoDb($userdata){
        $data = array(
            'id'=> $userdata->id,
            'first_name' =>$userdata->first_name,
            'last_name' => $userdata->last_name,
        );
        $this->tableGateway->insert($data);
    }
}