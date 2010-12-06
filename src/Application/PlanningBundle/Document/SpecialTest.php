<?php

/*
 * (c) Kévin Dunglas <dunglas@gmail.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Application\PlanningBundle\Document;

/**
 * SpecialTest.
 *
 * @mongodb:Document
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class SpecialTest extends Test {
    /**
     * @mongodb:String
     * @validation:NotBlank
     * 
     * @var string
     */
    protected $description;
    
    public function getDescription()     {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
}

?>
