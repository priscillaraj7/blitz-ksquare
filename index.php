<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blitz - Surge Protection Devices</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="path/to/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="images/logo.png" alt="Blitz Logo" height="50">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="#products">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="#why-choose-us">Why Choose Us</a></li>
          <li class="nav-item"><a class="nav-link" href="#clients">Our Clients</a></li>
          <li class="nav-item"><a class="nav-link" href="careerindex.php">Careers</a></li>
          <li class="nav-item"><a class="nav-link" href="#contacts">Contacts</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Home Section -->
  <section id="home" class="home-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 animate__animated animate__fadeInDown">
          <h1 class="display-4">BLITZ</h1>
          <h3 class="lead">Harnessing Power, Protecting Investments</h3>
          <h5 class="lead2">Surge Protection Device & DC MCB</h5>
        </div>
        <div class="col-md-6">          
          <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/DC SPD 600V.jpg" class="d-block w-100" alt="Product 1">
              </div>
              <div class="carousel-item">
                <img src="images/DC SPD 1000V.jpg" class="d-block w-100" alt="Product 2">
              </div>
              <div class="carousel-item">
                <img src="images/DC MCB 500V.jpg" class="d-block w-100" alt="Product 3">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="about-section py-5">
    <div class="container">
      <h2 class="about-text text-center mb-4">About Us</h2>
      <p class="text-center">Blitz is a leading provider of surge protection devices for solar power projects.<br> We ensure safety and reliability in renewable energy systems.</p>
      <div class="text-center">
        <a href="abo.html" class="btn btn-primary">View More</a>
      </div>
      <div class="about-image">
        <img src="images/blitzimage.jpg">
      </div>
    </div>
  </section>
