<?php
/* 
 *  (c) Kévin Dunglas <dunglas@gmail.com>
 * 
 *  This source file is subject to the MIT license that is bundled
 *  with this source code in the file LICENSE.
*/

namespace Application\PlanningBundle\Form;

use Symfony\Component\Form\FieldGroup;
use Symfony\Component\Form\TextField;

/**
 * AddressFieldGroup.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class AddressFieldGroup extends FieldGroup {
    public function configure() {
        parent::configure();

        $this->add(new TextField('street'));
        $this->add(new TextField('district'));
        $this->add(new TextField('city'));
        $this->add(new TextField('county'));
        $this->add(new TextField('zipCode'));
        $this->add(new TextField('country'));
    }
}