<?php

namespace Prueba\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AddController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }


}

