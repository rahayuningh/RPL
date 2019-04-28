<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
    	return view('konsultasi');
    }

    public function konsult(){
    	$data_konsultasi = \App\Konsultasi::all();
    	return view('customer.konsultasi-db',["data_konsultasi"=>$data_konsultasi]);
    }

    public function create(Request $request)
    {
    	\App\Konsultasi::create($request->all());
    	return redirect('/konsultasi')->with('sukses','Pesan Anda telah dikirim');
    }

    public function delete($id)
    {
    	$data_konsultasi = \App\Konsultasi::find($id);
    	$data_konsultasi->delete();
    	return redirect('/konsultasi-database')->with('sukses','Data berhasil dihapus');
    }

}