<?php

namespace Application\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Application\PlanningBundle\Document;
use Application\PlanningBundle\Form;

class PlanningController extends Controller
{
    public function indexAction()
    {
        if (!$this->get('doctrine_user.auth')->isAuthenticated()) {
            return $this->forward('DoctrineUserBundle:Session:new');
        }

        return $this->render('PlanningBundle:Planning:index.twig');
    }
    
    public function testAction() {
        $test = new Document\SpecialTest();
        
        $form = new Form\SpecialTestForm('test', $test, $this->get('validator'));
        $form->configure();
        
        if ('POST' === $this->get('request')->getMethod()) {
            $form->bind($this->get('request')->request->get('test'));

            if ($form->isValid()) {
                //$test->process();
            }
        }
        
        return $this->render('PlanningBundle:Planning:test.twig', array('form' => $form));
    }    
}
