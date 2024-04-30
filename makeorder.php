<?php
include 'dbconnect.php';
session_start();
$useremail=$_SESSION['useremail'];
if (isset($_POST['localstorage_data'])) {
    $name = $_POST['localstorage_data'];
    $price = $_POST['localstoragedata'];
  }
$getname="SELECT `name` FROM `login` WHERE `email`='$useremail'";
$result=mysqli_query($con,$getname);
$data=mysqli_fetch_assoc($result);
$username=$data['name'];
$setorder="INSERT INTO `order`(`user_email`, `user_name`, `order_name`, `order_price`) VALUES ('$useremail','$username','$name','$price')";
$setorderresult=mysqli_query($con,$setorder);
header('Location:order.php');
exit;
?>

