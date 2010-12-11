<?php

/*
 * (c) Kévin Dunglas <dunglas@gmail.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Application\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Application\PlanningBundle\Document;
use Application\PlanningBundle\Form;

/**
 * OrganizationController.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class OrganizationController extends Controller {
    public function newAction() {
        $organization = new Document\Organization();
        
        $form = new Form\OrganizationForm('new', $organization, $this->get('validator'));
        $form->configure();
        
        if ('POST' === $this->get('request')->getMethod()) {
            $form->bind($this->get('request')->request->get('test'));

            if ($form->isValid()) {
                //$test->process();
            }
        }
        
        return $this->render('PlanningBundle:Organization:new.twig', array('form' => $form));
    }
}