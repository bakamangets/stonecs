<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ukuran extends Model
{
    protected $guarded = ['Id'];
    public $table = 'tbukuran';

    public $timestamps = false;
}
