<?php

use Carbon\Carbon;
use App\Events\SomeEvent;
use App\Scheduler\Kernel;

require_once 'vendor/autoload.php';

$kernel = new Kernel;
$kernel->setDate(Carbon::now()->tz('Europe/London'));
$kernel->add(new SomeEvent())->everyMinute();

$kernel->run();
