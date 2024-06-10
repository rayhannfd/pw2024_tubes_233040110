<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HANS STORE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <!-- NAVBAR  -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HANS STORE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-itemm">
          <a class="nav-link active" aria-current="page" href="#">HOME</a>
        </li>
        <li class="nav-itemm">
          <a class="nav-link" href="#bestseller">BEST SELLER</a>
        </li>
        <li class="nav-itemm">
          <a class="nav-link" href="hansproduk.php">PRODUCT</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            DROPDOWN
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="profile.php">PROFILE</a></li>
            <li><a class="dropdown-item" href="logout.php">LOGOUT</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- NAVBAR -->

    <!-- CAROUsEL -->

    <div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./assets/rog.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./assets/tuf.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./assets/lenovo.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    
    <!-- CAROUsEL -->

    <!-- CARD CONTENT --> 
  
  <div class="containerbrand">
  <section id="bestseller" class="cardbrand">
  <div class="toptext1">
      <h1>BEST SELLER BRAND</h1>
  </div>
</section>

<div class="containerconcard">
  <div class="card1" style="width: 18rem; ">
  <img src="./assets/rog.jpg" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">Asus ROG</h5>
    <p class="card-text">Laptop Gaming Kekinian.</p>
    <a href="order.php" class="btn btn-primary">Order</a>
  </div>
  </div>

  <div class="card2" style="width: 18rem; ">
  <img src="./assets/lenovogm.jpg" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">Lenovo Gaming</h5>
    <p class="card-text">Laptop Lenovo Gaming</p>
    <a href="order.php" class="btn btn-primary">Order</a>
  </div>
  </div>

  <div class="card3" style="width: 18rem; ">
  <img src="./assets/tufgaming.jpg" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">Asus TUF Gaming</h5>
    <p class="card-text">Laptop Gaming Asus</p>
    <a href="order.php" class="btn btn-primary">Order</a>
  </div>
  </div>

  <div class="card4" style="width: 18rem; ">
  <img src="./assets/legions7.jpg" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">Lenovo Legion S7</h5>
    <p class="card-text">Laptop Gaming Lenovo Legion</p>
    <a href="order.php" class="btn btn-primary">Order</a>
  </div>
  </div>

</div>
</div>
</div>

<!-- CARD CONTENT -->

    
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>