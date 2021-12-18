<?php include "header.php"?>

 <section id="home" class="justify-content-center">
  <div class="container">
    <div class="row text-white">
    <section class="grid grid--gap10 pt-0 pb-0 border">
   <div class="cols grid__col4">

  <div class="card bg-white text-dark" data-bs-toggle="modal" data-bs-target="#MP4" data-bs-whatever="@mdo">
        <div class="card-body">
          <div class="h1 mb-3">
           <i class="far fa-file-video text-danger"></i>
             <hr class="mb-0">
          </div>
          <div class="card-title ">
            MP4
          </div>
          <div class="card-text">
            <p><span class="text-danger h1" lowercase>3</span> FILES</p>
          </div>
        </div>
      </div>


   </div>
   <div class="cols grid__col5">
     
     <div class="card bg-white text-dark"  data-bs-toggle="modal" data-bs-target="#PPTTX" data-bs-whatever="@mdo">
        <div class="card-body">
          <div class="h1 mb-3">
            <i class="fas fa-file-powerpoint text-info"></i>
             <hr class="mb-0">
          </div>
          <div class="card-title ">
            PPTTX
          </div>
          <div class="card-text">
            <p><span class="text-success h1 lowercase">5</span> FILES</p>
          </div>
        </div>
      </div>
   </div>
   <div class="cols grid__col3">
     
     <div class="card bg-white text-dark" data-bs-toggle="modal" data-bs-target="#PDF" data-bs-whatever="@mdo">
        <div class="card-body">
          <div class="h1 mb-3">
           <i class="far fa-file-pdf text-warning"></i>
             <hr class="mb-0">
          </div>
          <div class="card-title ">
            PDF
          </div>
          <div class="card-text">
            <p><span class="text-danger h1" lowercase>20</span> FILES</p>
          </div>
        </div>
      </div>
   </div>
     <div class="cols grid__col4">
       
       <div class="card bg-white text-dark" data-bs-toggle="modal" data-bs-target="#DOCX" data-bs-whatever="@mdo">
        <div class="card-body">
          <div class="h1 mb-3">
             <i class="far fa-file-word text-primary"></i>
             <hr class="mb-0">
          </div>
          <div class="card-title ">
            DOCX
          </div>
          <div class="card-text">
            <p><span class="text-primary h1 lowercase">5</span> FILES</p>
          </div>
        </div>
      </div>
     </div>
   <div class="cols grid__col4">
     
      <div class="card bg-white text-dark" data-bs-toggle="modal" data-bs-target="#MP3" data-bs-whatever="@mdo">
        <div class="card-body">
          <div class="h1 mb-3">
             <i class="fas fa-headphones-alt text-danger"></i>
             <hr class="mb-0">
          </div>
          <div class="card-title ">
            MP3
          </div>
          <div class="card-text">
            <p><span class="text-success h1">5</span> FILES</p>
          </div>
        </div>
      </div>
   </div>
  </section>
    </div>
  </div>
</section>
<section>


<!--modal for MP4 -->
<div class="modal fade" id="MP4" tabindex="-1" aria-labelledby="MP4" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="MP4">MP4 FILE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="mb-3">
         <span class="text-success fw-bold text-center">Download Files</span>
       </div>
       <div class="mb-3">
         <table class="table table-striped">
     <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Files</th>
      <th scope="col">Downloads link</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>introduction </td>
      <td><a href="#" class="btn btn-success">Download</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Chapter 1</td>
      <td><a href="#" class="btn btn-success">Download</a></td>
    </tr>
  </tbody>
</table>
      <div class="mb-3 text-center">
        <a href="#" class="text-success ">Download Zip <i class="fas fa-file-download text-danger"></i></a>
      </div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!--modal for DOCX -->

<div class="modal fade" id="PPTTX" tabindex="-1" aria-labelledby="PPTTX" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="PPTTX">PPTTX FILE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="mb-3">
         <span class="text-success fw-bold text-center">Download Files</span>
       </div>

         <div class="mb-3">
         <table class="table table-striped">
     <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Files</th>
      <th scope="col">Downloads link</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>introduction </td>
      <td><a href="#" class="btn btn-success">Download</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Chapter 1</td>
      <td><a href="#" class="btn btn-success">Download</a></td>
    </tr>
  </tbody>
</table>
      <div class="mb-3 text-center">
        <a href="#" class="text-success ">Download Zip <i class="fas fa-file-download text-danger"></i></a>
      </div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>

<!--modal for PDF -->

<div class="modal fade" id="PDF" tabindex="-1" aria-labelledby="PDF" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="PDF">PDF FILE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
         <span class="text-success fw-bold text-center">Download Files</span>
       </div>

         <div class="mb-3">
         <table class="table table-striped">
     <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Files</th>
      <th scope="col">Downloads link</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>introduction </td>
      <td><a href="#" class="btn btn-success">Download</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Chapter 1</td>
      <td><a href="#" class="btn btn-success">Download</a></td>
    </tr>
  </tbody>
</table>
      <div class="mb-3 text-center">
        <a href="#" class="text-success ">Download Zip <i class="fas fa-file-download text-danger"></i></a>
      </div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--modal for DOCX -->

<div class="modal fade" id="DOCX" tabindex="-1" aria-labelledby="DOCX" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="DOCX">DOCX FILE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
         <span class="text-success fw-bold text-center">Download Files</span>
       </div>

         <div class="mb-3">
         <table class="table table-striped">
     <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Files</th>
      <th scope="col">Downloads link</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>introduction </td>
      <td><a href="#" class="btn btn-success">Download</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Chapter 1</td>
      <td><a href="#" class="btn btn-success">Download</a></td>
    </tr>
  </tbody>
</table>
      <div class="mb-3 text-center">
        <a href="#" class="text-success ">Download Zip <i class="fas fa-file-download text-danger"></i></a>
      </div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--modal for MP3 -->

<div class="modal fade" id="MP3" tabindex="-1" aria-labelledby="MP3" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="MP3">MP3 FILE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
         <span class="text-success fw-bold text-center">Download Files</span>
       </div>

         <div class="mb-3">
         <table class="table table-striped">
     <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Files</th>
      <th scope="col">Downloads link</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>introduction </td>
      <td><a href="#" class="btn btn-success">Download</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Chapter 1</td>
      <td><a href="#" class="btn btn-success">Download</a></td>
    </tr>
  </tbody>
</table>
      <div class="mb-3 text-center">
        <a href="#" class="text-success ">Download Zip <i class="fas fa-file-download text-danger"></i></a>
      </div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</section>


<section>
  

<div class="container py-0">
  <div class="row">
    <div class="col-md-2">
      <button id="navButton" class="button-menu">
        <div hidden class="close-btn">X</div>
        <div class="hurmburger-menu">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </div>
      </button>
    </div>
    <div class="col-md-8">main</div>
    <div class="col-md-2">right</div>
  </div>
</div>

</section>

















<?php include "footer.php"?>