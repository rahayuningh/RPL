@include('layouts.header')

  <!-- Contact -->
  <section id="layanan">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Rekap Pesanan</h2>
          <h3 class="section-subheading text-muted">---</h3>
        </div>
      </div>

    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-lg-6 text-md-left">
        <table class="table table-hover">
          <tbody>
            <tr>
              <th scope="col">Jenis</th>
              <td>iphonejbsdgfugbu</td>
            </tr>
            <tr>
              <th scope="col">Tipe</th>
              <td></td>
            </tr>
            <tr>
              <th scope="col">Warna</th>
              <td></td>
            </tr>
            <tr>
              <th scope="col">Kerusakan</th>
              <td></td>
            </tr>
            <tr>
              <th scope="col">Keluhan</th>
              <td></td>
            </tr>
            <tr>
              <th scope="col">Jenis Layanan</th>
              <td></td>
            </tr>
          </tbody>
        </table> 
      </div>
    </div>    

<br><br>
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Biodata Customer</h2>
        </div>
      </div>
              <form action="/teknisi/create_teknisi" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">

                  <div class="form-group row">
                      <label for="nama_pservice" class="col-md-3 col-form-label text-md-right">Nama</label>
                      <div class="col-md-6">
                          <input id="nama_pservice" type="nama_pservice" name="nama_pservice" class="form-control" placeholder="" required="required" data-validation-required-message="Nama Teknisi.">
                          <p class="help-block text-danger"></p>
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="alamat_pservice" class="col-md-3 col-form-label text-md-right">Alamat</label>
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
                      <label for="email_pservice" class="col-md-3 col-form-label text-md-right">Email</label>
                      <div class="col-md-6">
                          <input id="email_pservice" type="email" name="email_pservice" class="form-control" placeholder="Masukkan Email *" required="required" data-validation-required-message="Masukkan Email ">
                          <p class="help-block text-danger"></p>
                      </div>
                  </div>
                
                </div>
                  
              </form>

      <div class="row">
          <!-- Prev/Next -->
          <div class="col-lg-12 text-center">
            <a href="/layanan" class="btn btn-primary btn-m text-uppercase" style="margin:10px;">Prev</a>
            <a href="/#layanan" type="submit" class="btn btn-primary btn-m text-uppercase"style="margin:10px;">Next</a>
          </div>
      </div>

    </div>
  </section>

@include('layouts.footer')