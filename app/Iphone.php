<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iphone extends Model
{
    protected $table ='iphone'; 
    protected $fillable = ['tipe', 'warna'];
}
