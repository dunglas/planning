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

use Bundle\DoctrineUserBundle\Document\User as BaseUser;

/**
 * User.
 *
 * @mongodb:Document(repositoryClass="Application\PlanningBundle\Document\UserRepository")
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class User extends BaseUser {
  /**
   * @mongodb:String
   */
  protected $givenName;

  /**
   * @mongodb:String
   */
  protected $surname;

  /**
   * @mongodb:EmbedOne(targetDocument="Address")
   * @validation:Valid
   */
  protected $address;

  public function getGivenName() {
      return $this->givenName;
  }

  public function setGivenName($givenName) {
      $this->givenName = $givenName;
  }

  public function getSurname() {
      return $this->surname;
  }

  public function setSurname($surname) {
      $this->surname = $surname;
  }

  public function getAddress() {
      return $this->address;
  }

  public function setAddress($address) {
      $this->address = $address;
  }
  
  /**
   * Sets the email address and the user name.
   * 
   * The username is the email address of the user.
   * 
   * @param type $email 
   */
  public function setEmail($email) {
      parent::setEmail($email);
      
      $this->setUsername($email);
  }
}