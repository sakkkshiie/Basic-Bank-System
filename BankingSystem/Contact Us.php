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
<br><br><br><br>
<section class="Contact Us my-5 text-center" id="Contact Us">
  <div class="container">
     <div class="text-center my-5">
      <h1 data-aos="fade-up"data-aos-offset="200">Contact<span class="text-primary"> Us</h1>
      <hr / class="w-25 m-auto">
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 col-12">
        <form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" name="Email">
  </div>
  <div class="col-md-6">
    <label for="inputMobile No4" class="form-label">Mobile No</label>
    <input type="Mobile No" class="form-control" name="Mobile No">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" name="Address" placeholder="1234 Main St">
  </div>
  
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" name="City">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" name="Zip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Done !</button>
  </div>
</form>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-12 m-auto text-end p-4"data-aos="fade-right"data-aos-offset="200">
        <img src="images/b5.jpg" class="img-fluid img-thumbnail p-2">
      </div>
    </div>
</div>
 </section>
 <?php
  $conn=mysqli_connect("localhost","root","","bankingsystem");
  if($conn-> connect_error){
    die("connection failed:".$conn->connect_error);
}
$sql="SELECT Email,Mobile No,Address,City,Zip from contact";
$result=$conn->query($sql);
 if ($result->num_col>0){
   while($row=$result->fetch_assoc()){
     echo"<tr><td>".$row["Email"]."</td><td>".$row["Mobile No"]."</td><td>".$row["Address"]."</td><td>".$row["City"]."</td><td>".$row["Zip"]."</td></tr>";
   }
   echo"</table>";
 }
 $conn->close();

  ?>
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