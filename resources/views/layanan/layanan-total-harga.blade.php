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
                <td>Iphone</td>
              </tr>
              <tr>
                <th scope="col">Tipe</th>
                @foreach ($iphone as $iphone)
                  @if ($iphone->id === $pesanan->alat_id)
                    <td> 
                      {{ $iphone->tipe }} 
                    </td>
                    @endif
                @endforeach
              </tr>
              <tr>
                <th scope="col">Warna</th>
                <td>
                  {{ $pesanan->warna_alat }}
                </td>
              </tr>
              <tr>
                <th scope="col">Kerusakan</th>
                <td>
                  {{ $pesanan->kerusakan }}
                </td>
              </tr>
              <tr>
                <th scope="col">Keluhan</th>
                <td>
                  {{ $pesanan->keluhan }}
                </td>
              </tr>
              <tr>
                <th scope="col">Jenis Layanan</th>
                @foreach ($layanan as $layanan)
                  @if ($layanan->id === $pesanan->layanan_id)
                    <td> 
                      {{ $layanan->jenis_layanan }} 
                    </td>
                  @endif
                @endforeach
              </tr>
            </tbody>
          </table> 
        </div>
      </div>    

      <div class="row">
          <!-- Prev/Next -->
          <div class="col-lg-12 text-center">
            <a href="/layanan" class="btn btn-primary btn-m text-uppercase" style="margin:10px;">Prev</a>
            <a href="/#layanan" class="btn btn-primary btn-m text-uppercase"style="margin:10px;">Pesan</a>
          </div>
      </div>

    </div>
  </section>

@include('layouts.footer')