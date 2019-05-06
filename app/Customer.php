<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $fillable = ['nama_customer','alamat_customer','notelp_customer','email_customer'];
}
