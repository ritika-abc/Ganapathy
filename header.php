  <!-- Spinner Start -->
  <div id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
  </div>
  <!-- Spinner End -->


  <!-- Topbar Start -->
  <div class="container-fluid py-2 d-none d-lg-flex">
      <div class="container">
          <div class="d-flex justify-content-between">
             <marquee behavior="" direction="">
                <p class="p-0 m-0">At Palmira, we are driven by a clear and unwavering vision to contribute to a cleaner, greener world. As part of our commitment to sustainability, we have developed a manufacturing unit dedicated to producing eco-friendly products using natural palm leaves.</p>
             </marquee>
              <!-- <nav class="breadcrumb mb-0">
                  <a class="breadcrumb-item small text-body" href="#">Career</a>
                  <a class="breadcrumb-item small text-body" href="#">Support</a>
                  <a class="breadcrumb-item small text-body" href="#">Terms</a>
                  <a class="breadcrumb-item small text-body" href="#">FAQs</a>
              </nav> -->
          </div>
      </div>
  </div>
  <!-- Topbar End -->


  <!-- Brand Start -->
  <div class="container-fluid bg-primary text-white pt-4 pb-5 d-none d-lg-flex">
      <div class="container pb-2">
          <div class="d-flex align-items-center justify-content-between">
           
              <div class="d-flex">
                  <i class="bi bi-telephone-inbound fs-2"></i>
                  <div class="ms-3">
                      <h5 class="text-white mb-0">Call Now</h5>
                      <span>+91 9074108483</span>
                  </div>
              </div>
              <a href="index.php" class="h1 text-white mb-0"><img src="image/logo/logo.jpg" height="100px"
                      width="130px" class="rounded bg-white" alt=""></a>

              <div class="d-flex">
                  <i class="bi bi-envelope fs-2"></i>
                  <div class="ms-3">
                      <h5 class="text-white mb-0">Mail Now</h5>
                      <span>Prashanthbkky@gmail.com</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Brand End -->


  <!-- Navbar Start -->
  <div class="container-fluid sticky-top">
      <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
              <a href="index.php" class="navbar-brand d-lg-none">
                  <img src="image/logo/logo.jpg" height="100px" width="200px" class="rounded" alt="">
              </a>
              <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                  data-bs-target="#navbarCollapse">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                  <div class="navbar-nav">
                      <a href="index.php" class="nav-item nav-link  ">Home</a>
                      <a href="about.php" class="nav-item nav-link">About</a>
                      <a href="product.php" class="nav-item nav-link"> Diversify Product </a>

                      <!-- <div class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Products</a>
                          <div class="dropdown-menu bg-light m-0">
                              <?php
                                include "config.php";
                                $s = "SELECT * from `pro`  ";
                                $q = mysqli_query($con, $s);
                                while ($row = mysqli_fetch_array($q)) {

                                ?>
                                  <a href="404.html" class="dropdown-item text-capitalize"><?php echo $row['name'] ?></a>
                              <?php } ?>
                          </div>
                      </div> -->
                      <a href="service.php" class="nav-item nav-link">Services</a>
                      <a href="contact.php" class="nav-item nav-link">Contact</a>
                  </div>
                  <div class="ms-auto d-none d-lg-flex">
                      <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-facebook-f"></i></a>
                      <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-twitter"></i></a>
                      <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                      <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-youtube"></i></a>
                  </div>
              </div>
          </nav>
      </div>
  </div>
  <!-- Navbar End -->