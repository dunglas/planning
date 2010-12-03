<?php

namespace Application\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Application\PlanningBundle\Document;
use Application\PlanningBundle\Form;

class PlanningController extends Controller
{
    public function indexAction()
    {
        /*$test = new Document\Test();
        $test->setName($name);

        $dm = $this->get('doctrine.odm.mongodb.document_manager');
        $dm->persist($test);
        $dm->flush();*/

        $test = new Document\User();

        $form = new Form\UserForm('test', $test, $this->get('validator'));
        $form->configure();

        if ('POST' === $this->get('request')->getMethod()) {
            $form->bind($this->get('request')->request->get('test'));

            if ($form->isValid()) {
                //$test->process();
            }
        }


        return $this->render('PlanningBundle:Planning:index.twig', array('form' => $form));
    }
}
