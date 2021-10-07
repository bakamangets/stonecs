<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    protected $guarded = ['Id'];
    public $table = 'tbmodel';

    public $timestamps = false;
}
