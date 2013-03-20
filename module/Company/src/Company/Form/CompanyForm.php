<?php
namespace Company\Form;
use Zend\Form\Form;

class CompanyForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('company');
        $this->setAttribute('method', 'post');
        $this->add(array(
            'name' => 'id',
            'attributes' => array(
                'type'  => 'hidden',
            ),
        ));
        $this->add(array(
            'name' => 'title',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Title:',
            ),
        ));
        $this->add(array(
            'name' => 'artist',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Artist:',
            ),
        ));
		$this->add(array(
             'name' => 'phoneNumber',
             'attributes' => array(
				 'type' => 'tel',     
             ),
			'options' => array(
				 'label' => 'Phone number:',
				 'required' => 'required',
                 'pattern'  => '^0[1-68]([-. ]?[0-9]{2}){4}$',
             ),
		));
		
		$this->add(array(
			'name' => 'message',
			'attributes' =>array(
				'type' => 'textarea',
				'options' => array(
			),
			'label' => 'Message:',
				'required' => 'required',
                                'pattern'  => '^0[1-68]([-. ]?[0-9]{2}){4}$'
			),
		));
                $this->add(array(
			'name' => 'imageFile',
			'attributes' =>array(
				'type' => 'file',
			),
			'options' => array(
				'label' => 'File Upload:',
				'required' => 'required',
                'pattern'  => '^0[1-68]([-. ]?[0-9]{2}){4}$'
			),
		));
                
                 $this->add(array(
			'name' => 'closeDate',
			'attributes' =>array(
				'type' => 'date',
			),
			'options' => array(
				'label' => 'Close date:',
				'required' => 'required',
			),
		));
                  $this->add(array(
                    'type' => 'Zend\Form\Element\Select',
                    'name' => 'gender',
                    'options' => array(
                        'label' => 'Gender:',
                        'value_options' => array(
                            '1' => 'Select your gender',
                            '2' => 'Female',
                            '3' => 'Male',
                        ),
                    ),
                    'attributes' => array(
                        'value' => '1' //set selected to '1'
            ),
        ));
               		
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Go',
                'id' => 'submitbutton',
            ),
        ));
    }
} 
