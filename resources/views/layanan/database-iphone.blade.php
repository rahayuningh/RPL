@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">{{session('sukses')}}</div>
    @endif
    <div class="row">
        <legend>Database IPhone</legend>

        <div id="TambahData" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Masukkan Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="/database-iphone/create_iphone" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">

                  <div class="form-group row">
                      <label for="tipe" class="col-md-3 col-form-label text-md-right">Tipe</label>
                      <div class="col-md-6">
                          <input id="tipe" type="tipe" name="tipe" class="form-control" placeholder="Masukkan tipe *" required="required" data-validation-required-message="Masukkan tipe.">
                          <p class="help-block text-danger"></p>
                      </div>
                  </div>
                  
                  <div class="form-group row">
                      <label for="warna" class="col-md-3 col-form-label text-md-right">Warna</label>
                      <div class="col-md-6">
                          <input id="warna" type="warna" name="warna" class="form-control" placeholder="Masukkan warna *" required="required" data-validation-required-message="Masukkan warna.">
                          <p class="help-block text-danger"></p>
                      </div>
                  </div>
                  

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </form>

            </div>
          </div>
        </div>

      <div class="row">
        <a type="button" class="btn btn-primary" data-toggle="modal" href="#TambahData">+Tambah data</a>
      </div>
      
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Tipe</th>
              <th scope="col">Warna</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody> 
	          @foreach($data_iphone as $iphone)              
	            <tr class="table-active">
                <td>{{$iphone->tipe}}</td>
                <td>{{$iphone->warna}}</td>
	              <td>
                  <a href='/database-alat' class="btn btn-info" >
                      <font color="white">Read</font>
                  </a>
                  <a href='' class="btn btn-success">
                      <font color="white">Update </font>
                  </a>

                  <a href='/database-iphone/{{$iphone->id}}/delete_iphone' class="btn btn-danger" onclick="return confirm('Yakin hapus data?')">
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