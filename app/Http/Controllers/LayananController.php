<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index(){
    	$data_alat = \App\Alat::all();
        return view('welcome',["data_alat"=>$data_alat]);
    }

    public function layanan(){
        $jenis_alat = \App\iPhone::all();
	    return view('layanan.layanan-alat',["jenis_alat"=>$jenis_alat]);
    }

/*    public function kerusakan(){
	    return view('layanan.layanan-kerusakan');
    }

    public function keluhan(){
	    return view('layanan.layanan-keluhan');
    }

    public function jenis(){
	    return view('layanan.layanan-jenis');
    }*/

    public function totalharga(){
	    return view('layanan.layanan-total-harga');
    }

    public function jenis_alat(){
    	$data_alat = \App\Alat::all();
    	return view('layanan.layanan-alat-db',["data_alat"=>$data_alat]);
    }

    public function create_alat(Request $request){
        \App\Alat::create($request->all());
        return redirect('/database-alat')->with('sukses','Jenis alat telah ditambahkan');
    }

    public function delete_alat($id)
    {
        $data_alat = \App\Alat::find($id);
        $data_alat->delete();
        return redirect('/database-alat')->with('sukses','Data berhasil dihapus');
    }

    public function iphone(){
        $data_iphone = \App\Iphone::all();
        return view('layanan.database-iphone',['data_iphone'=>$data_iphone]);
    }

    public function create_iphone(Request $request){
        \App\Iphone::create($request->all());
        return redirect('/database-iphone')->with('sukses','Jenis iPhone telah ditambahkan');
    }

    public function delete_iphone($id)
    {
        $data_iphone = \App\Iphone::find($id);
        $data_iphone->delete();
        return redirect('/database-iphone')->with('sukses','Data berhasil dihapus');
    }


}
