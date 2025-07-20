<!DOCTYPE html>
<html lang="en">

  <head>
    @include('layouts.head')
  </head>

<body>


  <!-- ***** Header Area Start ***** -->
  @include('layouts.header')
  <!-- ***** Header Area End ***** -->

  @include('layouts.popup')

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 header-text">
          <h2>Discover Our Most Popular Products on <em>All Pro Sales</em></h2>
        </div>
      </div>
    </div>
  </div>

  <section class="featured-contests">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading text-center">
            <h6>Featured Products</h6>
            <h4>View Our Most <em>Popular</em> <em>Products</em></h4>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="item">
            <div class="thumb">
              <img src="assets/images/sheds/shed1.jpg" alt="Premium Storage Sheds" style="width: 100%; height: 350px; object-fit: cover;">
              <div class="hover-effect">
                <div class="content">
                  <div class="top-content">
                    <span class="award">Premium Quality</span>
                    <span class="price">$1,600</span>
                  </div>
                  <h4>Premium Storage Sheds</h4>
                  <div class="info">
                    <span class="participants"><img src="assets//images/icon-03.png" alt=""><br>60<br>Available</span>
                    <span class="submittions"><img src="assets//images/icon-01.png" alt=""><br>188<br>Options</span>
                  </div>
                  <div class="border-button">
                    <a href="{{ route('about') }}">Browse Storage Sheds</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="item">
            <div class="thumb">
              <img src="assets/images/greenhouse/greenhouse1.jpg" alt="Custom Greenhouses" style="width: 100%; height: 350px; object-fit: cover;">
              <div class="hover-effect">
                <div class="content">
                  <div class="top-content">
                    <span class="award">Custom Built</span>
                    <span class="price">$3,200</span>
                  </div>
                  <h4>Custom Greenhouses</h4>
                  <div class="info">
                    <span class="participants"><img src="assets//images/icon-03.png" alt=""><br>78<br>Available</span>
                    <span class="submittions"><img src="assets//images/icon-01.png" alt=""><br>240<br>Options</span>
                  </div>
                  <div class="border-button">
                    <a href="{{ route('custom') }}">Browse Greenhouses</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item">
            <div class="thumb">
              <img src="assets/images/deck/deck1.jpg" alt="Premium Deck Materials" style="width: 100%; height: 250px; object-fit: cover;">
              <div class="hover-effect">
                <div class="content">
                  <div class="top-content">
                    <span class="award">Premium Quality</span>
                    <span class="price">$4,100</span>
                  </div>
                  <h4>Premium Deck Materials</h4>
                  <div class="info">
                    <span class="participants"><img src="assets//images/icon-03.png" alt=""><br>112<br>Available</span>
                    <span class="submittions"><img src="assets//images/icon-01.png" alt=""><br>286<br>Options</span>
                  </div>
                  <div class="border-button">
                    <a href="{{ route('about') }}">Browse Deck Materials</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item">
            <div class="thumb">
              <img src="assets/images/polly/polly1.jpg" alt="Polly Furniture" style="width: 100%; height: 250px; object-fit: cover;">
              <div class="hover-effect">
                <div class="content">
                  <div class="top-content">
                    <span class="award">Durable Material</span>
                    <span class="price">$3,400</span>
                  </div>
                  <h4>Polly Furniture</h4>
                  <div class="info">
                    <span class="participants"><img src="assets//images/icon-03.png" alt=""><br>54<br>Available</span>
                    <span class="submittions"><img src="assets//images/icon-01.png" alt=""><br>140<br>Options</span>
                  </div>
                  <div class="border-button">
                    <a href="{{ route('about') }}">Browse Polly Furniture</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item">
            <div class="thumb">
              <img src="assets/images/sheds/shed3.jpg" alt="Storage Solutions" style="width: 100%; height: 250px; object-fit: cover;">
              <div class="hover-effect">
                <div class="content">
                  <div class="top-content">
                    <span class="award">Custom Built</span>
                    <span class="price">$2,200</span>
                  </div>
                  <h4>Storage Solutions</h4>
                  <div class="info">
                    <span class="participants"><img src="assets//images/icon-03.png" alt=""><br>68<br>Available</span>
                    <span class="submittions"><img src="assets//images/icon-01.png" alt=""><br>162<br>Options</span>
                  </div>
                  <div class="border-button">
                    <a href="{{ route('about') }}">Browse Storage Solutions</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@include('layouts.footer')

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>