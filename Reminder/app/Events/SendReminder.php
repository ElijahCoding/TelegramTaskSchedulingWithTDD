<?php

namespace App\Events;

use App\Scheduler\Event;

class SendReminder extends Event
{
  public function handle()
  {
    dump($this->expression);
  }
}
