<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_topup extends Model
{
    protected $table = 'data_topup';
    protected $primaryKey = 'id_topup';
    protected $fillable = [
        'nama','jumlah_topup','via_topup','tgl_topup'
    ];
}
