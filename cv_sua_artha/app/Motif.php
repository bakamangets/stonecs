<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motif extends Model
{
    protected $guarded = ['Id'];
    public $table = 'tbmotif';

    public $timestamps = false;
}
