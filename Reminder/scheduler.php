<?php

use App\Events\SendReminder;
use App\Models\Reminder;
use App\Scheduler\Kernel;

require_once __DIR__ . '/bootstrap/app.php';

$kernel = new Kernel;

Reminder::get()->each(function ($reminder) use ($kernel){
  $kernel->add(new SendReminder())->cron($reminder->expression);
});

$kernel->run();
