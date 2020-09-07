<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = [
      'brand',
      'modello',
      'chipset',
      'display_size'
    ];
}
