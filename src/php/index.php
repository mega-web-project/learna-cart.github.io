<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--my styles-->
     <link rel="stylesheet" href="../css/custom.css">
     <link rel="stylesheet" href="../css/mainStyle.css">
     <link rel="stylesheet" href="../css/footer.css">

      <!--fonts awesome-->
    <link rel="stylesheet" href="../../fonts/css/all.min.css">
    <link rel="stylesheet" href="../../fonts/css/fontawesome.min.css">

    <!--owl carousel-->
   <link rel="stylesheet" href="../../css/owl.carousel.css">
      <link rel="stylesheet" href="../../css/owl.carousel.min.css">
      <link rel="stylesheet" href="../../css/owl.theme.min.css">
    <title>Hello, world!</title>
    </style>
  </head>
  <body data-bs-spy="scroll" data-bs-target=".navbar">
    <!--navbar-->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a href="#" class="navbar-brand">LearnaCart</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navmenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Categories <i class="fas fa-book"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Help <i class="fas fa-question-circle"></i></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Login <i class="fas fa-sign-in-alt"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!--showcase--. Caption carousel-->
<section class="home py-0 p-lg-0">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
  <div class="carousel-item active">
  <section id="home">
  <div class="container text-center">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <h1 class="display-5"><span class="text-white">LearnaCart. </span><span class="text-warning">Learn the best out from your heart</span></h1>
        <p class="lead text-white " style="font-size:3.75em">
          <i class="fas fa-file-powerpoint"></i>
          <i class="far fa-file-word"></i>
          <i class="far fa-file-video"></i>
          <i class="fas fa-headphones-alt"></i>
          <i class="far fa-file-pdf"></i>
        </p>
        <a href="#learn" class="btn btn-brand">Start Learning</a>
      </div>
    </div>
  </div>
</section>
    </div>
    <div class="carousel-item">
    <section id="home">
  <div class="container text-center">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <h1 class="display-5"><span class="text-white">LearnaCart. </span> <span class="text-warning">Learn From your best website</span></h1>
        <p class="lead text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit ex, itaque, totam quas accusantium sapiente labore provident aperiam eaque ipsa?</p>
        <a href="#learn" class="btn btn-brand">Start Learning</a>
      </div>
    </div>
  </div>
</section>
    </div>
    <div class="carousel-item">
      <section id="home">
     <div class="container text-center">
     <div class="row justify-content-center">
      <div class="col-md-10">
        <h1 class="display-5"><span class="text-white">LearnaCart. </span><span class="text-warning">Learn From your best website</span></h1>
        <p class="lead text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit ex, itaque, totam quas accusantium sapiente labore provident aperiam eaque ipsa?</p>
        <a href="#learn" class="btn btn-brand">Start Learning</a>
      </div>
    </div>
  </div>
</section>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon d-none d-sm-block" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next d-none d-sm-block" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

<!--searchbar-->
<section class="bg-info bg-gradient text-right p-3 p">
  <div class="container">
    <div class="d-md-flex justify-content-between">
      <h3 class="mb-3 mb-md-0 text-light text-lowercase">Please search from here</h3>
       <form class="d-flex search-box">
        <input class="form-control me-0 search-input" type="search" placeholder="Search" aria-label="Search" autocomplete="off">
        <button class="btn btn-dark" type="submit"><i class="fas fa-search"></i></button>
      </form>
    </div>
  </div>
</section>


<!--New course Carousel-->
<div class="container-fluid padding" id="learn">
  <div class="row carousel text-center">
    <div class="col-12">
      <div class="display-5 py-2" style="font-size:30px;">Popular <span class="text-danger">Courses</span><hr></div>
    </div>
  </div>
</div>
 
<!--popular courses -->
<div class="owl-carousel owl-theme container">
  <div class="ms-2 me-2">
    <div class="card text-center">
     <img src="../images/arch.jpg" alt="account">
     <div class="card-body">
       <h5 clas="card-title">Course Title</h5>
       <p>Your Description here</p>
       <p class="price">Gh$5.00</p>
       <a href="#" class="btn btn-brands">View Course</a>
      </div>

    </div>
    </div>
    
    <div class="ms-2 me-2">
    <div class="card text-center">
     <img src="../images/data.jpg" alt="accou">
     <div class="card-body">
       <h5 clas="card-title">Course Title</h5>
       <p>Your Description here</p>
        <p class="price">Gh$5.00</p>
       <a href="#" class="btn btn-brands">View Course</a>
      </div>
    </div>
    </div>

    <div class="ms-2 me-2">
    <div class="card text-center">
     <img src="../images/curriculum.jpg" alt="account">
     <div class="card-body">
       <h5 clas="card-title">Course Title</h5>
       <p>Your Description here</p>
       <p class="price">Gh$5.00</p>
       <a href="#" class="btn btn-brands">View Course</a>
      </div>
    </div>
    </div>
  
    <div class="ms-2 me-2">
    <div class="card text-center">
     <img src="../images/java.jpg" alt="account">
     <div class="card-body">
       <h5 clas="card-title">Course Title</h5>
       <p>Your Description here</p>
        <p class="price">Gh$5.00</p>
       <a href="#" class="btn btn-brands">View Course</a>
      </div>
    </div>
    </div>
    <div class="ms-2 me-2">
    <div class="card text-center">
     <img src="../images/account.jpg" alt="account">
     <div class="card-body">
       <h5 clas="card-title">Course Title</h5>
       <p>Your Description here</p>
        <p class="price">Gh$5.00</p>
       <a href="#" class="btn btn-brands">View Course</a>
      </div>
    </div>
    </div>
