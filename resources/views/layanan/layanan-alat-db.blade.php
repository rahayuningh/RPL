@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">{{session('sukses')}}</div>
    @endif
    <div class="row">
        <legend>Database Jenis Alat</legend>

        <div id="TambahData" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Masukan Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="/database-alat/create_alat" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">

                  <div class="form-group row">
                      <label for="jenis_alat" class="col-md-3 col-form-label text-md-right">Jenis Alat</label>
                      <div class="col-md-6">
                          <input id="jenis_alat" type="jenis_alat" name="jenis_alat" class="form-control" placeholder="Masukkan jenis alat *" required="required" data-validation-required-message="Masukkan jenis alat.">
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
              <th scope="col">Jenis</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody> 
	          @foreach($data_alat as $alat)              
	            <tr class="table-active">
                <td>{{$alat->jenis_alat}}</td>
	              <td>
                  <a href='/database-iphone' class="btn btn-info" >
                      <font color="white">Read</font>
                  </a>
                  <a href='' class="btn btn-success">
                      <font color="white">Update </font>
                  </a>

                  <a href='/database-alat/{{$alat->id}}/delete_alat' class="btn btn-danger" onclick="return confirm('Yakin hapus data?')">
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