<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index(){
    	return view('/');
    }

    public function alat(){
	    return view('layanan.layanan-alat');
    }

    public function kerusakan(){
	    return view('layanan.layanan-kerusakan');
    }

    public function keluhan(){
	    return view('layanan.layanan-keluhan');
    }

    public function jenis(){
	    return view('layanan.layanan-jenis');
    }

    public function totalharga(){
	    return view('layanan.layanan-total-harga');
    }
}
