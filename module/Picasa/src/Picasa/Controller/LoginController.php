<?php

namespace Picasa\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Picasa\Form\LoginForm;

class LoginController extends AbstractActionController{
    public function loginAction(){
        $request = $this->getRequest();

        if($request->isPost()){
            $this->redirect()->toRoute('picasaCopy');
        }

        $form = new LoginForm();

        return array('form' => $form);
    }
}