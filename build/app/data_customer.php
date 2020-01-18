<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_customer extends Model
{
    protected $table = 'data_customer';
    protected $primaryKey = 'id_customer';
    protected $fillable = [
        'nama','gender','usia','no_hp','tgl_daftar'
    ];
}
