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
 * @Document
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class Organization {
  /** @Id */
  protected $id;

  /** @String */
  protected $name;

  /** @EmbedOne(targetDocument="Address") */
  protected $address;

  /** @ReferenceMany(targetDocument="Calendar") */
  protected $calendars = array ();

  /** @ReferenceMany(targetDocument="Group") */
  protected $groups = array ();
}