@include('layouts.header')

  <!-- Contact -->
  <section id="layanan">
      <form action="/layanan/storeMsg" method="POST">

    <div class="container">
        {{ csrf_field() }}

        <!-- Sub Jenis Alat -->
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase ">Sub Jenis Alat</h2>
          </div>
        </div>

        <div class="row">
        <div class="col-md-3"></div>
          <div class="col-lg-6 text-center">
            <div class="form-group">
              <select name="alat_id"class="form-control">
                @foreach($jenis_alat as $jenis_alat)
                <option value="{{$jenis_alat->id}}">{{$jenis_alat->tipe}}</option>
                @endforeach
              </select>
              <br>
              <select name="warna_alat" class="form-control">
                <option value="Black">Black</option>
                <option value="Silver">Silver</option>
                <option value="Gold">Gold</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Kerusakan -->
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase ">Kerusakan</h2>
          </div>
        </div>

        <div class="row">
        <div class="col-md-3"></div>
          <div class="col-lg-6 text-center">
            <div class="form-group">
              <textarea class="form-control" id="kerusakan" name="kerusakan" placeholder="" required="required" data-validation-required-message="Please enter a message."></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>

        
        <!-- Checkbox -->
        <div class="row">
        <div class="col-md-3"></div>
          <div class="col-lg-6 text-center">
            <div class="form-group">
              <div class="checkbox">
                @foreach($jenis_kerusakan as $jenis_kerusakan)
                  <label>
                    <input type="checkbox" name="cost[]" value="{{$jenis_kerusakan->id}}" 
                    > {{$jenis_kerusakan->jenis_kerusakan}} - {{$jenis_kerusakan->biaya}}
                  </label>
                @endforeach
            </div>
          </div>
        </div>
        </div>
        


        <!-- Keluhan -->
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase ">Keluhan</h2>
          </div>
        </div>
        <div class="row">
        <div class="col-md-3"></div>
          <div class="col-lg-6 text-center">
            <div class="form-group">
              <!--
              <form action="upload.php" method="post" enctype="multipart/form-data">
                Pilih file: <input type="file" id="berkas" name="berkas" class="btn" />
                <button type="submit" name="upload" value="upload" class="btn btn-primary">upload</button>
              </form>
              -->
              <textarea class="form-control" id="keluhan" name="keluhan" placeholder="" required="required" data-validation-required-message="Please enter a message."></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>

        <!-- Jenis Layanan -->
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase ">Jenis Layanan</h2>
          </div>
        </div>

        <div class="row">
        <div class="col-md-3"></div>
          <div class="col-lg-6 text-center">
            <div class="form-group">
              <select name="layanan_id" class="form-control">
                <option value= 1>Teknisi datang ke rumah</option>
                <option value= 2>Datang ke tempat service</option>
                <option value= 3>Kirim barang ke tempat service</option>>
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Biodata Customer</h2>
          </div>
        </div>

            <div class="modal-body">
              <div class="form-group row">
                  <label for="nama_customer" class="col-md-3 col-form-label text-md-right">Nama</label>
                  <div class="col-md-6">
                      <input id="nama_customer" type="nama_customer" name="nama_customer" class="form-control" placeholder="" required="required" data-validation-required-message="Nama Teknisi.">
                      <p class="help-block text-danger"></p>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="alamat_customer" class="col-md-3 col-form-label text-md-right">Alamat</label>
                  <div class="col-md-6">
                      <input id="alamat_customer" type="alamat_customer" name="alamat_customer" class="form-control" placeholder="Masukkan alamat *" required="required" data-validation-required-message="Masukkan Masukkan alamat">
                      <p class="help-block text-danger"></p>
                  </div>
              </div>           
              <div class="form-group row">
                  <label for="notelp_customer" class="col-md-3 col-form-label text-md-right">Nomor Telepon</label>
                  <div class="col-md-6">
                      <input id="notelp_customer" type="tel" name="notelp_customer" class="form-control"
                      pattern="([\[\(])?(?:(\+62)|62|0)\1? ?-? ?8(?!0|4|6)\d(?!0)\d\1? ?-? ?\d{3,4} ?-? ?\d{3,5}(?: ?-? ?\d{3})?\b"
                       placeholder="Masukkan Nomor Telepon *" required="required" data-validation-required-message="Masukkan Nomor Telepon ">
                      <p class="help-block text-danger"></p>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="email_customer" class="col-md-3 col-form-label text-md-right">Email</label>
                  <div class="col-md-6">
                      <input id="email_customer" type="email" name="email_customer" class="form-control" placeholder="Masukkan Email *" required="required" data-validation-required-message="Masukkan Email ">
                      <p class="help-block text-danger"></p>
                  </div>
              </div>
            </div>          

    </div>
          <div class="row">
              <!-- Prev/Next -->
              <div class="col-lg-12 text-center">
                <a href="/#layanan" class="btn btn-primary btn-m text-uppercase" style="margin:10px;">Prev</a>
                <button type="submit" class="btn btn-primary btn-m text-uppercase"style="margin:10px;">Next</button>
              </div>
          </div> 
    </form>

  </section>

@include('layouts.footer')
