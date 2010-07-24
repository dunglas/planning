<?php

namespace Application\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PlanningBundle:Default:index');
    }
}
