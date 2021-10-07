<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $guarded = ['KodeProduk'];
    public $table = 'tbproduk';

    public $timestamps = false;
}