<!--Product section-->
  <section id="products" class="products-section py-5 bg-light">
    <div class="pro">
    <div class="container">
      <h2 class="text-center mb-4 text">Our Products</h2>
      <div class="row">
        <!-- Product 1 -->
        <div class="col-md-3 mb-3">
          <div class="card animate__animated animate__fadeInUp">
            <img src="images\AC SPD 1 PHASE - 2 POLE.jpg" class="card-img-top" alt="Product 1">
            <div class="card-body">
              <h5 class="card-title">AC SPD 1 PHASE-2 POLE</h5>
                <p>Protects against power surges</p>
                <p>Ideal for residential use</p>
                <p>Easy to install</p>
              <a href="http://localhost/ksquares/product.php?id=1" class="btn btn-primary btn-center">View More</a>
            </div>
          </div>
        </div>
        
        <!-- Product 2 -->
        <div class="col-md-3 mb-3">
          <div class="card animate__animated animate__fadeInUp">
            <img src="images/AC SPD 3 PHASE - 4 POLE.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
              <h5 class="card-title">AC SPD 3 PHASE-4 POLE</h5>
              <p>Diverts Excess Voltage</p>
                <p>Handles High Currents</p>
                <p>Easy to maintain</p>
              <a href="http://localhost/ksquares/product.php?id=2" class="btn btn-primary">View More</a>
            </div>
          </div>
        </div>
        <!-- Product 3 -->
        <div class="col-md-3 mb-3">
          <div class="card animate__animated animate__fadeInUp">
            <img src="images/DC SPD 600V.jpg" class="card-img-top" alt="Product 3">
            <div class="card-body">
              <h5 class="card-title">DC SPD 600V</h5>
              <p>Protects against surges</p>
                <p>600V DC rating</p>
                <p>High discharge capacity</p>
              <a href="http://localhost/ksquares/product.php?id=3" class="btn btn-primary">View More</a>
            </div>
          </div>
        </div>
        <!-- Product 4 -->
        <div class="col-md-3 mb-3">
          <div class="card animate__animated animate__fadeInUp">
            <img src="images/DC SPD 1000V.jpg" class="card-img-top" alt="Product 4">
            <div class="card-body">
              <h5 class="card-title">DC SPD 1000V</h5>
              <p>Fast response time</p>
                <p>1000V DC rating</p>
                <p>Visual indication</p>
              <a href="http://localhost/ksquares/product.php?id=4" class="btn btn-primary">View More</a>
            </div>
          </div>
        </div>
        <!-- Product 5 -->
        <div class="col-md-3 mb-3">
          <div class="card animate__animated animate__fadeInUp">
            <img src="images/DC MCB 500V.jpg" class="card-img-top" alt="Product 5">
            <div class="card-body">
              <h5 class="card-title">DC MCB 500V</h5>
              <p>Protects DC circuits</p>
                <p>Breaking capacity</p>
                <p>Single or double pole</p>
              <a href="http://localhost/ksquares/product.php?id=5" class="btn btn-primary">View More</a>
            </div>
          </div>
        </div>
        <!-- Product 6 -->
        <div class="col-md-3 mb-3">
          <div class="card animate__animated animate__fadeInUp">
            <img src="images/DC MCB 1000V.jpg" class="card-img-top" alt="Product 6">
            <div class="card-body">
              <h5 class="card-title">DC MCB 1000V</h5>
                <p>Protects high-voltage DC circuits</p>
                <p>1000V DC rated</p>
                <p>Single or double pole</p>
              <a href="http://localhost/ksquares/product.php?id=6" class="btn btn-primary">View More</a>
            </div>
          </div>
        </div>
        <!-- Product 7 -->
        <div class="col-md-3 mb-3">
          <div class="card animate__animated animate__fadeInUp">
            <img src="images/PV Solar Fuse Terminal.jpg" class="card-img-top" alt="Product 7">
            <div class="card-body">
              <h5 class="card-title">PV SOLAR FUSE TERMINAL</h5>
                <p>Fuse Accommodation</p>
                <p>Circuit Protection</p>
                <p>High DC Voltage Rating</p>
              <a href="http://localhost/ksquares/product.php?id=7" class="btn btn-primary">View More</a>
            </div>
          </div>
        </div>
        <!-- Product 8 -->
        <div class="col-md-3 mb-3">
          <div class="card animate__animated animate__fadeInUp">
            <img src="images/PV Solar Fuse.jpg" class="card-img-top" alt="Product 8">
            <div class="card-body">
              <h5 class="card-title">PV SOLAR FUSE</h5>
                <p>Wide Temperature Range</p>
                <p>High DC Voltage Rating</p>
                <p>Breaking Capacity</p>
              <a href="http://localhost/ksquares/product.php?id=8" class="btn btn-primary">View More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>


  <!-- Why Choose Us Section -->
  <section id="why-choose-us" class="why-choose-us-section py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h2 class="text">Why Choose Us?</h2>
          <p>Blitz offers innovative solutions for renewable energy systems. Our products are designed to ensure safety, reliability, and efficiency.</p>
          <ul>
            <li> High-quality materials</li>
            <li> Expert engineering</li>
            <li> Global certifications</li>
            <li> Premium quality products</li>
            <li> Economical price range</li>
            <li> Excellent transport & logistic facility</li>
          </ul>
        </div>
        <div class="col-md-6">
          <img src="images/AC SPD 3 PHASE - 4 POLE.jpg" class="img-fluid" alt="Why Choose Us">
        </div>
      </div>
    </div>
  </section>

  <!-- Our Clients Section -->
  <section id="clients" class="clients-section py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-4 clients-text">Our Clients</h2>
      <div class="row">
        <div class="col-md-2 mb-6"><img src="clients/ONGC.png" class="img-fluid" alt="Client 1"></div>
        <div class="col-md-2 mb-6"><img src="clients/arunsolar.png" class="img-fluid" alt="Client 2"></div>
        <div class="col-md-2 mb-6"><img src="clients/efarm.jpeg" class="img-fluid" alt="Client 3"></div>
        <div class="col-md-2 mb-6"><img src="clients/geda.jpg" class="img-fluid" alt="Client 4"></div>
        <div class="col-md-2 mb-6"><img src="clients/selec.png" class="img-fluid" alt="Client 5"></div>
        <div class="col-md-2 mb-6"><img src="clients/universal.webp" class="img-fluid" alt="Client 6"></div>
        <div class="col-md-2 b-6"><img src="clients/zodiac.jpg" class="img-fluid" alt="Client 7"></div>
        <div class="col-md-2 mb-6"><img src="clients/contendre.png" class="img-fluid" alt="Client 8"></div>
        <div class="col-md-2 mb-6"><img src="clients/equinox.jpg" class="img-fluid" alt="Client 9"></div>
        <div class="col-md-2 mb-6"><img src="clients/mechatronik.png" class="img-fluid" alt="Client 10"></div>
        <div class="col-md-2 mb-6"><img src="clients/evolve.jpg" class="img-fluid" alt="Client 11"></div>
        <div class="col-md-2 mb-6"><img src="clients/perfect.jpg" class="img-fluid" alt="Client 12"></div>
        <div class="col-md-2 mb-6"><img src="clients/solar smart.jpg" class="img-fluid" alt="Client 13"></div>
        <div class="col-md-2 mb-6"><img src="clients/shd.jpg" class="img-fluid" alt="Client 14"></div>
        <div class="col-md-2 mb-6"><img src="clients/apollo_solar.jpg" class="img-fluid" alt="Client 15"></div>
        <div class="col-md-2 mb-6"><img src="clients/bhakti.jpg" class="img-fluid" alt="Client 16"></div>
       
      </div>
    </div>
  </section>

  <!-- Contact Section -->
