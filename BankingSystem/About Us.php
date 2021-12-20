<!DOCTYPE html>
<html>
  <head>
    <title>Basic Bank System</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet"type="text/css"href-"style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" >
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
<link rel-"stylesheet"type="text/css"href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    
  </head>
  <body>
    
<header id="Home">
 <nav class="navbar navbar-expand-lg navbar-light bg-white px-5 border-bottom fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand fs-2" href="#">SPARK-<span class="text-primary">Bank System</span></a><br>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-4 ">
        <li class="nav-item">
          <a class="nav-link active text-info" aria-current="page" href="index.php">Home</a>
        </li>
      >
          <a class="nav-link" href="About Us.php">About Us</a>
        </li><li class="nav-item">
          <a class="nav-link" href="Contact Us.php">Contact Us</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="Services.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="user.php">User Accounts</a></li>
            <li><a class="dropdown-item" href="transfer.php">Transaction</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="history.php">Transaction History</a></li>
            
        </li>
       </ul>
      </div>
  </div>
</nav>
<br><br><br><br><br>
<section class="About Us my-10" id="About Us">
  <div class="container  ">
    <div class="text-center">
      <h1 data-aos="fade-up"data-aos-offset="200"> About<span class="text-primary"> us</h1>
      <hr / class="w-25 m-auto">
    </div><br><br>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 col-12"data-aos="zoom-in"data-aos-offset="200">
        
        <h1>What do you want to<span class="text-primary"> know?</span></h1>
        <p >Spark Bank is a leading private sector bank in India. The Bank’s consolidated total assets stood at Rs. 14.76 trillion at September 30, 2020.  Spark Bank currently has a network of 5,288 branches and 13,875 ATMs across India.<br>
History-
Spark Bank was originally promoted in 1994 by Spark Limited, an Indian financial institution, and was its wholly-owned subsidiary.<br>
Career Opportunities-
Explore diverse openings with Spark Bank.<br>
Awards-
Time and again our innovative banking services has been recognized and rewarded world over.<br>
</p>
<button type="button" class="btn btn-light mb-3">see more</button>

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Spark group of companies-
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        
Spark Bank offers a wide range of banking products and financial services to corporate and retail customers through a variety of delivery channels and through its group companies.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Board of directors-
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        
Spark Bank's Board members include eminent individuals with a wealth of experience in international business, management consulting, banking and financial services.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Notice board-
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        
Catch up with Spark Bank's latest communication related to Acknowledgements, information on regulatory notices, banking ombudsman schemes and others.
      </div>
    </div>
  </div>
         
  </div>
  </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-12 m-auto text-end">
      <img src="images/b4.jpg" class="img-fluid img-thumbnail">
    </div>
   </div>
 </div>
</section>
<br><br><br><br>
<div class="container-fluid bg-primary text-white p-3 text-center fs-4">Developed by-© 2021.Sakshi Gade<br> For the Project of The Sparks Foundation</div>
<script 
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
  </html>