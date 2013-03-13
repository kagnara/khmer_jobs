<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Job\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Job\Model\Job;        
use Job\Form\JobForm;       

class JobController extends AbstractActionController
{
	protected $albumTable;
    public function indexAction()
    {
        return new ViewModel(array(
            'job' => $this->getJobTable()->fetchAll(),
        ));
    }
    public function addAction()
    {
        $form = new JobForm();
        $form->get('submit')->setValue('Add');

        $request = $this->getRequest();
        if ($request->isPost()) {
            $job = new Job();
            $form->setInputFilter($job->getInputFilter());
            $form->setData($request->getPost());

            if ($form->isValid()) {
                $job->exchangeArray($form->getData());
                $this->getAlbumTable()->saveJob($job);
           
                return $this->redirect()->toRoute('job');
            }
        }
        return array('form' => $form);
    } 
}
