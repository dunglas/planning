<?php
/* 
 *  (c) Kévin Dunglas <dunglas@gmail.com>
 * 
 *  This source file is subject to the MIT license that is bundled
 *  with this source code in the file LICENSE.
 */
namespace Application\PlanningBundle\Form;

use Bundle\DoctrineUserBundle\Form\UserForm as BaseUserForm;
use Symfony\Component\Form\TextField;

/**
 * UserForm.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class UserForm extends BaseUserForm {
    public function configure()
    {
        parent::configure();

        $this->add(new TextField('givenName'));
        $this->add(new TextField('surname'));

        $addressGroup = new AddressFieldGroup('address');
        $addressGroup->configure();
        $this->add($addressGroup);
    }
}