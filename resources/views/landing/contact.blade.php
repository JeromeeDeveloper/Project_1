<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.head')
  </head>
<body>
  @include('layouts.header')
  @include('layouts.popup')
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 header-text">
          <h2>Contact Us</h2>
          <p>Have questions or want to get started with ALL PRO SALES? Fill out the form below and our team will get back to you as soon as possible!</p>
        </div>
      </div>
    </div>
  </div>
  <section class="contact-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading text-center">
            <h6>Contact Us</h6>
            <h4>We're here to help you!</h4>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="info-item">
            <i class="fa fa-phone"></i>
            <h4>Phone Numbers</h4>
            <span><a href="#">010-020-0340</a><br><a href="#">090-080-0760</a></span>
          </div>  
        </div>
        <div class="col-lg-4">
          <div class="info-item">
            <i class="fa fa-envelope"></i>
            <h4>Email Addresses</h4>
            <span><a href="#">info@company.com</a><br><a href="#">SnapX@company.com</a></span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="info-item">
            <i class="fa fa-map-marked"></i>
            <h4>Office Location</h4>
            <span><a href="#">155 Michigan Ave, Chicago,<br>IL 60601, United States</a></span>
          </div>
        </div>
        <div class="col-lg-12">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="telephone" id="telephone" placeholder="Your Telephone..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="email" name="email" id="email" placeholder="Your E-mail..." required="">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="subject" id="subject" placeholder="Subject..." autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" id="message" placeholder="Your Message"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Send Message Now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  @include('layouts.footer')
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html> 