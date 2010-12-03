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
 * Recurrence. iCalendar recur data type.
 *
 * @EmbeddedDocument
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class Recurrence {
  /**
   * SECONDLY / MINUTELY / HOURLY / DAILY / WEEKLY / MONTHLY / YEARLY
   * 
   * @String
   */
  protected $freq;

  /** @Date */
  protected $until;

  /** @Int */
  protected $count;

  /** @Int */
  protected $interval;

  /* @Collection */
  protected $bySecond = array();

  /* @Collection */
  protected $byMinute = array();
  
  /* @Collection */
  protected $byHour = array();

  /* @Collection */
  protected $byDay = array();
  
  /* @Collection */
  protected $byMonthDay = array();

  /* @Collection */
  protected $byYearDay = array();
  
  /* @Collection */
  protected $byWeekNo = array();

  /* @Collection */
  protected $byMonth = array();
  
  /* @Collection */
  protected $bySetPos = array();

  /* @String */
  protected $wkst;
  
  /* @String */
  protected $xName;
}