<?php
include 'dbconnect.php';
session_start();
$useremail=$_SESSION['useremail'];
$delnum=$_GET['data'];
$setorder="DELETE FROM `order` WHERE `order_id`='$delnum'";
$setorderresult=mysqli_query($con,$setorder);
header('Location:order.php');
exit;
?>