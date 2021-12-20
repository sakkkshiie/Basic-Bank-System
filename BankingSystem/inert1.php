

<?php
$SENDER=$_POST['SENDER'];
$RECIVER=$_POST['RECIVER'];
$AMOUNT=$_POST['AMOUNT'];
$conn=mysqli_connect("localhost","root","","bankingsystem");
if($conn-> connect_error){
    die("connection failed:".$conn->connect_error);
}
else{
    $INSERT="INSERT Into history (from_user,to_user,AMOUNT) values(?,?,?)";
    $stmt=$conn->prepare($INSERT);
    $stmt->bind_param("iii",$SENDER,$RECIVER,$AMOUNT);
    $stmt->execute();
    echo"New Transaction sucessful..!";
    $UPDATE_1="UPDATE user set balance=balance+? WHERE ID=?";
    $stmt=$conn->prepare($UPDATE_1);
    $stmt->bind_param("ii",$AMOUNT,$RECIVER);
    $stmt->execute();
    $UPDATE_2="UPDATE user set balance=balance-? WHERE ID=?";
    $stmt=$conn->prepare($UPDATE_2);
    $stmt->bind_param("ii",$AMOUNT,$SENDER);
    $stmt->execute();
    }
    $stmt->close();
    $conn->close();
    
?>

  