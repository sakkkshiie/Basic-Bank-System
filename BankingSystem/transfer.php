<!DOCTYPE html>
<html>
  <head>
    <title>All Users</title>
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
<br><br>
<section class="services py-5 bg-light" id="Services" style="align-content:center" >
  <div  class="container">
    <div class="text-center my-2">
      <h1 data-aos="fade-up"data-aos-offset="200">Transfer <span class="text-primary">Money
      <hr / class="w-25 m-auto">
      <br>
      <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-12 col-6">
        <form class="row g-3" action="inert1.php" method="POST">
  <div class="col-md-6">
    <label for="inputID4" class="form-label">SENDER</label>
    <input type="numbers" class="form-control" name="SENDER" required>
  </div>
  
  <div class="col-md-6">
    <label for="inputID4" class="form-label">RECIVER</label>
    <input type="numbers" class="form-control" name="RECIVER" required>
  </div>
  <div class="col-12">
    <label for="inputAMOUNT" class="form-label">AMOUNT</label>
    <input type="numbers" class="form-control" name="AMOUNT" required>
  </div>
  
  
  
  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Are you sure ?
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Transfer !</button>
  </div>
</form>
  </head>
  <body>
    <table>
    
     <?php
  $conn=mysqli_connect("localhost","root","","bankingsystem");
  if($conn-> connect_error){
    die("connection failed:".$conn->connect_error);
}
$sql="SELECT SENDER,RECIVER,amount from transactions";
$result=$conn->query($sql);
 if ($result->num_rows>0){
   while($row=$result->fetch_assoc()){
     echo"<tr><td>".$row["SENDER"]."</td><td>".$row["RECIVER"]."</td><td>".$row["AMOUNT"]."</td></tr>";
   }
   echo"</table>";
 }
 $conn->close();

  ?>
  </table>
  <br>
  <div class="container-fluid bg-primary text-white p-3 text-center fs-4">Developed by-© 2021.Sakshi Gade<br> For the Project of The Sparks Foundation</div>
<script 
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
  </html>



 
    