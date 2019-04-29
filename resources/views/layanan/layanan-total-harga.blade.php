@include('layouts.header')

  <!-- Contact -->
  <section id="layanan">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Total Harga</h2>
          <h3 class="section-subheading text-muted">---</h3>
        </div>
      </div>

          <form action="/konsultasi/create" method="POST">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-lg-6 text-center">
                <div class="form-group">
                  <input class="form-control" id="address" name="address" type="text" placeholder="Your Address *" required="required" data-validation-required-message="Please enter your address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-lg-6 text-center">
                <div class="form-group">
                  <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-lg-6 text-center">
                <div class="form-group">
                  <input class="form-control" id="phone" name="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
            </div>


          </form>


      <div class="row">
          <!-- Prev/Next -->
          <div class="col-lg-12 text-center">
            <a href="/jenis-layanan" class="btn btn-primary btn-m text-uppercase" style="margin:10px;">Prev</a>
            <a href="/#layanan" class="btn btn-primary btn-m text-uppercase"style="margin:10px;">Next</a>
          </div>
      </div>

    </div>
  </section>

@include('layouts.footer')