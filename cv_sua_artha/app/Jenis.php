<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $guarded = ['KodeJenis'];
    public $table = 'tbjenis';

    public $timestamps = false;
}
