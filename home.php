<?php 
  session_start();
  include_once('connection.php');
  $msg = "";
    if (isset($_SESSION['msg'])) {
        $msg = $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    if ($msg != "") {
        echo "<script> alert('$msg')</script>";
    }?>
<?php include 'header-link.php'; ?>
<?php include 'header.php'; 

// echo $_COOKIE["Cookie"];
?>

    <section class="page-content-wrapper">
      <div class="container">
        <div class="pt-5">
          <!-- Hero Slides-->
          <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide-->
            <div class="single-hero-slide" style="background-image: url('img/bg-img/ban01.png')">
              <div class="slide-content h-100 d-flex align-items-center">
                <div class="slide-text">
                  <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms" data-duration="1000ms">SEMI GANTRY CRANE</h4>
                  <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-duration="1000ms">2 years warranty</p><a class="btn btn-primary btn-sm" href="#" data-animation="fadeInUp" data-delay="800ms" data-duration="1000ms">Buy Now</a>
                </div>
              </div>
            </div>
            <!-- Single Hero Slide-->
            <div class="single-hero-slide" style="background-image: url('img/bg-img/IMG02Double.jpeg')">
              <div class="slide-content h-100 d-flex align-items-center">
                <div class="slide-text">
                  <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms" data-duration="1000ms">DOUBLE GIRDER EOT CRANE</h4>
                  <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-duration="1000ms">2 years warranty</p><a class="btn btn-success btn-sm" href="#" data-animation="fadeInUp" data-delay="500ms" data-duration="1000ms">Buy Now</a>
                </div>
              </div>
            </div>
            <!-- Single Hero Slide-->
            <div class="single-hero-slide" style="background-image: url('img/bg-img/ban03.png')">
              <div class="slide-content h-100 d-flex align-items-center">
                <div class="slide-text">
                  <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms" data-duration="1000ms">WALL/COLUMN MOUNTED JIB CRANE.</h4>
                  <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-duration="1000ms">2 years warranty</p><a class="btn btn-danger btn-sm" href="#" data-animation="fadeInUp" data-delay="800ms" data-duration="1000ms">Buy Now</a>
                </div>
              </div>
            </div>
             <!-- Single Hero Slide-->
          <div class="single-hero-slide" style="background-image: url('img/bg-img/01.jpg')">
              <div class="slide-content h-100 d-flex align-items-center">
                <div class="slide-text">
                  <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms" data-duration="1000ms">PILLER MOUNTED JIB CRANE.</h4>
                  <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-duration="1000ms">2 years warranty</p><a class="btn btn-danger btn-sm" href="#" data-animation="fadeInUp" data-delay="800ms" data-duration="1000ms">Buy Now</a>
                </div>
              </div>
            </div> 
             <!-- Single Hero Slide-->
            <!-- <div class="single-hero-slide" style="background-image: url('img/bg-img/ban5.jpg')">
              <div class="slide-content h-100 d-flex align-items-center">
                <div class="slide-text">
                  <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms" data-duration="1000ms">Best Furniture</h4>
                  <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-duration="1000ms">3 years warranty</p><a class="btn btn-danger btn-sm" href="#" data-animation="fadeInUp" data-delay="800ms" data-duration="1000ms">Buy Now</a>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
      <!-- Product Catagories -->
  <div class="product-catagories-wrapper py-3">
        <div class="container">
          <div class="section-heading">
            <h6>Product Categories</h6>
          </div>
          <div class="product-catagory-wrap">
            <div class="row g-3">
             <!--  <div class="col-4">
                <div class="card catagory-card">
                  <div class="card-body"><a class="text-danger" href="catagory.php">
                      <svg class="bi bi-heart mb-2" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                      </svg><span>IOT Crane</span></a></div>
                </div>
              </div> -->
              <div class="col-4">
                <div class="card catagory-card">
                  <div class="card-body"><a href="eot_crane.php">
                      <svg class="bi bi-cup mb-2" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 2a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v1h.5A1.5 1.5 0 0 1 16 4.5v7a1.5 1.5 0 0 1-1.5 1.5h-.55a2.5 2.5 0 0 1-2.45 2h-8A2.5 2.5 0 0 1 1 12.5V2zm13 10h.5a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5H14v8zM13 2H2v10.5A1.5 1.5 0 0 0 3.5 14h8a1.5 1.5 0 0 0 1.5-1.5V2z"></path>
                      </svg><span>EOT Crane </span></a></div>
                </div>
              </div>
              <div class="col-4">
                <div class="card catagory-card">
                  <div class="card-body"><a href="gantry_crane.php">
                      <svg class="bi bi-cup mb-2" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 2a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v1h.5A1.5 1.5 0 0 1 16 4.5v7a1.5 1.5 0 0 1-1.5 1.5h-.55a2.5 2.5 0 0 1-2.45 2h-8A2.5 2.5 0 0 1 1 12.5V2zm13 10h.5a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5H14v8zM13 2H2v10.5A1.5 1.5 0 0 0 3.5 14h8a1.5 1.5 0 0 0 1.5-1.5V2z"></path>
                      </svg><span>Gantry Crane </span></a></div>
                </div>
              </div>
              <div class="col-4">
                <div class="card catagory-card">
                  <div class="card-body"><a href="jib_crane.php">
                      <svg class="bi bi-cup mb-2" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 2a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v1h.5A1.5 1.5 0 0 1 16 4.5v7a1.5 1.5 0 0 1-1.5 1.5h-.55a2.5 2.5 0 0 1-2.45 2h-8A2.5 2.5 0 0 1 1 12.5V2zm13 10h.5a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5H14v8zM13 2H2v10.5A1.5 1.5 0 0 0 3.5 14h8a1.5 1.5 0 0 0 1.5-1.5V2z"></path>
                      </svg><span>JIB Crane </span></a></div>
                </div>
              </div>
              <!-- <?php echo print_r($_COOKIE);?> -->

             <!--  <div class="col-4">
                <div class="card catagory-card">
                  <div class="card-body"><a class="text-warning" href="catagory.php">
                      <svg class="bi bi-egg-fried mb-2" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M13.665 6.113a1 1 0 0 1-.667-.977L13 5a4 4 0 0 0-6.483-3.136 1 1 0 0 1-.8.2 4 4 0 0 0-3.693 6.61 1 1 0 0 1 .2 1 4 4 0 0 0 6.67 4.087 1 1 0 0 1 1.262-.152 2.5 2.5 0 0 0 3.715-2.905 1 1 0 0 1 .341-1.113 2.001 2.001 0 0 0-.547-3.478zM14 5c0 .057 0 .113-.003.17a3.001 3.001 0 0 1 .822 5.216 3.5 3.5 0 0 1-5.201 4.065 5 5 0 0 1-8.336-5.109A5 5 0 0 1 5.896 1.08 5 5 0 0 1 14 5z"></path>
                        <circle cx="8" cy="8" r="3"></circle>
                      </svg><span>JIB Crane</span></a></div>
                </div>
              </div> -->

         <!--      <div class="col-4">
                <div class="card catagory-card">
                  <div class="card-body"><a class="text-success" href="catagory.php">
                      <svg class="bi bi-controller mb-2" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.119 2.693c.904.19 1.75.495 2.235.98.407.408.779 1.05 1.094 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.815-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773a11.307 11.307 0 0 1-.739-.809c-.126-.147-.25-.291-.368-.422-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.422-.243.283-.494.576-.739.81-.398.378-.877.705-1.513.772a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772.486-.485 1.331-.79 2.235-.98.932-.196 2.03-.292 3.119-.292 1.089 0 2.187.096 3.119.292zm-6.032.979c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 0 0-.748 2.295 12.351 12.351 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.505C4.861 9.97 5.978 9.026 8 9.026s3.139.943 3.965 1.855c.164.182.307.35.44.505.214.25.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 0 0-.339-2.406 13.753 13.753 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z"></path>
                        <path d="M11.5 6.026a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1 1a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1 1a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-7-2.5h1v3h-1v-3z"></path>
                        <path d="M3.5 6.526h3v1h-3v-1zM3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .258.966l-1.932.518a.5.5 0 0 1-.612-.354zm9.976 0a.5.5 0 0 0-.353-.613l-1.932-.518a.5.5 0 1 0-.259.966l1.932.518a.5.5 0 0 0 .612-.354z"></path>
                      </svg><span>Monorial</span></a></div>
                </div>
              </div> -->
             <!--  <div class="col-4">
                <div class="card catagory-card">
                  <div class="card-body"><a href="monorail.php">
                      <svg class="bi bi-cup mb-2" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 2a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v1h.5A1.5 1.5 0 0 1 16 4.5v7a1.5 1.5 0 0 1-1.5 1.5h-.55a2.5 2.5 0 0 1-2.45 2h-8A2.5 2.5 0 0 1 1 12.5V2zm13 10h.5a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5H14v8zM13 2H2v10.5A1.5 1.5 0 0 0 3.5 14h8a1.5 1.5 0 0 0 1.5-1.5V2z"></path>
                      </svg><span>Monorail</span></a></div>
                </div>
              </div> -->
             <!--  <div class="col-4">
                <div class="card catagory-card">
                  <div class="card-body"><a class="text-danger" href="catagory.php">
                      <svg class="bi bi-earbuds mb-2" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6.825 4.138c.596 2.141-.36 3.593-2.389 4.117a4.432 4.432 0 0 1-2.018.054c-.048-.01.9 2.778 1.522 4.61l.41 1.205a.52.52 0 0 1-.346.659l-.593.19a.548.548 0 0 1-.69-.34L.184 6.99c-.696-2.137.662-4.309 2.564-4.8 2.029-.523 3.402 0 4.076 1.948zm-.868 2.221c.43-.112.561-.993.292-1.969-.269-.975-.836-1.675-1.266-1.563-.43.112-.561.994-.292 1.969.269.975.836 1.675 1.266 1.563zm3.218-2.221c-.596 2.141.36 3.593 2.389 4.117a4.434 4.434 0 0 0 2.018.054c.048-.01-.9 2.778-1.522 4.61l-.41 1.205a.52.52 0 0 0 .346.659l.593.19c.289.092.6-.06.69-.34l2.536-7.643c.696-2.137-.662-4.309-2.564-4.8-2.029-.523-3.402 0-4.076 1.948zm.868 2.221c-.43-.112-.561-.993-.292-1.969.269-.975.836-1.675 1.266-1.563.43.112.561.994.292 1.969-.269.975-.836 1.675-1.266 1.563z"></path>
                      </svg><span>Rope</span></a></div>
                </div>
              </div> -->
              <div class="col-4">
                <div class="card catagory-card">
                  <div class="card-body"><a href="electricwire.php">
                      <svg class="bi bi-cup mb-2" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 2a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v1h.5A1.5 1.5 0 0 1 16 4.5v7a1.5 1.5 0 0 1-1.5 1.5h-.55a2.5 2.5 0 0 1-2.45 2h-8A2.5 2.5 0 0 1 1 12.5V2zm13 10h.5a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5H14v8zM13 2H2v10.5A1.5 1.5 0 0 0 3.5 14h8a1.5 1.5 0 0 0 1.5-1.5V2z"></path>
                      </svg><span>Electric Wire Rope Hoist</span></a></div>
                </div>
              </div>
          <!--     <div class="col-4">
                <div class="card catagory-card">
                  <div class="card-body"><a class="text-info" href="catagory.php">
                      <svg class="bi bi-brightness-high mb-2" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
                      </svg><span>Travel</span></a></div>
                </div>
              </div> -->
               <!-- <div class="col-4">
                <div class="card catagory-card">
                  <div class="card-body"><a href="shedule_online.php">
                      <svg class="bi bi-cup mb-2" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 2a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v1h.5A1.5 1.5 0 0 1 16 4.5v7a1.5 1.5 0 0 1-1.5 1.5h-.55a2.5 2.5 0 0 1-2.45 2h-8A2.5 2.5 0 0 1 1 12.5V2zm13 10h.5a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5H14v8zM13 2H2v10.5A1.5 1.5 0 0 0 3.5 14h8a1.5 1.5 0 0 0 1.5-1.5V2z"></path>
                      </svg><span>Online Assessment</span></a></div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div> 
      <!-- Flash Sale Slide -->
      <!-- <div class="flash-sale-wrapper">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="me-1 d-flex align-items-center">
              <svg class="bi bi-lightning me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09zM4.157 8.5H7a.5.5 0 0 1 .478.647L6.11 13.59l5.732-6.09H9a.5.5 0 0 1-.478-.647L9.89 2.41 4.157 8.5z"></path>
              </svg>Flash sale
            </h6>
            <ul class="sales-end-timer ps-0 d-flex align-items-center" data-countdown="2022/01/01 14:21:37">
              <li><span class="days">0</span>d</li>
              <li><span class="hours">0</span>h</li>
              <li><span class="minutes">0</span>m</li>
              <li><span class="seconds">0</span>s</li>
            </ul>
          </div>
          <div class="flash-sale-slide owl-carousel">
            <div class="card flash-sale-card">
              <div class="card-body"><a href="single-product.php"><img src="img/product/1.png" alt=""><span class="product-title">Black Table Lamp</span>
                  <p class="sale-price">$7.99<span class="real-price">$15</span></p><span class="progress-title">33% Sold Out</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                  </div></a></div>
            </div>
            <div class="card flash-sale-card">
              <div class="card-body"><a href="single-product.php"><img src="img/product/2.png" alt=""><span class="product-title">Modern Sofa</span>
                  <p class="sale-price">$14<span class="real-price">$21</span></p><span class="progress-title">57% Sold Out</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                  </div></a></div>
            </div>
            <div class="card flash-sale-card">
              <div class="card-body"><a href="single-product.php"><img src="img/product/3.png" alt=""><span class="product-title">Classic Garden Chair</span>
                  <p class="sale-price">$36<span class="real-price">$49</span></p><span class="progress-title">99% Sold Out</span>
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div></a></div>
            </div>
            <div class="card flash-sale-card">
              <div class="card-body"><a href="single-product.php"><img src="img/product/1.png" alt=""><span class="product-title">Black Table Lamp</span>
                  <p class="sale-price">$7.99<span class="real-price">$15</span></p><span class="progress-title">33% Sold Out</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                  </div></a></div>
            </div>
            <div class="card flash-sale-card">
              <div class="card-body"><a href="single-product.php"><img src="img/product/2.png" alt=""><span class="product-title">Modern Sofa</span>
                  <p class="sale-price">$14<span class="real-price">$21</span></p><span class="progress-title">57% Sold Out</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                  </div></a></div>
            </div>
            <div class="card flash-sale-card">
              <div class="card-body"><a href="single-product.php"><img src="img/product/3.png" alt=""><span class="product-title">Classic Garden Chair</span>
                  <p class="sale-price">$36<span class="real-price">$49</span></p><span class="progress-title">99% Sold Out</span>
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div></a></div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- Top Products -->
   <!-- <div class="top-products-area py-3"> 
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6>Top Products</h6><a class="btn" href="shop-grid.php">View All</a>
          </div>
          <div class="row g-3">
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card product-card">
                <div class="card-body">
                  <span class="badge rounded-pill badge-warning">Sale</span>
                  <a class="wishlist-btn" href="#"><i class="lni lni-heart"> </i></a>
                  <a class="product-thumbnail d-block" href="single-product.php"><img class="mb-2" src="img/product/11.png" alt="">
                    <ul class="offer-countdown-timer d-flex align-items-center shadow-sm" data-countdown="2021/12/31 23:59:59">
                      <li><span class="days">0</span>d</li>
                      <li><span class="hours">0</span>h</li>
                      <li><span class="minutes">0</span>m</li>
                      <li><span class="seconds">0</span>s</li>
                    </ul></a>
                  <a class="product-title d-block" href="single-product.php">Beach Cap</a>
                  <p class="sale-price">$13<span>$42</span></p>
                  <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div>
                  <a class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card product-card">
                <div class="card-body">
                   <span class="badge rounded-pill badge-success">New</span>
                    <a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a>
                       <a class="product-thumbnail d-block" href="single-product.php"><img class="mb-2" src="img/product/5.png" alt=""></a>
                        <a class="product-title d-block" href="single-product.php">Wooden Sofa</a>
                  <p class="sale-price">$74<span>$99</span></p>
                  <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div>
                  <a class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card product-card">
                <div class="card-body">
                  <span class="badge rounded-pill badge-success">Sale</span>
                  <a class="wishlist-btn" href="#"><i class="lni lni-heart">                       </i></a>
                  <a class="product-thumbnail d-block" href="single-product.php"><img class="mb-2" src="img/product/6.png" alt=""></a>
                  <a class="product-title d-block" href="single-product.php">Roof Lamp</a>
                  <p class="sale-price">$99<span>$113</span></p>
                  <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div>
                  <a class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card product-card">
                <div class="card-body">
                  <span class="badge rounded-pill badge-danger">-18%</span>
                  <a class="wishlist-btn" href="#"><i class="lni lni-heart">                       </i></a>
                  <a class="product-thumbnail d-block" href="single-product.php"><img class="mb-2" src="img/product/9.png" alt="">
                    
                    <ul class="offer-countdown-timer d-flex align-items-center shadow-sm" data-countdown="2021/11/23 23:21:29">
                      <li><span class="days">0</span>d</li>
                      <li><span class="hours">0</span>h</li>
                      <li><span class="minutes">0</span>m</li>
                      <li><span class="seconds">0</span>s</li>
                    </ul></a>
                  <a class="product-title d-block" href="single-product.php">Sneaker Shoes</a>
                  <p class="sale-price">$87<span>$92</span></p>
                  <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div>
                  <a class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card product-card">
                <div class="card-body">
                  <span class="badge rounded-pill badge-danger">-11%</span>
                  <a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a>
                  <a class="product-thumbnail d-block" href="single-product.php"><img class="mb-2" src="img/product/8.png" alt=""></a>
                  <a class="product-title d-block" href="single-product.php">Wooden Chair</a>
                  <p class="sale-price">$21<span>$25</span></p>
                  <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div>
                  <a class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card product-card">
                <div class="card-body">
                  <span class="badge rounded-pill badge-warning">On Sale</span>
                  <a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a>
                  <a class="product-thumbnail d-block" href="single-product.php"><img class="mb-2" src="img/product/4.png" alt=""></a>
                  <a class="product-title d-block" href="single-product.php">Polo Shirts</a>
                  <p class="sale-price">$38<span>$41</span></p>
                  <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div>
                  <a class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>-->
      <!-- <div class="cta-area">
        <div class="container">
          <div class="cta-text p-4 p-lg-5" style="background-image: url(img/bg-img/24.jpg)">
            <h4 class="text-white">On Sale 50% Off!</h4>
            <p class="text-white">Suha is a multipurpose, creative &amp; <br>modern mobile template.</p><a class="btn btn-warning" href="#">Shop Today</a>
          </div>
        </div>
      </div> -->
   <div class="weekly-best-seller-area py-3">
        <div class="container">
          <!-- <div class="section-heading d-flex align-items-center justify-content-between">
            <h6></h6><a class="btn" href="shop-list.php">View All</a>
          </div> -->
          <div class="row g-3">
            <div class="col-12 col-md-6">
              <div class="card horizontal-product-card">
                <div class="col-12 text-center">
                
                    <button class="btn btn-primary form-control" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                      ONLINE QUOTATION REQUEST-EOT/GANTRY/JIB CRANES & HOISTS<!-- Online Quotation Request For Cranes And Hoists -->
                    </button>
                  <div class="collapse" id="collapseExample">
                    <div class="card card-body ">

                      <div class="col-12 mb-2" >
                        <a href="eot_crane.php" style="float: left;"><i class="lni lni-pointer-right"></i>&nbsp;&nbsp;EOT Crane & Semi EOT Crane</a>
                      </div>
                      <div class="col-12 mb-2">
                        <a href="gantry_crane.php" style="float: left;"><i class="lni lni-pointer-right"></i>&nbsp;&nbsp;Gantry Crane & Semi Gantry Crane</a>
                      </div>
                      <div class="col-12 mb-2">
                        <a href="jib_crane.php" style="float: left;"><i class="lni lni-pointer-right"></i>&nbsp;&nbsp;JIB Crane</a>
                      </div>
                      <!-- <div class="col-12 mb-2">
                        <a href="monorail.php" style="float: left;"><i class="lni lni-pointer-right"></i>&nbsp;&nbsp; Monorail With Electric Wire Rope Hoist</a>
                      </div> -->
                       <div class="col-12 mb-2">
                        <a href="electricwire.php" style="float: left;"><i class="lni lni-pointer-right"></i>&nbsp;&nbsp; Electric Wire Rope Hoist(Upto 50T)</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
         <div class="weekly-best-seller-area py-3">
        <div class="container">
          <!-- <div class="section-heading d-flex align-items-center justify-content-between">
            <h6></h6><a class="btn" href="shop-list.php">View All</a>
          </div> -->
          <div class="row g-3">
            <div class="col-12 col-md-6">
              <div class="card horizontal-product-card">
                <div class="col-12 text-center">
                
                    <a href="shedule_online.php"><button class="btn btn-primary form-control" style="height: 80px!important;" type="button" >
                      ONLINE ASSESSMENT/HEALTH CHECK-UP/INSPECTION REQUEST-EOT/GANTRY/JIB CRANES & HOISTS
                      
                    </button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="weekly-best-seller-area py-3">
        <div class="container">
          <!-- <div class="section-heading d-flex align-items-center justify-content-between">
            <h6></h6><a class="btn" href="shop-list.php">View All</a>
          </div> -->
          <div class="row g-3">
            <div class="col-12 col-md-6">
              <div class="card horizontal-product-card">
                <div class="col-12 text-center">
                
                    <a href="electric_chain.php"><button class="btn btn-primary form-control" type="button" >
                      STANDARD PRICE LIST-ELECTRIC CHAIN HOIST
                      <!-- Standard Price List Of Electric Chain Hoist (500kg to 2000kg)  -->
                    </button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="weekly-best-seller-area py-3">
        <div class="container">
          <!-- <div class="section-heading d-flex align-items-center justify-content-between">
            <h6></h6><a class="btn" href="shop-list.php">View All</a>
          </div> -->
          <div class="row g-3">
            <div class="col-12 col-md-6">
              <div class="card horizontal-product-card">
                <div class="col-12 text-center">
                
                    <a href="chain_pulley.php"><button class="btn btn-primary form-control" type="button" >
                      STANDARD PRICE LIST- CHAIN PULLEY BLOCK WITH TRAVELLING TROLLEY
                      <!-- Standard Price List Of Chain Pulley Blocks and Other Accessories  -->
                    </button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bottomsize"></div>

      <!-- <div class="container">
        <div class="card discount-coupon-card">
          <div class="card-body">
            <div class="coupon-text-wrap d-flex align-items-center p-3">
              <h4 class="text-white pe-3 mb-0">Get 20% <br> discount</h4>
              <p class="text-white ps-3 mb-0">To get discount, enter the<strong class="px-1">GET20</strong>code on the checkout page.</p>
            </div>
          </div>
        </div>
      </div> -->

      <!-- <div class="featured-products-wrapper py-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6>Featured Products</h6><a class="btn" href="featured-products.php">View All</a>
          </div>
          <div class="row g-3">
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card featured-product-card">
                <div class="card-body">
                  <span class="badge badge-warning custom-badge"><i class="lni lni-star"></i></span>
                  <div class="product-thumbnail-side">
                    <a class="wishlist-btn shadow-sm border" href="#"><i class="lni lni-heart"></i></a>
                    <a class="product-thumbnail d-block" href="single-product.php"><img src="img/product/14.png" alt=""></a>
                  </div>
                  <div class="product-description">
                    <a class="product-title d-block" href="single-product.php">Blue Skateboard</a>

                    <p class="sale-price">$39.8<span>$89</span></p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
              <div class="card featured-product-card">
                <div class="card-body">
                  <span class="badge badge-warning custom-badge"><i class="lni lni-star"></i></span>
                  <div class="product-thumbnail-side">
                    <a class="wishlist-btn shadow-sm border" href="#"><i class="lni lni-heart"></i></a>
                    <a class="product-thumbnail d-block" href="single-product.php"><img src="img/product/15.png" alt=""></a>
                  </div>
                  <div class="product-description">
                    <a class="product-title d-block" href="single-product.php">Travel Bag</a>

                    <p class="sale-price">$14.7<span>$21</span></p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
              <div class="card featured-product-card">
                <div class="card-body">
                  <span class="badge badge-warning custom-badge"><i class="lni lni-star"></i></span>
                  <div class="product-thumbnail-side">
                    <a class="wishlist-btn shadow-sm border" href="#"><i class="lni lni-heart"></i></a>
                    <a class="product-thumbnail d-block" href="single-product.php"><img src="img/product/16.png" alt=""></a>
                  </div>
                  <div class="product-description">
                    <a class="product-title d-block" href="single-product.php">Cotton T-shirts</a>\

                    <p class="sale-price">$3.69<span>$5</span></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card featured-product-card">
                <div class="card-body">
                  <span class="badge badge-warning custom-badge"><i class="lni lni-star"></i></span>
                  <div class="product-thumbnail-side">
                    <a class="wishlist-btn shadow-sm border" href="#"><i class="lni lni-heart"></i></a>
                    <a class="product-thumbnail d-block" href="single-product.php"><img src="img/product/6.png" alt=""></a>
                  </div>
                  <div class="product-description">
                    <a class="product-title d-block" href="single-product.php">Roof Lamp</a>
                    <p class="sale-price">$27.9<span>$31</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <!-- <div class="container">
        <div class="section-heading d-flex align-items-center justify-content-between">
          <h6>Collections</h6><a class="btn" href="#">View All</a>
        </div>
        <div class="collection-slide owl-carousel">
          <div class="card collection-card"><a href="single-product.php"><img src="img/product/17.jpg" alt=""></a>
            <div class="collection-title"><span>Women</span><span>9 new items</span></div>
          </div>
          <div class="card collection-card"><a href="single-product.php"><img src="img/product/19.jpg" alt=""></a>
            <div class="collection-title"><span>Men</span><span>29 items</span></div>
          </div>
          <div class="card collection-card"><a href="single-product.php"><img src="img/product/21.jpg" alt=""></a>
            <div class="collection-title"><span>Kids</span><span>4 new items</span></div>
          </div>
          <div class="card collection-card"><a href="single-product.php"><img src="img/product/22.jpg" alt=""></a>
            <div class="collection-title"><span>Gadget</span><span>11 items</span></div>
          </div>
          <div class="card collection-card"><a href="single-product.php"><img src="img/product/23.jpg" alt=""></a>
            <div class="collection-title"><span>Foods</span><span>2 new items</span></div>
          </div>
          <div class="card collection-card"><a href="single-product.php"><img src="img/product/24.jpg" alt=""></a>
            <div class="collection-title"><span>Sports</span><span>5 items</span></div>
          </div>
        </div>
        <div class="pb-3"></div>
      </div> -->
    </section>
     <?php include 'footer.php';?>
     <?php include 'footer-link.php';?>