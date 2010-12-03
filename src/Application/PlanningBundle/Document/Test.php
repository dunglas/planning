<?php
/* 
 *  (c) Kévin Dunglas <dunglas@gmail.com>
 * 
 *  This source file is subject to the MIT license that is bundled
 *  with this source code in the file LICENSE.
 */

namespace Application\PlanningBundle\Document;

/**
 * Test.
 *
 * @mongodb:Document
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class Test {
    /** @mongodb:Id */
    protected $id;
    
    /**
     * @mongodb:String
     * @validation:NotBlank
     */
    protected $name;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function __toString() {
        return $this->getName();
    }
}