<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?php echo $title ?>
    </title>
    <link rel="icon" href="Images/Asian Delight.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>

    <!--Nav Bar starts-->
    <nav class="navbar navbar-expand-lg bg-black textNav sticky-top ">
        <div class="container">
          <a href="#"><img src="Images/HeroSection/Logo-100_100.png" alt="asian delight"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link menu-active" aria-current="page" href="ex1.php">EX1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ex2.php">EX2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#menu">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#service">Services and Offers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contactUs">Contact Us</a>
              </li>
             
            </ul>
            <a class="btn btn-primary" href="#menu">Order Online</a>
          </div>
        </div>
      </nav>
      <!--Nav bar Ends-->

      <!--Hero section starts-->
      <section id="home">
      <div id="heroSlider" class="carousel slide">
        <!-- <div class="container"></div> -->
        <div class="carousel-inner">
          <div class="carousel-item text-center bg-cover vh-100 active slide-1">
            <div class="container h-100 d-flex align-items-center justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h1 class="text-white frontpage-h1">Asian Delight Restaurant</h1>
                        <h3 class="text-white">Our ambiance captures the beauty and tranquility of Asia. Immerse yourself in an atmosphere that reflects the rich cultural tapestry of Asia, blending modern elegance with traditional charm. Enjoy your meal surrounded by the grace and elegance of the Far East.</h6>
                        <a href="#menu" class="btn btn-brand ">Explore Menu</a>
                    </div>
                </div>
            </div>
          </div>
          <div class="carousel-item text-center bg-cover vh-100 slide-2">
            <div class="container h-100 d-flex align-items-center justify-content-center ">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="hero-h2">Our Sri Lankan taste</h2>
                        <h4 class="hero-h4">Embark on a culinary adventure in Sri Lanka, where every bite tells a story of vibrant flavors and exotic spices.</h4>
                        <a href="#menu" class="btn btn-brand">Explore Menu</a>
                    </div>
                </div>
            </div>
          </div>
          <div class="carousel-item text-center bg-cover vh-100 slide-3">
            <div class="container h-100 d-flex align-items-center justify-content-center ">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="hero-h2">Our Indian taste</h2>
                        <h4 class="hero-h4">Indian cuisine, a symphony of flavors from north to south, weaves a rich tapestry of tradition and innovation.</h4>
                        <a href="#menu" class="btn btn-brand">Explore Menu</a>
                    </div>
                </div>
            </div>
          </div>
          <div class="carousel-item text-center bg-cover vh-100 slide-4">
            <div class="container h-100 d-flex align-items-center justify-content-center ">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h3 class="hero-h2">Our Malaysian taste</h3>
                        <h4 class="hero-h4">Step into the enchanting world of Malaysian cuisine, a canvas painted with a diverse palette of flavors and cultural influences.</h4>
                        <a href="#menu" class="btn btn-brand">Explore Menu</a>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

     