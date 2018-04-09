<?php

use App\Models\Reminder;
use App\Scheduler\Kernel;

require_once __DIR__ . '/bootstrap/app.php';

$kernel = new Kernel;

Reminder::get()->each(function ($reminder) use ($kernel){
  
});
