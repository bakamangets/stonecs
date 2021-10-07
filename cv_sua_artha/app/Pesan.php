<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $guarded = ['KodePesan'];
    public $table = 'tbpesan';

    public $timestamps = false;
}
