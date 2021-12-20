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
<section class="services py-5 bg-light" id="Services">
  <div  class="container">
    <div class="text-center my-2">
      <h1 data-aos="fade-up"data-aos-offset="200"> User<span class="text-primary">Accounts
      <hr / class="w-25 m-auto">
      <br>
    
    <style type="text/css">
      table{
        margin-left:auto;
        margin-right:auto;
        border-collapse:collapse;
        width:90%;
        color:#000000;
        font-family:monospace;
        font-size:25px;
        text-align:left;
        }
        th {
          background-color:#000000;
          color:white;
        }
        tr:nth-child(odd){background-color:#D3D3D3}
        </style>
  </head>
  <body>
    <table>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>CONTACT</th>
        <th>BALANCE</th>
     
      </tr>
     <?php
  $conn=mysqli_connect("localhost","root","","bankingsystem");
  if($conn-> connect_error){
    die("connection failed:".$conn->connect_error);
}
$sql="SELECT ID,NAME,EMAIL,CONTACT,BALANCE from user";
$result=$conn->query($sql);
 if ($result->num_rows>0){
   while($row=$result->fetch_assoc()){
     echo"<tr><td>".$row["ID"]."</td><td>".$row["NAME"]."</td><td>".$row["EMAIL"]."</td><td>".$row["CONTACT"]."</td><td>".$row["BALANCE"]."</td></tr>";
   }
   echo"</table>";
 }else{
   echo"0 result";

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