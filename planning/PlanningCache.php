<?php

require_once __DIR__.'/PlanningKernel.php';

use Symfony\Framework\Cache\Cache;

class PlanningCache extends Cache
{
  protected function getOptions()
  {
    return array();
  }
}