<section id="contacts">
  <header>
    <div class="header-content">
        <div class="header-left" >
            <img src="images/logo.png" alt="Thelex Logo">
        </div>
        <div class="header-right">
            <h4 class="head-text">Harnessing Power<br>
              Protecting Investments<br>
              Surge Protection Device & DC MCB
              </h4>
        </div>
    </div>
  </header>
  
  <section class="contact">
    <div class="contact-details">
        <h3 class="headings">Contact Details</h3>
        <h4 class="subhead">Blitz</h4>
        <p>Corporate Office O B-403/404 Signature - 2, Sarkhej Sanand Road, Sarkhej, Ahmedabad - 382210.<br>
          <p> </p>
         <p> Factory Unit O No. 56, Mahagujarat Industrial Estate, Sarkhej-Bavla Road, B/h Intas Pharma, Moraiya, Changodar-382213.</p>
        <p>Phone: +91 7227931916</p>
        <p>E-Mail: sales@ksquareenergy.com</p>
      
  
    </div>
    <div class="quick-links">
        <ul>
            <h3 class="headings">Products</h3>
            <li><a href="#" class="quick-links-list">Surge Protection Devices (SPD)</a></li>
            <li><a href="#" class="quick-links-list">Miniature Circuit Breaker (MCB)</a></li>
            <li><a href="#" class="quick-links-list">Fuses</a></li>
        </ul>
    </div>
    <div class="site-links">
      <h3 class="headings">Quick Links</h3>
        <ul>
            <li><a href="#home" class="site-links-list">Home</a></li>
            <li><a href="#about" class="site-links-list">About us</a></li>
            <li><a href="#" class="site-links-list">Download</a></li>
            <li><a href="#" class="site-links-list">Career</a></li>
            <li><a href="#" class="site-links-list">Contact Us</a></li>
        </ul>
    </div>
  </section>
</section>
<!-- Footer -->
  <footer>
    <div class="footer-content">
        <p>&copy; 2024 Blitz - Surge Protection Devices  All rights reserved.</p>
        <div class="social-links">
            <a href="#"><img src="images/facebook.png" alt="Facebook"></a>
            <a href="#"><img src="images/instagram.png" alt="Instagram"></a>
            <a href="#"><img src="images/linkedin.png " alt="LinkedIn"></a>
        </div>
    </div>
  </footer>


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom JS -->
  <script src="script.js"></script>
</body>
</html>