<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $table='transaksi';
    protected $primaryKey='id_transaksi';
    public $timestamps = false;
    protected $fillable=['nama_pelanggan','status','tgl_transaksi'];
}
