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
            <h4>Phone Number</h4>
            <span><a href="tel:440-327-7634">440-327-7634</a></span>
          </div>  
        </div>
        <div class="col-lg-4">
          <div class="info-item">
            <i class="fa fa-clock-o"></i>
            <h4>Business Hours</h4>
            <span>Monday - Saturday<br>9:00 AM - 6:00 PM</span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="info-item">
            <i class="fa fa-map-marked"></i>
            <h4>Location</h4>
            <span>All Pro Sales<br>Alpine Structures Dealer</span>
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

  <!-- Map Section -->
  <section class="map-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading text-center">
            <h6>Find Us</h6>
            <h4>Visit Our <em>Location</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="map-container">
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2990.274257380938!2d-82.0632!3d41.38196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDIyJzU1LjEiTiA4MsKwMDMnNDguNyJX!5e0!3m2!1sen!2sus!4v1234567890"
              width="100%" 
              height="450" 
              style="border:0; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
          <div class="map-info text-center" style="margin-top: 20px;">
            <h5>All Pro Sales - Alpine Structures</h5>
            <p><i class="fa fa-map-marker-alt"></i> Your Alpine Structures Dealer</p>
            <p><i class="fa fa-phone"></i> <a href="tel:440-327-7634">440-327-7634</a></p>
            <p><i class="fa fa-clock-o"></i> Mon-Sat 9AM-6PM | Sunday Closed</p>
            <a href="https://www.google.com/maps/dir/41.4449664,-82.16576/41.38196,-82.0632/@41.4116859,-82.1820725,12z/data=!3m1!4b1!4m4!4m3!1m1!4e1!1m0" target="_blank" class="main-button" style="margin-top: 15px;">
              <i class="fa fa-directions"></i> Get Directions
            </a>
          </div>
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