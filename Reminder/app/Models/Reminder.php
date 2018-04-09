<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
  protected $fillable = [
        'body',
        'frequency',
        'day',
        'date',
        'time',
        'expression',
        'run_once',
    ];

    public $table = "reminders";

    public function getFrequencyAttribute($value) // weekly monthly daily
    {
      return 'a';
    }
}
