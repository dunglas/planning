<?php

/*
 * (c) Kévin Dunglas <dunglas@gmail.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Application\PlanningBundle\Form;

use Symfony\Component\Form\TextField;

/**
 * SpecialTestForm.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class SpecialTestForm extends TestForm {
    public function configure()
    {
        parent::configure();

        $this->add(new TextField('description'));
    }
}