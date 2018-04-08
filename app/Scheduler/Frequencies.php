<?php

namespace App\Scheduler;

trait Frequencies
{
  public function cron($expression)
  {
    $this->expression = $expression;
  }
}
