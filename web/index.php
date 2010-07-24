<?php

require_once __DIR__.'/../planning/PlanningKernel.php';

$kernel = new PlanningKernel('prod', false);
$kernel->handle()->send();
