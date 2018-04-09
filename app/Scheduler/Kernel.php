<?php

namespace App\Scheduler;

use App\Scheduler\Event;

class Kernel
{
  protected $events = [];

  public function getEvents()
  {
    return $this->events;
  }

  public function add(Event $event)
  {
    $this->events[] = $event;
  }
}
