<!-- including navigation bar to the page -->
<?php include 'header.php' ?>
    <!--navigation ends here-->

 
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
<!--search bar here...-->
<div id="sb-search" class="sb-search" >
    <form>
        <input class="sb-search-input " onkeyup="buttonUp();" placeholder="Enter your search term..." onblur="monkey();" type="search" value="" name="search" id="search">
        <input class="sb-search-submit" type="submit"  value="">
        <span class="sb-icon-search"><i class="fa fa-search"></i></span>
    </form>
</div>
<!--search bar ends here-->

<!--card carousel-->
<div class="container owl-container">
<h2 class="owl-card-title text-center fw-bold display-5">New <span class="text-danger">Course</span></h2>
<div class="owl-carousel owl-theme">
  <div class="ms-2 me-2">
    <div class="card text-center">
     <img data-src="../images/account.jpg" alt="account" class="owl-lazy">
     <div class="card-body">
       <h5 clas="card-title">Course Title</h5>
       <p>Your Description here</p>
       <a href="#" class="btn btn-success">View Course</a>
      </div>

    </div>
    </div>
    
    <div class="ms-2 me-2">
    <div class="card text-center">
     <img data-src="../images/curriculum.jpg" alt="account" class="owl-lazy">
     <div class="card-body">
       <h5 clas="card-title">Course Title</h5>
       <p>Your Description here</p>
       <a href="#" class="btn btn-success">View Course</a>
      </div>
    </div>
    </div>

    <div class="ms-2 me-2">
    <div class="card text-center">
     <img data-src="../images/java.jpg" alt="account" class="owl-lazy">
     <div class="card-body">
       <h5 clas="card-title">Course Title</h5>
       <p>Your Description here</p>
       <a href="#" class="btn btn-success">View Course</a>
      </div>
    </div>
    </div>
  
    <div class="ms-2 me-2">
    <div class="card text-center">
     <img data-src="../images/data.jpg" alt="account" class="owl-lazy">
     <div class="card-body">
       <h5 clas="card-title">Course Title</h5>
       <p>Your Description here</p>
       <a href="#" class="btn btn-success">View Course</a>
      </div>
    </div>
    </div>
    <div class="ms-2 me-2">
    <div class="card text-center">
     <img data-src="../images/arch.jpg" alt="account" class="owl-lazy">
     <div class="card-body">
       <h5 clas="card-title">Course Title</h5>
       <p>Your Description here</p>
       <a href="#" class="btn btn-success">View Course</a>
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
  <div class="more">
    <a href="#" class="btn btn-outline-success text-center">More Courses</a>
  </div>
</div>
</div>

<!--card carousel end here-->
<!--scroll up button link-->
<a href="#" id="scroll" style="display: none;"><span></span></a>
    <!--1st row Cards placed here-->
   
    <!--footer -->
  <!-- including footer to the page -->
<?php include 'footer.php'?>