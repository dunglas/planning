<?php
/*
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Application\PlanningBundle\Document;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Organization.
 *
 * @mongodb:Document
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class Organization {
  /** @mongodb:Id */
  protected $id;

  /** @mongodb:String */
  protected $name;

  /** @mongodb:EmbedOne(targetDocument="Address") */
  protected $address;

  /** @mongodb:ReferenceMany(targetDocument="Calendar") */
  protected $calendars = array ();

  /** @mongodb:ReferenceMany(targetDocument="Bundle\DoctrineUserBundle\Document\Group") */
  protected $groups = array ();
  
  public function getId()   {
      return $this->id;
  }

  public function setId($id)
  {
      $this->id = $id;
  }

  public function getName()
  {
      return $this->name;
  }

  public function setName($name)
  {
      $this->name = $name;
  }

  public function getAddress()
  {
      return $this->address;
  }

  public function setAddress($address)
  {
      $this->address = $address;
  }

  public function getCalendars()
  {
      return $this->calendars;
  }

  public function setCalendars($calendars)
  {
      $this->calendars = $calendars;
  }

  public function getGroups()
  {
      return $this->groups;
  }

  public function setGroups($groups)
  {
      $this->groups = $groups;
  }
}