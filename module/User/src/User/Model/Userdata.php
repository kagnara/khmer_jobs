<?php
namespace User\Model;
class Userdata {
    public $id;
    public $first_name;
    public $last_name;
    public function exchangeArray($data){
        $this->id = (isset($data['id'])) ? $data[id] : null;
        $this->first_name = (isset($data['first_name'])) ? $data['first_name'] : null;
        $this->last_name = (isset($data['last_name'])) ? $data['last_name'] : null;
    }
}