<?php
/* 
 *  (c) Kévin Dunglas <dunglas@gmail.com>
 * 
 *  This source file is subject to the MIT license that is bundled
 *  with this source code in the file LICENSE.
 */

namespace Application\PlanningBundle\Document;

/**
 * Coordinates.
 *
 * @EmbeddedDocument
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class Coordinates
{
    /** @Float */
    public $latitude;

    /** @Float */
    public $longitude;
}