<?php

namespace App\Scheduler;

use Carbon\Carbon;
use Cron\CronExpression;

abstract class Event
{
  public $expression = '* * * * *';

  abstract public function handle();

  public function isDueToRun(Carbon $date)
  {
    return CronExpression::factory($this->expression)->isDue($date);
  }
}
