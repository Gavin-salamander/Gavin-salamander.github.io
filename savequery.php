<?php 
session_start();
include('dbconfig.php');

$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$uanverify=$_POST['uan-verify'];
$comment=$_POST['comment'];

$sql="INSERT INTO pfpage(name,email,mobile,uan_verify,query) VALUES ('$name','$email',$mobile,'$uanverify','$comment')";
/* $result=mysqli_query($conn,$sql);
if($result == true){
	header("location:ACTIVATION_OF_UAN.php");
}
else
{
	header("location:Uan Services.php");
} */
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 ?>