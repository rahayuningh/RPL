<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesanan;

class LayananController extends Controller
{
    public function index(){
    	$data_alat = \App\Alat::all();
        return view('welcome',["data_alat"=>$data_alat]);
    }

    public function layanan(){
        $jenis_alat = \App\iPhone::all();
        $jenis_kerusakan = \App\Kerusakan::all();
	    return view('layanan.layanan-alat',compact('jenis_alat','jenis_kerusakan'));
    }

    public function storeMsg(Request $request){
        $rusak = \App\Kerusakan::all();
        $tempcost = 0;
        //dd($request->cost);
        // foreach ($request->cost as $cost ) {
        //    foreach ($rusak as $rusak) {
        //        if ($rusak->id == $cost) {
        //            $tempcost += $rusak->biaya;
        //        }
        //    }
        // }

        foreach ($request->cost as $coost){
            foreach ($rusak as $ruusak){
                if ($ruusak->id == $coost) {
                   $tempcost += $ruusak->biaya;
                }
            }
        }

        $pesan = new Pesanan;
            $pesan->alat_id = $request->alat_id;
            $pesan->warna_alat = $request->warna_alat;
            $pesan->kerusakan = $request->kerusakan;
            $pesan->keluhan = $request->keluhan;
            $pesan->biaya = $tempcost;
            $pesan->filename = $request->berkas;
            $pesan->layanan_id = $request->layanan_id;
            $pesan->nama_customer = $request->nama_customer;
            $pesan->alamat_customer = $request->alamat_customer;
            $pesan->notelp_customer = $request->notelp_customer;
            $pesan->email_customer = $request->email_customer;
            $pesan->save();

        // $pesanan = Pesanan::create([
        //     'alat_id' => $request->alat_id,
        //     'warna_alat' => $request->warna_alat,
        //     'kerusakan' => $request->kerusakan,
        //     'keluhan' => $request->keluhan,
        //     'biaya' => $tempcost,
        //     'filename' => $request->berkas,
        //     'layanan_id' => $request->layanan_id,
        //     'nama_customer' => $request->nama_customer,
        //     'alamat_customer' => $request->alamat_customer,
        //     'notelp_customer' => $request->notelp_customer, 
        //     'email_customer' => $request->email_customer
        // ]);

        return redirect('/rekap-pesanan')/*->with('sukses','Customer alat telah ditambahkan')*/;

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
        $pesanan = Pesanan::orderBy('created_at','desc')->first();
        $iphone = \App\iPhone::all();
        $layanan = \App\Layanan::all();

	    return view('layanan.layanan-total-harga',compact('pesanan','iphone', 'layanan'));
    }

    public function delete($id)
    {
    	$data_konsultasi = \App\Pesanan::find($id);
    	$data_konsultasi->delete();
    	return redirect('/layanan');//->with('sukses','Data berhasil dihapus');
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
