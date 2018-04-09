<?php

use Carbon\Carbon;
use App\Events\SomeEvent;
use App\Scheduler\Kernel;

require_once 'vendor/autoload.php';

$kernel = new Kernel;

$kernel->add(new SomeEvent())->dailyAt(12, 30);

$kernel->run();
