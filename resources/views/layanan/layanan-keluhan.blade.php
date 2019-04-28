@include('layouts.header')

  <!-- Contact -->
  <section id="layanan">
    <div class="container">
      <div class="form-group">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase ">Keluhan</h2>
          </div>
        </div>
      </div>

      <form>
        <div class="form-group">
          <div class="row">
            <div class="col-lg-12">
              <textarea class="form-control" id="message" name="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
              
      <div class="row">
          <!-- Prev/Next -->
          <div class="col-lg-12 text-center">
            <a href="/#layanan" class="btn btn-primary btn-m text-uppercase" style="margin:10px;">Prev</a>
            <a href="/kerusakan" class="btn btn-primary btn-m text-uppercase"style="margin:10px;">Next</a>
          </div>
      </div>
    </form>
    </div>
  </section>

@include('layouts.footer')