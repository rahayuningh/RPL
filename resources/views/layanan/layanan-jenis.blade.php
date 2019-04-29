@include('layouts.header')

  <!-- Contact -->
  <section id="layanan">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase ">Jenis Layanan</h2>
        </div>
      </div>

      <form>
        <div class="form-group">
          <div class="row">
            <div class="col-lg-12">
              <select class="form-control">
                <option>A</option>
                <option>B</option>
              </select>
            </div>
          </div>
        </div>

      <div class="row">
          <!-- Prev/Next -->
          <div class="col-lg-12 text-center">
            <a href="/keluhan" class="btn btn-primary btn-m text-uppercase" style="margin:10px;">Prev</a>
            <a href="/total-harga" class="btn btn-primary btn-m text-uppercase"style="margin:10px;">Next</a>
          </div>
      </div>
    </form>
    </div>
  </section>

@include('layouts.footer')