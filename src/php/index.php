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
     <link href="../css/navs.css" rel="stylesheet">
    <link href="../css/carouselSearch.css" rel="stylesheet">
    <link href="../css/index.css" rel="stylesheet">

    <!--css/owl-carousel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
		<li><a href="#projects" id="form">
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
            <form action="#">
              <div>
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="search">
                    <div class="input-group-append">
                    <button class="btn btn-outline-success" type="submit" name="search"><i class="fas fa-search"></i></button>
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
      <img src="../images/account.jpg" class="d-block w-100" alt="...">
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


<!--card carousel-->
<div class="container">
<h2 class="owl-card-title text-center fw-bold display-5">New <span class="text-danger">Course</span></h2>
<div class="owl-carousel owl-theme">
  <div class="ms-2 me-2">
    <div class="card">
     <img data-src="../images/account.jpg" alt="account" class="owl-lazy">
     <div class="card-body">
       <h5 clas="card-title">Course Title</h5>
       <p>Your Description here</p>
      </div>
    </div>
    </div>
    
    <div class="ms-2 me-2">
    <div class="card">
     <img data-src="../images/curriculum.jpg" alt="account" class="owl-lazy">
     <div class="card-body">
       <h5 clas="card-title">Course Title</h5>
       <p>Your Description here</p>
      </div>
    </div>
    </div>

    <div class="ms-2 me-2">
    <div class="card">
     <img data-src="../images/java.jpg" alt="account" class="owl-lazy">
     <div class="card-body">
       <h5 clas="card-title">Course Title</h5>
       <p>Your Description here</p>
      </div>
    </div>
    </div>
  
    <div class="ms-2 me-2">
    <div class="card">
     <img data-src="../images/data.jpg" alt="account" class="owl-lazy">
     <div class="card-body">
       <h5 clas="card-title">Course Title</h5>
       <p>Your Description here</p>
      </div>
    </div>
    </div>
    <div class="ms-2 me-2">
    <div class="card">
     <img data-src="../images/arch.jpg" alt="account" class="owl-lazy">
     <div class="card-body">
       <h5 clas="card-title">Course Title</h5>
       <p>Your Description here</p>
      </div>
    </div>
    </div>
</div>


<div class="row courses">
  <div class="course-title">
    <h4>More <span class="text-danger">Courses</span></h4>
  </div>
  <div class="col-md-3 col-sm-6 my-4">
    <div class="card text-center">
    <span class="position-absolute top-5 start-50 translate-middle badge rounded-pill bg-danger">
      GH$5.00
    <span class="visually-hidden">unread messages</span>
  </span>
      <img src="../images/data.jpg" alt="account" class="img-fluid">
      <div class="card-body">
        <div class="card-title">
          <h4>title 1</h4>
        </div>
        <div class="card-text">Write something here</div>
      <a href="#" class="btn btn-success">View Course</a>
      </div>
    </div>
  </div>

<!--second card-->
<div class="col-md-3 col-sm-6 my-4">
    <div class="card text-center">
    <span class="position-absolute top-5 start-50 translate-middle badge rounded-pill bg-danger">
      GH$5.00
    <span class="visually-hidden">unread messages</span>
  </span>
      <img src="../images/account.jpg" alt="account" class="img-fluid">
      <div class="card-body">
        <div class="card-title">
          <h4>title 1</h4>
        </div>
        <div class="card-text">Write something here</div>
      <a href="#" class="btn btn-success">View Course</a>
      </div>
    </div>
  </div>
  <!--next card-->
  <div class="col-md-3 col-sm-6 my-4">
    <div class="card text-center">
    <span class="position-absolute top-5 start-50 translate-middle badge rounded-pill bg-danger">
      GH$5.00
    <span class="visually-hidden">unread messages</span>
  </span>
      <img src="../images/java.jpg" alt="account" class="img-fluid">
      <div class="card-body">
        <div class="card-title">
          <h4>title 1</h4>
        </div>
        <div class="card-text">Write something here</div>
      <a href="#" class="btn btn-success">View Course</a>
      </div>
    </div>
  </div>
  <!--next card-->
  <div class="col-md-3 col-sm-6 my-4">
    <div class="card text-center">
    <span class="position-absolute top-5 start-50 translate-middle badge rounded-pill bg-danger">
      GH$5.00
    <span class="visually-hidden">unread messages</span>
  </span>
      <img src="../images/arch.jpg" alt="account" class="img-fluid">
      <div class="card-body">
        <div class="card-title">
          <h4>title 1</h4>
        </div>
        <div class="card-text">Write something here</div>
      <a href="#" class="btn btn-success">View Course</a>
      </div>
    </div>
  </div> 
</div>

<div class="row courses">
  <div class="col-md-3 col-sm-6 my-4">
    <div class="card text-center">
    <span class="position-absolute top-5 start-50 translate-middle badge rounded-pill bg-danger">
      GH$5.00
    <span class="visually-hidden">unread messages</span>
  </span>
      <img src="../images/account.jpg" alt="account" class="img-fluid">
      <div class="card-body">
        <div class="card-title">
          <h4>title 1</h4>
        </div>
        <div class="card-text">Write something here</div>
      <a href="#" class="btn btn-success">View Course</a>
      </div>
    </div>
  </div>

<!--second card-->
<div class="col-md-3 col-sm-6 my-4">
    <div class="card text-center">
    <span class="position-absolute top-5 start-50 translate-middle badge rounded-pill bg-danger">
      GH$5.00
    <span class="visually-hidden">unread messages</span>
  </span>
      <img src="../images/arch.jpg" alt="account" class="img-fluid">
      <div class="card-body">
        <div class="card-title">
          <h4>title 1</h4>
        </div>
        <div class="card-text">Write something here</div>
      <a href="#" class="btn btn-success">View Course</a>
      </div>
    </div>
  </div>
  <!--next card-->
  <div class="col-md-3 col-sm-6 my-4">
    <div class="card text-center">
    <span class="position-absolute top-5 start-50 translate-middle badge rounded-pill bg-danger">
      GH$5.00
    <span class="visually-hidden">unread messages</span>
  </span>
      <img src="../images/java.jpg" alt="account" class="img-fluid">
      <div class="card-body">
        <div class="card-title">
          <h4>title 1</h4>
        </div>
        <div class="card-text">Write something here</div>
      <a href="#" class="btn btn-success">View Course</a>
      </div>
    </div>
  </div>
  <!--next card-->
  <div class="col-md-3 col-sm-6 my-4">
    <div class="card text-center">
    <span class="position-absolute top-5 start-50 translate-middle badge rounded-pill bg-danger">
      GH$5.00
    <span class="visually-hidden">unread messages</span>
  </span>
      <img src="../images/data.jpg" alt="account" class="img-fluid">
      <div class="card-body">
        <div class="card-title">
          <h4>title 1</h4>
        </div>
        <div class="card-text">Write something here</div>
      <a href="#" class="btn btn-success">View Course</a>
      </div>
    </div>
  </div> 
</div>
</div>

<!--card carousel end here-->
    <!--1st row Cards placed here-->
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="../js/jquery.js"></script>
    <script src="../js/main.js"></script>
  <!--owl carousel js cdn-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </script>
  </body>
</html>