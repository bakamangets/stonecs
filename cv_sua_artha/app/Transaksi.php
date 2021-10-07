<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $guarded = ['KodeTransaksi'];
    public $table = 'tbtransaksi';

    public $timestamps = false;
}
