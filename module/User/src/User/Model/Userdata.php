<?php
namespace User\Model;

class Userdata {
    public $id;
    public $first_name;
    public $last_name;
    public function exchangeArray($datas){
        $this->id = (isset($datas['id'])) ? $datas['id'] : null;
        $this->first_name = (isset($datas['first_name'])) ? $datas['first_name'] : null;
        $this->last_name = (isset($datas['last_name'])) ? $datas['last_name'] : null;
    }
    
}