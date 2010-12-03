<?php
/* 
 *  (c) Kévin Dunglas <dunglas@gmail.com>
 * 
 *  This source file is subject to the MIT license that is bundled
 *  with this source code in the file LICENSE.
 */

namespace Application\PlanningBundle\Document;

/**
 * Address.
 *
 * @mongodb:EmbeddedDocument
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class Address {
  /*
   * @mongodb:String
   * @validation:NotBlank
   */
  protected $street;

  /** @mongodb:String */
  protected $district;

  /*
   * @mongodb:String
   * @validation:NotBlank
   */
  protected $city;

  /** @mongodb:String */
  protected $county;

  /*
   * @mongodb:String
   * @validation:NotBlank
   */
  protected $zipCode;

  /**
   * @mongodb:String
   * @validation:NotBlank
   */
  protected $country;

  public function getStreet() {
      return $this->street;
  }

  public function setStreet($street) {
      $this->street = $street;
  }

  public function getDistrict() {
      return $this->district;
  }

  public function setDistrict($district) {
      $this->district = $district;
  }

  public function getCity() {
      return $this->city;
  }

  public function setCity(\string $city) {
      $this->city = $city;
  }

  public function getCounty() {
      return $this->county;
  }

  public function setCounty($county) {
      $this->county = $county;
  }

  public function getZipCode() {
      return $this->zipCode;
  }

  public function setZipCode($zipCode) {
      $this->zipCode = $zipCode;
  }

  public function getCountry() {
      return $this->country;
  }

  public function setCountry($country) {
      $this->country = $country;
  }
}