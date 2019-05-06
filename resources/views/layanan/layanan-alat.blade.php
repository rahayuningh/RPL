@include('layouts.header')

  <!-- Contact -->
  <section id="layanan">
      <form action="/customer/create_customer" method="POST">

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
              <select class="form-control">
                @foreach($jenis_alat as $jenis_alat)
                <option>{{$jenis_alat->tipe}}</option>
                @endforeach
              </select>
              <br>
              <select class="form-control">
                <option>Black</option>
                <option>Silver</option>
                <option>Gold</option>
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
              <textarea class="form-control" id="message" name="message" placeholder="" required="required" data-validation-required-message="Please enter a message."></textarea>
              <p class="help-block text-danger"></p>
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
              <form action="upload.php" method="post" enctype="multipart/form-data">
                Pilih file: <input type="file" name="berkas" class="btn" />
                <button type="submit" name="upload" value="upload" class="btn btn-primary">upload</button>
              </form>
              <textarea class="form-control" id="message" name="message" placeholder="" required="required" data-validation-required-message="Please enter a message."></textarea>
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
              <select class="form-control">
                <option>Teknisi datang ke rumah</option>
                <option>Datang ke tempat service</option>
                <option>Kirim barang ke tempat service</option>>
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
                <button href="/rekap-pesanan" type="submit" class="btn btn-primary btn-m text-uppercase"style="margin:10px;">Next</button>
              </div>
          </div> 
    </form>

  </section>

@include('layouts.footer')