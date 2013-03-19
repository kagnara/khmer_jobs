<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Company\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Company\Form\CompanyForm;

class CompanyController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
    public function postAction()
    {
        
    }
	public function addAction()
    {
        $form = new CompanyForm();
		$form->get('submit')->setValue('Add');
		return array('form'=>$form);
    }
	public function editAction()
    {
        $form = new CompanyForm();
		$form->get('submit')->setValue('Add');
		return array('form'=>$form);
    }
	
}
