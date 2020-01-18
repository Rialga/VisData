<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_transaksi extends Model
{
    protected $table = 'data_transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $fillable = [
        'nama','jumlah_transaksi','partner','tgl_transaksi'
    ];
}
