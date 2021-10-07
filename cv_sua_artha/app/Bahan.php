<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    protected $guarded = ['Id'];
    public $table = 'tbbahan';

    public $timestamps = false;
}
