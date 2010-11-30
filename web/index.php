<?php

require_once __DIR__.'/../planning/PlanningKernel.php';

use Symfony\Component\HttpFoundation\Request;

$kernel = new PlanningKernel('prod', false);
$kernel->handle(new Request())->send();
