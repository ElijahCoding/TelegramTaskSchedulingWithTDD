<?php

use Carbon\Carbon;
use App\Scheduler\Event;
use PHPUnit\Framework\TestCase;

class EventTest extends TestCase
{
  // public function setUp()
  // {
  //
  // }

  /** @test */
  public function event_has_default_cron_expression()
  {
    $event = $this->getMockForAbstractClass(Event::class);

    $this->assertEquals($event->expression, '* * * * *');
  }

  /** @test */
  public function event_should_be_run()
  {
    $event = $this->getMockForAbstractClass(Event::class);

    $this->assertTrue($event->isDueToRun(Carbon::now()));
  }
}
