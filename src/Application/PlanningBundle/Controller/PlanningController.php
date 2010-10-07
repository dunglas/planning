<?php

namespace Application\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlanningController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PlanningBundle:Planning:index.php', array('name' => $name));
    }
}
