<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <script src="../../js/bootstrap.js"></script>
    <!--fonts awesome-->
    <link rel="stylesheet" href="../../fonts/css/all.min.css">
    <link rel="stylesheet" href="../../fonts/css/fontawesome.min.css">
    <!--navigation styles--->
    <link href="../css/navbar.css" rel="stylesheet">
    <link href="../css/carousel_search.css" rel="stylesheet">
    <title>LearnaCart | Course page</title>
  </head>
  <body>
    <!--navigation bar-->
    <nav>
	<input id="nav-toggle" type="checkbox">
	<div class="logo">
    <img src="../logo/logo.png" alt="logo">
  </div>
	<ul class="links">
		<li><a href="#categories">Categories <i class="fas fa-book"></i></a></li>
		<li><a href="#help">Help <i class="fas fa-question-circle"></i></a></li>
    <!--search bar-->
		<li><a href="#projects">
    <form class="d-flex search-box">
        <input class="form-control me-2 search-input" type="search" placeholder="Search" aria-label="Search" autocomplete="off">
        <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
      </form>
    </a</li>
    <!--search bar end here-->
		<li><a href="#Login">Login <i class="fas fa-sign-in-alt"></i></a></li>
	</ul>
	<label for="nav-toggle" class="icon-burger">
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
	</label>
</nav>
    <!--navigation ends here-->
  <!--search bar-->
  <section class="search-bar">
      <div class="container">
        <div class="row">
          <div class="col-10 mx-auto">
            <form action="">
              <div>
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="search">
                    <div class="input-group-append">
                    <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>    
  </section>
  <!--search bar-->

<!--Caption Carousel-->
<div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/AUDIO NOTE__stream.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../images/arch.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../images/java.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--Caption carousel ends here-->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>