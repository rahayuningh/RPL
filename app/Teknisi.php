<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teknisi extends Model
{
    protected $table = 'teknisi';
    protected $fillable = ['nama_pservice','alamat_pservice','notelp_pservice','email_pservice'];
}
