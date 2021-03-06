@include('layouts.header')

  <!-- Pendahuluan -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-heading text-uppercase" style="color: #fd0066">selamat datang di ardp.service</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#layanan">Layanan</a>
      </div>
    </div>
  </header>

  <!-- Layanan Grid -->
  <section class="bg-light" id="layanan" style="background: #fff">
    {{ csrf_field() }}                
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Layanan</h2>
          <h3 class="section-subheading text-muted">Jenis Alat yang Akan di Service</h3>
        </div>
      </div>      
      <div class="row">
        @foreach($data_alat as $alat)
        <div class="col-md-4 col-sm-6 layanan-item">
          <a class="layanan-link" href="/layanan">
            <div class="layanan-hover">
              <div class="layanan-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/layanan/{{$alat->jenis_alat}}.png" alt="">
          </a>
          <div>
            <h5 class="heading layanan-caption" >
              <a href="/layanan" name="{{$alat->jenis_alat}}" id="{{$alat->jenis_alat}}">Service {{$alat->jenis_alat}}</a>
            </h5>
          </div>
        </div>
      @endforeach  
      </div>
    
    </div>
  </section>

  <!-- Tentang Kami -->
  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Tentang Kami</h2>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <h4 class="service-heading">Deskripsi Singkat</h4>
          <p class="text-muted">ardp.service adalah penyedia jasa perbaikan produk-produk Apple di Bogor. ardp.service merekrut teknisi-teknisi dan mitra teknisi yang berpengalaman, ardp.service melayani jasa service Apple terlengkap di Bogor</p>
        </div>
        <div class="col-md-4">
          <h4 class="service-heading">Visi</h4>
          <p class="text-muted">ardp.service menjadi solusi utama bagi para pengguna Apple untuk dapat menyimpan waktu, tenaga dan uang dengan sistem door to door service dimana mereka tidak perlu pergi mencari jasa perbaikan produk Apple ketika terjadi masalah, karena teknisi ardp.service akan mendatangi anda!</p>
        </div>
        <div class="col-md-4">
          <h4 class="service-heading">Misi</h4>
          <p class="text-muted">Menjadi pilihan service center spesialis produk Apple terbaik dengan harga yang terjangkau untuk semua kalangan, serta memberikan servis profesional dengan spare part berkualitas original.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- About -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Kontak dan Alamat</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/telp.png" color="black" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Kontak</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">
                    instagram: @ardp.service <br>
                    no.telp/WA: +628936370026
                  </p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/pinlokasi.png" color="black" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Alamat</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Desa Babakan Lio, Dramaga, Bogor, Jawa Barat</p>
                </div>
              </div>
            </li>
<!--             <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>Be Part
                  <br>Of Our
                  <br>Story!</h4>
              </div>
            </li>
 -->          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="bg-light" id="team">
    <div class="container">
  
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Teknisi Kami</h2>
          <h3 class="section-subheading text-muted">---</h3>
        </div>
      </div>
      
      <div class="row">
        
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
            <h4>Kay Garland</h4>
            <p class="text-muted">Lead Designer</p>
          </div>
        </div>
        
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
            <h4>Larry Parker</h4>
            <p class="text-muted">Lead Marketer</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
            <h4>Diana Pertersen</h4>
            <p class="text-muted">Lead Developer</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">---</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Clients -->
<!--   <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </section> -->

@include('layouts.footer')