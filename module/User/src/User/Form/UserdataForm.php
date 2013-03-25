<?php
namespace User;
use Zend\Form\Form;
class UserdataForm extends Form{
    public function __construct($name = null) {
        parent::__construct('user');
        $this->setAttribute('method', 'post');
        $this->add(array('name'=>'id',
                          'attributes'=>array(
                              'type'=>'text',
                          ),
            ));
        $this->add(array(
                            'name'=>'first_name',
                            'attributes'=>array(
                                'type'=>'text',
                            ),
        ));
        $this->add(array(
            'name'=>'last_name',
            'attributes'=>array(
                'type'=>'text',
            ),
        ));
        $this->add(array(
            'name'=>'submit',
            'attributes'=> array(
                'type'=>'submit',
                'id'=>'submitbutton',
            ),
        ));
    }
}
