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

    public function pesanan(){
        $data_pesanan = \App\Pesanan::all();
        $iphone = \App\Iphone::all();
        $layanan = \App\Layanan::all();
    	return view('customer.pesanan-db',compact('data_pesanan','iphone','layanan'));
    }

    public function deletepesanan($id)
    {
    	$data_pesanan = \App\Pesanan::find($id);
    	$data_pesanan->delete();
    	return redirect('/pesanan-database')->with('sukses','Data berhasil dihapus');
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

    /*Teknisi*/
    public function teknisi(){
        $data_teknisi = \App\Teknisi::all();
        return view('/teknisi',["data_teknisi"=>$data_teknisi]);
    }

    public function create_teknisi(Request $request){
        \App\Teknisi::create($request->all());
        return redirect('/teknisi')->with('sukses','Teknisi alat telah ditambahkan');
    }

    public function delete_teknisi($id)
    {
        $data_alat = \App\Teknisi::find($id);
        $data_alat->delete();
        return redirect('/teknisi')->with('sukses','Data berhasil dihapus');
    }

    /*Customer*/
    public function customer(){
        $data_customer = \App\Customer::all();
        return view('/#layanan',["data_customer"=>$data_customer]);
    }

    public function create_customer(Request $request){
        \App\Customer::create($request->all());
        return redirect('/#layanan')->with('sukses','Customer alat telah ditambahkan');
    }

    public function delete_customer($id)
    {
        $data_alat = \App\Customer::find($id);
        $data_alat->delete();
        return redirect('/#layanan')->with('sukses','Data berhasil dihapus');
    }


}