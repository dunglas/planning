<?php
/* 
 *  (c) Kévin Dunglas <dunglas@gmail.com>
 * 
 *  This source file is subject to the MIT license that is bundled
 *  with this source code in the file LICENSE.
 */

namespace Application\PlanningBundle\Document;

/**
 * Calendar.
 *
 * @Document
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class Calendar {
  /** @Id */
  protected $id;

  /** @String */
  protected $name;
}