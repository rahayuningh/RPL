<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    protected $table = 'pesanan';
    protected $fillable = ['alat_id','warna_alat','kerusakan','keluhan','filename','layanan_id','nama_customer','alamat_customer','notelp_customer','email_customer'];
}
