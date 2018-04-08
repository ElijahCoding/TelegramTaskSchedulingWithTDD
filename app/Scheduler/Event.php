<?php

namespace App\Scheduler;

abstract class Event
{
  public $expression = '* * * * *';

  abstract public function handle();
}
