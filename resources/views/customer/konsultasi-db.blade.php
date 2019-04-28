@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">{{session('sukses')}}</div>
    @endif
    <div class="row">
        <legend>Database Konsultasi</legend>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Nomor Telepon</th>
              <th scope="col">Pesan</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody> 
	          @foreach($data_konsultasi as $konsultasi)              
	            <tr class="table-active">
	              <td>{{$konsultasi->name}}</td>
	              <td>{{$konsultasi->email}}</td>
	              <td>{{$konsultasi->phone}}</td>
	              <td>{{$konsultasi->message}}</td>
	              <td>
                    <a href='/konsultasi-database/{{$konsultasi->id}}/delete' class="btn btn-danger" onclick="return confirm('Yakin hapus data?')">
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