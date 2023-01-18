<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_transaksi extends Model
{

    use HasFactory;
    protected $table='detail_transaksi';
    protected $primaryKey='id_detail_transaksi';
    public $timestamps = false;
    
}