</div>




<!--main cards for the courses-->
<div class="container">
  <div class="row courses">
  <div class="course-title">
    <h4>More <span class="text-danger">Courses</span></h4>
  </div>
  <div class="col-md-3 col-sm-6 my-4">
    <div class="card text-center">
      <img src="../images/account.jpg" alt="account" class="img-fluid">
      <div class="card-body">
        <div class="card-title">
          <h4>title 1</h4>
        </div>
        <div class="card-text">Write something here</div>
        <p class="price">Gh$5.00</p>
       <a href="#" class="btn btn-brands">View Course</a>

      </div>
    </div>
  </div>

<!--second card-->
<div class="col-md-3 col-sm-6 my-4">
    <div class="card text-center">
      <img src="../images/java.jpg" alt="account" class="img-fluid">
      <div class="card-body">
        <div class="card-title">
          <h4>title 1</h4>
        </div>
        <div class="card-text">Write something here</div>
     <p class="price">Gh$5.00</p>
       <a href="#" class="btn btn-brands">View Course</a>
      </div>
    </div>
  </div>
  <!--next card-->
  <div class="col-md-3 col-sm-6 my-4">
    <div class="card text-center">
      <img src="../images/curriculum.jpg" alt="account" class="img-fluid">
      <div class="card-body">
        <div class="card-title">
          <h4>title 1</h4>
        </div>
        <div class="card-text">Write something here</div>
      <p class="price">Gh$5.00</p>
       <a href="#" class="btn btn-brands">View Course</a>
      </div>
    </div>
  </div>
  <!--next card-->
  <div class="col-md-3 col-sm-6 my-4">
    <div class="card text-center">
      <img src="../images/arch.jpg" alt="account" class="img-fluid">
      <div class="card-body">
        <div class="card-title">
          <h4>title 1</h4>
        </div>
        <div class="card-text">Write something here</div>
      <p class="price">Gh$5.00</p>
       <a href="#" class="btn btn-brands">View Course</a>
      </div>
    </div>
  </div> 
</div>

<div class="row courses">
  <div class="col-md-3 col-sm-6 my-4">
    <div class="card text-center">
      <img src="../images/data.jpg" alt="account" class="img-fluid">
      <div class="card-body">
        <div class="card-title">
          <h4>title 1</h4>
        </div>
        <div class="card-text">Write something here</div>
        <p class="price">Gh$5.00</p>
       <a href="#" class="btn btn-brands">View Course</a>

      </div>
    </div>
  </div>

<!--second card-->
<div class="col-md-3 col-sm-6 my-4">
    <div class="card text-center">
      <img src="../images/curriculum.jpg" alt="account" class="img-fluid">
      <div class="card-body">
        <div class="card-title">
          <h4>title 1</h4>
        </div>
        <div class="card-text">Write something here</div>
     <p class="price">Gh$5.00</p>
       <a href="#" class="btn btn-brands">View Course</a>
      </div>
    </div>
  </div>
  <!--next card-->
  <div class="col-md-3 col-sm-6 my-4">
    <div class="card text-center">
      <img src="../images/java.jpg" alt="account" class="img-fluid">
      <div class="card-body">
        <div class="card-title">
          <h4>title 1</h4>
        </div>
        <div class="card-text">Write something here</div>
      <p class="price">Gh$5.00</p>
       <a href="#" class="btn btn-brands">View Course</a>
      </div>
    </div>
  </div>
  <!--next card-->
  <div class="col-md-3 col-sm-6 my-4">
    <div class="card text-center">
      <img src="../images/arch.jpg" alt="account" class="img-fluid">
      <div class="card-body">
        <div class="card-title">
          <h4>title 1</h4>
        </div>
        <div class="card-text">Write something here</div>
      <p class="price">Gh$5.00</p>
       <a href="#" class="btn btn-brands">View Course</a>
      </div>
    </div>
  </div> 
</div>
</div>



<!--footer-->
<footer class="text-white">
<div class="container-fluid padding">
  <div class="row text-center">
    <div class="col-md-4">
      <img src="../images/learnaCart.jpg" alt="" style="width: 50px;">
      <hr class="light">
      <p>+233-555-222-55</p> 
      <p>LearnaCart@email.com</p>
      <p>University of Cape Coast</p>
    </div>
     <div class="col-md-4">
         <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>200-Apartment, Bldg. NO. A-1, Sector-1</span>Wagholi,Pune</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+91 1122334455</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="#">support@learnaCart.com</a></p>
                 <hr class="light d-none d-lg-block">
            </div>
        </div>
    </div>
     <div class="col-md-4">
     <h3>About Company</h3>
      <hr class="light">
     <p>
       Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Maxime, impedit minus assumenda odit aspernatur molestiae?
     </p>
           <div class="footer-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-github"></i></i></a>
            <a href="#"><i class="fab fa-youtube"></i></i></a>
  </div>
</div>
<div class="col-12">
  <hr class="light">
  <h5>&copyLearnaCart, 2021</h5>
</div>
</div>
</div>
</footer>

<!---go back to top-->
<a href="#" id="scroll" style="display: none;"><span></span></a>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <!--jquery-->
    <script src="../../js/jquery.js"></script>
    <script src="../../js/owl.carousel.js"></script>
    <script src="../js/mainjs.js"></script>
  </body>
</html>