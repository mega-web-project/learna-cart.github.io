<?php include "header.php"?>

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

  <div class="text-center justify-content-center mb-0 mt-0">
    <a href="#" class="Prev btn btn-brands">&laquo; Prev</a>
     <a href="#" class="Next btn btn-brand">Next &raquo;</a>
  </div>
  

<?php include 'footer.php'?>