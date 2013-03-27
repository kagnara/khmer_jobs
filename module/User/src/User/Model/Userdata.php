<?php
namespace User\Model;

class Userdata {
    public $id;
    public $first_name;
    public $last_name;
    public $pos_title;
    public $pos_company;
    public $pos_date;
    public $pos_summary;
    public $edu_schoolName;
    public $edu_fieldOfStudy;
    public $edu_date;
    public $edu_degree;
    public $edu_activities;
    public $edu_note;
    public $interest;
    public $dateOfBirth;
    public $pic_url;
    public function exchangeArray($datas){
        $this->pic_url = (isset($datas['pic_url'])) ? $datas['pic_url'] : null;
        $this->id = (isset($datas['id'])) ? $datas['id'] : null;
        $this->first_name = (isset($datas['first_name'])) ? $datas['first_name'] : null;
        $this->last_name = (isset($datas['last_name'])) ? $datas['last_name'] : null;
        $this->pos_title = (isset($datas['pos_title'])) ? $datas['pos_title'] : null;
        $this->pos_company = (isset($datas['pos_company'])) ? $datas['pos_company'] : null;
        $this->pos_date = (isset($datas['pos_date'])) ? $datas['pos_date'] : null;
        $this->pos_summary = (isset($datas['pos_summary'])) ? $datas['pos_summary'] : null;
        $this->edu_schoolName = (isset($datas['edu_schoolName'])) ? $datas['edu_schoolName'] : null;
        $this->edu_fieldOfStudy = (isset($datas['edu_fieldOfStudy'])) ? $datas['edu_fieldOfStudy'] : null;
        $this->edu_date = (isset($datas['edu_date'])) ? $datas['edu_date'] : null;
        $this->edu_degree = (isset($datas['edu_degree'])) ? $datas['edu_degree'] : null;
        $this->edu_activities = (isset($datas['edu_activities'])) ? $datas['edu_activities'] : null;
        $this->edu_note = (isset($datas['edu_note'])) ? $datas['edu_note'] : null;
        $this->interest = (isset($datas['interest'])) ? $datas['interest'] : null;
        $this->dateOfBirth = (isset($datas['dateOfBirth'])) ? $datas['dateOfBirth'] : null;
        
    }
    
}