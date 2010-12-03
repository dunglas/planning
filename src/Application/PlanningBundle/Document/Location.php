<?php
/* 
 *  (c) Kévin Dunglas <dunglas@gmail.com>
 * 
 *  This source file is subject to the MIT license that is bundled
 *  with this source code in the file LICENSE.
 */

namespace Application\PlanningBundle\Document;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Location.
 *
 * @Document
 * @Index(keys={"coordinates"="2d"})
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class Location {
  /** @Id */
  protected $id;

  /** @String */
  protected $name;

  /** @EmbedOne(targetDocument="Address") */
  protected $address;

  /** @EmbedOne(targetDocument="Coordinates") */
  public $coordinates;

  /** @ReferenceOne(targetDocument="Organization") */
  protected $organization;
}