<?php

namespace App\Scheduler;

trait Frequencies
{
  public function cron($expression)
  {
    $this->expression = $expression;
  }

  public function everyMinute()
  {
    $this->expression = '* * * * *';

    return $this;
  }

  public function everyTenMinutes()
  {
    $this->expression = '*/10 * * * *';

    return $this;
  }

  public function everyThirtyMinutes()
  {
    $this->expression = '*/30 * * * *';

    return $this;
  }

  public function replaceIntoExpression($position, $value)
  {
    $expression = explode(' ', $this->expression);

    array_splice($expression, $position - 1, 1, $value);

    return $this->cron(implode(' ', $expression));
  }
}
