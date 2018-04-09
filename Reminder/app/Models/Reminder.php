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
}
