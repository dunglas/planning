<?php
/* 
 *  (c) Kévin Dunglas <dunglas@gmail.com>
 * 
 *  This source file is subject to the MIT license that is bundled
 *  with this source code in the file LICENSE.
 */

namespace Application\PlanningBundle\Form;

use Symfony\Component\Form\Form;
use Symfony\Component\Form\TextField;

/**
 * TestForm.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class TestForm extends Form {
    public function configure()
    {
        $this->add(new TextField('name'));
    }
}