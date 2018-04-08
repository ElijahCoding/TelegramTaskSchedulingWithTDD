<?php

use App\Scheduler\Event;
use PHPUnit\Framework\TestCase;

class EventTest extends TestCase
{
  /** @test */
  public function event_has_default_cron_expression()
  {
    $event = $this->getMockForAbstractClass(Event::class);

    $this->assertEquals($event->expression, '* * * * *');
  }
}
