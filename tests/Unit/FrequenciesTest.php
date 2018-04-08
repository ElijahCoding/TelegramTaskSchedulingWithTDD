<?php

use Carbon\Carbon;
use App\Scheduler\Event;
use App\Scheduler\Frequencies;
use PHPUnit\Framework\TestCase;

class FrequenciesTest extends TestCase
{
  /** @test */
  public function can_set_plain_cron_expression()
  {
    $frequencies = $this->getMockForTrait(Frequencies::class);

    $frequencies->cron('some expression');

    $this->assertEquals($frequencies->expression, 'some expression');
  }

  
}
