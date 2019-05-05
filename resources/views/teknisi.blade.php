@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">{{session('sukses')}}</div>
    @endif
    <div class="row">
        <legend>Database Teknisi</legend>

        <div id="TambahData" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Masukan Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <form action="/teknisi/create_teknisi" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">

                  <div class="form-group row">
                      <label for="nama_pservice" class="col-md-3 col-form-label text-md-right">Nama Teknisi</label>
                      <div class="col-md-6">
                          <input id="nama_pservice" type="nama_pservice" name="nama_pservice" class="form-control" placeholder="" required="required" data-validation-required-message="Nama Teknisi.">
                          <p class="help-block text-danger"></p>
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="alamat_pservice" class="col-md-3 col-form-label text-md-right">Alamat Teknisi</label>
                      <div class="col-md-6">
                          <input id="alamat_pservice" type="alamat_pservice" name="alamat_pservice" class="form-control" placeholder="Masukkan alamat *" required="required" data-validation-required-message="Masukkan Masukkan alamat">
                          <p class="help-block text-danger"></p>
                      </div>
                  </div>
                
                  <div class="form-group row">
                      <label for="notelp_pservice" class="col-md-3 col-form-label text-md-right">Nomor Telepon</label>
                      <div class="col-md-6">
                          <input id="notelp_pservice" type="tel" name="notelp_pservice" class="form-control"
                          pattern="([\[\(])?(?:(\+62)|62|0)\1? ?-? ?8(?!0|4|6)\d(?!0)\d\1? ?-? ?\d{3,4} ?-? ?\d{3,5}(?: ?-? ?\d{3})?\b"
                           placeholder="Masukkan Nomor Telepon *" required="required" data-validation-required-message="Masukkan Nomor Telepon ">
                          <p class="help-block text-danger"></p>
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="email_pservice" class="col-md-3 col-form-label text-md-right">Email Teknisi</label>
                      <div class="col-md-6">
                          <input id="email_pservice" type="email" name="email_pservice" class="form-control" placeholder="Masukkan Email *" required="required" data-validation-required-message="Masukkan Email ">
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
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">Nomor Telepon</th>
              <th scope="col">Email</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody> 
            @foreach($data_teknisi as $teknisi)              
              <tr class="table-active">
                <td>{{$teknisi->nama_pservice}}</td>
                <td>{{$teknisi->alamat_pservice}}</td>
                <td>{{$teknisi->notelp_pservice}}</td>
                <td>{{$teknisi->email_pservice}}</td>
                <td>
                  <a href='' class="btn btn-success">
                      <font color="white">Update </font>
                  </a>

                  <a href='/teknisi/{{$teknisi->id}}/delete_teknisi' class="btn btn-danger" onclick="return confirm('Yakin hapus data?')">
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