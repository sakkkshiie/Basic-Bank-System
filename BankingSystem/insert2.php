<?php
$Email=$_POST['Email'];
$Mobile No=$_POST['Mobile No'];
$Address=$_POST['Address'];
$City=$_POST['City'];
$Zip=$_POST['Zip'];
$conn=mysqli_connect("localhost","root","","bankingsystem");
if($conn-> connect_error){
    die("connection failed:".$conn->connect_error);
}
else{
    $INSERT="INSERT Into contact(Email,Mobile No,Address,City,Zip) values(?,?,?,?,?,?)";
    $stmt=$conn->prepare($INSERT);
    $stmt->bind_param("vivvi",$Email,$Mobile No,$Address,$City,$Zip);
    $stmt->execute();
    
}


    $stmt->close();
    $conn->close();
    
?>