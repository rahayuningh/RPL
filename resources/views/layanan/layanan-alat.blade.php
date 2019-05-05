@include('layouts.header')

  <!-- Contact -->
  <section id="layanan">
    <div class="container">
      <form>
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
                <option>merah</option>
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
          <!-- Prev/Next -->
          <div class="col-lg-12 text-center">
            <a href="/#layanan" class="btn btn-primary btn-m text-uppercase" style="margin:10px;">Prev</a>
            <a href="/rekap-pesanan" class="btn btn-primary btn-m text-uppercase"style="margin:10px;">Next</a>
          </div>
      </div>
    </form>
    </div>
  </section>

@include('layouts.footer')