<?php

/*
 * (c) Kévin Dunglas <dunglas@gmail.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Application\PlanningBundle\Form;

use Bundle\DoctrineUserBundle\Form\SessionForm as BaseSessionForm;
use Bundle\HTML5FormBundle\Form\EmailField;

/**
 * SessionForm.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class SessionForm extends BaseSessionForm {
    public function configure() {
        parent::configure();
        
        $this->remove('usernameOrEmail');
        $this->add(new EmailField('usernameOrEmail'));
    }
}