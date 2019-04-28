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
    <div class="row">
        <legend>Database Application</legend>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>               
            <tr class="table-active">
              <th scope="row">1</th>
              <td>Konsultasi</td>
              <td>Berisi pesan konsultasi gratis dari pelanggan</td>
              <td>
                    <a href='/konsultasi-database' class="btn btn-info" >
                        <font color="white">Read</font>
                    </a>
                    <a href='' class="btn btn-success">
                        <font color="white">Update </font>
                    </a>
                    <a href='' class="btn btn-danger">
                        <font color="white">Delete </font>
                    </a>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Pesanan Service</td>
              <td>Layanan yang dipesan pelanggan</td>
              <td>
                    <a href='/konsultasi-database' class="btn btn-info" >
                        <font color="white">Read</font>
                    </a>
                    <a href='' class="btn btn-success">
                        <font color="white">Update </font>
                    </a>
                    <a href='' class="btn btn-danger">
                        <font color="white">Delete </font>
                    </a>
              </td>
            </tr>
          </tbody>
        </table> 
    </div>
</div>

@endsection