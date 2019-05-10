@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">{{session('sukses')}}</div>
    @endif
    <div class="row">
        <legend>Database Pesanan</legend>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Nomor Telepon</th>
              <th scope="col">Alamat</th>
              <th scope="col">Jenis Alat</th>
              <th scope="col">Warna Alat</th>
              <th scope="col">Biaya</th>
              <th scope="col">Keluhan</th>
              <th scope="col">Jenis Layanan</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody> 
	          @foreach($data_pesanan as $pesanan)              
	            <tr class="table-active">
	              <td>{{$pesanan->nama_customer}}</td>
	              <td>{{$pesanan->email_customer}}</td>
	              <td>{{$pesanan->notelp_customer}}</td>
	              <td>{{$pesanan->alamat_customer}}</td>
                    @foreach ($iphone as $iphone)
                    @if ($iphone->id === $pesanan->alat_id)
                        <td> 
                            {{ $iphone->tipe }} 
                        </td>
                    @endif
                    @endforeach
	              <td>{{$pesanan->warna_alat}}</td>
	              <td>{{$pesanan->biaya}}</td>
	              <td>{{$pesanan->keluhan}}</td>
	                @foreach ($layanan as $layanan)
                        @if ($layanan->id === $pesanan->layanan_id)
                            <td> 
                                {{ $layanan->jenis_layanan }} 
                            </td>
                        @endif
                    @endforeach
	              <td>
                    <a href='/pesanan-database/{{$pesanan->id}}/delete' class="btn btn-danger" onclick="return confirm('Yakin hapus data?')">
                        <font color="white">Delete </font>
                    </a>
              	  </td>
	            </tr>
	          @endforeach
          </tbody>
        </table> 
    </div>
</div>

@endsection